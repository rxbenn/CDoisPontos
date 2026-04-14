<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function envOrDefault(string $key, ?string $default = null): ?string
{
    $value = getenv($key);
    if ($value === false || $value === '') {
        return $default;
    }
    return $value;
}

$mensagemStatus = '';
$nome = '';
$email = '';
$telefone = '';
$assunto = '';
$mensagem = '';
$formStartedAt = time();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefone = strip_tags(trim($_POST["telefone"] ?? ''));
    $assunto = strip_tags(trim($_POST["assunto"] ?? ''));
    $mensagem = trim($_POST["mensagem"] ?? '');
    $honeypot = trim($_POST["website"] ?? '');
    $formStartedRaw = trim($_POST["form_started"] ?? '');
    $formStarted = ctype_digit($formStartedRaw) ? (int)$formStartedRaw : 0;
    $now = time();
    $elapsed = ($formStarted > 0) ? ($now - $formStarted) : 0;
    $formStartedAt = $formStarted > 0 ? $formStarted : $formStartedAt;

    // Evitar quebra de headers de email em campos vindos do formulário.
    $nomeSafeHeader = str_replace(["\r", "\n"], '', $nome);
    $emailSafeHeader = str_replace(["\r", "\n"], '', (string)$email);

    if ($honeypot !== '') {
        // Honeypot preenchido: trata como spam silenciosamente.
        $mensagemStatus = '<div class="alert alert-success py-2 small mb-3">Mensagem enviada com sucesso! Entraremos em contacto brevemente.</div>';
    } elseif ($elapsed > 0 && $elapsed < 3) {
        // Submissão demasiado rápida para um humano.
        $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Submissão inválida. Tente novamente.</div>';
    } elseif (empty($nome) || empty($assunto) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Por favor, preencha todos os campos obrigatórios e verifique o seu email.</div>';
    } else {
        $rateWindowSeconds = 10 * 60; // 10 minutos
        $maxAttemptsInWindow = 3;
        $minSecondsBetweenSubmissions = 20;
        $submissionTimestamps = $_SESSION["contact_form_submissions"] ?? [];
        $submissionTimestamps = array_values(array_filter($submissionTimestamps, function ($ts) use ($now, $rateWindowSeconds) {
            return is_int($ts) && ($now - $ts) <= $rateWindowSeconds;
        }));
        $_SESSION["contact_form_submissions"] = $submissionTimestamps;

        $lastSubmission = !empty($submissionTimestamps) ? end($submissionTimestamps) : null;
        if (count($submissionTimestamps) >= $maxAttemptsInWindow) {
            $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Fez demasiadas tentativas num curto período. Tente novamente daqui a alguns minutos.</div>';
        } elseif (is_int($lastSubmission) && ($now - $lastSubmission) < $minSecondsBetweenSubmissions) {
            $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Aguarde alguns segundos antes de enviar outra mensagem.</div>';
        } else {
        $destinatario = envOrDefault('MAIL_TO', 'geral@c2pontosamorosa.pt');
        $assunto_email = "Novo Contacto do Site: $assunto";
        
        $conteudo = "Novo Contacto - Site CDoisPontos\n";
        $conteudo .= "-----------------------------------\n";
        $conteudo .= "Nome: $nome\n";
        $conteudo .= "Email: $email\n";
        $conteudo .= "Telemóvel: " . ($telefone ?: 'Não fornecido') . "\n";
        $conteudo .= "Assunto: $assunto\n";
        $conteudo .= "-----------------------------------\n\n";
        $conteudo .= "Mensagem:\n$mensagem\n";

        try {
            $mail = new PHPMailer(true);

            // Configuração SMTP pronta para produção por variáveis de ambiente.
            // Exemplo:
            // MAIL_HOST=smtp.gmail.com
            // MAIL_PORT=587
            // MAIL_USERNAME=...
            // MAIL_PASSWORD=...
            // MAIL_ENCRYPTION=tls
            $smtpHost = envOrDefault('MAIL_HOST');
            $smtpPort = (int)envOrDefault('MAIL_PORT', '587');
            $smtpUser = envOrDefault('MAIL_USERNAME');
            $smtpPass = envOrDefault('MAIL_PASSWORD');
            $smtpEncryption = envOrDefault('MAIL_ENCRYPTION', 'tls'); // tls | ssl
            $mailFromAddress = envOrDefault('MAIL_FROM_ADDRESS', 'noreply@cdoispontos.pt');
            $mailFromName = envOrDefault('MAIL_FROM_NAME', 'CDoisPontos Website');

            if ($smtpHost && $smtpUser && $smtpPass) {
                $mail->isSMTP();
                $mail->Host = $smtpHost;
                $mail->SMTPAuth = true;
                $mail->Username = $smtpUser;
                $mail->Password = $smtpPass;
                $mail->Port = $smtpPort;
                $mail->CharSet = 'UTF-8';

                if ($smtpEncryption === 'ssl') {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                } else {
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                }
            } else {
                // Fallback local para desenvolvimento.
                $mail->isMail();
                $mail->CharSet = 'UTF-8';
            }

            $mail->setFrom($mailFromAddress, $mailFromName);
            $mail->addAddress($destinatario);
            $mail->addReplyTo($emailSafeHeader, $nomeSafeHeader ?: 'Cliente');
            $mail->Subject = $assunto_email;
            $mail->Body = $conteudo;

            $mail->send();
            $_SESSION["contact_form_submissions"][] = $now;
            $mensagemStatus = '<div class="alert alert-success py-2 small mb-3">Mensagem enviada com sucesso! Entraremos em contacto brevemente.</div>';
            $nome = '';
            $email = '';
            $telefone = '';
            $assunto = '';
            $mensagem = '';
            $formStartedAt = time();
        } catch (Exception $e) {
            $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Ocorreu um erro ao enviar a mensagem. Se o problema persistir, contacta-nos via WhatsApp.</div>';
        }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - CDoisPontos</title>
  <meta name="description" content="Contacta a CDoisPontos em Viana do Castelo. Envia-nos uma mensagem ou fala connosco pelo WhatsApp para reparações, suporte técnico ou qualquer dúvida.">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body class="contacto-page">

  <?php include 'components/header.php'; ?>  <main>
    <!-- HERO DA PÁGINA DE CONTACTO (ESTILO MODERNO) -->
    <section class="sobre-hero pb-5">
      <div class="container">
        <nav class="sobre-breadcrumb small mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <h1 class="sobre-hero-title mb-2">
              Fala <span class="brand-accent">connosco</span>
            </h1>
            <p class="sobre-hero-text mb-0 opacity-75">
              Escolha preferencial para reparações e suporte técnico.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" style="margin-top: -35px;">
      <div class="container">
        <div class="row g-4">
          
          <!-- LADO ESQUERDO: INFOS DE CONFIANÇA -->
          <div class="col-lg-4 d-none d-lg-block">
             <div class="info-card h-100">
                <h4 class="fw-bold mb-4">Apoio ao Cliente</h4>
                
                <div class="d-flex align-items-center mb-4 gap-3">
                  <div class="contact-icon-premium icon-blue">
                    <i class="bi bi-lightning-charge-fill"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Resposta em <br> menos de 24h</div>
                    <div class="text-muted smaller">Dias úteis</div>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-4 gap-3">
                  <div class="contact-icon-premium icon-orange">
                    <i class="bi bi-shield-lock-fill"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Privacidade <br> Garantida</div>
                    <div class="text-muted smaller">Dados 100% seguros</div>
                  </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                  <div class="contact-icon-premium icon-green">
                    <i class="bi bi-headset"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Suporte <br> Especializado</div>
                    <div class="text-muted smaller">Técnicos certificados</div>
                  </div>
                </div>
                
                <div class="mt-5 pt-3 border-top text-center text-lg-start">
                    <p class="text-muted smaller mb-0">
                      Entramos em contacto por email ou telemóvel para dar seguimento ao seu pedido.
                    </p>
                </div>
             </div>
          </div>

          <!-- LADO DIREITO: O FORMULÁRIO (CLEAN) -->
          <div class="col-lg-8 animate-soft">
            <div class="info-card h-100">
                <h2 class="h4 fw-bold mb-4">Envia-nos uma mensagem</h2>
              <?php echo $mensagemStatus; ?>

              <form method="POST" action="contacto.php" class="form-modern row g-4" autocomplete="on">
                <input type="hidden" name="form_started" value="<?php echo (int)$formStartedAt; ?>">
                <div style="position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;" aria-hidden="true">
                  <label for="contacto-website">Website</label>
                  <input id="contacto-website" type="text" name="website" tabindex="-1" autocomplete="off">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="contacto-nome">Nome Completo</label>
                  <input id="contacto-nome" type="text" name="nome" class="form-control" placeholder="Ex: João Silva" autocomplete="name" value="<?php echo htmlspecialchars($nome, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="contacto-email">Email</label>
                  <input id="contacto-email" type="email" name="email" class="form-control" placeholder="Ex: joao@email.com" autocomplete="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                
                <div class="col-md-6">
                  <label class="form-label" for="contacto-telefone">Telemóvel (Opcional)</label>
                  <input id="contacto-telefone" type="tel" name="telefone" class="form-control" placeholder="Ex: +351 912 345 678" autocomplete="tel" value="<?php echo htmlspecialchars($telefone, ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="contacto-assunto">Assunto</label>
                  <input id="contacto-assunto" type="text" name="assunto" class="form-control" placeholder="Ex: Reparação de Portátil" autocomplete="on" value="<?php echo htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>

                <div class="col-12">
                  <label class="form-label" for="contacto-mensagem">Mensagem</label>
                  <textarea id="contacto-mensagem" name="mensagem" class="form-control" rows="6" placeholder="Explica-nos detalhadamente o que precisas..." autocomplete="off" required><?php echo htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

                <div class="col-12 mt-4">
                  <button type="submit" class="btn-hero-main w-100 py-3">
                    <i class="bi bi-send-fill text-white"></i>
                    <span class="text-white">Enviar Mensagem</span>
                  </button>
                  <div class="text-center mt-3">
                    <a href="index.php" class="text-muted small text-decoration-none">
                      <i class="bi bi-arrow-left me-1"></i> Voltar à Homepage
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <?php include 'components/footer.php'; ?>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$mensagemStatus = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags(trim($_POST["nome"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $telefone = strip_tags(trim($_POST["telefone"] ?? ''));
    $assunto = strip_tags(trim($_POST["assunto"] ?? ''));
    $mensagem = trim($_POST["mensagem"] ?? '');

    if (empty($nome) || empty($assunto) || empty($mensagem) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Por favor, preenche todos os campos obrigatórios e verifica o teu email.</div>';
    } else {
        $destinatario = "cdoispontos.amorosa@gmail.com";
        $assunto_email = "Novo Contacto do Site: $assunto";
        
        $conteudo = "Novo Contacto - Site CDoisPontos\n";
        $conteudo .= "-----------------------------------\n";
        $conteudo .= "Nome: $nome\n";
        $conteudo .= "Email: $email\n";
        $conteudo .= "Telemóvel: " . ($telefone ?: 'Não fornecido') . "\n";
        $conteudo .= "Assunto: $assunto\n";
        $conteudo .= "-----------------------------------\n\n";
        $conteudo .= "Mensagem:\n$mensagem\n";

        $headers = "From: $nome <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($destinatario, $assunto_email, $conteudo, $headers)) {
            $mensagemStatus = '<div class="alert alert-success py-2 small mb-3">Mensagem enviada com sucesso! Entraremos em contacto brevemente.</div>';
        } else {
            $mensagemStatus = '<div class="alert alert-danger py-2 small mb-3">Ocorreu um erro ao enviar a mensagem. Se o problema persistir, contacta-nos via WhatsApp.</div>';
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
             <div class="info-card h-100 p-4 p-md-5 border-0 shadow-lg" style="border-radius: 28px;">
                <h4 class="fw-bold mb-4">Apoio ao Cliente</h4>
                
                <div class="d-flex align-items-center mb-4 gap-3">
                  <div class="contact-icon bg-primary-subtle text-primary rounded-circle" style="width: 50px; height: 50px; flex: 0 0 auto; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-lightning-charge-fill fs-4"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Resposta em <br> menos de 24h</div>
                    <div class="text-muted smaller">Dias úteis</div>
                  </div>
                </div>

                <div class="d-flex align-items-center mb-4 gap-3">
                  <div class="contact-icon bg-warning-subtle text-warning rounded-circle" style="width: 50px; height: 50px; flex: 0 0 auto; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-shield-lock-fill fs-4"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Privacidade <br> Garantida</div>
                    <div class="text-muted smaller">Dados 100% seguros</div>
                  </div>
                </div>

                <div class="d-flex align-items-center gap-3">
                  <div class="contact-icon bg-success-subtle text-success rounded-circle" style="width: 50px; height: 50px; flex: 0 0 auto; display: flex; align-items: center; justify-content: center;">
                    <i class="bi bi-headset fs-4"></i>
                  </div>
                  <div>
                    <div class="fw-bold small">Suporte <br> Especializado</div>
                    <div class="text-muted smaller">Técnicos certificados</div>
                  </div>
                </div>
                
                <div class="mt-5 pt-3 border-top text-center text-lg-start">
                    <p class="text-muted smaller mb-0">
                      Entramos em contacto via email ou telemóvel para dar seguimento ao teu pedido.
                    </p>
                </div>
             </div>
          </div>

          <!-- LADO DIREITO: O FORMULÁRIO (CLEAN) -->
          <div class="col-lg-8 animate-soft">
            <div class="info-card h-100 p-4 p-md-5 border-0 shadow-lg" style="border-radius: 28px;">
                <h2 class="h4 fw-bold mb-4">Envia-nos uma mensagem</h2>
              <?php echo $mensagemStatus; ?>

              <form method="POST" action="contacto.php" class="row g-4">
                <div class="col-md-6">
                  <label class="form-label fw-bold small text-muted mb-1 ml-1">Nome Completo</label>
                  <input type="text" name="nome" class="form-control form-control-lg bg-light border-0 px-4 fs-6 rounded-4" placeholder="Ex: João Silva" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold small text-muted mb-1 ml-1">Email</label>
                  <input type="email" name="email" class="form-control form-control-lg bg-light border-0 px-4 fs-6 rounded-4" placeholder="Ex: joao@email.com" required>
                </div>
                
                <div class="col-md-6">
                  <label class="form-label fw-bold small text-muted mb-1 ml-1">Telemóvel (Opcional)</label>
                  <input type="tel" name="telefone" class="form-control form-control-lg bg-light border-0 px-4 fs-6 rounded-4" placeholder="Ex: +351 912 345 678">
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold small text-muted mb-1 ml-1">Assunto</label>
                  <input type="text" name="assunto" class="form-control form-control-lg bg-light border-0 px-4 fs-6 rounded-4" placeholder="Ex: Reparação de Portátil" required>
                </div>

                <div class="col-12">
                  <label class="form-label fw-bold small text-muted mb-1 ml-1">Mensagem</label>
                  <textarea name="mensagem" class="form-control bg-light border-0 px-4 fs-6" style="border-radius: 20px;" rows="6" placeholder="Explica-nos detalhadamente o que precisas..." required></textarea>
                </div>

                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-warning btn-lg rounded-pill px-5 py-3 w-100 fw-bold shadow-sm border-0 d-flex align-items-center justify-content-center gap-2">
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
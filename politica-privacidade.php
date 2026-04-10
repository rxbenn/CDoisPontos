<?php
$mensagemStatus = '';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Política de Privacidade e Termos - CDoisPontos</title>

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body class="sobre-page">

  <?php include 'components/header.php'; ?>

  <main>
    <!-- HERO DA PÁGINA -->
    <section class="sobre-hero pb-5">
      <div class="container">
        <nav class="sobre-breadcrumb small mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Privacidade</li>
          </ol>
        </nav>
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <h1 class="sobre-hero-title mb-2">
              Privacidade e <span class="brand-accent">Termos Legais</span>
            </h1>
            <p class="sobre-hero-text mb-0 opacity-75">
              O nosso compromisso com a proteção dos seus dados e transparência.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5" style="margin-top: -30px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="info-card">
              
              <h3 class="h4 fw-bold mb-4"><i class="bi bi-shield-check text-success me-2"></i>1. Política de Privacidade (RGPD)</h3>
              <p class="text-muted small mb-5">
                A <strong>CDoisPontos</strong>, localizada na Praia da Amorosa, compromete-se a proteger a privacidade dos seus clientes.
                Os dados pessoais recolhidos (como nome, email e telemóvel), através do website ou na loja física, são utilizados exclusivamente para
                efeitos de resposta a pedidos de contacto, elaboração de orçamentos, e gestão de assistência técnica dos equipamentos deixados à nossa responsabilidade.<br><br>
                A CDoisPontos garante que os dados não serão partilhados com terceiros para fins de marketing sem consentimento explícito.
              </p>

              <h3 class="h4 fw-bold mb-4"><i class="bi bi-cookie text-warning me-2"></i>2. Política de Cookies</h3>
              <p class="text-muted small mb-5">
                Utilizamos cookies de sessão e locais (localStorage) necessários para o seu correto funcionamento do website, segurança e melhoria da experiência de navegação.<br>
                Não são utilizados cookies para fins de rastreamento publicitário. Ao continuar a utilizar este website, concorda com a utilização destas tecnologias.
              </p>

              <h3 class="h4 fw-bold mb-4"><i class="bi bi-tools text-primary me-2"></i>3. Garantias de Reparação e Equipamentos</h3>
              <p class="text-muted small mb-0">
                Qualquer equipamento intervencionado pela nossa assistência técnica beneficia da garantia legal aplicável sobre as peças substituídas e Mão de Obra executada.<br><br>
                A CDoisPontos alerta e não se responsabiliza por perdas massivas de dados que não tenham sido reportadas ou salvaguardadas antes da formatação ou intervenção intrusiva no hardware, pelo que aconselhamos a criação prévia de backups. Ao deixar um equipamento nas nossas instalações, o cliente concorda automaticamente com estas condições e com os prazos de levantamento estipulados internamente.
              </p>

              <div class="mt-5 pt-4 border-top">
                <p class="text-muted smaller mb-0">
                  Para qualquer questão relacionada com dados pessoais ou para exercer o direito ao esquecimento, poderá contactar: <strong>cdoispontos.amorosa@gmail.com</strong>
                </p>
              </div>

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

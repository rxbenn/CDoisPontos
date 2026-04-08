<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre - CDoisPontos</title>
  <meta name="description" content="Saiba mais sobre a CDoisPontos — mais de 20 anos de experiência em tecnologia, reparações e assistência técnica na Praia da Amorosa, Viana do Castelo.">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body class="sobre-page">

  <?php include 'components/header.php'; ?>

  <main>

    <!-- HERO CLEAN + CRIATIVO -->
    <section class="sobre-hero">
      <div class="container">
        <nav class="sobre-breadcrumb small mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sobre</li>
          </ol>
        </nav>

        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="section-eyebrow">Desde 2003 na Areosa</span>
            <h1 class="sobre-hero-title">
              Sobre a <span class="brand-accent">CDoisPontos</span>
            </h1>
            <p class="sobre-hero-text mb-3">
              Loja de tecnologia, reparações e muito mais na Praia da Amorosa.
              O nosso objetivo é ser a solução certa, seja qual for a tua necessidade.
            </p>
            <div class="sobre-hero-pills">
              <span class="sobre-pill"><i class="bi bi-tools me-1"></i>Reparações</span>
              <span class="sobre-pill"><i class="bi bi-cpu me-1"></i>Tecnologia</span>
              <span class="sobre-pill"><i class="bi bi-headset me-1"></i>Assistência</span>
              
            </div>
          </div>

          <div class="col-lg-5 d-none d-lg-block">
            <div class="sobre-hero-visual">
              <div class="sobre-hero-orbit">
                <i class="bi bi-phone sobre-hero-icon"></i>
                <i class="bi bi-controller sobre-hero-icon"></i>
                <i class="bi bi-pc-display sobre-hero-icon"></i>
                <i class="bi bi-headphones sobre-hero-icon"></i>
              </div>
              <div class="sobre-hero-center">
                <span class="sobre-hero-center-title">C<span class="brand-accent">Dois</span>Pontos</span>
                <span class="sobre-hero-center-sub">Reparação Manutenção Tecnologia</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- QUEM SOMOS -->
    <section class="sobre-section">
      <div class="container">
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-7 animate-soft">
            <article class="info-card h-100">
              <span class="section-eyebrow">A nossa missão</span>
              <h2 class="mb-3">Quem somos</h2>
              <p class="mb-3">
                Fundada em 2003, a CDoisPontos é uma loja de tecnologia, lazer e muito mais.
                A nossa visão assenta em sermos a solução para os nossos clientes, independentemente das suas necessidades.
                <strong>Tudo o que procuras, encontras!</strong>
              </p>
              <p class="mb-0">
                De equipamentos informáticos aos eletrodomésticos, passando por mobilidade elétrica,
                tablets, gadgets, TVs, artigos de jardim e muito mais — até à reparação de equipamentos
                eletrónicos e informáticos com diagnóstico claro e acompanhamento personalizado.
              </p>
            </article>
          </div>

          <div class="col-lg-5 animate-soft">
            <aside class="info-card h-100">
              <h3 class="mb-3">O que nos define</h3>
              <ul class="list-unstyled mb-4 small sobre-list">
                <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill me-2 text-success fs-5"></i> +20 anos de experiência na área.</li>
                <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill me-2 text-success fs-5"></i> Diagnóstico e opções claras.</li>
                <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill me-2 text-success fs-5"></i> Portefólio amplo de lazer e TI.</li>
                <li class="mb-0 d-flex align-items-center"><i class="bi bi-check-circle-fill me-2 text-success fs-5"></i> Transparência nas reparações.</li>
              </ul>
              <a href="index.php#localizacao-contactos" class="btn btn-outline-primary btn-sm rounded-pill px-4">
                <i class="bi bi-geo-alt-fill me-1"></i> Ver localização e contactos
              </a>
            </aside>
          </div>
        </div>
      </div>
    </section>
    
    <!-- SERVIÇOS DETALHADOS -->
    <section id="servicos" class="sobre-section sobre-areas">
      <div class="container">
        <div class="text-center mb-4">
          <span class="section-eyebrow">O que oferecemos</span>
          <h2 class="section-heading centered d-block mb-1">Serviços da CDoisPontos</h2>
          <p class="text-muted small mb-0">
            Uma visão mais completa das áreas em que podemos ajudar-te
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-phone highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Reparação de telemóveis</h3>
              <p class="highlight-text mb-0">
                Troca de ecrãs, baterias, conetores e outros componentes, com diagnóstico claro e acompanhamento.
              </p>
            </div>
          </div>

          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-laptop highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Reparação de computadores</h3>
              <p class="highlight-text mb-0">
                Limpeza interna, otimização de sistema, upgrades de SSD/RAM e reparações de hardware.
              </p>
            </div>
          </div>

          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-headset highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Assistência técnica</h3>
              <p class="highlight-text mb-0">
                Suporte na configuração de equipamentos, software, redes domésticas e pequenas empresas.
              </p>
            </div>
          </div>

          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-usb-symbol highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Venda de acessórios</h3>
              <p class="highlight-text mb-0">
                Cabos, carregadores, capas, periféricos, áudio e outros acessórios para o teu dia a dia.
              </p>
            </div>
          </div>

          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-pc-display-horizontal highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Equipamentos informáticos</h3>
              <p class="highlight-text mb-0">
                Computadores, monitores e soluções tecnológicas pensadas para casa, estudo e trabalho.
              </p>
            </div>
          </div>

          <div class="col-md-4 animate-soft">
            <div class="highlight-card h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-lightning-charge highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Outros serviços tecnológicos</h3>
              <p class="highlight-text mb-0">
                Recuperação de dados, configuração de backups, consultoria e soluções à medida.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- HISTÓRIA (TIMELINE ALINHADA) -->
    <section class="sobre-section sobre-timeline">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-5">
            <span class="section-eyebrow">A nossa trajetória</span>
            <h2 class="mb-3">A nossa história</h2>
            <p class="text-muted mb-0">
              Crescemos lado a lado com quem nos visita, adaptando a loja e os serviços às necessidades
              de quem confia na CDoisPontos desde 2003.
            </p>
          </div>
          <div class="col-lg-7">
            <div class="sobre-timeline-list">
              <div class="sobre-timeline-item">
                <span class="sobre-timeline-year">2003</span>
                <p class="mb-0">Nasce a CDoisPontos na Praia da Amorosa.</p>
              </div>
              <div class="sobre-timeline-item">
                <span class="sobre-timeline-year">2010</span>
                <p class="mb-0">Reforçamos a oferta de produtos de lazer e gadgets.</p>
              </div>
              <div class="sobre-timeline-item">
                <span class="sobre-timeline-year">Hoje</span>
                <p class="mb-0">Loja completa de tecnologia, lazer e assistência técnica especializada.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- NÃO HÁ CTA FINAL AQUI: termina diretamente no footer -->

  </main>

  <?php include 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
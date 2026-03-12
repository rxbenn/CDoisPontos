<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre - CDoisPontos</title>

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
            <h1 class="sobre-hero-title">
              Sobre a <span class="brand-accent">CDoisPontos</span>
            </h1>
            <p class="sobre-hero-text mb-3">
              Desde 2003 na Praia da Amorosa, somos uma loja de tecnologia, reparação e muito mais. <br>
              Queremos ser a solução para ti, seja qual for a tua necessidade.
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
                <span class="sobre-hero-center-title">CDoisPontos</span>
                <span class="sobre-hero-center-sub">Reparação · Manutenção · Tecnologia</span>
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
          <div class="col-lg-7">
            <article class="info-card sobre-card h-100">
              <h2 class="mb-3">Quem somos</h2>
              <p class="mb-3">
                Fundada em 2003, a CDoisPontos é uma loja de tecnologia, lazer e muito mais!
                A nossa visão assenta em sermos a solução para os nossos clientes independentemente das suas necessidades.
                <strong>Tudo o que procuras, encontras!</strong>
              </p>
              <p class="mb-0">
                Desde mobilidade elétrica, telemóveis, acessórios, tablets, bicicletas, eletrodomésticos, piscinas, jardim,
                diversão, gadgets, TVs, recondicionados, espaço kids, ferramentas e muito mais, até à reparação de
                equipamentos eletrónicos e informáticos (mobile, informática, indústria, multimédia, gaming, áudio,
                veículos elétricos, eletrodomésticos e outros), estamos focados em dar-te respostas rápidas e de confiança.
              </p>
            </article>
          </div>

          <div class="col-lg-5">
            <aside class="info-card sobre-card h-100">
              <h3 class="mb-3">O que nos define</h3>
              <ul class="list-unstyled mb-3 small sobre-list">
                <li><i class="bi bi-check-circle-fill me-2 text-success"></i> +20 anos de experiência na área.</li>
                <li><i class="bi bi-check-circle-fill me-2 text-success"></i> Explicamos o problema e as opções antes de avançar.</li>
                <li><i class="bi bi-check-circle-fill me-2 text-success"></i> Portefólio amplo: tecnologia, lazer e serviços.</li>
                <li><i class="bi bi-check-circle-fill me-2 text-success"></i> Reparações com transparência e acompanhamento.</li>
              </ul>
              <a href="index.php#localizacao-contactos" class="btn btn-outline-primary btn-sm rounded-pill">
                <i class="bi bi-geo-alt-fill me-1"></i> Ver localização e contactos
              </a>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <!-- ÁREAS PRINCIPAIS -->
    <section class="sobre-section sobre-areas">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="mb-1">O que encontras na CDoisPontos</h2>
          <p class="text-muted small mb-0">
            Produtos, lazer e assistência técnica num só espaço
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="highlight-card sobre-highlight h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-bag-check-fill highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Loja de produtos</h3>
              <p class="highlight-text mb-0">
                Mobilidade elétrica, telemóveis, tablets, TVs, gadgets, espaço kids, ferramentas,
                eletrodomésticos e muito mais.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="highlight-card sobre-highlight h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-tools highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Reparações especializadas</h3>
              <p class="highlight-text mb-0">
                Reparações de mobile, informática, multimédia, gaming, áudio, indústria
                e veículos elétricos.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="highlight-card sobre-highlight h-100">
              <div class="highlight-icon-wrap">
                <i class="bi bi-emoji-smile-fill highlight-icon"></i>
              </div>
              <h3 class="highlight-title">Experiência do cliente</h3>
              <p class="highlight-text mb-0">
                Atendimento próximo, comunicação clara e foco total na tua satisfação.
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
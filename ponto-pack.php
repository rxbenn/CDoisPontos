<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ponto Pack — Entrega e Recolha de Encomendas | CDoisPontos</title>
  <meta name="description" content="Ponto Pack na CDoisPontos: entrega e recolha de encomendas com INPOST, DPD, SEUR, GLS, DHL e CELERITAS. Saiba como funciona, informações úteis e FAQ.">

  <!-- Fonts -->
  <link rel="preload" href="assets/fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="css/fonts.css">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body class="sobre-page">
  <?php include 'components/header.php'; ?>

  <main>
    <!-- HERO -->
    <section class="sobre-hero ponto-pack-hero">
      <div class="container">
        <nav class="sobre-breadcrumb small mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Início</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ponto Pack</li>
          </ol>
        </nav>

        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <span class="section-eyebrow">Ponto Pack</span>
            <h1 class="sobre-hero-title mb-2">Entrega e recolha de encomendas na <span class="brand-accent">CDoisPontos</span></h1>
            <p class="sobre-hero-text mb-0">
              Um ponto de entrega e recolha prático para receber, devolver ou levantar encomendas com flexibilidade.
            </p>
          </div>
          <div class="col-lg-4 d-none d-lg-block">
            <aside class="info-card ponto-pack-location-card">
              <div class="d-flex align-items-start gap-3">
                <div class="ponto-pack-location-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="flex-grow-1">
                  <div class="ponto-pack-location-title">Onde levantar</div>
                  <div class="ponto-pack-location-place">Praia da Amorosa, Viana do Castelo</div>

                  <div class="ponto-pack-location-actions">
                    <a href="index.php#localizacao-contactos" class="btn btn-primary btn-sm rounded-pill px-3">
                      <i class="bi bi-geo-alt me-1"></i> Ver localização
                    </a>
                    <a href="https://maps.app.goo.gl/aBskyvcViqyXxpft8" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                      <i class="bi bi-arrow-up-right me-1"></i> Abrir no Maps
                    </a>
                  </div>
                </div>
              </div>
              <div class="ponto-pack-location-note">
                <i class="bi bi-info-circle me-1"></i> Consulte o horário da loja antes de se deslocar.
              </div>
            </aside>
          </div>
        </div>

        <!-- Localização (Mobile/Tablet) -->
        <div class="d-lg-none mt-3">
          <aside class="info-card ponto-pack-location-card">
            <div class="d-flex align-items-start gap-3">
              <div class="ponto-pack-location-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div class="flex-grow-1">
                <div class="ponto-pack-location-title">Onde levantar</div>
                <div class="ponto-pack-location-place">Praia da Amorosa, Viana do Castelo</div>
                <div class="ponto-pack-location-actions">
                  <a href="index.php#localizacao-contactos" class="btn btn-primary btn-sm rounded-pill px-3">
                    <i class="bi bi-geo-alt me-1"></i> Ver localização
                  </a>
                  <a href="https://maps.app.goo.gl/aBskyvcViqyXxpft8" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-up-right me-1"></i> Abrir no Maps
                  </a>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- TRANSPORTADORAS -->
    <section class="sobre-section pt-4">
      <div class="container">
        <div class="text-center mb-4">
          <span class="section-eyebrow">Transportadoras</span>
          <h2 class="section-heading centered d-block mb-1">Marcas disponíveis no Ponto Pack</h2>
          <p class="text-muted small mb-0">Pode entregar ou recolher encomendas das seguintes transportadoras.</p>
        </div>

        <div class="row g-3 justify-content-center pack-tiles">
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/inpost.png" alt="INPOST" loading="lazy" decoding="async"></div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/dpd.png" alt="DPD" loading="lazy" decoding="async"></div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/seur.png" alt="SEUR" loading="lazy" decoding="async"></div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/gls.png" alt="GLS" loading="lazy" decoding="async"></div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/dhl.png" alt="DHL" loading="lazy" decoding="async"></div>
          </div>
          <div class="col-6 col-md-4 col-lg-2 animate-soft">
            <div class="pack-logo-tile h-100"><img src="imagens/celeritas.png" alt="CELERITAS" loading="lazy" decoding="async"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- COMO FUNCIONA -->
    <section class="sobre-section pt-0">
      <div class="container">
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-12">
            <div class="text-center mb-4">
              <span class="section-eyebrow">Como funciona</span>
              <h2 class="section-heading centered d-block mb-1">Simples, rápido e com acompanhamento</h2>
              <p class="text-muted small mb-0">
                O processo depende da transportadora e do tipo de envio (entrega, recolha, devolução), mas segue sempre a mesma lógica.
              </p>
            </div>

            <div class="row g-3">
              <div class="col-md-6 col-lg-3 animate-soft">
                <article class="highlight-card h-100">
                  <div class="highlight-icon-wrap"><i class="bi bi-bell highlight-icon"></i></div>
                  <h3 class="highlight-title">1) Notificação</h3>
                  <p class="highlight-text mb-0">Recebe SMS/email/app com o código/QR quando a encomenda estiver disponível.</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3 animate-soft">
                <article class="highlight-card h-100">
                  <div class="highlight-icon-wrap"><i class="bi bi-qr-code-scan highlight-icon"></i></div>
                  <h3 class="highlight-title">2) Código/QR</h3>
                  <p class="highlight-text mb-0">Apresente o código/QR e, quando aplicável, um documento de identificação.</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3 animate-soft">
                <article class="highlight-card h-100">
                  <div class="highlight-icon-wrap"><i class="bi bi-box2-heart highlight-icon"></i></div>
                  <h3 class="highlight-title">3) Entrega/Recolha</h3>
                  <p class="highlight-text mb-0">A operação é feita no balcão, de forma organizada e com confirmação do registo.</p>
                </article>
              </div>
              <div class="col-md-6 col-lg-3 animate-soft">
                <article class="highlight-card h-100">
                  <div class="highlight-icon-wrap"><i class="bi bi-check2-circle highlight-icon"></i></div>
                  <h3 class="highlight-title">4) Confirmação</h3>
                  <p class="highlight-text mb-0">Fica registado no sistema da transportadora e recebe confirmação (quando aplicável).</p>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- INFORMAÇÕES ÚTEIS -->
    <section class="sobre-section pt-0">
      <div class="container">
        <div class="row g-4 align-items-stretch">
          <div class="col-lg-7 animate-soft">
            <div class="info-card h-100">
              <span class="section-eyebrow">Informações úteis</span>
              <h2 class="mb-3">Antes de vir levantar</h2>
              <ul class="mb-0 text-muted">
                <li>Verifique a notificação da transportadora: código/QR e instruções.</li>
                <li>Traga um documento de identificação quando a transportadora o solicitar.</li>
                <li>Confirme o prazo de levantamento indicado na notificação (pode variar por transportadora).</li>
                <li>Para devoluções, siga o procedimento da transportadora (etiqueta, embalagem e confirmação).</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 animate-soft">
            <div class="info-card h-100">
              <span class="section-eyebrow">Precisa de ajuda?</span>
              <h2 class="mb-3">Fale connosco</h2>
              <p class="text-muted mb-3">
                Se tiver dúvidas sobre o levantamento, devoluções ou o funcionamento do Ponto Pack, estamos disponíveis para ajudar.
              </p>
              <div class="d-flex flex-wrap gap-2">
                <a href="contacto.php" class="btn-hero-main">
                  <i class="bi bi-send-fill"></i> Enviar mensagem
                </a>
                <a href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer" class="btn-hero-secondary">
                  <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="sobre-section pt-0">
      <div class="container">
        <div class="text-center mb-4">
          <span class="section-eyebrow">FAQ</span>
          <h2 class="section-heading centered d-block mb-1">Perguntas frequentes</h2>
          <p class="text-muted small mb-0">Respostas rápidas às dúvidas mais comuns.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="accordion" id="pontoPackFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqOneBody" aria-expanded="true" aria-controls="faqOneBody">
                    O que preciso para levantar uma encomenda?
                  </button>
                </h2>
                <div id="faqOneBody" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#pontoPackFaq">
                  <div class="accordion-body text-muted">
                    Normalmente, basta o código/QR enviado pela transportadora. Em alguns casos, pode ser solicitado documento de identificação.
                    Siga sempre as instruções na notificação.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwoBody" aria-expanded="false" aria-controls="faqTwoBody">
                    Posso levantar por outra pessoa?
                  </button>
                </h2>
                <div id="faqTwoBody" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#pontoPackFaq">
                  <div class="accordion-body text-muted">
                    Depende das regras da transportadora e do envio. Regra geral, quem tiver o código/QR consegue levantar,
                    mas podem existir exceções (por exemplo, validação de identidade).
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThreeBody" aria-expanded="false" aria-controls="faqThreeBody">
                    Fazem devoluções?
                  </button>
                </h2>
                <div id="faqThreeBody" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#pontoPackFaq">
                  <div class="accordion-body text-muted">
                    Sim, quando a devolução estiver configurada pela transportadora para o nosso ponto.
                    Confirme se tem etiqueta/QR e embalagem conforme indicado.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="faqFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFourBody" aria-expanded="false" aria-controls="faqFourBody">
                    Existe um prazo para levantar?
                  </button>
                </h2>
                <div id="faqFourBody" class="accordion-collapse collapse" aria-labelledby="faqFour" data-bs-parent="#pontoPackFaq">
                  <div class="accordion-body text-muted">
                    Sim. O prazo é definido pela transportadora e vem indicado na notificação. Recomendamos levantar assim que possível.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


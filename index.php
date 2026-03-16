<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDoisPontos</title>

    <!-- CSS do Bootstrap + o teu CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body>
    <?php include 'components/header.php'; ?>

<main>

  <!-- HERO MODERNO COM GRADIENTE -->
  <section class="hero-section text-light">
    <div class="container">
      <div class="row align-items-center g-4">

        <!-- Texto -->
        <div class="col-lg-6">
          <span class="hero-badge">CDoisPontos · Praia da Amorosa</span>
          <h1 class="hero-title mt-3">
            Tudo o que procuras, <span class="brand-accent">encontras!</span>
          </h1>
          <p class="hero-subtitle">
            Localizada na <strong>Areosa</strong>, a CDoisPontos é uma loja de tecnologia e informática com <strong>reparação de equipamentos</strong>, venda de
            <strong>acessórios</strong> e <strong>assistência técnica</strong> personalizada.
          </p>
          <div class="hero-actions mt-4 d-flex flex-wrap gap-2">
            <a href="#servicos" class="btn btn-light">
              <i class="bi bi-tools me-1"></i> Ver serviços
            </a>
            <a href="#localizacao-contactos" class="btn btn-outline-light">
              <i class="bi bi-telephone-outbound me-1"></i> Contactar
            </a>
          </div>
        </div>

        <!-- Imagem / mockup -->
        <div class="col-lg-6">
          <div class="hero-card shadow-lg">
            <img src="imagens/logo.png" alt="CDoisPontos" class="img-fluid hero-image">
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVIÇOS PRINCIPAIS -->
  <section id="servicos">
    <div class="container">
      <div class="text-center mb-4">
        <h2 class="mb-1">Serviços da CDoisPontos</h2>
        <p class="text-muted small mb-0">Três áreas principais onde podemos ajudar-te</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4 animate-soft">
          <article class="highlight-card h-100">
            <div class="highlight-icon-wrap">
              <i class="bi bi-tools highlight-icon"></i>
            </div>
            <h3 class="highlight-title">Reparação de equipamentos</h3>
            <p class="highlight-text mb-0">
              Substituição de ecrãs, baterias, conetores e outros componentes, sempre com diagnóstico transparente.
            </p>
          </article>
        </div>

        <div class="col-md-4 animate-soft">
          <article class="highlight-card h-100">
            <div class="highlight-icon-wrap">
              <i class="bi bi-laptop highlight-icon"></i>
            </div>
            <h3 class="highlight-title">Tecnologia e acessórios</h3>
            <p class="highlight-text mb-0">
              Equipamentos e periféricos selecionados para uso diário e profissional.
            </p>
          </article>
        </div>

        <div class="col-md-4 animate-soft">
          <article class="highlight-card h-100">
            <div class="highlight-icon-wrap">
              <i class="bi bi-headset highlight-icon"></i>
            </div>
            <h3 class="highlight-title">Assistência técnica</h3>
            <p class="highlight-text mb-0">
              Aconselhamento especializado e apoio na configuração de equipamentos e software.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>
  
  <!-- PRODUTOS EM DESTAQUE (CARDS SIMPLES E MODERNOS) -->
  <section id="produtos-destaque">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <div>
          <h2 class="mb-1">Produtos em destaque</h2>
          <p class="text-muted mb-0 small">Alguns exemplos de produtos que podes encontrar na loja</p>
        </div>
        <a href="produtos.php" class="text-primary small d-flex align-items-center">
          Ver catálogo completo
          <i class="bi bi-arrow-right-short ms-1"></i>
        </a>
      </div>

      <div class="row g-4">

        <!-- PRODUTO 1 -->
        <div class="col-sm-6 col-lg-3 animate-soft">
          <article class="product-card h-100">
            <img src="imagens/produto1.jpg" class="card-img-top" alt="Produto 1">
            <div class="product-body">
              <h5 class="product-title">Auriculares Bluetooth</h5>
              <p class="product-text">
                Som nítido, ligação rápida e autonomia para todo o dia.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">€ 19,90</span>
                <a href="#" class="product-link">Detalhes</a>
              </div>
            </div>
          </article>
        </div>

        <!-- PRODUTO 2 -->
        <div class="col-sm-6 col-lg-3 animate-soft">
          <article class="product-card h-100">
            <img src="imagens/produto2.jpg" class="card-img-top" alt="Produto 2">
            <div class="product-body">
              <h5 class="product-title">Rato sem fios</h5>
              <p class="product-text">
                Ideal para trabalho e estudo com ergonomia e precisão.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">€ 24,90</span>
                <a href="#" class="product-link">Detalhes</a>
              </div>
            </div>
          </article>
        </div>

        <!-- PRODUTO 3 -->
        <div class="col-sm-6 col-lg-3 animate-soft">
          <article class="product-card h-100">
            <img src="imagens/produto3.jpg" class="card-img-top" alt="Produto 3">
            <div class="product-body">
              <h5 class="product-title">Teclado mecânico</h5>
              <p class="product-text">
                Teclado compacto com iluminação e switches confortáveis.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">€ 14,90</span>
                <a href="#" class="product-link">Detalhes</a>
              </div>
            </div>
          </article>
        </div>

        <!-- PRODUTO 4 -->
        <div class="col-sm-6 col-lg-3 animate-soft">
          <article class="product-card h-100">
            <img src="imagens/produto4.jpg" class="card-img-top" alt="Produto 4">
            <div class="product-body">
              <h5 class="product-title">Carregador rápido</h5>
              <p class="product-text">
                Compatível com vários dispositivos, perfeito para o dia a dia.
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="product-price">€ 29,90</span>
                <a href="#" class="product-link">Detalhes</a>
              </div>
            </div>
          </article>
        </div>

      </div>
    </div>
  </section>




<!-- Localização e contactos -->
<section id="localizacao-contactos">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-10 mx-auto">
        <div class="info-card h-100">
          <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
              <h3 class="mb-1">Localização e Contactos</h3>
              <p class="text-muted mb-0 small">Fala connosco ou visita a nossa loja física</p>
            </div>
          </div>

          <div class="row g-4 align-items-stretch">
            <!-- Coluna esquerda: contactos (design igual ao atual) -->
            <div class="col-lg-5">
              <!-- Morada -->
              <div class="contact-line mb-2">
                <div class="contact-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Morada</div>
                  <div class="contact-value">
                    Praia da Amorosa, Av. do Atlântico 331 R/C, 4935-580
                  </div>
                </div>
              </div>

              <!-- Telefone -->
              <div class="contact-line mb-2">
                <div class="contact-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Telefone</div>
                  <div class="contact-value">
                    <strong>964 395 628</strong>
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="contact-line mb-2">
                <div class="contact-icon email-icon">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Email</div>
                  <div class="contact-value">
                    <a href="mailto:cdoispontos.amorosa@gmail.com" class="contact-link">
                      cdoispontos.amorosa@gmail.com
                    </a>
                  </div>
                </div>
              </div>

              <!-- WhatsApp -->
              <div class="contact-line mb-2">
                <div class="contact-icon whatsapp-icon">
                  <i class="bi bi-whatsapp"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">WhatsApp</div>
                  <div class="contact-value">
                    <a href="https://wa.me/351964395628" target="_blank" class="contact-link">
                      Fale connosco agora
                    </a>
                  </div>
                </div>
              </div>

              <!-- Facebook -->
              <div class="contact-line mb-2">
                <div class="contact-icon facebook-icon">
                  <i class="bi bi-facebook"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Facebook</div>
                  <div class="contact-value">
                    <a href="https://www.facebook.com/cdoispontos" target="_blank" class="contact-link">
                      Visite a nossa página
                    </a>
                  </div>
                </div>
              </div>

              <!-- Horário (visual mais leve) -->
              <div class="contact-line mb-0 mt-1">
                <div class="contact-icon">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Horário</div>
                  <div class="contact-value small text-muted">
                    Seg a Sex: 9h30 – 12h30 / 14h00 – 19h00 &nbsp;·&nbsp; Sáb e Dom: Encerrado
                  </div>
                </div>
              </div>
            </div>

            <!-- Coluna direita: mapa mais clean e integrado -->
            <div class="col-lg-7">
              <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap gap-2">
                <div>
                  <span class="map-card-label">Localização</span>
                  <h3 class="map-card-title mb-0">Praia da Amorosa, Viana do Castelo</h3>
                </div>
                <a href="https://maps.app.goo.gl/aBskyvcViqyXxpft8"
                   target="_blank"
                   class="map-card-link">
                  <i class="bi bi-arrow-up-right me-1"></i>
                  Abrir no Google Maps
                </a>
              </div>

              <div class="map-wrapper-location">
                <iframe
                  class="map-iframe"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1253.5678755583508!2d-8.81945317423816!3d41.644858480408054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25b5e96f497cdf%3A0x334ec8653e63d143!2sCDoisPontos%20Amorosa%2C%20Lda.!5e0!3m2!1spt-PT!2spt!4v1773327768017!5m2!1spt-PT!2spt"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


</main>


    <!-- FOOTER vindo da pasta components -->
    <?php include 'components/footer.php'; ?>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
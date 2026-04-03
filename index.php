<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDoisPontos — Tecnologia, Reparações e Assistência Técnica na Areosa</title>
    <meta name="description" content="CDoisPontos — loja de tecnologia e assistência técnica na Praia da Amorosa, Viana do Castelo. Reparamos telemóveis, computadores e outros equipamentos. Visita-nos!">

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
        <div class="col-12 col-lg-6 text-center text-lg-start">
          <span class="hero-badge">CDoisPontos · Praia da Amorosa</span>
          <h1 class="hero-title mt-3">
            Tudo o que procuras, <span class="brand-accent">encontras!</span>
          </h1>
          <p class="hero-subtitle mb-4 mx-auto mx-lg-0" style="max-width: 500px;">
            Localizada na <strong>Amorosa</strong>, a CDoisPontos é uma loja de tecnologia e informática com <strong>reparação de equipamentos</strong>, venda de
            <strong>acessórios</strong> e <strong>assistência técnica</strong> personalizada.
          </p>
          <div class="hero-actions mt-4 d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
            <a href="sobre.php#servicos" class="btn btn-light px-4 py-2 fw-semibold">
              <i class="bi bi-tools me-1"></i> Ver serviços
            </a>
            <a href="#localizacao-contactos" class="btn btn-outline-light px-4 py-2 fw-semibold">
              <i class="bi bi-telephone-outbound me-1"></i> Contactar
            </a>
          </div>
        </div>

        <!-- Imagem / mockup -->
        <div class="col-lg-6 text-center">
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
      <div class="position-relative text-center mb-4 pb-2 pb-md-0">
        <span class="section-eyebrow">O que fazemos</span>
        <h2 class="section-heading centered d-block mb-1">Serviços da CDoisPontos</h2>
        <p class="text-muted small mb-0">Três áreas principais onde podemos ajudar-te</p>
        
        <!-- Botão perfeitamente encostado à extrema direita (Apenas em desktop/tablets) -->
        <div class="position-absolute top-50 end-0 translate-middle-y d-none d-md-block">
          <a href="sobre.php#servicos" class="btn btn-outline-secondary btn-sm rounded-pill px-4 shadow-sm animate-soft">
            Ver todos os serviços <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
      
      <!-- Em telemóveis fica centrado abaixo do título em prol da legibilidade do ecrã estreito -->
      <div class="text-center mb-4 d-block d-md-none">
        <a href="sobre.php#servicos" class="btn btn-outline-secondary btn-sm rounded-pill px-4 shadow-sm animate-soft">
          Ver todos os serviços <i class="bi bi-arrow-right ms-1"></i>
        </a>
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

  <!-- MARCAS PARCEIRAS (CARROSEL) -->
  <section id="marcas-parceiras" class="brands-section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="section-eyebrow">Parceiros oficiais</span>
        <h2 class="section-heading centered d-block mb-1">Trabalhamos com as melhores marcas</h2>
        <p class="text-muted small mb-0">Parceiros de confiança para lhe garantir os melhores produtos.</p>
      </div>

      <div class="brands-slider">
        <div class="brands-track">
          <!-- Multiplicamos os itens para garantir o efeito de loop infinito suave -->
          <!-- Pack 1 -->
          <div class="brand-logo-item">
            <img src="imagens/apple.png" alt="Marca 1" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/samsung.png" alt="Marca 2" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/microsoft.png" alt="Marca 3" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/intel.png" alt="Marca 4" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/hp.png" alt="Marca 5" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/sony.png" alt="Marca 6" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/lenovo.png" alt="Marca 7" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/dell.png" alt="Marca 8" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/asus.png" alt="Marca 9" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/logitech.png" alt="Marca 10" class="brand-placeholder">
          </div>
          
          <!-- Pack 2 (Cópia para o Loop) -->
          <div class="brand-logo-item">
            <img src="imagens/apple.png" alt="Marca 1" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/samsung.png" alt="Marca 2" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/microsoft.png" alt="Marca 3" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/intel.png" alt="Marca 4" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/hp.png" alt="Marca 5" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/sony.png" alt="Marca 6" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/lenovo.png" alt="Marca 7" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/dell.png" alt="Marca 8" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/asus.png" alt="Marca 9" class="brand-placeholder">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/logitech.png" alt="Marca 10" class="brand-placeholder">
          </div>
        </div>
      </div>
      <div class="brands-action">
        <a href="parcerias.php" class="btn btn-brands-more">
          Ver todas as parcerias <i class="bi bi-arrow-right ms-1"></i>
        </a>
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
              <span class="section-eyebrow">Onde estamos</span>
              <h3 class="mb-0">Localização e Contactos</h3>
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
                    939 982 878
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
                    <a href="https://wa.me/351939982878" target="_blank" class="contact-link">
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

              <!-- BOTÃO PARA FORMULÁRIO -->
              <div class="contact-line mb-2">
                <div class="contact-icon" style="background: rgba(245, 124, 0, 0.1); color: #f57c00;">
                  <i class="bi bi-chat-dots-fill"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Mensagens</div>
                  <div class="contact-value">
                    <a href="contacto.php" class="btn btn-warning rounded-pill btn-sm px-4 fw-bold shadow-sm border-0 mt-1">
                      Enviar Mensagem Direta
                    </a>
                  </div>
                </div>
              </div>

              <!-- Horário -->
              <div class="contact-line mb-0">
                <div class="contact-icon">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="contact-content">
                  <div class="contact-label">Horário</div>
                  <div class="contact-value small text-muted">
                    Seg a Sex: 9h30 – 12h30 / 14h00 – 19h00 <br> Sáb e Dom: Encerrado
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
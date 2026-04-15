<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDoisPontos — Tecnologia, Reparações e Assistência Técnica na Areosa</title>
    <meta name="description" content="CDoisPontos — loja de tecnologia e assistência técnica na Praia da Amorosa, Viana do Castelo. Reparamos telemóveis, computadores e outros equipamentos. Visita-nos!">

    <!-- Fonts -->
    <link rel="preload" href="assets/fonts/inter-latin.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="preload" href="imagens/logo-hero.webp" as="image" type="image/webp" fetchpriority="high">
    <link rel="preload" href="imagens/gls.png" as="image" type="image/png">
    <link rel="preload" href="imagens/dhl.png" as="image" type="image/png">

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
            <a href="#localizacao-contactos" class="btn-hero-main animate-soft">
              <i class="bi bi-telephone-outbound"></i> Contactar
            </a>
            <a href="sobre.php#servicos" class="btn-hero-secondary animate-soft">
              <i class="bi bi-tools"></i> Ver serviços
            </a>
          </div>
        </div>

        <!-- Imagem / mockup -->
        <div class="col-lg-6 text-center">
          <div class="hero-card shadow-lg">
            <img src="imagens/logo-hero.webp" alt="Logótipo da CDoisPontos" class="img-fluid hero-image" loading="eager" fetchpriority="high" decoding="async">
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
        <p class="text-muted small mb-0">Três áreas principais em que podemos ajudar</p>
        
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
              Substituição de ecrãs, baterias, conetores e outros componentes, com diagnóstico claro e acompanhamento.
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
              Equipamentos e periféricos selecionados para o dia a dia e para uso profissional.
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
              Apoio na configuração de equipamentos, software e conectividade, com aconselhamento especializado.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- PONTO PACK (PONTO DE ENTREGA/RECOLHA) -->
  <section id="ponto-pack" class="ponto-pack-section">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6 text-center text-lg-start">
          <span class="section-eyebrow d-inline-block">Ponto Pack</span>
          <h2 class="section-heading d-block mb-2 text-center text-lg-start">Entrega e recolha de encomendas, num só local</h2>
          <p class="text-muted pack-subtitle mb-3" style="max-width: 560px;">
            A <strong>CDoisPontos</strong> é também um <strong>ponto de entrega e recolha</strong> de encomendas.
            Deixe a sua encomenda connosco e recolha quando lhe for mais conveniente — de forma simples, rápida e segura.
          </p>

          <div class="pack-benefits d-flex flex-wrap gap-2 mb-4">
            <span class="pack-chip"><i class="bi bi-clock me-1"></i> Mais flexibilidade</span>
            <span class="pack-chip"><i class="bi bi-shield-check me-1"></i> Processo seguro</span>
            <span class="pack-chip"><i class="bi bi-bag-check me-1"></i> Entrega e recolha</span>
          </div>

          <div class="d-flex flex-wrap gap-3 align-items-center justify-content-center justify-content-lg-start">
            <a href="ponto-pack.php" class="btn-hero-main animate-soft">
              <i class="bi bi-info-circle"></i> Saber mais
            </a>
            <a href="#localizacao-contactos" class="btn-pack-outline animate-soft">
              <i class="bi bi-geo-alt me-1"></i> Ver localização
            </a>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="pack-visual animate-soft" aria-label="Transportadoras disponíveis no Ponto Pack">
            <div class="pack-visual-center">
              <div class="pack-visual-icon">
                <i class="bi bi-box-seam"></i>
              </div>
              <div class="pack-visual-title">Ponto Pack</div>
              <div class="pack-visual-subtitle">Transportadoras disponíveis</div>
            </div>

            <!-- Layout criativo (não carrossel): “órbita” de marcas -->
            <div class="pack-orbit" aria-hidden="true">
              <div class="pack-logo-pill" style="--x:-135px; --y:-0px; --d: 0ms;">
                <img src="imagens/inpost.png" alt="INPOST" loading="eager" decoding="async">
              </div>
              <div class="pack-logo-pill" style="--x:-75px; --y:-105px; --d: 120ms;">
                <img src="imagens/dpd.png" alt="DPD" loading="eager" decoding="async">
              </div>
              <div class="pack-logo-pill" style="--x:125px; --y:-85px; --d: 240ms;">
                <img src="imagens/seur.png" alt="SEUR" loading="eager" decoding="async">
              </div>
              <div class="pack-logo-pill" style="--x:160px; --y:10px; --d: 360ms;">
                <img src="imagens/gls.png" alt="GLS" loading="eager" fetchpriority="high" decoding="async">
              </div>
              <div class="pack-logo-pill" style="--x:135px; --y:100px; --d: 480ms;">
                <img src="imagens/dhl.png" alt="DHL" loading="eager" fetchpriority="high" decoding="async">
              </div>
              <div class="pack-logo-pill" style="--x:-135px; --y:110px; --d: 600ms;">
                <img src="imagens/celeritas.png" alt="CELERITAS" loading="eager" decoding="async">
              </div>
            </div>

            <!-- Fallback mobile: grelha simples -->
            <div class="pack-logos-grid" aria-hidden="true">
              <div class="pack-logo-tile"><img src="imagens/inpost.png" alt="INPOST" loading="lazy" decoding="async"></div>
              <div class="pack-logo-tile"><img src="imagens/dpd.png" alt="DPD" loading="lazy" decoding="async"></div>
              <div class="pack-logo-tile"><img src="imagens/seur.png" alt="SEUR" loading="lazy" decoding="async"></div>
              <div class="pack-logo-tile"><img src="imagens/gls.png" alt="GLS" loading="lazy" decoding="async"></div>
              <div class="pack-logo-tile"><img src="imagens/dhl.png" alt="DHL" loading="lazy" decoding="async"></div>
              <div class="pack-logo-tile"><img src="imagens/celeritas.png" alt="CELERITAS" loading="lazy" decoding="async"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AGENTE AUTORIZADO -->
  <section id="agente-autorizado" class="agente-section">
    <div class="container">
      <div class="text-center mb-4">
        <span class="section-eyebrow">Agente autorizado</span>
        <h2 class="section-heading centered d-block mb-1">Serviços oficiais das principais operadoras</h2>
        <p class="text-muted small mb-0">
          Apoio no atendimento e em processos selecionados, com a comodidade de tratar tudo num só local.
        </p>
      </div>

      <div class="row g-3 justify-content-center">
        <div class="col-6 col-md-3 animate-soft">
          <div class="agente-tile h-100">
            <img src="imagens/meo.png" alt="MEO" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="col-6 col-md-3 animate-soft">
          <div class="agente-tile h-100">
            <img src="imagens/vodafone.png" alt="Vodafone" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="col-6 col-md-3 animate-soft">
          <div class="agente-tile h-100">
            <img src="imagens/nos.png" alt="NOS" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="col-6 col-md-3 animate-soft">
          <div class="agente-tile h-100">
            <img src="imagens/digi.png" alt="DIGI" loading="lazy" decoding="async">
          </div>
        </div>
      </div>

      <div class="agente-notes mt-4">
        <div class="agente-note"><i class="bi bi-shop me-2"></i>Atendimento em loja</div>
        <div class="agente-note"><i class="bi bi-shield-check me-2"></i>Processo orientado e seguro</div>
        <div class="agente-note"><i class="bi bi-clock me-2"></i>Mais comodidade no dia a dia</div>
      </div>
    </div>
  </section>

  <!-- COFIDIS PAY -->
  <section id="cofidis-pay" class="cofidis-section">
    <div class="container">
      <div class="text-center mb-4">
        <span class="section-eyebrow">Financiamento</span>
        <h2 class="section-heading centered d-block mb-1">Cofidis Pay</h2>
        <p class="text-muted small mb-0">Uma forma simples e segura de pagar em prestações.</p>
      </div>

      <div class="cofidis-card">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <div class="d-flex align-items-center gap-3 flex-wrap cofidis-top">
              <img src="imagens/cofidispay.webp" alt="Cofidis Pay" class="cofidis-logo" loading="lazy" decoding="async">
            </div>

            <h2 class="cofidis-title mt-3 mb-2">Pagamentos até 12x sem juros</h2>
            <p class="cofidis-subtitle mb-3">
              Uma solução de pagamentos que permite pagar em montantes à sua medida.<br>
              Sem juros, sem encargos e sem burocracias.
            </p>

            <div class="cofidis-actions d-none d-lg-flex">
              <a class="btn-hero-main" href="https://www.cofidis.pt/cofidispay/cliente" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i> Saber mais
              </a>
              <a class="btn-pack-outline" href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-whatsapp"></i> Falar connosco
              </a>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="row g-3">
              <div class="col-6 animate-soft">
                <div class="cofidis-feature h-100">
                  <i class="bi bi-credit-card cofidis-icon"></i>
                  <div class="cofidis-feature-title">Pagamentos até 12x</div>
                  <div class="cofidis-feature-text">Ao utilizar qualquer tipo de cartão de crédito ou débito.</div>
                </div>
              </div>
              <div class="col-6 animate-soft">
                <div class="cofidis-feature h-100">
                  <i class="bi bi-percent cofidis-icon"></i>
                  <div class="cofidis-feature-title">Sem juros</div>
                  <div class="cofidis-feature-text">Ou outros custos adicionais sobre os seus pagamentos.</div>
                </div>
              </div>
              <div class="col-6 animate-soft">
                <div class="cofidis-feature h-100">
                  <i class="bi bi-phone cofidis-icon"></i>
                  <div class="cofidis-feature-title">100% digital</div>
                  <div class="cofidis-feature-text">Processo seguro, imediato e sem papel.</div>
                </div>
              </div>
              <div class="col-6 animate-soft">
                <div class="cofidis-feature h-100">
                  <i class="bi bi-sliders2 cofidis-icon"></i>
                  <div class="cofidis-feature-title">Autonomia total</div>
                  <div class="cofidis-feature-text">Gestão e controlo das suas operações na App Cofidis.</div>
                </div>
              </div>
            </div>

            <div class="cofidis-actions d-flex d-lg-none mt-3 justify-content-center">
              <a class="btn-hero-main" href="https://www.cofidis.pt/cofidispay/cliente" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-box-arrow-up-right"></i> Saber mais
              </a>
              <a class="btn-pack-outline" href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-whatsapp"></i> Falar connosco
              </a>
            </div>
          </div>
        </div>

        <p class="cofidis-legal mt-4 mb-0">
          O pagamento das prestações será efetuado no cartão de débito ou crédito do cliente através de solução de pagamento assente em contrato de factoring entre a Cofidis e o comerciante.
          Informe-se na Cofidis, registada no Banco de Portugal com o nº 921.
        </p>
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
            <img src="imagens/apple.png" alt="Apple" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/samsung.png" alt="Samsung" class="brand-placeholder scale-up-3" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/microsoft.png" alt="Microsoft" class="brand-placeholder scale-up-3" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/intel.png" alt="Intel" class="brand-placeholder scale-up-2" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/hp.png" alt="HP" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/sony.png" alt="Sony" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/lenovo.png" alt="Lenovo" class="brand-placeholder scale-up-2" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/dell.png" alt="Dell" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/asus.png" alt="ASUS" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/logitech.png" alt="Logitech" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          
          <!-- Pack 2 (Cópia para o Loop) -->
          <div class="brand-logo-item">
            <img src="imagens/apple.png" alt="Apple" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/samsung.png" alt="Samsung" class="brand-placeholder scale-up-3" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/microsoft.png" alt="Microsoft" class="brand-placeholder scale-up-3" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/intel.png" alt="Intel" class="brand-placeholder scale-up-2" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/hp.png" alt="HP" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/sony.png" alt="Sony" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/lenovo.png" alt="Lenovo" class="brand-placeholder scale-up-2" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/dell.png" alt="Dell" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/asus.png" alt="ASUS" class="brand-placeholder" loading="lazy" decoding="async">
          </div>
          <div class="brand-logo-item">
            <img src="imagens/logitech.png" alt="Logitech" class="brand-placeholder" loading="lazy" decoding="async">
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
              <p class="text-muted mb-0 small">Fale connosco ou visite a nossa loja física</p>
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
                    <a href="tel:+351939982878" class="contact-link">
                      939 982 878
                    </a>
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
                    <a href="mailto:geral@c2pontosamorosa.pt" class="contact-link">
                      geral@c2pontosamorosa.pt
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
                    <a href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer" class="contact-link">
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
                    <a href="https://www.facebook.com/cdoispontos" target="_blank" rel="noopener noreferrer" class="contact-link">
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
                    <a href="contacto.php" class="btn-contact-main mt-1">
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
            <div class="col-lg-7 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap gap-2">
                <div>
                  <span class="map-card-label">Localização</span>
                  <h3 class="map-card-title mb-0">Praia da Amorosa, Viana do Castelo</h3>
                </div>
                <a href="https://maps.app.goo.gl/aBskyvcViqyXxpft8"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="map-card-link">
                  <i class="bi bi-arrow-up-right me-1"></i>
                  Abrir no Google Maps
                </a>
              </div>

              <div class="map-wrapper-location">
                <iframe
                  data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1253.5678755583508!2d-8.81945317423816!3d41.644858480408054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25b5e96f497cdf%3A0x334ec8653e63d143!2sCDoisPontos%20Amorosa%2C%20Lda.!5e0!3m2!1spt-PT!2spt!4v1773327768017!5m2!1spt-PT!2spt"
                  title="Mapa com a localização da CDoisPontos na Praia da Amorosa"
                  aria-label="Mapa com a localização da CDoisPontos"
                  class="map-iframe lazy-map-iframe"
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
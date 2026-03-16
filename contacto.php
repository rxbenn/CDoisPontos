<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - CDoisPontos</title>

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- HEADER -->
  <?php include 'components/header.php'; ?>

  <!-- CONTEÚDO -->
  <main>
    <section>
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-10 mx-auto">
            <div class="info-card h-100">
              <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                <div>
                  <h1 class="mb-1">Contacto</h1>
                  <p class="text-muted mb-0 small">
                    Fala connosco para pedidos de reparação, dúvidas sobre produtos ou outras informações.
                  </p>
                </div>
              </div>

              <div class="row g-4 align-items-start">
                <!-- Bloco de contactos -->
                <div class="col-lg-5 animate-soft">
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
                  <div class="contact-line mb-0">
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

                  <div class="mt-3 small text-muted">
                    Horário: Seg a Sex · 9h30 – 12h30 / 14h00 – 19h00 · Sábado e Domingo: Encerrado
                  </div>
                </div>

                <!-- Formulário + mapa -->
                <div class="col-lg-7 animate-soft">
                  <div class="row g-3">
                    <div class="col-12">
                      <h2 class="h5 mb-2">Envia-nos uma mensagem</h2>
                      <p class="text-muted small mb-2">
                        Preenche o formulário abaixo e entraremos em contacto contigo o mais rapidamente possível.
                      </p>
                    </div>

                    <div class="col-12">
                      <form class="row g-2">
                        <div class="col-md-6">
                          <label for="nome" class="form-label small mb-1">Nome</label>
                          <input type="text" class="form-control form-control-sm" id="nome" placeholder="O teu nome">
                        </div>
                        <div class="col-md-6">
                          <label for="email" class="form-label small mb-1">Email</label>
                          <input type="email" class="form-control form-control-sm" id="email" placeholder="email@exemplo.com">
                        </div>
                        <div class="col-md-6">
                          <label for="telefone" class="form-label small mb-1">Telefone</label>
                          <input type="tel" class="form-control form-control-sm" id="telefone" placeholder="Contacto telefónico">
                        </div>
                        <div class="col-md-6">
                          <label for="assunto" class="form-label small mb-1">Assunto</label>
                          <input type="text" class="form-control form-control-sm" id="assunto" placeholder="Ex.: Reparação de portátil">
                        </div>
                        <div class="col-12">
                          <label for="mensagem" class="form-label small mb-1">Mensagem</label>
                          <textarea class="form-control form-control-sm" id="mensagem" rows="4" placeholder="Explica-nos em que podemos ajudar."></textarea>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-2">
                          <button type="submit" class="btn btn-primary btn-sm rounded-pill px-4">
                            Enviar mensagem
                          </button>
                        </div>
                      </form>
                    </div>

                    <div class="col-12">
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
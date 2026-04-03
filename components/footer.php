<footer class="site-footer">
  <div class="footer-main py-5">
    <div class="container">
      <div class="row g-4 align-items-start">

        <!-- Coluna 1: Logo + descrição -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="d-flex align-items-center mb-3">
            <img src="imagens/logo.png" alt="CDoisPontos" class="footer-logo">
            <span class="footer-brand ms-2">
              C<span class="brand-accent">Dois</span>Pontos
            </span>
          </div>
          <p class="footer-text mb-3">
            Loja de tecnologia e assistência técnica na Praia da Amorosa.
            Reparamos computadores, portáteis e outros equipamentos eletrónicos,
            com atenção próxima e soluções rápidas.
          </p>
          <div class="footer-badges d-flex flex-wrap gap-2">
            <span class="footer-badge">
              <i class="bi bi-patch-check-fill me-1"></i>Serviço de confiança
            </span>
            <span class="footer-badge">
              <i class="bi bi-lightning-charge-fill me-1"></i>Reparações rápidas
            </span>
          </div>
        </div>

        <!-- Coluna 2: Navegação rápida -->
        <div class="col-6 col-md-3 col-lg-2">
          <h5 class="footer-title">Navegação</h5>
          <ul class="footer-links list-unstyled mb-0">
            <li><a href="index.php" class="footer-link">Início</a></li>
            <li><a href="sobre.php" class="footer-link">Sobre</a></li>
            <li><a href="parcerias.php" class="footer-link">Parcerias</a></li>
            <li><a href="contacto.php" class="footer-link">Contacto</a></li>
            <li><a href="politica-privacidade.php" class="footer-link mt-2 text-white-50 small"><i class="bi bi-shield-lock me-1"></i>Privacidade e RGPD</a></li>
          </ul>
        </div>

        <!-- Coluna 3: Horário (Apenas visível em Mobile aqui) -->
        <div class="col-6 d-md-none">
          <h5 class="footer-title">Horário</h5>
          <ul class="footer-hours list-unstyled mb-0">
            <li>Seg a Sex: <br>9h30–12h30 <br>14h00–19h00</li>
            <li class="mt-2">Sáb e Dom: <br>Encerrado</li>
          </ul>
        </div>

        <!-- Coluna 4: Contactos resumo -->
        <div class="col-12 col-md-4 col-lg-3">
          <h5 class="footer-title">Contactos</h5>
          <ul class="footer-contact list-unstyled mb-0">
            <li class="footer-contact-item">
              <i class="bi bi-geo-alt-fill me-2"></i>
              Praia da Amorosa, Viana do Castelo
            </li>
            <li class="footer-contact-item">
              <i class="bi bi-telephone-fill me-2"></i>
              <a href="tel:+351939982878" class="footer-link">939 982 878</a>
            </li>
            <li class="footer-contact-item">
              <i class="bi bi-envelope-fill me-2"></i>
              <a href="mailto:cdoispontos.amorosa@gmail.com" class="footer-link text-break">
                cdoispontos.amorosa@gmail.com
              </a>
            </li>
            <li class="footer-contact-item">
              <i class="bi bi-whatsapp me-2"></i>
              <a href="https://wa.me/351939982878" target="_blank" class="footer-link">
                Fale connosco no WhatsApp
              </a>
            </li>
          </ul>
          
          <!-- Segue-nos visível logo abaixo dos contactos no Mobile -->
          <div class="d-md-none mt-4">
            <h5 class="footer-title mb-2">Segue-nos</h5>
            <div class="footer-social d-flex flex-wrap gap-2">
              <a href="https://www.facebook.com/cdoispontos" target="_blank" class="footer-social-btn facebook">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="https://wa.me/351939982878" target="_blank" class="footer-social-btn whatsapp">
                <i class="bi bi-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Coluna 5: Horário + Redes Sociais no Desktop -->
        <div class="col-6 col-md-6 col-lg-3 d-none d-md-block">
          <h5 class="footer-title">Horário</h5>
          <ul class="footer-hours list-unstyled mb-3">
            <li>Seg a Sex: 9h30 – 12h30 / 14h00 – 19h00</li>
            <li>Sábado e Domingo: Encerrado</li>
          </ul>

          <h5 class="footer-title mb-2">Segue-nos</h5>
          <div class="footer-social d-flex flex-wrap gap-2">
            <a href="https://www.facebook.com/cdoispontos" target="_blank" class="footer-social-btn facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://wa.me/351939982878" target="_blank" class="footer-social-btn whatsapp">
              <i class="bi bi-whatsapp"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Barra inferior -->
    <div class="footer-bottom py-3">
    <div class="container text-center">
        <small class="mb-0 footer-bottom-text">
        &copy; <?php echo date('Y'); ?> CDoisPontos. Todos os direitos reservados.
        </small>
    </div>
    </div>

    <!-- WHATSAPP FLUTUANTE -->
    <a href="https://wa.me/351939982878" class="whatsapp-float" target="_blank" aria-label="Falar connosco no WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- BANNER DE COOKIES (RGPD) -->
    <div id="cookieConsentBanner" class="cookie-banner">
        <div>
            <i class="bi bi-info-circle-fill me-2 text-warning fs-6"></i> Utilizamos cookies estritamente essenciais para garantir o funcionamento correto e fluído do site. 
            <a href="politica-privacidade.php" class="text-white text-decoration-underline ms-1 fw-bold">Ler mais</a>.
        </div>
        <button id="btnAcceptCookies" class="btn-cookie shadow-sm">Compreendi</button>
    </div>

    <!-- SCRIPT DE ACEITAÇÃO LOGADA NO LOCALSTORAGE -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cookieBanner = document.getElementById("cookieConsentBanner");
            const acceptBtn = document.getElementById("btnAcceptCookies");

            if (!localStorage.getItem("cdoispontos_cookies_accepted")) {
                cookieBanner.style.display = "flex";
            }

            acceptBtn.addEventListener("click", function () {
                localStorage.setItem("cdoispontos_cookies_accepted", "true");
                cookieBanner.style.display = "none";
            });
        });
    </script>
</footer>
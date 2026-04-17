<footer class="site-footer">
  <div class="footer-main py-4">
    <div class="container">
      <div class="row g-4 align-items-start">

        <!-- Coluna 1: Logo + descrição -->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="d-flex align-items-center mb-3">
            <img src="imagens/logo-footer.webp" alt="CDoisPontos" class="footer-logo" loading="lazy" decoding="async">
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
            <li><a href="ponto-pack.php" class="footer-link">Ponto Pack</a></li>
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
              <a href="mailto:geral@c2pontosamorosa.pt" class="footer-link text-break">
                geral@c2pontosamorosa.pt
              </a>
            </li>
            <li class="footer-contact-item">
              <i class="bi bi-whatsapp me-2"></i>
              <a href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer" class="footer-link">
                Fale connosco no WhatsApp
              </a>
            </li>
            <li class="footer-contact-item">
              <i class="bi bi-chat-text-fill me-2"></i>
              <a href="contacto.php" class="footer-link">
                Enviar Mensagem Direta
              </a>
            </li>
          </ul>
          
          <!-- Segue-nos visível logo abaixo dos contactos no Mobile -->
          <div class="d-md-none mt-4">
            <h5 class="footer-title mb-2">Segue-nos</h5>
            <div class="footer-social d-flex flex-wrap gap-2">
              <a href="https://www.facebook.com/cdoispontos" target="_blank" rel="noopener noreferrer" class="footer-social-btn facebook">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer" class="footer-social-btn whatsapp">
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
            <a href="https://www.facebook.com/cdoispontos" target="_blank" rel="noopener noreferrer" class="footer-social-btn facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://wa.me/351939982878" target="_blank" rel="noopener noreferrer" class="footer-social-btn whatsapp">
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
    <a href="https://wa.me/351939982878" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Falar connosco no WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- BANNER DE COOKIES (RGPD) -->
    <div id="cookieConsentBanner" class="cookie-banner" style="display: none;">
        <div class="cookie-content">
            <i class="bi bi-info-circle-fill text-warning me-2"></i>
            <span>Utilizamos cookies estritamente essenciais para garantir o funcionamento correto e fluído do site. <span style="white-space: nowrap;"><a href="politica-privacidade.php" class="text-white text-decoration-underline ms-1 fw-bold">Saber mais</a></span></span>
        </div>
        <div class="cookie-actions">
            <button id="btnRejectCookies" class="btn-cookie-outline">Rejeitar</button>
            <button id="btnAcceptCookies" class="btn-cookie">Aceitar</button>
        </div>
    </div>

    <!-- SCRIPT DE ACEITAÇÃO LOGADA NO LOCALSTORAGE -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cookieBanner = document.getElementById("cookieConsentBanner");
            const acceptBtn = document.getElementById("btnAcceptCookies");
            const rejectBtn = document.getElementById("btnRejectCookies");
            const whatsappBtn = document.querySelector(".whatsapp-float");
            const siteHeader = document.querySelector(".site-header");

            const consentKey = "cdoispontos_cookie_consent";
            const legacyConsentKey = "cdoispontos_cookies_accepted";
            let consentValue = null; // accepted | rejected | null

            // Otimizações seguras de carregamento para listas longas de marcas/logótipos.
            const optimizeCollectionImages = () => {
                const lazySelectors = [
                    ".marcas-grid img",
                    ".pack-tiles img",
                    "#marcas-parceiras .brand-logo-item img"
                ];

                document.querySelectorAll(lazySelectors.join(",")).forEach((img) => {
                    if (!img.getAttribute("loading")) img.setAttribute("loading", "lazy");
                    if (!img.getAttribute("decoding")) img.setAttribute("decoding", "async");

                // Evitar alterar dimensão intrínseca para não distorcer logos.
                });
            };

            if ("requestIdleCallback" in window) {
                requestIdleCallback(() => optimizeCollectionImages(), { timeout: 800 });
            } else {
                setTimeout(optimizeCollectionImages, 80);
            }

            const getConsent = () => {
                try {
                    const current = localStorage.getItem(consentKey);
                    if (current) return current;

                    // Migração de chave antiga: "true" passa a "accepted".
                    const legacy = localStorage.getItem(legacyConsentKey);
                    if (legacy === "true") {
                        localStorage.setItem(consentKey, "accepted");
                        return "accepted";
                    }
                    return null;
                } catch (e) {
                    return null;
                }
            };

            const setConsent = (decision) => {
                try {
                    localStorage.setItem(consentKey, decision);
                } catch (e) {
                    // Se o browser bloquear storage, seguimos sem persistência.
                }
            };

            consentValue = getConsent();

            if (!consentValue) {
                cookieBanner.style.display = "flex";
                // Move o WhatsApp para cima se o banner estiver visível
                if (whatsappBtn) {
                    if (window.innerWidth < 991) {
                        whatsappBtn.style.bottom = "120px"; // Ajustado de 190px conforme pedido
                    } else {
                        whatsappBtn.style.bottom = "75px"; 
                    }
                }
            }

            const handleConsent = (decision) => {
                setConsent(decision);
                cookieBanner.style.display = "none";
                // Repõe o WhatsApp na posição original
                if (whatsappBtn) {
                    whatsappBtn.style.bottom = "25px";
                }
            };

            if(acceptBtn) acceptBtn.addEventListener("click", () => handleConsent("accepted"));
            if(rejectBtn) rejectBtn.addEventListener("click", () => handleConsent("rejected"));

            // Header premium ao scroll
            const syncHeaderState = () => {
                if (!siteHeader) return;
                siteHeader.classList.toggle("is-scrolled", window.scrollY > 8);
            };
            syncHeaderState();
            window.addEventListener("scroll", syncHeaderState, { passive: true });

            // Lazy load de iframes com data-src (ex.: mapa no index)
            const lazyIframes = document.querySelectorAll("iframe.lazy-map-iframe[data-src]");
            if (lazyIframes.length) {
                const loadIframe = (iframe) => {
                    if (!iframe || iframe.getAttribute("src")) return;
                    const src = iframe.getAttribute("data-src");
                    if (src) iframe.setAttribute("src", src);
                };

                if ("IntersectionObserver" in window) {
                    const iframeObserver = new IntersectionObserver((entries, obs) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                loadIframe(entry.target);
                                obs.unobserve(entry.target);
                            }
                        });
                    }, {
                        rootMargin: "900px 0px 900px 0px",
                        threshold: 0.01
                    });

                    lazyIframes.forEach((iframe) => iframeObserver.observe(iframe));
                } else {
                    lazyIframes.forEach(loadIframe);
                }
            }

            // Reveal-on-scroll discreto para cartões
            const initRevealAnimations = () => {
                const revealTargets = document.querySelectorAll(
                    ".animate-soft, .sobre-timeline-item, .marcas-grid .brand-logo-item, .pack-logo-tile, .agente-tile, .cofidis-feature, .accordion .accordion-item"
                );

                if (!revealTargets.length) return;

                // Mostra logo no carregamento os elementos já na viewport;
                // os restantes ficam para animação ao scroll.
                revealTargets.forEach((el) => {
                    const rect = el.getBoundingClientRect();
                    const isInInitialView = rect.top < window.innerHeight * 1.05;
                    el.classList.add("reveal-on-scroll");
                    el.classList.add("reveal-soft");

                    // Stagger discreto por grupo visual (efeito em cascata)
                    const siblings = el.parentElement ? Array.from(el.parentElement.children) : [];
                    const siblingIndex = Math.max(0, siblings.indexOf(el));
                    const stagger = (siblingIndex % 6) * 45;
                    el.style.setProperty("--reveal-delay", `${stagger}ms`);

                    if (isInInitialView) {
                        el.classList.add("is-visible");
                    }
                });

                if ("IntersectionObserver" in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("is-visible");
                                observer.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.12,
                        rootMargin: "0px 0px -6% 0px"
                    });

                    revealTargets.forEach((el) => {
                        if (!el.classList.contains("is-visible")) {
                            observer.observe(el);
                        }
                    });
                } else {
                    revealTargets.forEach((el) => el.classList.add("is-visible"));
                }
            };

            // Importante: inicializar "reveal" imediatamente para não deixar ícones/cards
            // invisíveis no primeiro paint (Lighthouse/TBT + percepção visual).
            initRevealAnimations();
        });
    </script>
</footer>
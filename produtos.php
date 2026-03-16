<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - CDoisPontos</title>

  <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="imagens/logo.png">
</head>
<body>

  <!-- HEADER -->
  <?php include 'components/header.php'; ?>

  <!-- CONTEÚDO -->
  <main>
    <section class="py-4">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
          <div>
            <h1 class="mb-1">Produtos</h1>
            <p class="text-muted mb-0 small">
              Alguns exemplos de artigos que podes encontrar na CDoisPontos.
            </p>
          </div>
          <span class="badge bg-light text-dark border small">
            <i class="bi bi-shop-window me-1"></i> Catálogo ilustrativo
          </span>
        </div>

        <!-- Filtros visuais simples -->
        <div class="mb-4 d-flex flex-wrap gap-2">
          <span class="badge rounded-pill bg-primary-subtle text-primary border border-primary-subtle">
            <i class="bi bi-stars me-1"></i> Destaques
          </span>
          <span class="badge rounded-pill bg-light text-muted border">
            Telemóveis &amp; acessórios
          </span>
          <span class="badge rounded-pill bg-light text-muted border">
            Informática &amp; periféricos
          </span>
          <span class="badge rounded-pill bg-light text-muted border">
            Outros gadgets
          </span>
        </div>

        <!-- Grelha de produtos -->
        <div class="row g-4">
          <div class="col-sm-6 col-lg-3 animate-soft">
            <article class="product-card h-100">
              <img src="imagens/produto1.jpg" class="card-img-top" alt="Auriculares Bluetooth">
              <div class="product-body">
                <h5 class="product-title">Auriculares Bluetooth</h5>
                <p class="product-text">
                  Ligação rápida, som equilibrado e autonomia para todo o dia.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="product-price">€ 19,90</span>
                  <a href="#" class="product-link">Saber mais</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-sm-6 col-lg-3 animate-soft">
            <article class="product-card h-100">
              <img src="imagens/produto2.jpg" class="card-img-top" alt="Rato sem fios">
              <div class="product-body">
                <h5 class="product-title">Rato sem fios</h5>
                <p class="product-text">
                  Design ergonómico, ideal para trabalho ou estudo.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="product-price">€ 24,90</span>
                  <a href="#" class="product-link">Saber mais</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-sm-6 col-lg-3 animate-soft">
            <article class="product-card h-100">
              <img src="imagens/produto3.jpg" class="card-img-top" alt="Teclado mecânico">
              <div class="product-body">
                <h5 class="product-title">Teclado mecânico</h5>
                <p class="product-text">
                  Conforto de escrita, iluminação e durabilidade.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="product-price">€ 49,90</span>
                  <a href="#" class="product-link">Saber mais</a>
                </div>
              </div>
            </article>
          </div>

          <div class="col-sm-6 col-lg-3 animate-soft">
            <article class="product-card h-100">
              <img src="imagens/produto4.jpg" class="card-img-top" alt="Carregador rápido">
              <div class="product-body">
                <h5 class="product-title">Carregador rápido</h5>
                <p class="product-text">
                  Carregamento eficiente e compatível com vários dispositivos.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="product-price">€ 29,90</span>
                  <a href="#" class="product-link">Saber mais</a>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="mt-4 text-muted small">
          * Os produtos apresentados são ilustrativos. Para saber a disponibilidade atual,
          entra em contacto connosco ou visita a loja.
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
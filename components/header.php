<header class="site-header">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

      <!-- LOGO + NOME -->
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="imagens/logo-nav.webp" alt="CDoisPontos" class="site-logo" decoding="async" fetchpriority="high">
        <span class="site-brand ms-2">
            C<span class="brand-accent">Dois</span>Pontos
        </span>
      </a>

      <!-- BOTÃO MOBILE -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#menuTopo"
        aria-controls="menuTopo"
        aria-expanded="false"
        aria-label="Abrir menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      
    <!-- MENU -->
    <div class="collapse navbar-collapse" id="menuTopo">
      <ul class="navbar-nav ms-lg-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])==='index.php') ? 'active' : ''; ?>"
              href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])==='sobre.php') ? 'active' : ''; ?>"
              href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])==='parcerias.php') ? 'active' : ''; ?>"
              href="parcerias.php">Parcerias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF'])==='ponto-pack.php') ? 'active' : ''; ?>"
              href="ponto-pack.php">Ponto Pack</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#localizacao-contactos">Contactos</a>
        </li>
      </ul>
    </div>

    </div>
  </nav>
</header>
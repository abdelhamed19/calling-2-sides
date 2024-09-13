<nav class="navbar home-nav navbar-expand-lg">
      <div class="container-fluid">
        <img src="./public/assets/image/12.svg" class="top-wave" alt="" />
        <img src="./public/assets/image/13.svg" class="bottom-wave" alt="" />
        <a class="navbar-brand" href="/">
          <img src="./public/assets/image/logo-brandfiy.svg" alt="" />
        </a>
        <button
          class="navbar-toggler outline-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse justify-content-end navbar-collapse top-link"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-3 mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="https://privacypolicy.brandifyuae.com/"
                target="_blank"
                >Privacy Policy</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Journy">Journy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
          </ul>
          <?php if (!empty($_SESSION['id']['0'])): ?>
    <div class="button-group">
        <form action="logout" method="post">
            <button type="submit" class="login d-flex align-items-center gap-1">Logout</button>
        </form>
    </div>
<?php else: ?>
    <!-- Display Login and Register buttons if user does not exist or parameters are missing -->
    <div class="button-group">
        <a href="login" class="login d-flex align-items-center gap-1">
            <span>Login</span>
        </a>
        <a href="register" class="login d-flex align-items-center gap-1">
            <span>Register</span>
        </a>
    </div>
<?php endif; ?>
    </nav>
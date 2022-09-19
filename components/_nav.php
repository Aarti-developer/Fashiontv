<style>
  .overlay {
    background-color: #110e1c8f;
    top: 0;backdrop-filter: blur(10px);
    transition: all .4s ease-in-out;
  }
</style>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_link.php"; ?>
<header class="custom__header" id="myhead-nav">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/assets/img/header-logo.svg" alt="FashionTV" class="header-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon">
          <span class="d-none">Menu</span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto">
          <?php new Link("/", "Home", "Home");?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Board
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/michel-adam">Michel&nbsp;Adam</a></li>
              <li><a class="dropdown-item" href="/kashiff-khan">Kashiff&nbsp;Khan</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/fashiontv" title="fashiontv" data-hover="Fashiontv">Fashiontv</a>
          </li> -->
          <?php new Link("/fashiontv", "FashionTV", "FashionTV");?>
          <?php new Link("/businesses", "Businesses", "Businesses");?>
          <?php new Link("/csr", "CSR", "CORPORATE SOCIAL RESPONSIBILITY");?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/csr" title="CORPORATE SOCIAL RESPONSIBILITY" data-hover="CSR">CSR</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link enq-btn" href="/enquire-now" title="Enquire&nbsp;Now" data-hover="Enquire&nbsp;Now">Enquire&nbsp;Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<script>
  let overlayed = document.getElementById("myhead-nav");

  window.addEventListener("scroll", () => {

    if (window.scrollY > 200) {
      overlayed.classList.add("overlay");
    } else {
      overlayed.classList.remove("overlay");
    }
  });
</script>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Nanum Pen Script' rel='stylesheet'>
</head>

<body>
  <!-- Barra superior (topbar)
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <!--<a href="" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/projetobemparatodos?locale=pt_BR" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/projetobemparatodos_/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/projeto-bem-para-todos-sp/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <!-- Espaço de preenchimento para o cabeçalho (header) -->
  <div class="header-padding"></div>

  <!-- Cabeçalho (header) -->
  <header class="header">

    <div class="content">

      <a href="#" target="_blank" class="logo"><img src="img/logo.png" title="Loop Nerd"></a>

      <input class="mobile-btn" type="checkbox" id="mobile-btn" />
      <label class="mobile-icon" for="mobile-btn"><span class="hamburguer"></span></label>

      <ul class="nav">

        <li><a href="#" title="Home">Home</a></li>
        <li><a href="#" title="Sobre">Sobre</a></li>
        <li><a href="#" title="Artigos">Artigos</a></li>
        <li><a href="#" title="Contato">Contato</a></li>

      </ul>

    </div><!--content-->

  </header>
</body>

</html>


<style>
  .header {

    background-color: #fff;
    box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
    float: left;

  }

  .header ul {

    margin: 0;
    padding: 0;
    list-style: none;
    overflow: hidden;
    background-color: #fff;

  }

  .header li a {

    display: block;
    padding: 0.7em 0.5em;
    text-decoration: none;
    transition: .3s;
    border-bottom: 1px #f7f7f7 solid;
    color: #242424;

  }

  .header li a:hover,
  .header .btn-mobile:hover {

    background-color: #02a1ee;
    color: #fff;

  }

  .header .logo {

    display: block;
    float: left;

  }


  .header .nav {
    clear: both;
    max-height: 0;
    transition: max-height .2s ease-out;
  }

  /* menu icon */

  .header .mobile-icon {
    cursor: pointer;
    display: inline-block;
    float: right;
    padding: 28px 20px;
    position: relative;
    user-select: none;
  }

  .header .mobile-icon .hamburguer {
    background: #333;
    display: block;
    height: 2px;
    position: relative;
    transition: background .2s ease-out;
    width: 18px;
  }

  .header .mobile-icon .hamburguer:before,
  .header .mobile-icon .hamburguer:after {
    background: #333;
    content: '';
    display: block;
    height: 100%;
    position: absolute;
    transition: all .2s ease-out;
    width: 100%;
  }

  .header .mobile-icon .hamburguer:before {
    top: 5px;
  }

  .header .mobile-icon .hamburguer:after {
    top: -5px;
  }

  /* menu btn */

  .header .mobile-btn {
    display: none;
  }

  .header .mobile-btn:checked~.nav {
    max-height: 240px;
  }

  .header .mobile-btn:checked~.mobile-icon .hamburguer {
    background: transparent;
  }

  .header .mobile-btn:checked~.mobile-icon .hamburguer:before {
    transform: rotate(-45deg);
  }

  .header .mobile-btn:checked~.mobile-icon .hamburguer:after {
    transform: rotate(45deg);
  }

  .header .mobile-btn:checked~.mobile-icon:not(.steps) .hamburguer:before,
  .header .mobile-btn:checked~.mobile-icon:not(.steps) .hamburguer:after {
    top: 0;
  }

  .container {

    width: 100%;
    float: left;
    margin-top: 100px;

  }

  .content {

    float: left;
    width: 92%;
    margin: 0 4%;

  }


  /* 48em = 768px */

  @media (min-width: 48em) {

    .header li {
      float: left;
    }

    .header li a {

      padding: 15px 30px;
      margin-top: 10px;
      border-radius: 6px;

    }

    .header .nav {
      clear: none;
      float: right;
      max-height: none;
    }

    .header .mobile-icon {
      display: none;
    }

    .header li a {

      transition: .3s;
      border-bottom: 0;

    }

  }
</style>
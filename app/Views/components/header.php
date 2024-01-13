<!-- Cabeçalho (header) -->
<header class="header">

  <div class="content">

    <a href="#" target="_blank" class="logo"><img src="images/logo4.png" title=""></a>

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


<style>
  .header {

    background-color: #512833;
    box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
    float: left;
    height: 90px;
  }

  .header ul {

    margin: 0;
    padding: 0;
    list-style: none;
    overflow: hidden;
    background-color: #512833;

  }

  .header li a {

    display: block;
    padding: 0.7em 0.5em;
    text-decoration: none;
    transition: .3s;
    border-bottom: 1px #f7f7f7 solid;
    color: #fff;
  }

  .header li a:hover,
  .header .btn-mobile:hover {

   /* background: rgba(0, 0, 0, .1);*/
    background-color: #6f404c;
    color: #fff;

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
    padding: 40px 32px;
    position: relative;
    user-select: none;
  }

  .header .mobile-icon .hamburguer {
    background: #fff;
    display: block;
    height: 2px;
    position: relative;
    transition: background .2s ease-out;
    width: 18px;
  }

  .header .mobile-icon .hamburguer:before,
  .header .mobile-icon .hamburguer:after {
    background: #fff;
    content: '';
    display: block;
    height: 100%;
    position: absolute;
    transition: all .2s ease-out;
    width: 100%;
  }

  .header .mobile-icon .hamburguer:before {
    top: 7px;
  }

  .header .mobile-icon .hamburguer:after {
    top: -7px;
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
    .header .logo {
      display: block;
      float: left;
      padding: 10px;
    }

    .header li {
      float: left;
    }

    .header li a {

      padding: 15px 30px;
      margin-top: 15px;
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

    a.logo img {
      width: 60%;
      height: auto;
    }
  }

  @media (max-width: 48em) {
    .header .logo {
      margin-bottom: 10px; /*arrumar*/
    }
    a.logo img {
      width: 40%;
      height: auto;
      padding-top: 15px;
    }
  }
</style>
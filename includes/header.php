<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Alpha imóveis - Imobiliária Web </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="" class="mb-0">ALPHAIMÓVEIS</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="lista.php#imoveis" class="nav-link">Imóveis</a></li>
                <li><a href="index.php#investimentos" class="nav-link">Investimentos</a></li>
                <li><a href="index.php#contato" class="nav-link">Contato</a></li>

                  <li class="nav-item">
                          <a class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                          <form class="dropdown-menu p-2" method="POST" action="valida.php">
                              <div class="form-group" style="width: 300px;">
                                  <label for="exampleDropdownFormEmail2">Email</label>
                                  <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="">
                              </div>
                              <div class="form-group">
                                  <label for="exampleDropdownFormPassword2">Senha</label>
                                  <input type="password" name="senha" class="form-control" id="exampleDropdownFormPassword2" placeholder="">
                              </div>
                              
                              <button type="submit" class="btn btn-primary">Entrar</button>
                          </form>
                              <p class="text-center text-danger">
                                  <?php if(isset($_SESSION['loginErro'])){
                                      echo $_SESSION['loginErro'];
                                      unset($_SESSION['loginErro']);
                                  }?>
                              </p>
                              <p class="text-center text-success">
                                  <?php
                                  if(isset($_SESSION['logindeslogado'])){
                                      echo $_SESSION['logindeslogado'];
                                      unset($_SESSION['logindeslogado']);
                                  }
                                  ?>
                              </p>
                      </div>
              </ul>
            </nav>
          </div>
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>

    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
              <h1>Mais de 2.000 imóveis em Alphaville</h1>
            <p class="mb-5"></p>

          </div>
        </div>
      </div>  

      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
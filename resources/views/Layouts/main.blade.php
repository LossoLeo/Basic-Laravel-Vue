<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/aos.css" rel="stylesheet" />
    <link href="assets/css/default.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body>
    <!-- ------------------------ mobile menu start -->
    <div class="main__menu none__desk">
        <nav>
            <ul>
                <li><a href="#">home</a></li>
                <li>
                    <a href="#" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">produtos</a>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="dropdown__menu">
                            <h3>Produtos</h3>
                            <ul>
                                <li><a href="#">Lorem, ipsum</a></li>
                                <li><a href="#">Lorem, ipsum</a></li>
                                <li><a href="#">Lorem, ipsum</a></li>
                                <li><a href="#">Lorem, ipsum</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">receituário</a></li>
                <li><a href="#">Calculadora de Receitas </a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </nav>
        <div class="close__menu"><i class="far fa-times"></i></div>
    </div>
    <!-- ------------------------ mobile menu end -->

    <!-- =================== HEADER AREA START ===================== -->
    <header id="click_to_top" class="header__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header__top__blk">
                        <div class="logo"><img src="assets/img/logo.svg" alt="" /></div>
                        <div class="header__top__right__blk">
                            <div class="header__search__blk">
                                <form action="#">
                                    <button type="button">
                                        <img src="../img/search.svg" alt="" />
                                    </button>
                                    <input type="text" placeholder="Buscar..." />
                                </form>
                            </div>
                            <div class="header__login__blk">
                                <a href="#"><img src="../img/user.svg" alt="" /> entrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="main__menu none__phone">
                        <nav>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li>
                                    <a href="#">produtos</a>
                                    <div class="mega__menu__wrap">
                                        <div class="mega__menu__inner__wrap">
                                            <div class="dropdown__menu">
                                                <h3>Produtos</h3>
                                                <ul>
                                                    <li><a href="#">Panificação</a></li>
                                                    <li><a href="#">Confeitaria</a></li>
                                                    <li><a href="#">Ingredientes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">receituário</a></li>
                                <li><a href="#">Calculadora de Receitas </a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </nav>
                        <div class="close__menu"><i class="far fa-times"></i></div>
                    </div>
                    <div class="open__menu"><i class="far fa-bars"></i></div>
                </div>
            </div>
        </div>
    </header>
    <div class="overlay"></div>
    <!-- =================== HEADER AREA END ===================== -->

    @yield('content')

    <!-- =================== FOOTER AREA START ===================== -->
    <footer class="footer__area">
        <a href="#click_to_top" class="click_top_top"><i class="fas fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="footer_widget">
                        <div class="site__identity">
                            <a href="#"><img src="assets/img/f_logo_1.svg" alt="" /></a>
                        </div>
                        <div class="foooter__content">
                            <h6>
                                Uma empresa IREKS GmbH e <br />Cooperativa Agrária
                                Agroindustrial
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="footer__widget">
                        <div class="footer__social__blk">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="footer__right__content__blk">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="foooter__content">
                                        <h5>IREKS DO BRASIL S.A.</h5>
                                        <p>
                                            Avenida Paraná, 200 | Vitória | Entre Rios <br />
                                            85139-400 - Guarapuava - PR | BRASIL <br />
                                            Tel.: +55 42 3625 8448 <br />
                                            ireks@ireks.com.br
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="foooter__content">
                                        <h5>Escritório de Vendas</h5>
                                        <p>
                                            Rod. Raposo Tavares, Km 22 Bloco F <br />
                                            Sala 223 | The Square - Granja Viana <br />
                                            06709-015 - Cotia - SP | BRASIL <br />
                                            Tel.: +55 11 3198 2730
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coyright_blk">
                <p>Copyright © 2022 by IREKS GmbH</p>
            </div>
        </div>
    </footer>
    <!-- =================== FOOTER AREA END ===================== -->

    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/popper.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <script src="public/assets/js/aos.js"></script>
    <script src="public/assets/js/main.js"></script>

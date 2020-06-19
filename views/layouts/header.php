<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>ТЕХНОМИР</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/open-iconic-master/font/css/open-iconic.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/easydropdown.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="../../upload/images/logo/tehnomir_head.png" type="image/png">
    </head><!--/head-->

    <body>
        <div class="page-wrapper">
            <header id="header">
                <div class="header-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo pull-left">
                                    <a href="/"><img src="../../upload/images/logo/tehnomir.png" title="Интернет-магазин бытовой техники ТЕХНОМИР" alt="" /></a>
                                    <div class="citySelect">
                                        <select class="select-css">
                                            <option>Москва </option>
                                            <option>Домодедово</option>
                                            <option>Воронеж</option>
                                            <option>Саратов</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <span class="oi" data-glyph="cart"></span> Корзина 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><span class="oi" data-glyph="account-login"></span> Авторизация</a></li>
                                            <li><a href="/user/register/"><span class="oi" data-glyph="key"></span> Регистрация</a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><span class="oi" data-glyph="dial"></span> Личный кабинет</a></li>
                                            <li><a href="/user/logout/"><span class="oi" data-glyph="account-logout"></span> Выход</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="/">Главная страница</a></li>
                                        <li class="dropdown"><a href="#">Магазин <span class="oi" data-glyph="menu"></span></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="/catalog/">Каталог</a></li>
                                                <li><a href="/cart/">Корзина</a></li> 
                                            </ul>
                                        </li>
                                        <li><a href="/about/">О нас</a></li>
                                        <li><a href="/contacts/">Контакты</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-bottom-->
            </header><!--/header-->
      
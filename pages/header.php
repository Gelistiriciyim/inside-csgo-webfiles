<?php  

$username = $_SESSION["username"];
$kbilgi= $vt->prepare("select * from users where username=?");
$kbilgi->execute(array($username));
$bilgi = $kbilgi->fetch();

$genel_bilgi= $vt->prepare("select * from kullanıcı_bilgi where username=?");
$genel_bilgi->execute(array($username));
$gbilgi = $genel_bilgi->fetch();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Rhythm &mdash; One & Multi Page Creative Template</title>
        <meta name="description" content="Rhythm &mdash; One & Multi Page Creative Template">  
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style-responsive.css">
        <link rel="stylesheet" href="/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <link rel="stylesheet" href="/css/splitting.css">
        <link href="/css/toastr.min.css" rel="stylesheet"/>
        
    </head>





    <body class="appear-animate">
        
        <!-- Page Loader -->        
        <div class="page-loader dark">
            <div class="loader">Loading...</div>
        </div>

        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        
        <div class="page bg-dark light-content" id="top">
            

            <nav class="main-nav dark transparent stick-fixed wow-menubar">
                <div class="full-wrapper relative clearfix">
                    
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo">
                            <img src="/images/logo-white.png" alt="Company logo" width="188" height="37">
                        </a>
                    </div>

                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Menu</span>
                    </div>

                    <a href="shop-cart-dark.html" class="mobile-cart"><i class="main-nav-icon-cart"></i> (0)</a>
                    
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            
                            <li>
                                <a href="/" class="mn-has-sub active">AnaSayfa <i></i></a> 
                            </li>
                            <li>
                                <a href="#" class="mn-has-sub active">Fiyat Listesi<i></i></a> 
                            </li>
                            <li>
                                <a href="#" class="mn-has-sub active">Özellikler<i></i></a> 
                            </li>
                            <li>
                                <a href="#about" class="mn-has-sub active">Neden Biz<i></i></a> 
                            </li>
                            <li>
                                <a href="sans-kutusu.php" class="mn-has-sub active">Şans Kutusu<i></i></a> 
                            </li>
                            
                            <li><a>&nbsp;</a></li>

                            <li class="d-sm-none d-md-none d-lg-block">
                                <?php if(isset($username)){?>
                                <a href="/user/profil.php"><i class="fas fa-user"></i> <?= $username ?> </a>
                                <?php }else{ ?>
                                <a href="/user/index.php"><i class="fas fa-sign-in-alt"></i> Kayıt/Giriş</a>
                                 <?php } ?>
                            </li>
                           
                            
                        </ul>
                    </div>
                    
                </div>
            </nav>

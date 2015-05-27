<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <!-- absolute/fixed header  -->
    <header class="header">
        <div class="container clearfix">
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span></a></h1>
            <span class="navbar-toggle" role="button">Menu</span>
            <nav class="main-nav">
                <!--<ul class="clearfix">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#faq">Faq</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>-->

                <?php
                if( is_home() ) {

                    $x = '<ul id="%1$s" class="%2$s">';
                    $x .= '<li><a href="#home">Strona główna</a></li>';
                    $x .= '<li><a href="#pricing">Wycena</a></li>';
                    $x .= '<li><a href="#faq">Faq</a></li>';
                    $x .= '<li><a href="#contact">Kontakt</a></li>';
                    $x .= '%3$s</ul>';

                } else {

                    $x = '<ul id="%1$s" class="%2$s">';
                    $x .= '<li><a href="'.esc_url( home_url( '/' ) ).'">Strona główna</a></li>';
                    $x .= '<li><a href="'.esc_url( home_url( '/' ) ).'#pricing">Wycena</a></li>';
                    $x .= '<li><a href="'.esc_url( home_url( '/' ) ).'#faq">Faq</a></li>';
                    $x .= '<li><a href="#contact">Kontakt</a></li>';
                    $x .= '%3$s</ul>';

                }

                    wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'items_wrap' => $x
                    ));
                    //wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
                ?>
            </nav>
        </div>
    </header>

    <!-- banner -->
    <div class="banner" id="home">
        <div class="container">
           <div class="banner-caption">
                <p>Vivamus<br> vestibulum nulla<br> nec ante</p>
                <p>Integer vitae<br> libero ac</p>
               <a href="#" class="btn-more">Czytaj wi<span class="plw">ę</span>cej</a>
            </div>
            <div class="img-box">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/phone.png" alt="" id="img-phone">
                <img src="<?php bloginfo( 'template_url' ); ?>/img/browser.png" alt="" class="" id="img-browser">
            </div>
        </div>
    </div>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
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
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </div>
    </header>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- 	<base href="/"> -->

    <title>Kendall</title>
    <meta name="description" content="">

    <meta name="format-detection" content="telephone=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="icon" href="<?php bloginfo('template_directory')?>/img/favicon/title.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory')?>/img/favicon/title.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body>
<header>

    <div class="mobile_nav hidden">
        <nav>
            <?php
            wp_nav_menu( array(
                'theme_location'  => '',
                'menu'            => '',
                'container'       => 'ul',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) );
            ?>
            <ul>
                <li><img src="<?php bloginfo('template_directory')?>/img/mobile_cart.png" alt="Корзина"></li>
            </ul>
        </nav>
    </div>
    <div class="top_line">
        <div class="container">
            <div class="icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
            <div class="number">
                <p>+38 050 111 11 11</p>
                <p>+38 050 111 11 11</p>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="logo"><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>"><img src="<?php bloginfo('template_directory')?>/img/Logo.png" alt="<?php bloginfo( 'name' ) ?>" /></a></div>

            <nav>
                <?php
                wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => '',
                    'container'       => 'ul',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) );
                ?>
                <ul><li><a href="/cart" class="card"><img src="<?php bloginfo('template_directory')?>/img/Shoping_cart.png" alt="Корзина"></a></li></ul>
            </nav>
        </div>
        <button class="hamburger hamburger--stand" type="button">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
        </button>
    </div>



</header>

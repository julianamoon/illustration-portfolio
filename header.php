<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-container">

        <div class="blog-images">
            <div class="arrow"></div>
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        }
        ?>

    <ul class="menu-icons">
        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
    </ul>
    </div>
    
    <section class="main-header">
        <header class="blog-info">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
            
            <button class="menu-burger" onclick="openMenu()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </header>
        
        <?php wp_nav_menu('Primary Menu', 'menu'); ?>
    </section>
    
</div>
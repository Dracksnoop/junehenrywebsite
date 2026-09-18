<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='16' fill='%23064F67'/%3E%3Ctext x='50%25' y='60%25' text-anchor='middle' font-family='Georgia,serif' font-size='28' fill='%23074240'%3EJH%3C/text%3E%3C/svg%3E">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main">Skip to content</a>
<div class="scroll-progress" aria-hidden="true"></div>

<div class="top-bar">
    <span class="bar-star" aria-hidden="true">&#10022;</span>
    <span><?php echo wp_kses_post( jhh_bar_text() ); ?></span>
    <span class="bar-star bar-place" aria-hidden="true">&#10022;</span>
    <span class="bar-place"><?php echo wp_kses_post( jhh_bar_place() ); ?></span>
    <span class="bar-star" aria-hidden="true">&#10022;</span>
</div>

<header class="site-header" id="siteHeader">
    <div class="header-inner">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'nav-pills',
            'container_aria_label' => 'Primary',
            'depth'          => 1,
            'fallback_cb'    => false,
        ) );
        ?>

        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> &#8212; Home">
            <span class="brand-logo" aria-hidden="true">
                <img class="logo-silver" src="<?php echo esc_url( get_template_directory_uri() . '/images/jh-monogram.png' ); ?>" alt="" width="375" height="256" decoding="async">
                <img class="logo-navy" src="<?php echo esc_url( get_template_directory_uri() . '/images/jh-monogram-navy.png' ); ?>" alt="" width="375" height="256" decoding="async">
            </span>
        </a>

        <div class="header-actions">
            <a class="header-phone" href="tel:+17185410372">718-541-0372</a>
            <a class="btn btn-light btn-sm header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Inquire</a>
            <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu"><span></span><span></span></button>
        </div>
    </div>
</header>

<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'mobile',
        'container'      => 'nav',
        'container_class'=> 'mobile-menu-links',
        'container_aria_label' => 'Mobile',
        'depth'          => 1,
        'fallback_cb'    => false,
    ) );
    ?>
    <div class="mobile-menu-foot">
        <a href="tel:+17185410372">718-541-0372</a>
        <a href="mailto:info@junehenryhomes.com">info@junehenryhomes.com</a>
        <span>St. Ann, Jamaica</span>
    </div>
</div>

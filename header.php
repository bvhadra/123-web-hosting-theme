<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Sets the correct character encoding. -->
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Makes the website responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required WordPress hook for styles, scripts and plugins. -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
// Required WordPress hook after the opening body tag.
wp_body_open();
?>

<header class="site-header">
    <div class="container header-inner">

        <!-- Website logo / brand name. -->
        <div class="site-branding">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <?php esc_html_e('123 Web Hosting', '123-web-hosting'); ?>
            </a>
        </div>

        <!-- Main menu from WordPress admin. -->
        <nav class="main-navigation" aria-label="<?php esc_attr_e('Main Navigation', '123-web-hosting'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'fallback_cb'    => false,
            ));
            ?>
        </nav>

        <!-- Header call-to-action button. -->
        <a class="header-cta" href="<?php echo esc_url(home_url('/#plans')); ?>">
            <?php esc_html_e('View Plans', '123-web-hosting'); ?>
        </a>

    </div>
</header>
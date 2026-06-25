<?php
/**
 * 404 error page.
 */

get_header();
?>

<main class="site-main container">

    <article class="content-card error-404">

        <h1><?php esc_html_e('Page not found', '123-web-hosting'); ?></h1>

        <p>
            <?php esc_html_e('Sorry, the page you are looking for could not be found.', '123-web-hosting'); ?>
        </p>

        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">
            <?php esc_html_e('Return to homepage', '123-web-hosting'); ?>
        </a>

    </article>

</main>

<?php get_footer(); ?>
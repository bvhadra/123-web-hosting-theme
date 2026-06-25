<?php
/**
 * Main fallback template.
 */

get_header();
?>

<main class="site-main container">

    <?php if (have_posts()) : ?>

        <!-- WordPress Loop. -->
        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class('content-card'); ?>>
                <h1><?php the_title(); ?></h1>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <article class="content-card">
            <h1><?php esc_html_e('No content found', '123-web-hosting'); ?></h1>
            <p><?php esc_html_e('Please add some content in WordPress.', '123-web-hosting'); ?></p>
        </article>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
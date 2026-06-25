<?php
/**
 * Single blog post template.
 */

get_header();
?>

<main class="site-main container single-template">

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class('content-card'); ?>>

            <header class="page-header">
                <h1><?php the_title(); ?></h1>

                <p class="post-meta">
                    <?php esc_html_e('Published on', '123-web-hosting'); ?>
                    <?php echo esc_html(get_the_date()); ?>
                </p>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
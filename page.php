<?php
/**
 * Standard page template.
 */

get_header();
?>

<main class="site-main container page-template">

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class('content-card'); ?>>

            <header class="page-header">
                <h1><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
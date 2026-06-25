<?php
/**
 * Archive template.
 */

get_header();
?>

<main class="site-main container archive-template">

    <header class="page-header">
        <h1><?php the_archive_title(); ?></h1>

        <div class="archive-description">
            <?php the_archive_description(); ?>
        </div>
    </header>

    <?php if (have_posts()) : ?>

        <div class="post-grid">

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class('content-card'); ?>>

                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p class="post-meta">
                        <?php echo esc_html(get_the_date()); ?>
                    </p>

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>

                    <a class="read-more" href="<?php the_permalink(); ?>">
                        <?php esc_html_e('Read More', '123-web-hosting'); ?>
                    </a>

                </article>

            <?php endwhile; ?>

        </div>

    <?php else : ?>

        <article class="content-card">
            <h2><?php esc_html_e('No posts found', '123-web-hosting'); ?></h2>
            <p><?php esc_html_e('There are no posts to display yet.', '123-web-hosting'); ?></p>
        </article>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
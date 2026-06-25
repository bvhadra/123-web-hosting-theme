<?php
/**
 * Homepage template.
 */

get_header();
?>

<main>

    <!-- Hero section. -->
    <section class="hero">
        <div class="container hero-grid">

            <div class="hero-content">
                <span class="eyebrow"><?php esc_html_e('UK-friendly WordPress Hosting', '123-web-hosting'); ?></span>

                <h1><?php esc_html_e('Reliable hosting for small businesses that want personal support.', '123-web-hosting'); ?></h1>

                <p>
                    <?php esc_html_e('123 Web Hosting provides simple, affordable and WordPress-ready hosting for startups, small businesses and growing websites.', '123-web-hosting'); ?>
                </p>

                <div class="hero-actions">
                    <a href="#plans" class="btn btn-primary">
                        <?php esc_html_e('View Hosting Plans', '123-web-hosting'); ?>
                    </a>

                    <a href="#migration" class="btn btn-secondary">
                        <?php esc_html_e('Free Hosting Review', '123-web-hosting'); ?>
                    </a>
                </div>
            </div>

            <div class="hero-card">
                <h2><?php esc_html_e('Hosting made simple', '123-web-hosting'); ?></h2>

                <ul>
                    <li><?php esc_html_e('SSL included', '123-web-hosting'); ?></li>
                    <li><?php esc_html_e('WordPress ready', '123-web-hosting'); ?></li>
                    <li><?php esc_html_e('Domain support', '123-web-hosting'); ?></li>
                    <li><?php esc_html_e('Migration guidance', '123-web-hosting'); ?></li>
                </ul>
            </div>

        </div>
    </section>

    <!-- Features section. -->
    <section class="features section">
        <div class="container">

            <div class="section-heading">
                <span class="eyebrow"><?php esc_html_e('Why choose us?', '123-web-hosting'); ?></span>
                <h2><?php esc_html_e('Hosting with real human support', '123-web-hosting'); ?></h2>
                <p><?php esc_html_e('You get reliable hosting backed by practical website expertise.', '123-web-hosting'); ?></p>
            </div>

            <div class="feature-grid">

                <div class="feature-card">
                    <h3><?php esc_html_e('WordPress Friendly', '123-web-hosting'); ?></h3>
                    <p><?php esc_html_e('Perfect for business websites, blogs, brochure sites and landing pages.', '123-web-hosting'); ?></p>
                </div>

                <div class="feature-card">
                    <h3><?php esc_html_e('Simple Pricing', '123-web-hosting'); ?></h3>
                    <p><?php esc_html_e('Clear hosting plans without confusing technical jargon.', '123-web-hosting'); ?></p>
                </div>

                <div class="feature-card">
                    <h3><?php esc_html_e('Migration Help', '123-web-hosting'); ?></h3>
                    <p><?php esc_html_e('Support moving your existing website to better hosting.', '123-web-hosting'); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- Pricing section. -->
    <section id="plans" class="plans section">
        <div class="container">

            <div class="section-heading">
                <span class="eyebrow"><?php esc_html_e('Hosting Plans', '123-web-hosting'); ?></span>
                <h2><?php esc_html_e('Start simple. Upgrade when you grow.', '123-web-hosting'); ?></h2>
            </div>

            <div class="pricing-grid">

                <div class="pricing-card">
                    <h3><?php esc_html_e('Starter', '123-web-hosting'); ?></h3>
                    <p class="price">£5.99<span>/month</span></p>
                    <ul>
                        <li><?php esc_html_e('1 website', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('SSL included', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('Email support', '123-web-hosting'); ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary"><?php esc_html_e('Choose Starter', '123-web-hosting'); ?></a>
                </div>

                <div class="pricing-card featured">
                    <h3><?php esc_html_e('Business', '123-web-hosting'); ?></h3>
                    <p class="price">£9.99<span>/month</span></p>
                    <ul>
                        <li><?php esc_html_e('Business website hosting', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('WordPress ready', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('Migration guidance', '123-web-hosting'); ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary"><?php esc_html_e('Choose Business', '123-web-hosting'); ?></a>
                </div>

                <div class="pricing-card">
                    <h3><?php esc_html_e('Pro', '123-web-hosting'); ?></h3>
                    <p class="price">£14.99<span>/month</span></p>
                    <ul>
                        <li><?php esc_html_e('Growing websites', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('Priority support', '123-web-hosting'); ?></li>
                        <li><?php esc_html_e('Performance focused', '123-web-hosting'); ?></li>
                    </ul>
                    <a href="#" class="btn btn-primary"><?php esc_html_e('Choose Pro', '123-web-hosting'); ?></a>
                </div>

            </div>
        </div>
    </section>

    <!-- Final CTA section. -->
    <section id="migration" class="cta-section">
        <div class="container cta-box">
            <h2><?php esc_html_e('Need help moving your website?', '123-web-hosting'); ?></h2>
            <p><?php esc_html_e('Request a free hosting review and find out whether your current setup is holding your website back.', '123-web-hosting'); ?></p>

            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-light">
                <?php esc_html_e('Request Free Review', '123-web-hosting'); ?>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
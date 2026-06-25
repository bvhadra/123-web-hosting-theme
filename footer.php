<footer class="site-footer">

    <!-- Main footer area. -->
    <div class="container footer-grid">

        <div>
            <h3><?php esc_html_e('123 Web Hosting', '123-web-hosting'); ?></h3>
            <p><?php esc_html_e('Simple, reliable hosting for small businesses, startups and WordPress websites.', '123-web-hosting'); ?></p>
        </div>

        <div>
            <h4><?php esc_html_e('Services', '123-web-hosting'); ?></h4>
            <ul>
                <li><?php esc_html_e('Web Hosting', '123-web-hosting'); ?></li>
                <li><?php esc_html_e('WordPress Hosting', '123-web-hosting'); ?></li>
                <li><?php esc_html_e('Domain Names', '123-web-hosting'); ?></li>
                <li><?php esc_html_e('Website Migration', '123-web-hosting'); ?></li>
            </ul>
        </div>

        <div>
            <h4><?php esc_html_e('Contact', '123-web-hosting'); ?></h4>
            <p><?php esc_html_e('Email: info@webpulse-marketing.com', '123-web-hosting'); ?></p>
            <p><?php esc_html_e('Backed by Web Pulse Marketing Ltd', '123-web-hosting'); ?></p>
        </div>

    </div>

    <!-- Copyright line. -->
    <div class="footer-bottom">
        <p>
            &copy; <?php echo esc_html(date('Y')); ?>
            <?php esc_html_e('123 Web Hosting. All rights reserved.', '123-web-hosting'); ?>
        </p>
    </div>

</footer>

<!-- Required WordPress hook for footer scripts and plugins. -->
<?php wp_footer(); ?>

</body>
</html>
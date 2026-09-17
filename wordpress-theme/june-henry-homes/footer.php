<footer class="site-footer">
    <div class="footer-cta">
        <span class="eyebrow center light">Plan your extended stay</span>
        <h2 class="reveal" data-split>Where every day feels <span class="script">more</span> like home.</h2>
        <p class="reveal" style="--d:.15s">Stays of one month or longer &#183; 6&#8211;8 guests per home &#183; St. Ann, Jamaica</p>
        <div class="btn-row center reveal" style="--d:.25s">
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan Your Extended Stay</a>
            <a class="btn btn-ghost-light" href="tel:+17185410372">Call 718-541-0372</a>
        </div>
    </div>

    <div class="footer-main">
        <div class="footer-brand">
            <a class="brand brand-footer" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> &#8212; Home">
                <span class="brand-logo" aria-hidden="true">
                    <img class="logo-silver" src="<?php echo esc_url( get_template_directory_uri() . '/images/jh-monogram.png' ); ?>" alt="" width="375" height="256" decoding="async">
                </span>
            </a>
            <p>Luxury extended living in Jamaica for stays of one month or longer.</p>
        </div>

        <div class="footer-col footer-explore">
            <h4>Explore</h4>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => false,
                'depth'          => 1,
                'fallback_cb'    => false,
            ) );
            ?>
        </div>

        <div class="footer-col">
            <h4>Connect</h4>
            <ul>
                <li><a href="tel:+17185410372">718-541-0372</a></li>
                <li><a href="mailto:info@junehenryhomes.com">info@junehenryhomes.com</a></li>
            </ul>
            <div class="socials">
                <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.4" cy="6.6" r="1" fill="currentColor" stroke="none"/></svg></a>
                <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true"><path d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H7.9v3h2.6V21h3z"/></svg></a>
                <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true"><path d="M6.9 8.6H3.8V20h3.1V8.6zM5.4 3.6a1.8 1.8 0 1 0 0 3.6 1.8 1.8 0 0 0 0-3.6zM20.2 13.4c0-3-1.6-4.9-4.2-4.9-1.5 0-2.5.8-2.9 1.6V8.6h-3V20h3.1v-5.9c0-1.5.5-2.8 2.1-2.8 1.5 0 1.8 1.4 1.8 2.9V20h3.1v-6.6z"/></svg></a>
            </div>
        </div>
    </div>

    <div class="footer-wordmark" aria-hidden="true">June Henry</div>
    <div class="footer-bottom">
        <strong><?php echo esc_html( get_bloginfo( 'name' ) ); ?> &#183; St. Ann, Jamaica</strong>
        <span>&copy; <span data-year></span> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All rights reserved.</span>
    </div>
</footer>

<a class="to-top" href="#main" aria-label="Back to top"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M12 19V5M6 11l6-6 6 6"/></svg></a>

<?php wp_footer(); ?>
</body>
</html>

<?php get_header(); ?>

<main id="main">
  <section class="section" style="padding-top:clamp(140px,18vh,220px)">
    <div class="container-narrow center">
      <span class="eyebrow center">Page not found</span>
      <h1 class="h2" style="margin:20px 0 18px">That page has <span class="script">moved on</span>.</h1>
      <p class="lead">The page you were looking for isn&#8217;t here. Try the homepage, or get in touch and we&#8217;ll point you the right way.</p>
      <div class="btn-row center" style="margin-top:32px">
        <a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
        <a class="btn btn-outline" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer();

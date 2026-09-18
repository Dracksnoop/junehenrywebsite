<?php get_header(); ?>

<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <section class="page-hero" style="min-height:clamp(420px,60vh,600px)">
      <div class="hero-media" data-parallax="0.12">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'fetchpriority' => 'high' ) );
        } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="" fetchpriority="high">
        <?php } ?>
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">&#10022;</span><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">JHH Journal</a></nav>
        <h1 class="hero-anim" style="--d:.15s"><?php the_title(); ?></h1>
        <p class="article-meta hero-anim" style="--d:.35s"><?php the_category( ', ' ); ?> &#183; <?php echo esc_html( get_the_date() ); ?></p>
      </div>
    </section>

    <section class="section">
      <div class="container-narrow article">
        <?php the_content(); ?>
        <div class="article-foot reveal">
          <span class="article-tags-label">Tags</span>
          <?php the_tags( '<ul class="chips"><li>', '</li><li>', '</li></ul>' ); ?>
          <a class="link-arrow" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Back to the JHH Journal <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>

<?php get_footer();

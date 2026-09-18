<?php get_header(); ?>

<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <section class="page-hero" style="min-height:clamp(380px,50vh,520px)">
      <div class="hero-media" data-parallax="0.12">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full' );
        } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="">
        <?php } ?>
      </div>
      <div class="page-hero-content">
        <h1 class="hero-anim"><?php the_title(); ?></h1>
      </div>
    </section>

    <section class="section">
      <div class="container-narrow article"><?php the_content(); ?></div>
    </section>
  <?php endwhile; ?>
</main>

<?php get_footer();

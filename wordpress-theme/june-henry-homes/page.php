<?php get_header(); ?>

<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <section class="page-hero" style="min-height:clamp(380px,50vh,520px)">
      <div class="hero-media" data-parallax="0.12">
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full' );
        } else { ?>
            <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?auto=format&fit=crop&w=2200&q=80" alt="">
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

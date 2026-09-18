<?php get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/fruit-event.jpg' ); ?>" alt="" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <h1 class="hero-anim"><?php echo esc_html( get_the_archive_title() ? wp_strip_all_tags( get_the_archive_title() ) : get_bloginfo( 'name' ) ); ?></h1>
      </div>
    </section>

  <section class="section">
    <div class="container journal-grid">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post-card reveal">
          <?php if ( has_post_thumbnail() ) : ?><div class="media"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
          <div class="post-body">
            <div class="post-meta"><span><?php the_category( ', ' ); ?></span><span><?php echo esc_html( get_the_date() ); ?></span></div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( get_the_excerpt() ); ?></p>
            <a class="link-arrow" href="<?php the_permalink(); ?>">Read the story</a>
          </div>
        </article>
      <?php endwhile; else : ?>
        <p>Nothing published yet.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();

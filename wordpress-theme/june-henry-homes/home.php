<?php get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=2200&q=80" alt="Breakfast table with fresh fruit, waffles and juice" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">&#10022;</span><span aria-current="page">JHH Journal</span></nav>
        <h1 class="hero-anim" style="--d:.15s">JHH <span class="script">Journal</span></h1>
        <p class="lead hero-anim" style="--d:.35s">Insights on seasonal living, wellness, hospitality, food, travel, and living well from the world of June Henry Homes.</p>
      </div>
    </section>

  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : $first = true; ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php if ( $first ) : $first = false; ?>
            <article class="journal-featured reveal">
              <div class="media"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?></div>
              <div class="post-body">
                <div class="post-meta"><span><?php the_category( ', ' ); ?></span><span><?php echo esc_html( get_the_date() ); ?></span></div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                <a class="link-arrow" href="<?php the_permalink(); ?>">Read the story <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
              </div>
            </article>
            <div class="journal-grid" style="margin-top:26px">
          <?php else : ?>
            <article class="post-card reveal">
              <?php if ( has_post_thumbnail() ) : ?><div class="media"><?php the_post_thumbnail( 'large' ); ?></div><?php endif; ?>
              <div class="post-body">
                <div class="post-meta"><span><?php the_category( ', ' ); ?></span><span><?php echo esc_html( get_the_date() ); ?></span></div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                <a class="link-arrow" href="<?php the_permalink(); ?>">Read the story</a>
              </div>
            </article>
          <?php endif; ?>
        <?php endwhile; ?>
            </div>
      <?php else : ?>
        <p>No stories yet.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer();

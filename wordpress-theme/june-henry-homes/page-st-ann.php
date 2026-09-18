<?php
/**
 * Template Name: JHH St. Ann
 */
get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="Beachfront gazebo overlooking the sea in St. Ann" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">✦</span><span aria-current="page">St. Ann</span></nav>
        <h1 class="hero-anim" style="--d:.15s">St. Ann, <span class="script">Jamaica</span></h1>
        <p class="lead hero-anim" style="--d:.35s">The Garden Parish. Come for the warmth. Stay for the way of life.</p>
      </div>
    </section>

    <!-- Why Jamaica -->
    <section class="section">
      <div class="container split">
        <div class="split-body">
          <span class="eyebrow reveal">Why Jamaica?</span>
          <h2 class="h2" data-split>Come Winter <span class="script">Somewhere</span> Warmer.</h2>
          <p class="lead reveal">Jamaica offers more than sunshine. It offers a slower pace, vibrant culture, fresh food, beautiful surroundings, and the warmth of its people.</p>
          <p class="reveal">In <strong>St. Ann</strong>, Jamaica’s Garden Parish, winter becomes a season of <strong>sunshine, connection, discovery, and ease</strong>.</p>
          <p class="pull reveal" style="color:var(--navy)">This isn’t escaping life.<br>It’s choosing to live it differently.</p>
        </div>
        <div class="split-media">
          <div class="media reveal-mask"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="Sunset over the beach in St. Ann, Jamaica" loading="lazy"></div>
        </div>
      </div>
    </section>

    <!-- A day in St. Ann -->
    <section class="section" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">Imagine your days</span>
          <h2 class="h2" data-split>A winter of <span class="script">sunshine</span> and ease.</h2>
        </div>
        <div class="timeline">
          <div class="timeline-item reveal">
            <span class="timeline-time">Morning</span>
            <div><h3>Breakfast outdoors</h3><p>Begin the day with sunshine, fresh air, and a chef-prepared breakfast.</p></div>
          </div>
          <div class="timeline-item reveal">
            <span class="timeline-time">Afternoon</span>
            <div><h3>Afternoons by the water</h3><p>Swim, read, stroll, or simply rest while the Caribbean sets the pace.</p></div>
          </div>
          <div class="timeline-item reveal">
            <span class="timeline-time">Evening</span>
            <div><h3>Fresh Caribbean meals &amp; meaningful conversations</h3><p>Gather around the table with people who quickly start to feel like friends.</p></div>
          </div>
          <div class="timeline-item reveal">
            <span class="timeline-time">Sunset</span>
            <div><h3>Evenings watching the sunset</h3><p>End each day the way winter should feel: warm, calm, and unhurried.</p></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Garden Parish -->
    <section class="section" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">The Garden Parish</span>
          <h2 class="h2" data-split>St. Ann, Jamaica — The Garden <span class="script">Parish</span></h2>
          <p class="lead reveal">Known as Jamaica’s <strong>“Garden Parish,”</strong> St. Ann brings together lush landscapes, beautiful beaches, waterfalls, rich history, and authentic Jamaican culture.</p>
        </div>
        <div class="place-cards">
          <article class="place-card reveal">
            <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/dunns-river-falls.jpg' ); ?>" alt="Dunn’s River Falls in St. Ann, Jamaica" loading="lazy"></div>
            <div class="place-card-body">
              <span class="count">Waterfalls</span>
              <h3>Dunn’s River Falls</h3>
              <p>Jamaica’s celebrated waterfall, cascading through lush greenery toward the Caribbean Sea.</p>
            </div>
          </article>
          <article class="place-card reveal" style="--d:.1s">
            <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="Beachfront gazebo overlooking the sea in St. Ann" loading="lazy"></div>
            <div class="place-card-body">
              <span class="count">Coast &amp; town</span>
              <h3>Ocho Rios</h3>
              <p>A lively coastal town for beaches, dining, shopping, and excursions along the north coast.</p>
            </div>
          </article>
          <article class="place-card reveal" style="--d:.2s">
            <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/river-swimming.jpg' ); ?>" alt="Guests swimming in a river pool in Jamaica" loading="lazy"></div>
            <div class="place-card-body">
              <span class="count">History &amp; music</span>
              <h3>Nine Mile</h3>
              <p>The birthplace of Bob Marley, set in the green hills of St. Ann.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Flavours, music, hospitality -->
    <section class="section" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">The way of life</span>
          <h2 class="h2" data-split>Slowing down feels <span class="script">natural</span> here.</h2>
          <p class="lead reveal">Add fresh Caribbean flavors, vibrant music, and the warmth of Jamaican hospitality—and you have a place that makes <strong>slowing down feel natural.</strong></p>
        </div>
        <div class="card-grid">
          <article class="info-card reveal" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M5 19c0-8 5-14 15-14 0 10-6 15-14 15"/><path d="M5 19l7-7"/></svg></span>
            <h3>Fresh Caribbean flavors</h3>
            <p>Chef-prepared meals celebrate fresh ingredients and Jamaican flavours.</p>
          </article>
          <article class="info-card is-navy reveal" style="--d:.1s" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M9 18V6l11-2v12"/><circle cx="6.5" cy="18" r="2.5"/><circle cx="17.5" cy="16" r="2.5"/></svg></span>
            <h3>Vibrant music</h3>
            <p>The rhythms of Jamaica are woven into everyday life across the parish.</p>
          </article>
          <article class="info-card reveal" style="--d:.2s" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/></svg></span>
            <h3>Jamaican hospitality</h3>
            <p>The warmth of the people is what turns a winter away into a place that feels like home.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="quote-band has-image" aria-label="Come for the warmth">
      <div class="jamaica-bg" data-parallax="0.1"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="" loading="lazy"></div>
      <span class="eyebrow center light reveal">St. Ann, Jamaica</span>
      <blockquote class="reveal">Come for the warmth. Stay for the way of <span class="script">life</span>.</blockquote>
      <div class="btn-row center reveal">
        <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/the-homes/' ) ); ?>">Explore the Homes</a>
        <a class="btn btn-ghost-light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan Your Extended Stay</a>
      </div>
    </section>
    <div class="section-tight" aria-hidden="true"></div>
  </main>

<?php get_footer();

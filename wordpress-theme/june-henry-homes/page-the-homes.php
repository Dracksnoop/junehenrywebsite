<?php
/**
 * Template Name: JHH The Homes
 */
get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-entrance.jpg' ); ?>" alt="Entrance to a June Henry Homes residence" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">✦</span><span aria-current="page">The Homes</span></nav>
        <h1 class="hero-anim" style="--d:.15s">The June Henry <span class="script">Homes</span></h1>
        <p class="lead hero-anim" style="--d:.35s">Private residences in St. Ann, Jamaica, with chef-prepared meals, personalized concierge services, wellness, and exceptional hospitality.</p>
      </div>
    </section>

    <!-- Collection overview -->
    <section class="section">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">The Homes / Collections</span>
          <h2 class="h2" data-split>Choose Your Favourite June Henry <span class="script">Home</span></h2>
          <p class="lead reveal">Three distinct collections. One warm, fully staffed way of living.</p>
        </div>
        <div class="collection-nav">
          <a class="collection-link reveal" href="#beachfront">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="" loading="lazy">
            <span class="count">Collection 01</span>
            <h3>The Beachfront Collection</h3>
            <span class="link-arrow">Wake up to the sea <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></span>
          </a>
          <a class="collection-link reveal" style="--d:.1s" href="#veranda">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-veranda.jpg' ); ?>" alt="" loading="lazy">
            <span class="count">Collection 02</span>
            <h3>The Veranda Collection</h3>
            <span class="link-arrow">Garden breezes <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></span>
          </a>
          <a class="collection-link reveal" style="--d:.2s" href="#founder">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/interior-living.jpg' ); ?>" alt="" loading="lazy">
            <span class="count">Collection 03</span>
            <h3>The Founder Collection</h3>
            <span class="link-arrow">Most personalized <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Every home includes -->
    <section class="section-tight" style="padding-top:0" aria-labelledby="includes-title">
      <div class="container">
        <h2 id="includes-title" class="visually-hidden">Included in every home</h2>
        <div class="card-grid four">
          <article class="info-card reveal" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M3 18h18M5 18a7 7 0 0 1 14 0M12 8V6M10.5 6h3"/></svg></span>
            <h3>Chef-prepared meals</h3>
            <p>Breakfast, lunch, dinner, and snacks, made fresh every day.</p>
          </article>
          <article class="info-card reveal" style="--d:.08s" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M6 16v-5a6 6 0 0 1 12 0v5l2 2H4z"/><path d="M10 20a2 2 0 0 0 4 0"/></svg></span>
            <h3>Dedicated staff</h3>
            <p>Chef, butler, housekeeper, laundress, and gardener.</p>
          </article>
          <article class="info-card reveal" style="--d:.16s" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="8" cy="15" r="4"/><path d="M11 12l9-9M16 7l3 3"/></svg></span>
            <h3>Personal concierge</h3>
            <p>Help with activities, appointments, excursions, and transportation.</p>
          </article>
          <article class="info-card is-navy reveal" style="--d:.24s" data-glow>
            <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="9" cy="8" r="3"/><path d="M3 20a6 6 0 0 1 12 0"/><circle cx="17" cy="9" r="2.4"/><path d="M15.5 14.2A5 5 0 0 1 21 19"/></svg></span>
            <h3>6–8 guests only</h3>
            <p>An intimate home where people know you.</p>
          </article>
        </div>
      </div>
    </section>

    <div class="container">
      <!-- Beachfront -->
      <section class="collection" id="beachfront" aria-labelledby="beachfront-title">
        <div class="gallery">
          <div class="media reveal-mask"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="Beachfront gazebo overlooking the sea in St. Ann" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.15s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="Sunset over the beach in St. Ann, Jamaica" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.3s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="Sunset over the beach in St. Ann, Jamaica" loading="lazy"></div>
        </div>
        <div class="collection-body">
          <div>
            <span class="eyebrow reveal">Collection 01</span>
            <h2 id="beachfront-title" class="h2" data-split>The Beachfront Collection</h2>
            <p class="script-sub reveal">Wake up to the sea.</p>
            <p class="lead reveal">For those who want the ocean to be part of everyday life.</p>
            <p class="reveal">Wake to the sound of the water, enjoy private beach access, beautiful views, curated excursions, exceptional dining, and personalized concierge service.</p>
            <ul class="chips reveal">
              <li>Private beach access</li><li>Beautiful views</li><li>Curated excursions</li><li>Exceptional dining</li><li>Personalized concierge</li>
            </ul>
          </div>
          <aside class="ideal-card reveal reveal-right">
            <span class="eyebrow light">Ideal for</span>
            <h3>A relaxed coastal lifestyle</h3>
            <p>Guests who want a relaxed coastal lifestyle with the ocean at their doorstep.</p>
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>?collection=beachfront">Inquire About Beachfront</a>
          </aside>
        </div>
      </section>

      <!-- Veranda -->
      <section class="collection" id="veranda" aria-labelledby="veranda-title">
        <div class="gallery">
          <div class="media reveal-mask"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-veranda.jpg' ); ?>" alt="A June Henry Homes residence with its veranda and lawn" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.15s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/river-swimming.jpg' ); ?>" alt="Guests swimming in a river pool in Jamaica" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.3s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/chef-dining.jpg' ); ?>" alt="The chef serving guests at the table" loading="lazy"></div>
        </div>
        <div class="collection-body">
          <div>
            <span class="eyebrow reveal">Collection 02</span>
            <h2 id="veranda-title" class="h2" data-split>The Veranda Collection</h2>
            <p class="script-sub reveal">Slow mornings. Garden breezes. Beautiful days.</p>
            <p class="lead reveal">Settle into lush surroundings and a more intimate rhythm of island living.</p>
            <p class="reveal">Enjoy elegant spaces, sea views, shared experiences, thoughtful hospitality, and the freedom to spend your days exactly as you wish.</p>
            <ul class="chips reveal">
              <li>Lush surroundings</li><li>Elegant spaces</li><li>Sea views</li><li>Shared experiences</li><li>Thoughtful hospitality</li>
            </ul>
          </div>
          <aside class="ideal-card reveal reveal-right">
            <span class="eyebrow light">Ideal for</span>
            <h3>Peaceful, connected living</h3>
            <p>Guests looking for peaceful, connected living surrounded by nature.</p>
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>?collection=veranda">Inquire About Veranda</a>
          </aside>
        </div>
      </section>

      <!-- Founder -->
      <section class="collection" id="founder" aria-labelledby="founder-title">
        <div class="gallery">
          <div class="media reveal-mask"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/interior-living.jpg' ); ?>" alt="Open living room inside a June Henry Homes residence" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.15s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/bedroom-seaview.jpg' ); ?>" alt="Bedroom with a sea view at June Henry Homes" loading="lazy"></div>
          <div class="media reveal-mask" style="--d:.3s"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/interior-living.jpg' ); ?>" alt="Open living room inside a June Henry Homes residence" loading="lazy"></div>
        </div>
        <div class="collection-body">
          <div>
            <span class="eyebrow burgundy reveal">Collection 03</span>
            <h2 id="founder-title" class="h2" data-split>The Founder Collection</h2>
            <p class="script-sub reveal">Our most personal expression of June Henry Homes.</p>
            <p class="lead reveal">For guests who value a higher level of privacy, personalization, and attentive service.</p>
            <p class="reveal">Private suites, personal butler service, wellness coordination, curated experiences, and concierge support come together to create an exceptionally tailored stay.</p>
            <ul class="chips reveal">
              <li>Private suites</li><li>Personal butler service</li><li>Wellness coordination</li><li>Curated experiences</li><li>Concierge support</li>
            </ul>
          </div>
          <aside class="ideal-card is-burgundy reveal reveal-right">
            <span class="eyebrow light">Ideal for</span>
            <h3>Our most personalized experience</h3>
            <p>Guests seeking our most personalized experience.</p>
            <a class="btn btn-light" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>?collection=founder">Inquire About Founder</a>
          </aside>
        </div>
      </section>
    </div>

    <section class="quote-band" aria-label="Help choosing a home">
      <span class="eyebrow center light reveal">Not sure which home is right for you?</span>
      <blockquote class="reveal">Tell us how you like to spend your days, and we’ll help you find your <span class="script">perfect</span> home.</blockquote>
      <div class="btn-row center reveal">
        <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan Your Extended Stay</a>
        <a class="btn btn-ghost-light" href="tel:+17185410372">Call 718-541-0372</a>
      </div>
    </section>
    <div class="section-tight" aria-hidden="true"></div>
  </main>

<?php get_footer();

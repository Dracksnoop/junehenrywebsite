<?php get_header(); ?>

<main id="main">

    <!-- ============ 1. HERO ============ -->
    <section class="hero" aria-label="Welcome to June Henry Homes">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/homes-lawn.jpg' ); ?>" alt="June Henry Homes residences seen from the garden" fetchpriority="high">
      </div>
      <div class="hero-content">
        <span class="eyebrow center light hero-anim" style="--d:.2s">Extended Luxury Living &amp; Wellness</span>
        <div class="hero-script hero-anim" style="--d:.35s" aria-hidden="true">June Henry Homes</div>
        <h1 class="hero-anim" style="--d:.85s">The Ease of <em>Winter Living.</em></h1>
        <p class="hero-sub hero-anim" style="--d:1.05s">More than a place to stay. A place to truly live.</p>
        <div class="hero-cta hero-anim" style="--d:1.25s"><a class="btn btn-gold" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Inquire</a></div>
      </div>
      <div class="hero-meta right" aria-hidden="true">St. Ann · Jamaica</div>
      <div class="hero-notch">
        <a class="btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Discover June Henry Homes</a>
        <a class="btn btn-outline" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan Your Extended Stay</a>
      </div>
    </section>

    <!-- ============ 2. INTRO ============ -->
    <section class="section intro" aria-labelledby="intro-title">
      <div class="container-narrow intro-solo">
        <span class="eyebrow center reveal">Welcome Home</span>
        <h2 id="intro-title" class="visually-hidden">Life at June Henry Homes</h2>
        <p class="scrub-text" data-scrub>Settle into the warmth of Jamaica with beautifully designed private homes, fresh nourishing meals, thoughtful hospitality, and the comfort of having everything you need around you.</p>
        <p class="intro-tagline reveal" style="--d:.1s">A home created for slowing down, settling in and staying cozy.</p>
      </div>
    </section>

    <div class="ribbon reveal" aria-hidden="true">
      <div class="ribbon-track" data-ribbon>
        <div class="ribbon-group">
          <span class="ribbon-word">Chef-prepared meals</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/chef-dining.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Dedicated butler</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/guests-painting.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">Housekeeping &amp; laundry</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/bedroom-seaview.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Personal concierge</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">6–8 guests per home</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fruit-event.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Stays of one month or longer</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">St. Ann, Jamaica</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/dunns-river-falls.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
        </div>
        <div class="ribbon-group">
          <span class="ribbon-word">Chef-prepared meals</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/chef-dining.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Dedicated butler</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/guests-painting.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">Housekeeping &amp; laundry</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/bedroom-seaview.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Personal concierge</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">6–8 guests per home</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fruit-event.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word is-outline">Stays of one month or longer</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
          <span class="ribbon-word">St. Ann, Jamaica</span>
          <span class="ribbon-pill"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/dunns-river-falls.jpg' ); ?>" alt="" loading="lazy" decoding="async"></span>
        </div>
      </div>
    </div>

    <!-- ============ 3. ABOUT (one section, links to the full About page) ============ -->
    <section class="section about-section" id="about" aria-labelledby="about-title">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">About June Henry Homes</span>
          <h2 id="about-title" class="h2" data-split>Where comfort meets <span class="script">connection</span>.</h2>
        </div>

        <div class="reveal" data-tabs>
          <div class="tabs center about-tabs" role="tablist" aria-label="About June Henry Homes">
            <button class="tab is-active" type="button" role="tab" id="tab-about-heart" aria-controls="panel-about-heart" aria-selected="true">The Heart Behind It</button>
            <button class="tab" type="button" role="tab" id="tab-about-story" aria-controls="panel-about-story" aria-selected="false">Our Story</button>
            <button class="tab" type="button" role="tab" id="tab-about-stay" aria-controls="panel-about-stay" aria-selected="false">Your Stay Includes</button>
          </div>

          <div class="tab-panel is-active" id="panel-about-heart" role="tabpanel" aria-labelledby="tab-about-heart">
            <div class="about-panel">
              <div class="about-panel-body">
                <span class="eyebrow">Meet the heart behind June Henry Homes</span>
                <h3>Meet the Heart Behind June Henry Homes</h3>
                <p>June Henry Homes was created from a deep belief that later-life living should feel warm, personal, and life-giving not restrictive or institutional. I had a clear and deeply personal mission, to transform seasonal living into something more meaningful—an experience where elegance, comfort, and belonging are not separate ideas, but naturally woven together into one seamless way of life.</p>
                <p>My inspiration is simple and personal: the kind of home I would want for my own family.</p>
                <p class="signature">June Henry <small>Founder, June Henry Homes</small></p>
                <div class="btn-row" style="margin-top:24px">
                  <a class="btn btn-ghost-light btn-sm" href="<?php echo esc_url( home_url( '/meet-june/' ) ); ?>">Meet June</a>
                </div>
              </div>
              <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/june-henry.jpg' ); ?>" alt="June Henry, founder of June Henry Homes" loading="lazy"></div>
            </div>
          </div>

          <div class="tab-panel" id="panel-about-story" role="tabpanel" aria-labelledby="tab-about-story">
            <div class="about-panel">
              <div class="about-panel-body">
                <span class="eyebrow">Extended stays in Jamaica</span>
                <h3>Elevated winter living where luxury meets the comfort of home!</h3>
                <p>June Henry Homes is designed for active adults who desire extended stays of one month or longer, the ease of elevated hospitality, wellness, lifestyle services and light support during the winter season in a warm climate environment that promotes vitality, rest and connection. Whether you’re seeking a seasonal retreat, a respite from home maintenance, or simply a more effortless way to enjoy the winter months, June Henry Homes provides exceptional hospitality, comfort, and care allowing you to focus on what matters most. Our homes are fully staffed and offers the comfort of home paired with the personalized service of a luxury retreat.</p>
              </div>
              <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-entrance.jpg' ); ?>" alt="Entrance to a June Henry Homes residence" loading="lazy"></div>
            </div>
          </div>

          <div class="tab-panel" id="panel-about-stay" role="tabpanel" aria-labelledby="tab-about-stay">
            <div class="about-panel">
              <div class="about-panel-body">
                <span class="eyebrow">Everything taken care of</span>
                <h3>Your stay includes</h3>
                <ul class="check-list on-dark">
                  <li>Chef-curated meals served daily including breakfast, lunch, dinner, and thoughtfully prepared snacks.</li>
                  <li>A dedicated chef, butler, housekeeper, laundress, and gardener to attend to every detail.</li>
                  <li>Personalized concierge services to arrange activities, appointments, transportation, and special requests.</li>
                  <li>A secure, private environment where you can relax with complete peace of mind.</li>
                </ul>
              </div>
              <div class="media"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/chef-dining.jpg' ); ?>" alt="The chef serving guests at the table" loading="lazy"></div>
            </div>
          </div>
        </div>

        <div class="about-cta reveal">
          <a class="btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About June Henry Homes <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
        </div>
      </div>
    </section>

    <!-- ============ 4. THE JUNE HENRY DIFFERENCE ============ -->
    <section class="section difference" id="difference" aria-labelledby="diff-title" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">The June Henry Difference</span>
          <h2 id="diff-title" class="h2" data-split>Not a vacation. Not assisted living.</h2>
          <p class="lead reveal"><em class="accent">A better way to live through winter.</em></p>
        </div>

        <div class="bento">
          <article class="bento-card reveal" data-glow>
            <div class="bento-top">
              <span class="num">01</span>
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="3.5" y="5" width="17" height="15" rx="2"/><path d="M3.5 10h17M8 3v4M16 3v4"/><circle cx="12" cy="15" r="1.2"/></svg></span>
            </div>
            <div><h3>One Month or Longer</h3><p>A true seasonal home—not a short-term holiday. Settle into Jamaica at your own pace.</p></div>
          </article>

          <div class="bento-media reveal" style="--d:.08s">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/bedroom-seaview.jpg' ); ?>" alt="Bedroom with a sea view at June Henry Homes" loading="lazy">
            <span class="chip">Private residential living</span>
          </div>

          <article class="bento-card is-navy reveal" style="--d:.16s" data-glow>
            <div class="bento-top">
              <span class="num">02</span>
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M3 18h18M5 18a7 7 0 0 1 14 0M12 8V6M10.5 6h3"/></svg></span>
            </div>
            <div><h3>Everything Taken Care Of</h3><p>Chef-prepared meals, housekeeping, laundry, gardening, transportation, and concierge support—so everyday responsibilities don’t follow you to Jamaica.</p></div>
          </article>

          <article class="bento-card is-cream reveal" data-glow>
            <div class="bento-top">
              <span class="num">03</span>
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 11l8-6 8 6v8a1 1 0 0 1-1 1h-4v-6H9v6H5a1 1 0 0 1-1-1z"/></svg></span>
            </div>
            <div><h3>Luxury That Feels Like Home</h3><p>Private residential living with the warmth, familiarity, and freedom of home—not the feeling of being in a hotel or facility.</p></div>
          </article>

          <article class="bento-card reveal" style="--d:.08s" data-glow>
            <div class="bento-top">
              <span class="num">04</span>
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10z"/></svg></span>
            </div>
            <div><h3>Care Without Losing Independence</h3><p>Thoughtful, light support when you need it, while preserving your freedom, privacy, and choice.</p></div>
          </article>

          <article class="bento-card is-burgundy reveal" style="--d:.16s" data-glow>
            <div class="bento-top">
              <span class="num">05</span>
              <span class="big-number">6–8</span>
            </div>
            <div><h3>A Home Where People Know You</h3><p>With only <strong>6–8 guests per home</strong>, the experience is intentionally intimate. You’re not one of hundreds of guests—you become part of a community.</p></div>
          </article>

          <div class="bento-media span-2 reveal">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-sunset.jpg' ); ?>" alt="Sunset over the beach in St. Ann, Jamaica" loading="lazy">
            <span class="chip">Your winter, your way</span>
          </div>

          <article class="bento-card is-gold bento-last reveal" style="--d:.08s" data-glow>
            <div class="bento-top">
              <span class="num">06</span>
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2.5V5M12 19v2.5M2.5 12H5M19 12h2.5M5.3 5.3l1.8 1.8M16.9 16.9l1.8 1.8M5.3 18.7l1.8-1.8M16.9 7.1l1.8-1.8"/></svg></span>
            </div>
            <div><h3>Designed Around Your Winter, Not a Program</h3><p>No rigid schedule or institutional routine. Your days can be as active, peaceful, social, or private as you want them to be.</p></div>
          </article>
        </div>

        <div class="statement">
          <span class="eyebrow center reveal">The difference is simple</span>
          <p class="scrub-text" data-scrub>JHH doesn’t just give you somewhere to stay in Jamaica. It gives you a place to truly live well.</p>
          <a class="btn btn-outline reveal" href="<?php echo esc_url( home_url( '/about/' ) ); ?>#difference">Explore the Difference</a>
        </div>
      </div>
    </section>

    <!-- ============ 5. WHY JAMAICA ============ -->
    <section class="jamaica" id="why-jamaica" aria-labelledby="jamaica-title">
      <div class="jamaica-bg" data-parallax="0.1">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="" loading="lazy">
      </div>
      <div class="container jamaica-grid">
        <div>
          <span class="eyebrow light reveal">Why Jamaica?</span>
          <h2 id="jamaica-title" class="h2" data-split>Come Winter <span class="script">Somewhere</span> Warmer.</h2>
          <p class="reveal">Jamaica offers more than sunshine. It offers a slower pace, vibrant culture, fresh food, beautiful surroundings, and the warmth of its people.</p>
          <p class="reveal">In <strong>St. Ann</strong>, Jamaica’s Garden Parish, winter becomes a season of <strong>sunshine, connection, discovery, and ease</strong>.</p>
          <p class="reveal">Imagine breakfast outdoors, afternoons by the water, fresh Caribbean meals, meaningful conversations, and evenings watching the sunset.</p>
          <p class="pull reveal">This isn’t escaping life.<br>It’s choosing to live it differently.</p>
          <div class="reveal">
            <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/st-ann/' ) ); ?>">Discover St. Ann <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
          </div>
        </div>

        <div class="glass-card reveal reveal-right" style="--d:.15s">
          <span class="eyebrow light">The Garden Parish</span>
          <h3>St. Ann, Jamaica</h3>
          <p>Known as Jamaica’s <strong>“Garden Parish,”</strong> St. Ann brings together lush landscapes, beautiful beaches, waterfalls, rich history, and authentic Jamaican culture.</p>
          <ul class="place-list">
            <li><span class="pin"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 21s-6-5.6-6-11a6 6 0 0 1 12 0c0 5.4-6 11-6 11z"/><circle cx="12" cy="10" r="2.2"/></svg></span>Dunn’s River Falls</li>
            <li><span class="pin"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 21s-6-5.6-6-11a6 6 0 0 1 12 0c0 5.4-6 11-6 11z"/><circle cx="12" cy="10" r="2.2"/></svg></span>Ocho Rios</li>
            <li><span class="pin"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 21s-6-5.6-6-11a6 6 0 0 1 12 0c0 5.4-6 11-6 11z"/><circle cx="12" cy="10" r="2.2"/></svg></span>Nine Mile, the birthplace of Bob Marley</li>
          </ul>
          <p>Add fresh Caribbean flavors, vibrant music, and the warmth of Jamaican hospitality—and you have a place that makes <strong>slowing down feel natural.</strong></p>
          <p class="tagline-script">Come for the warmth. Stay for the way of life.</p>
        </div>
      </div>
    </section>

    <!-- ============ 6. THE HOMES / COLLECTIONS ============ -->
    <section class="section collections" id="homes" aria-labelledby="homes-title">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">The Homes / Collections</span>
          <h2 id="homes-title" class="h2" data-split>Choose Your Favourite <span class="script">June Henry</span> Home</h2>
        </div>

        <div class="stack">
          <article class="stack-card" style="--i:0">
            <div class="stack-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/beach-gazebo.jpg' ); ?>" alt="Beachfront gazebo overlooking the sea in St. Ann" loading="lazy">
              <span class="chip">Collection 01</span>
            </div>
            <div class="stack-body">
              <span class="count">By the ocean</span>
              <h3>The Beachfront Collection</h3>
              <p class="script-sub">Wake up to the sea.</p>
              <p>For those who want the ocean to be part of everyday life.</p>
              <p>Wake to the sound of the water, enjoy private beach access, beautiful views, curated excursions, exceptional dining, and personalized concierge service.</p>
              <p class="ideal"><strong>Ideal for:</strong> guests who want a relaxed coastal lifestyle with the ocean at their doorstep.</p>
              <a class="btn" href="<?php echo esc_url( home_url( '/the-homes/' ) ); ?>#beachfront">Explore Beachfront <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
            </div>
          </article>

          <article class="stack-card is-navy" style="--i:1">
            <div class="stack-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/home-veranda.jpg' ); ?>" alt="A June Henry Homes residence with its veranda and lawn" loading="lazy">
              <span class="chip">Collection 02</span>
            </div>
            <div class="stack-body">
              <span class="count">Garden &amp; sea views</span>
              <h3>The Veranda Collection</h3>
              <p class="script-sub">Slow mornings. Garden breezes. Beautiful days.</p>
              <p>Settle into lush surroundings and a more intimate rhythm of island living.</p>
              <p>Enjoy elegant spaces, sea views, shared experiences, thoughtful hospitality, and the freedom to spend your days exactly as you wish.</p>
              <p class="ideal"><strong>Ideal for:</strong> guests looking for peaceful, connected living surrounded by nature.</p>
              <a class="btn btn-gold" href="<?php echo esc_url( home_url( '/the-homes/' ) ); ?>#veranda">Explore Veranda <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
            </div>
          </article>

          <article class="stack-card is-burgundy" style="--i:2">
            <div class="stack-media">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/images/interior-living.jpg' ); ?>" alt="Open living room inside a June Henry Homes residence" loading="lazy">
              <span class="chip">Collection 03</span>
            </div>
            <div class="stack-body">
              <span class="count">Most personalized</span>
              <h3>The Founder Collection</h3>
              <p class="script-sub">Our most personal expression of June Henry Homes.</p>
              <p>For guests who value a higher level of privacy, personalization, and attentive service.</p>
              <p>Private suites, personal butler service, wellness coordination, curated experiences, and concierge support come together to create an exceptionally tailored stay.</p>
              <p class="ideal"><strong>Ideal for:</strong> guests seeking our most personalized experience.</p>
              <a class="btn btn-light" href="<?php echo esc_url( home_url( '/the-homes/' ) ); ?>#founder">Explore Founder Collection <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============ 7. BEYOND THE STAY ============ -->
    <section class="section beyond" id="beyond" aria-labelledby="beyond-title" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">Beyond the Stay</span>
          <h2 id="beyond-title" class="h2" data-split>Life, <span class="script">beautifully</span> lived.</h2>
          <p class="lead reveal">Chef-prepared dining, wellness woven into everyday life, and moments worth remembering.</p>
        </div>

        <div class="beyond-grid">
          <article class="beyond-card reveal">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/market-produce.jpg' ); ?>" alt="Fresh produce at a Jamaican market" loading="lazy">
            <div class="beyond-body">
              <span class="num">01 · Food</span>
              <h3>Taste the Good Life</h3>
              <div class="beyond-reveal"><div><p>Fresh, chef-prepared meals made daily with nourishing ingredients, Jamaican flavours, and plenty of reasons to gather around the table.</p></div></div>
              <span class="beyond-tag">Breakfast. Lunch. Dinner. Snacks. Always made with care.</span>
            </div>
            <a class="stretched" href="<?php echo esc_url( home_url( '/beyond-the-stay/' ) ); ?>#food"><span class="visually-hidden">More about dining at June Henry Homes</span></a>
          </article>

          <article class="beyond-card reveal" style="--d:.12s">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/river-swimming.jpg' ); ?>" alt="Guests swimming in a river pool in Jamaica" loading="lazy">
            <div class="beyond-body">
              <span class="num">02 · Wellness</span>
              <h3>Wellness, Your Way</h3>
              <div class="beyond-reveal"><div><p>Move, rest, connect, and recharge. From morning walks and swimming to nourishing meals and quiet moments, wellness is naturally woven into everyday life.</p></div></div>
              <span class="beyond-tag">Feel good. Live well.</span>
            </div>
            <a class="stretched" href="<?php echo esc_url( home_url( '/beyond-the-stay/' ) ); ?>#wellness"><span class="visually-hidden">More about wellness at June Henry Homes</span></a>
          </article>

          <article class="beyond-card reveal" style="--d:.24s">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/guests-painting.jpg' ); ?>" alt="Guests painting together beside the pool" loading="lazy">
            <div class="beyond-body">
              <span class="num">03 · Moments</span>
              <h3>Moments Made to Remember</h3>
              <div class="beyond-reveal"><div><p>Enjoy experiences that bring people together—from bonfire conversations and Sip &amp; Paint to catamaran escapes and discovering Jamaica.</p></div></div>
              <span class="beyond-tag">No rigid itineraries. Just experiences worth having.</span>
            </div>
            <a class="stretched" href="<?php echo esc_url( home_url( '/beyond-the-stay/' ) ); ?>#moments"><span class="visually-hidden">More about experiences at June Henry Homes</span></a>
          </article>
        </div>

        <div class="about-cta reveal">
          <a class="btn btn-outline" href="<?php echo esc_url( home_url( '/beyond-the-stay/' ) ); ?>">Explore the Experience</a>
        </div>
      </div>
    </section>

    <!-- ============ 8. WHAT OUR GUESTS SAY ============ -->
    <section class="section testimonials" id="guests" aria-labelledby="guests-title" style="padding-top:0">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow center reveal">What our guests say</span>
          <h2 id="guests-title" class="h2" data-split>A conversation that feels like <span class="script">family</span>.</h2>
        </div>
        <div class="testimonial-grid">
          <figure class="testimonial-card reveal" style="--d:.0s;margin:0">
            <div class="stars" role="img" aria-label="Rated 5 out of 5 stars"><span style="--s:0" aria-hidden="true">&#9733;</span><span style="--s:1" aria-hidden="true">&#9733;</span><span style="--s:2" aria-hidden="true">&#9733;</span><span style="--s:3" aria-hidden="true">&#9733;</span><span style="--s:4" aria-hidden="true">&#9733;</span></div>
            <blockquote><p>&#8220;Just six to eight of us, one table, and conversation that feels like family. The rhythm is easygoing, social when desired, and never forced. We feel like we are living at home, not attending a program.&#8221;</p></blockquote>
            <figcaption class="testimonial-cite">
              <span class="cite-avatar" aria-hidden="true">D</span>
              <span>
                <span class="cite-name">Diaspora Retiree</span>
                <span class="cite-place">St. Ann, Jamaica</span>
              </span>
            </figcaption>
          </figure>
          <figure class="testimonial-card reveal" style="--d:.1s;margin:0">
            <div class="stars" role="img" aria-label="Rated 5 out of 5 stars"><span style="--s:0" aria-hidden="true">&#9733;</span><span style="--s:1" aria-hidden="true">&#9733;</span><span style="--s:2" aria-hidden="true">&#9733;</span><span style="--s:3" aria-hidden="true">&#9733;</span><span style="--s:4" aria-hidden="true">&#9733;</span></div>
            <blockquote><p>&#8220;June Henry Homes offers something truly rare, luxury boutique winter living that feels deeply personal and elegant. The attention to detail, beautiful surroundings, and genuine hospitality made my winter stay unforgettable.&#8221;</p></blockquote>
            <figcaption class="testimonial-cite">
              <span class="cite-avatar" aria-hidden="true">W</span>
              <span>
                <span class="cite-name">Winter Resident</span>
                <span class="cite-place">Toronto, Canada</span>
              </span>
            </figcaption>
          </figure>
          <figure class="testimonial-card reveal" style="--d:.2s;margin:0">
            <div class="stars" role="img" aria-label="Rated 5 out of 5 stars"><span style="--s:0" aria-hidden="true">&#9733;</span><span style="--s:1" aria-hidden="true">&#9733;</span><span style="--s:2" aria-hidden="true">&#9733;</span><span style="--s:3" aria-hidden="true">&#9733;</span><span style="--s:4" aria-hidden="true">&#9733;</span></div>
            <blockquote><p>&#8220;I was looking for more than a vacation; I wanted a place where I could relax, connect, and feel cared for. June Henry Homes exceeded every expectation. By the end of my stay, everyone felt like family.&#8221;</p></blockquote>
            <figcaption class="testimonial-cite">
              <span class="cite-avatar" aria-hidden="true">R</span>
              <span>
                <span class="cite-name">Returning Guest</span>
                <span class="cite-place">London, UK</span>
              </span>
            </figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- ============ 9. FAQs ============ -->
    <section class="section faq-section" id="faqs" aria-labelledby="faq-title" style="padding-top:0">
      <div class="container faq-layout">
        <aside class="faq-aside">
          <span class="eyebrow reveal">FAQs</span>
          <h2 id="faq-title" class="h2" data-split>Questions, <span class="script">thoughtfully</span> answered.</h2>
          <p class="lead reveal">Everything you may want to know about stays, meals, support and arranging a season at June Henry Homes.</p>
          <div class="help-card reveal" style="--d:.1s">
            <h3>Still have a question?</h3>
            <p>Our team is happy to talk through your plans, or the plans of someone you love.</p>
            <a href="tel:+17185410372"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>718-541-0372</a>
            <a href="mailto:info@junehenryhomes.com"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@junehenryhomes.com</a>
          </div>
          <div class="reveal" style="margin-top:30px">
            <a class="link-arrow" href="<?php echo esc_url( home_url( '/faqs/' ) ); ?>">View all FAQs <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></a>
          </div>
        </aside>

        <div class="faq-main reveal" data-tabs>
          <div class="tabs faq-tabs" role="tablist" aria-label="FAQ categories">
            <button class="tab is-active" type="button" role="tab" id="tab-faq-about" aria-controls="panel-faq-about" aria-selected="true">About</button>
            <button class="tab" type="button" role="tab" id="tab-faq-stays" aria-controls="panel-faq-stays" aria-selected="false">Stays</button>
            <button class="tab" type="button" role="tab" id="tab-faq-care" aria-controls="panel-faq-care" aria-selected="false">Care &amp; Support</button>
            <button class="tab" type="button" role="tab" id="tab-faq-why" aria-controls="panel-faq-why" aria-selected="false">Why June Henry</button>
            <button class="tab" type="button" role="tab" id="tab-faq-families" aria-controls="panel-faq-families" aria-selected="false">Families &amp; Booking</button>
          </div>

          <div class="tab-panel is-active" id="panel-faq-about" role="tabpanel" aria-labelledby="tab-faq-about">
            <p class="faq-cat-title">About June Henry Homes</p>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item is-open">
                <h3><button class="faq-q" type="button"><span class="q-num">01</span><span class="q-text">What is June Henry Homes?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>June Henry Homes is a luxury extended-stay residence in St. Ann, Jamaica, designed for stays of one month or longer.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">02</span><span class="q-text">Who is June Henry Homes designed for?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>It is designed for active adults seeking comfortable, supported, and elevated seasonal living in Jamaica.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">03</span><span class="q-text">Is June Henry Homes assisted living?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>No, June Henry Homes offers independent living with hospitality, wellness, and light personalized support.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">04</span><span class="q-text">Is June Henry Homes a retirement community?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>No, it is a boutique extended-stay experience for active adults seeking seasonal living.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">05</span><span class="q-text">Where is June Henry Homes located?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>June Henry Homes is located in St. Ann, Jamaica.</p></div></div>
              </div>
            </div>
          </div>

          <div class="tab-panel" id="panel-faq-stays" role="tabpanel" aria-labelledby="tab-faq-stays">
            <p class="faq-cat-title">Stays</p>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">06</span><span class="q-text">What is the minimum stay?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>The minimum stay is one month.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">07</span><span class="q-text">Can I stay for an entire winter season?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Yes, June Henry Homes is designed for extended winter and seasonal stays.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">08</span><span class="q-text">How long can I stay?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Guests can stay for one month or longer based on availability.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">09</span><span class="q-text">What’s included in my stay?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Stays include chef-prepared meals, housekeeping, laundry, dedicated staff, concierge services, and wellness experiences.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">10</span><span class="q-text">Are meals included?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Yes, breakfast, lunch, dinner, and snacks are included.</p></div></div>
              </div>
            </div>
          </div>

          <div class="tab-panel" id="panel-faq-care" role="tabpanel" aria-labelledby="tab-faq-care">
            <p class="faq-cat-title">Care &amp; Support</p>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">11</span><span class="q-text">What personal and wellness support is available?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Guests receive light personalized support, wellness services, and assistance designed to make everyday living easier.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">12</span><span class="q-text">Does June Henry Homes provide medical care?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>June Henry Homes is not a medical facility, though select services include access to a concierge medical partnership.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">13</span><span class="q-text">Is June Henry Homes suitable for someone with mobility needs?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Suitability depends on individual needs and the selected home, so requirements should be discussed before booking.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">14</span><span class="q-text">What concierge services are available?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Concierge services can assist with transportation, appointments, activities, excursions, and special requests.</p></div></div>
              </div>
            </div>
          </div>

          <div class="tab-panel" id="panel-faq-why" role="tabpanel" aria-labelledby="tab-faq-why">
            <p class="faq-cat-title">Why June Henry Homes?</p>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">15</span><span class="q-text">How is June Henry Homes different from a Jamaica villa rental?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Unlike a villa rental, June Henry Homes combines private living with daily meals, dedicated staff, concierge services, and personalized hospitality.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">16</span><span class="q-text">How is it different from a hotel or resort?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>It offers the comfort of home with luxury hospitality, specifically designed for extended stays.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">17</span><span class="q-text">How is it different from assisted living?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>June Henry Homes provides independent seasonal living rather than clinical or institutional care.</p></div></div>
              </div>
            </div>
          </div>

          <div class="tab-panel" id="panel-faq-families" role="tabpanel" aria-labelledby="tab-faq-families">
            <p class="faq-cat-title">Families &amp; Booking</p>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">18</span><span class="q-text">Can I arrange a stay for a parent or family member?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Yes, families can inquire on behalf of a parent or loved one.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">19</span><span class="q-text">Can I arrange everything remotely?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Yes, families can begin the inquiry process remotely with the June Henry Homes team.</p></div></div>
              </div>
              <div class="faq-item">
                <h3><button class="faq-q" type="button"><span class="q-num">20</span><span class="q-text">How do I inquire or book a stay?</span><span class="faq-icon" aria-hidden="true"></span></button></h3>
                <div class="faq-a"><div class="faq-a-inner"><p>Call <a href="tel:+17185410372">718-541-0372</a>, email <a href="mailto:info@junehenryhomes.com">info@junehenryhomes.com</a>, or <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">submit an inquiry through the website</a>.</p></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer();

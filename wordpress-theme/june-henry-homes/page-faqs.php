<?php
/**
 * Template Name: JHH FAQs
 */
get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/interior-living.jpg' ); ?>" alt="Open living room inside a June Henry Homes residence" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">✦</span><span aria-current="page">FAQs</span></nav>
        <h1 class="hero-anim" style="--d:.15s">Frequently Asked <span class="script">Questions</span></h1>
        <p class="lead hero-anim" style="--d:.35s">Answers about stays, meals, support, amenities, seasonal living, accommodations, and arranging an extended stay at June Henry Homes.</p>
      </div>
    </section>

    <section class="section">
      <div class="container faq-page">
        <nav class="faq-nav reveal" data-scrollspy aria-label="FAQ categories">
          <p class="faq-nav-title">Categories</p>
          <a href="#faq-about" class="is-current">About June Henry Homes <small>5</small></a>
          <a href="#faq-stays">Stays <small>5</small></a>
          <a href="#faq-care">Care &amp; Support <small>4</small></a>
          <a href="#faq-why">Why June Henry Homes? <small>3</small></a>
          <a href="#faq-families">Families &amp; Booking <small>3</small></a>
        </nav>

        <div>
          <div class="search-field reveal">
            <label class="visually-hidden" for="faqSearch">Search the FAQs</label>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="M20 20l-4-4"/></svg>
            <input id="faqSearch" type="search" placeholder="Search questions, e.g. meals, minimum stay, mobility" autocomplete="off" data-faq-search>
          </div>
          <div class="faq-empty" data-faq-empty hidden>
            <h3 class="h4">No matching questions</h3>
            <p>Try another word, or call <a href="tel:+17185410372">718-541-0372</a> and we’ll be happy to help.</p>
          </div>

          <div class="faq-group reveal" id="faq-about" data-faq-group>
            <div class="faq-group-head"><h2>About June Henry Homes</h2><span>5 questions</span></div>
            <div class="faq-list" data-accordion="single">
              <div class="faq-item">
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
          <div class="faq-group reveal" id="faq-stays" data-faq-group>
            <div class="faq-group-head"><h2>Stays</h2><span>5 questions</span></div>
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
          <div class="faq-group reveal" id="faq-care" data-faq-group>
            <div class="faq-group-head"><h2>Care &amp; Support</h2><span>4 questions</span></div>
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
          <div class="faq-group reveal" id="faq-why" data-faq-group>
            <div class="faq-group-head"><h2>Why June Henry Homes?</h2><span>3 questions</span></div>
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
          <div class="faq-group reveal" id="faq-families" data-faq-group>
            <div class="faq-group-head"><h2>Families &amp; Booking</h2><span>3 questions</span></div>
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

          <div class="help-card reveal" style="margin-top:clamp(50px,6vw,80px)">
            <h3>Still have a question?</h3>
            <p>Our team is happy to talk through your plans, or the plans of someone you love.</p>
            <a href="tel:+17185410372"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>718-541-0372</a>
            <a href="mailto:info@junehenryhomes.com"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>info@junehenryhomes.com</a>
            <div class="btn-row" style="margin-top:20px"><a class="btn btn-gold btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Send an Inquiry</a></div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer();

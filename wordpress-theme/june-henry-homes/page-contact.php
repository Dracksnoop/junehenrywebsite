<?php
/**
 * Template Name: JHH Contact
 */
get_header(); ?>

<main id="main">
    <section class="page-hero">
      <div class="hero-media" data-parallax="0.12">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/cottage-veranda.jpg' ); ?>" alt="A June Henry Homes residence with its veranda and lawn" fetchpriority="high">
      </div>
      <div class="page-hero-content">
        <nav class="breadcrumb hero-anim" aria-label="Breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span aria-hidden="true">✦</span><span aria-current="page">Contact</span></nav>
        <h1 class="hero-anim" style="--d:.15s">Plan Your Extended <span class="script">Stay</span></h1>
        <p class="lead hero-anim" style="--d:.35s">Interested in June Henry Homes? Contact us to learn about extended stays, homes, services, availability, and the experience of living at JHH.</p>
      </div>
    </section>

    <section class="section">
      <div class="container contact-grid">
        <div>
          <span class="eyebrow reveal">Get in touch</span>
          <h2 class="h2" data-split style="margin:20px 0 22px">We’d love to hear from <span class="script">you</span>.</h2>
          <p class="lead reveal">Whether you’re planning your own season in Jamaica or arranging a stay for a parent or loved one, our team is here to help.</p>
          <p class="reveal">Families can begin the inquiry process remotely. Tell us a little about your plans and we’ll guide you through homes, availability, and everything included.</p>

          <div class="contact-cards">
            <a class="contact-card reveal" href="tel:+17185410372">
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M5 4h3l2 5-2.5 1.5a11 11 0 0 0 6 6L15 14l5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg></span>
              <span><small>Call us</small><strong>718-541-0372</strong></span>
            </a>
            <a class="contact-card reveal" style="--d:.08s" href="mailto:info@junehenryhomes.com">
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></span>
              <span><small>Email us</small><strong>info@junehenryhomes.com</strong></span>
            </a>
            <div class="contact-card reveal" style="--d:.16s">
              <span class="icon-ring"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M12 21s-6-5.6-6-11a6 6 0 0 1 12 0c0 5.4-6 11-6 11z"/><circle cx="12" cy="10" r="2.2"/></svg></span>
              <span><small>Location</small><strong>St. Ann, Jamaica</strong></span>
            </div>
          </div>
          <a class="map-card map-link reveal" style="--d:.2s" href="https://www.google.com/maps/search/?api=1&amp;query=St.+Ann%2C+Jamaica" target="_blank" rel="noopener">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/gazebo-beach.jpg' ); ?>" alt="" loading="lazy">
            <span class="map-label">
              <small>Find us</small>
              <strong>St. Ann, Jamaica</strong>
              <span class="map-open">Open in Google Maps <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></span>
            </span>
          </a>
        </div>

        <div class="form-card reveal reveal-right">
          <span class="eyebrow">Inquiry form</span>
          <h2>Tell us about your stay</h2>
          <p class="muted">Fields marked * are required.</p>

          <form data-inquiry-form novalidate>
            <div class="form-grid">
              <fieldset class="field full">
                <legend class="label">I am inquiring for</legend>
                <div class="choice-group">
                  <label class="choice" for="for-self"><input type="radio" id="for-self" name="inquiring_for" value="Myself" checked><span>Myself</span></label>
                  <label class="choice" for="for-loved-one"><input type="radio" id="for-loved-one" name="inquiring_for" value="A parent or loved one"><span>A parent or loved one</span></label>
                  <label class="choice" for="for-group"><input type="radio" id="for-group" name="inquiring_for" value="A couple or small group"><span>A couple or small group</span></label>
                </div>
              </fieldset>

              <div class="field">
                <label for="f-name">Full name *</label>
                <input id="f-name" name="name" type="text" autocomplete="name" required>
                <span class="field-error">Please enter your name.</span>
              </div>
              <div class="field">
                <label for="f-email">Email *</label>
                <input id="f-email" name="email" type="email" autocomplete="email" required>
                <span class="field-error">Please enter a valid email address.</span>
              </div>
              <div class="field">
                <label for="f-phone">Phone *</label>
                <input id="f-phone" name="phone" type="tel" autocomplete="tel" required>
                <span class="field-error">Please enter a telephone number.</span>
              </div>
              <div class="field">
                <label for="f-guest">Guest’s name, if different</label>
                <input id="f-guest" name="guest_name" type="text">
              </div>
              <div class="field">
                <label for="f-collection">Preferred collection</label>
                <select id="f-collection" name="collection">
                  <option value="">Not sure yet</option>
                  <option value="beachfront">The Beachfront Collection</option>
                  <option value="veranda">The Veranda Collection</option>
                  <option value="founder">The Founder Collection</option>
                </select>
              </div>
              <div class="field">
                <label for="f-length">Length of stay *</label>
                <select id="f-length" name="length" required>
                  <option value="">Please select</option>
                  <option>1 month</option>
                  <option>2 months</option>
                  <option>3 months</option>
                  <option>The whole winter season</option>
                </select>
                <span class="field-error">Please choose a length of stay.</span>
              </div>
              <div class="field">
                <label for="f-arrival">Preferred arrival date *</label>
                <input id="f-arrival" name="arrival" type="date" required>
                <span class="field-error">Please choose a preferred arrival date.</span>
              </div>
              <div class="field">
                <label for="f-guests">Guests in your party</label>
                <select id="f-guests" name="guests">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4 or more</option>
                </select>
              </div>
              <div class="field full">
                <label for="f-message">Anything we should know?</label>
                <textarea id="f-message" name="message" placeholder="Tell us about your plans, preferences, or any mobility or dietary needs."></textarea>
              </div>
            </div>

            <div class="form-foot">
              <p>Sending opens your email app with your details ready to send to info@junehenryhomes.com.</p>
              <button class="btn" type="submit">Send Inquiry <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg></button>
            </div>
            <div class="form-status" data-form-status role="status" aria-live="polite"></div>
          </form>
        </div>
      </div>
    </section>
  </main>

<?php get_footer();

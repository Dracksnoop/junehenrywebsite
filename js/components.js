/* ==========================================================================
   June Henry Homes — Shared components (header, mobile menu, footer)
   Injected on every page so navigation stays consistent site-wide.
   ========================================================================== */
(function () {
  'use strict';

  var PHONE = '718-541-0372';
  var PHONE_HREF = 'tel:+17185410372';
  var EMAIL = 'info@junehenryhomes.com';

  var LOGO_W = 375;
  var LOGO_H = 256;

  // JH monogram. Silver for dark backgrounds; the header also gets a navy copy for its light, scrolled state.
  function logo(withNavy) {
    var size = '" alt="" width="' + LOGO_W + '" height="' + LOGO_H + '" decoding="async">';
    return '<span class="brand-logo" aria-hidden="true">' +
      '<img class="logo-silver" src="images/jh-monogram.png' + size +
      (withNavy ? '<img class="logo-navy" src="images/jh-monogram-navy.png' + size : '') +
    '</span>';
  }

  var page = document.body.getAttribute('data-page') || '';

  var primaryNav = [
    { key: 'about', label: 'About', href: 'about.html' },
    { key: 'difference', label: 'Difference', href: 'difference.html' },
    { key: 'homes', label: 'Homes', href: 'homes.html' },
    { key: 'beyond', label: 'Experience', href: 'beyond.html' },
    { key: 'journal', label: 'Journal', href: 'journal.html' },
    { key: 'faqs', label: 'FAQs', href: 'faqs.html' }
  ];

  var menuNav = [
    { key: 'home', label: 'Home', href: 'index.html' },
    { key: 'about', label: 'About June Henry Homes', href: 'about.html' },
    { key: 'heart', label: 'Meet June', href: 'heart.html' },
    { key: 'difference', label: 'The June Henry Difference', href: 'difference.html' },
    { key: 'homes', label: 'The Homes', href: 'homes.html' },
    { key: 'beyond', label: 'Beyond the Stay', href: 'beyond.html' },
    { key: 'st-ann', label: 'St. Ann', href: 'st-ann.html' },
    { key: 'journal', label: 'Journal', href: 'journal.html' },
    { key: 'faqs', label: 'FAQs', href: 'faqs.html' },
    { key: 'contact', label: 'Contact', href: 'contact.html' }
  ];

  var footerExplore = [
    { label: 'Home', href: 'index.html' },
    { label: 'About June', href: 'heart.html' },
    { label: 'The Homes', href: 'homes.html' },
    { label: 'The Experience', href: 'beyond.html' },
    { label: 'Wellness', href: 'beyond.html#wellness' },
    { label: 'Food', href: 'beyond.html#food' },
    { label: 'St. Ann', href: 'st-ann.html' },
    { label: 'Journal', href: 'journal.html' },
    { label: 'FAQs', href: 'faqs.html' },
    { label: 'Contact', href: 'contact.html' }
  ];

  var icons = {
    instagram: '<svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.4" cy="6.6" r="1" fill="currentColor" stroke="none"/></svg>',
    facebook: '<svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true"><path d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H7.9v3h2.6V21h3z"/></svg>',
    linkedin: '<svg viewBox="0 0 24 24" width="17" height="17" fill="currentColor" aria-hidden="true"><path d="M6.9 8.6H3.8V20h3.1V8.6zM5.4 3.6a1.8 1.8 0 1 0 0 3.6 1.8 1.8 0 0 0 0-3.6zM20.2 13.4c0-3-1.6-4.9-4.2-4.9-1.5 0-2.5.8-2.9 1.6V8.6h-3V20h3.1v-5.9c0-1.5.5-2.8 2.1-2.8 1.5 0 1.8 1.4 1.8 2.9V20h3.1v-6.6z"/></svg>'
  };

  function navLinks(list, cls) {
    return list.map(function (item) {
      var active = item.key === page ? ' is-active" aria-current="page' : '';
      return '<a class="' + cls + active + '" href="' + item.href + '">' + item.label + '</a>';
    }).join('');
  }

  var headerHTML =
    '<a class="skip-link" href="#main">Skip to content</a>' +
    '<div class="scroll-progress" aria-hidden="true"></div>' +
    '<header class="site-header" id="siteHeader">' +
      '<div class="header-inner">' +
        '<nav class="nav-pills" aria-label="Primary">' + navLinks(primaryNav, 'nav-pill') + '</nav>' +
        '<a class="brand" href="index.html" aria-label="June Henry Homes — Home">' +
          logo(true) +
        '</a>' +
        '<div class="header-actions">' +
          '<a class="header-phone" href="' + PHONE_HREF + '">' + PHONE + '</a>' +
          '<a class="btn btn-light btn-sm header-cta" href="contact.html">Inquire</a>' +
          '<button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu"><span></span><span></span></button>' +
        '</div>' +
      '</div>' +
    '</header>' +
    '<div class="mobile-menu" id="mobileMenu" aria-hidden="true">' +
      '<nav class="mobile-menu-links" aria-label="Mobile">' +
        menuNav.map(function (item, i) {
          var active = item.key === page ? ' class="is-active" aria-current="page"' : '';
          return '<a href="' + item.href + '"' + active + ' style="--i:' + i + '"><span class="num">' + (i + 1 < 10 ? '0' : '') + (i + 1) + '</span>' + item.label + '</a>';
        }).join('') +
      '</nav>' +
      '<div class="mobile-menu-foot">' +
        '<a href="' + PHONE_HREF + '">' + PHONE + '</a>' +
        '<a href="mailto:' + EMAIL + '">' + EMAIL + '</a>' +
        '<span>St. Ann, Jamaica</span>' +
      '</div>' +
    '</div>';

  var footerHTML =
    '<footer class="site-footer">' +
      '<div class="footer-cta">' +
        '<span class="eyebrow center light">Plan your extended stay</span>' +
        '<h2 class="reveal" data-split>Where every day feels <span class="script">more</span> like home.</h2>' +
        '<p class="reveal" style="--d:.15s">Stays of one month or longer · 6–8 guests per home · St. Ann, Jamaica</p>' +
        '<div class="btn-row center reveal" style="--d:.25s">' +
          '<a class="btn btn-gold" href="contact.html">Plan Your Extended Stay</a>' +
          '<a class="btn btn-ghost-light" href="' + PHONE_HREF + '">Call ' + PHONE + '</a>' +
        '</div>' +
      '</div>' +
      '<div class="footer-main">' +
        '<div class="footer-brand">' +
          '<a class="brand brand-footer" href="index.html" aria-label="June Henry Homes — Home">' +
            logo(false) +
          '</a>' +
          '<p>Luxury extended living in Jamaica for stays of one month or longer.</p>' +
        '</div>' +
        '<div class="footer-col footer-explore">' +
          '<h4>Explore</h4>' +
          '<ul>' + footerExplore.map(function (l) { return '<li><a href="' + l.href + '">' + l.label + '</a></li>'; }).join('') + '</ul>' +
        '</div>' +
        '<div class="footer-col">' +
          '<h4>Connect</h4>' +
          '<ul>' +
            '<li><a href="' + PHONE_HREF + '">' + PHONE + '</a></li>' +
            '<li><a href="mailto:' + EMAIL + '">' + EMAIL + '</a></li>' +
          '</ul>' +
          '<div class="socials">' +
            '<a href="#" aria-label="Instagram">' + icons.instagram + '</a>' +
            '<a href="#" aria-label="Facebook">' + icons.facebook + '</a>' +
            '<a href="#" aria-label="LinkedIn">' + icons.linkedin + '</a>' +
          '</div>' +
        '</div>' +
      '</div>' +
      '<div class="footer-wordmark" aria-hidden="true">June Henry</div>' +
      '<div class="footer-bottom">' +
        '<strong>June Henry Homes · St. Ann, Jamaica</strong>' +
        '<span>© <span data-year></span> June Henry Homes. All rights reserved.</span>' +
      '</div>' +
    '</footer>' +
    '<a class="to-top" href="#main" aria-label="Back to top"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M12 19V5M6 11l6-6 6 6"/></svg></a>';

  var headerSlot = document.getElementById('site-header');
  var footerSlot = document.getElementById('site-footer');
  if (headerSlot) headerSlot.outerHTML = headerHTML;
  if (footerSlot) footerSlot.outerHTML = footerHTML;
})();

/* ==========================================================================
   June Henry Homes — Interactions & animations (vanilla JavaScript)
   ========================================================================== */
(function () {
  'use strict';

  var root = document.documentElement;
  root.classList.remove('no-js');
  root.classList.add('js');

  var body = document.body;
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); }
  function clamp(v, min, max) { return Math.min(max, Math.max(min, v)); }

  /* ---------- Footer year ---------- */
  $$('[data-year]').forEach(function (el) { el.textContent = new Date().getFullYear(); });

  /* ---------- Image fallback: keep the soft gradient if a photo fails ---------- */
  $$('img').forEach(function (img) {
    function fail() { img.style.opacity = '0'; }
    if (img.complete && img.naturalWidth === 0 && img.getAttribute('src')) fail();
    img.addEventListener('error', fail);
  });

  /* ---------- Preloader (first visit per session) ---------- */
  var preloader = $('.preloader');
  function markLoaded() {
    if (body.classList.contains('is-loaded')) return;
    body.classList.add('is-loaded');
    if (preloader) preloader.classList.add('is-done');
  }
  if (preloader) {
    var seen = false;
    try {
      seen = sessionStorage.getItem('jhh-loaded') === '1';
      sessionStorage.setItem('jhh-loaded', '1');
    } catch (e) { /* storage unavailable */ }
    if (seen || reduceMotion) {
      preloader.style.display = 'none';
      requestAnimationFrame(markLoaded);
    } else {
      var start = Date.now();
      var finish = function () { setTimeout(markLoaded, Math.max(0, 1500 - (Date.now() - start))); };
      if (document.readyState === 'complete') finish(); else window.addEventListener('load', finish);
      setTimeout(markLoaded, 3200);
    }
  } else {
    requestAnimationFrame(function () { requestAnimationFrame(markLoaded); });
  }

  /* ---------- Mobile menu ---------- */
  var toggle = $('.menu-toggle');
  var menu = $('#mobileMenu');
  function setMenu(open) {
    body.classList.toggle('menu-open', open);
    if (toggle) {
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }
    if (menu) menu.setAttribute('aria-hidden', String(!open));
  }
  if (toggle) toggle.addEventListener('click', function () { setMenu(!body.classList.contains('menu-open')); });
  if (menu) $$('a', menu).forEach(function (a) { a.addEventListener('click', function () { setMenu(false); }); });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && body.classList.contains('menu-open')) {
      setMenu(false);
      if (toggle) toggle.focus();
    }
  });
  window.addEventListener('resize', function () {
    if (window.innerWidth > 1180 && body.classList.contains('menu-open')) setMenu(false);
  });

  /* ---------- Split headings into animated words ---------- */
  $$('[data-split]').forEach(function (el) {
    var i = 0;
    function wrap(content, isElement) {
      var w = document.createElement('span');
      w.className = isElement ? 'w w-el' : 'w';
      var inner = document.createElement('span');
      inner.style.setProperty('--w', i++);
      if (isElement) inner.appendChild(content); else inner.textContent = content;
      w.appendChild(inner);
      return w;
    }
    Array.prototype.slice.call(el.childNodes).forEach(function (child) {
      if (child.nodeType === 3) {
        var frag = document.createDocumentFragment();
        child.textContent.split(/(\s+)/).forEach(function (part) {
          if (!part) return;
          if (/^\s+$/.test(part)) frag.appendChild(document.createTextNode(' '));
          else frag.appendChild(wrap(part, false));
        });
        el.replaceChild(frag, child);
      } else if (child.nodeType === 1 && child.tagName !== 'BR') {
        var placeholder = document.createComment('');
        el.replaceChild(placeholder, child);
        el.replaceChild(wrap(child, true), placeholder);
      }
    });
    el.classList.add('reveal');
  });

  /* ---------- Reveal on scroll ---------- */
  var revealEls = $$('.reveal, .reveal-mask');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0, rootMargin: '0px 0px -10% 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ---------- Scroll-scrubbed text (words light up as you scroll) ---------- */
  var scrubItems = $$('[data-scrub]').map(function (el) {
    var words = [];
    (function walk(node) {
      Array.prototype.slice.call(node.childNodes).forEach(function (child) {
        if (child.nodeType === 3) {
          var frag = document.createDocumentFragment();
          child.textContent.split(/(\s+)/).forEach(function (part) {
            if (!part) return;
            if (/^\s+$/.test(part)) { frag.appendChild(document.createTextNode(part)); return; }
            var s = document.createElement('span');
            s.className = 'sw';
            s.textContent = part;
            words.push(s);
            frag.appendChild(s);
          });
          node.replaceChild(frag, child);
        } else if (child.nodeType === 1) {
          walk(child);
        }
      });
    })(el);
    if (reduceMotion) words.forEach(function (w) { w.classList.add('on'); });
    return { el: el, words: words };
  });
  function updateScrub(vh) {
    if (reduceMotion) return;
    scrubItems.forEach(function (item) {
      var r = item.el.getBoundingClientRect();
      if (r.bottom < -200 || r.top > vh + 200) return;
      var p = clamp((vh * 0.88 - r.top) / (r.height + vh * 0.38), 0, 1);
      var count = Math.round(p * item.words.length);
      item.words.forEach(function (w, i) { w.classList.toggle('on', i < count); });
    });
  }

  /* ---------- Parallax images ---------- */
  var parallaxEls = $$('[data-parallax]');
  function updateParallax(vh) {
    parallaxEls.forEach(function (el) {
      var r = el.getBoundingClientRect();
      if (r.bottom < 0 || r.top > vh) return;
      var speed = parseFloat(el.getAttribute('data-parallax')) || 0.15;
      var offset = (r.top + r.height / 2 - vh / 2) * -speed;
      var img = el.querySelector('img') || el;
      img.style.setProperty('--py', offset.toFixed(1) + 'px');
    });
  }

  /* ---------- Stacking collection cards ---------- */
  var stackCards = $$('.stack-card');
  function updateStack() {
    if (window.innerWidth <= 900) return;
    stackCards.forEach(function (card, i) {
      var next = stackCards[i + 1];
      if (!next) return;
      var gap = next.getBoundingClientRect().top - card.getBoundingClientRect().top;
      var overlap = clamp(1 - gap / card.offsetHeight, 0, 1);
      card.style.setProperty('--sc', (1 - overlap * 0.06).toFixed(4));
    });
  }

  /* ---------- Header state, progress bar, back-to-top ---------- */
  var header = $('#siteHeader');
  var progress = $('.scroll-progress');
  var toTop = $('.to-top');
  var lastY = window.pageYOffset;
  var ticking = false;

  function onScroll() {
    var y = window.pageYOffset;
    var vh = window.innerHeight;
    if (header) {
      header.classList.toggle('is-scrolled', y > 40);
      if (!body.classList.contains('menu-open')) {
        if (y > 520 && y - lastY > 4) header.classList.add('is-hidden');
        else if (lastY - y > 4 || y < 520) header.classList.remove('is-hidden');
      }
    }
    if (progress) {
      var max = document.documentElement.scrollHeight - vh;
      progress.style.transform = 'scaleX(' + (max > 0 ? clamp(y / max, 0, 1) : 0) + ')';
    }
    if (toTop) toTop.classList.toggle('is-visible', y > vh * 0.9);
    if (!reduceMotion) {
      updateParallax(vh);
      updateStack();
    }
    updateScrub(vh);
    lastY = y;
    ticking = false;
  }
  function requestTick() {
    if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
  }
  window.addEventListener('scroll', requestTick, { passive: true });
  window.addEventListener('resize', requestTick);
  if (header) header.addEventListener('focusin', function () { header.classList.remove('is-hidden'); });
  onScroll();

  /* ---------- Tabs with sliding indicator ---------- */
  $$('[data-tabs]').forEach(function (group) {
    var list = $('[role="tablist"]', group);
    var tabs = $$('[role="tab"]', group);
    if (!list || !tabs.length) return;
    var indicator = document.createElement('span');
    indicator.className = 'tab-indicator';
    indicator.setAttribute('aria-hidden', 'true');
    list.insertBefore(indicator, list.firstChild);

    function place(tab) {
      indicator.style.width = tab.offsetWidth + 'px';
      indicator.style.height = tab.offsetHeight + 'px';
      indicator.style.transform = 'translate(' + tab.offsetLeft + 'px,' + tab.offsetTop + 'px)';
    }
    function activate(tab, focus) {
      tabs.forEach(function (t) {
        var on = t === tab;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', String(on));
        t.tabIndex = on ? 0 : -1;
        var panel = document.getElementById(t.getAttribute('aria-controls'));
        if (panel) {
          panel.classList.toggle('is-active', on);
          if (on) $$('.reveal, .reveal-mask', panel).forEach(function (el) { el.classList.add('is-visible'); });
        }
      });
      place(tab);
      if (focus) tab.focus();
    }
    tabs.forEach(function (t, i) {
      t.addEventListener('click', function () { activate(t); });
      t.addEventListener('keydown', function (e) {
        var n = null;
        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') n = tabs[(i + 1) % tabs.length];
        if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') n = tabs[(i - 1 + tabs.length) % tabs.length];
        if (e.key === 'Home') n = tabs[0];
        if (e.key === 'End') n = tabs[tabs.length - 1];
        if (n) { e.preventDefault(); activate(n, true); }
      });
    });

    var initial = tabs.filter(function (t) { return t.classList.contains('is-active'); })[0] || tabs[0];
    indicator.style.transition = 'none';
    activate(initial);
    void indicator.offsetWidth;
    indicator.style.transition = '';

    function replace() {
      var current = tabs.filter(function (t) { return t.classList.contains('is-active'); })[0];
      if (current) place(current);
    }
    window.addEventListener('resize', replace);
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(replace);
  });

  /* ---------- FAQ accordion ---------- */
  $$('.faq-item').forEach(function (item, idx) {
    var btn = $('.faq-q', item);
    var answer = $('.faq-a', item);
    if (!btn || !answer) return;
    if (!answer.id) answer.id = 'faq-answer-' + idx;
    if (!btn.id) btn.id = 'faq-question-' + idx;
    btn.setAttribute('aria-controls', answer.id);
    btn.setAttribute('aria-expanded', String(item.classList.contains('is-open')));
    answer.setAttribute('role', 'region');
    answer.setAttribute('aria-labelledby', btn.id);

    btn.addEventListener('click', function () {
      var open = !item.classList.contains('is-open');
      var group = item.closest('[data-accordion]');
      if (open && group && group.getAttribute('data-accordion') === 'single') {
        $$('.faq-item.is-open', group).forEach(function (other) {
          if (other === item) return;
          other.classList.remove('is-open');
          var ob = $('.faq-q', other);
          if (ob) ob.setAttribute('aria-expanded', 'false');
        });
      }
      item.classList.toggle('is-open', open);
      btn.setAttribute('aria-expanded', String(open));
    });
  });

  /* ---------- FAQ live search ---------- */
  var faqSearch = $('[data-faq-search]');
  if (faqSearch) {
    var faqEmpty = $('[data-faq-empty]');
    faqSearch.addEventListener('input', function () {
      var term = faqSearch.value.trim().toLowerCase();
      var matches = 0;
      $$('[data-faq-group]').forEach(function (group) {
        var groupMatches = 0;
        $$('.faq-item', group).forEach(function (item) {
          var hit = !term || item.textContent.toLowerCase().indexOf(term) !== -1;
          item.hidden = !hit;
          if (hit) groupMatches++;
        });
        group.hidden = groupMatches === 0;
        matches += groupMatches;
      });
      if (faqEmpty) faqEmpty.hidden = matches !== 0;
    });
  }

  /* ---------- Category filter (journal) ---------- */
  $$('[data-filter-group]').forEach(function (group) {
    var buttons = $$('[data-filter]', group);
    var items = $$('[data-category]', document.getElementById(group.getAttribute('data-filter-group')));
    buttons.forEach(function (b) {
      b.addEventListener('click', function () {
        var cat = b.getAttribute('data-filter');
        buttons.forEach(function (x) {
          var on = x === b;
          x.classList.toggle('is-active', on);
          x.setAttribute('aria-pressed', String(on));
        });
        items.forEach(function (item) {
          var show = cat === 'all' || item.getAttribute('data-category').split(' ').indexOf(cat) !== -1;
          item.hidden = !show;
          if (show) {
            item.classList.remove('pop-in');
            void item.offsetWidth;
            item.classList.add('pop-in');
          }
        });
      });
    });
  });

  /* ---------- Cursor glow on cards ---------- */
  if (finePointer && !reduceMotion) {
    $$('[data-glow]').forEach(function (card) {
      card.addEventListener('mousemove', function (e) {
        var r = card.getBoundingClientRect();
        card.style.setProperty('--mx', (e.clientX - r.left) + 'px');
        card.style.setProperty('--my', (e.clientY - r.top) + 'px');
      });
    });
  }

  /* ---------- Animated counters ---------- */
  var counters = $$('[data-count]');
  if (counters.length) {
    var runCounter = function (el) {
      var target = parseFloat(el.getAttribute('data-count'));
      if (reduceMotion) { el.textContent = target; return; }
      var t0 = null;
      var dur = 1800;
      function step(ts) {
        if (!t0) t0 = ts;
        var p = clamp((ts - t0) / dur, 0, 1);
        var eased = 1 - Math.pow(1 - p, 4);
        el.textContent = Math.round(target * eased);
        if (p < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    };
    if ('IntersectionObserver' in window) {
      var cio = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) { runCounter(entry.target); cio.unobserve(entry.target); }
        });
      }, { threshold: 0.6 });
      counters.forEach(function (c) { cio.observe(c); });
    } else {
      counters.forEach(runCounter);
    }
  }

  /* ---------- Inquiry form (opens the guest's email app, no server needed) ---------- */
  var form = $('[data-inquiry-form]');
  if (form) {
    var status = $('[data-form-status]', form);
    var fields = $$('input, select, textarea', form);
    fields.forEach(function (f) {
      f.addEventListener('input', function () {
        var wrap = f.closest('.field');
        if (wrap) wrap.classList.remove('has-error');
      });
    });
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var firstInvalid = null;
      $$('[required]', form).forEach(function (f) {
        var value = (f.value || '').trim();
        var ok = f.type === 'checkbox' ? f.checked
          : f.type === 'email' ? /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
          : value !== '';
        var wrap = f.closest('.field');
        if (wrap) wrap.classList.toggle('has-error', !ok);
        if (!ok && !firstInvalid) firstInvalid = f;
      });
      if (firstInvalid) {
        firstInvalid.focus();
        if (status) { status.textContent = 'Please complete the highlighted fields.'; status.className = 'form-status is-error'; }
        return;
      }
      var lines = [];
      fields.forEach(function (f) {
        if (!f.name || ((f.type === 'checkbox' || f.type === 'radio') && !f.checked)) return;
        var value = (f.value || '').trim();
        if (f.tagName === 'SELECT' && f.selectedIndex > -1) value = f.options[f.selectedIndex].text.trim();
        if (!value) return;
        var labelText = f.name;
        var set = f.type === 'radio' ? f.closest('fieldset') : null;
        var legend = set ? set.querySelector('legend') : null;
        var label = f.id ? form.querySelector('label[for="' + f.id + '"]') : null;
        if (legend) labelText = legend.textContent;
        else if (label) labelText = label.textContent;
        lines.push(labelText.replace('*', '').trim() + ': ' + value);
      });
      var nameField = form.querySelector('[name="name"]');
      var subject = 'Extended Stay Inquiry' + (nameField && nameField.value ? ' — ' + nameField.value.trim() : '');
      var mail = 'mailto:info@junehenryhomes.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(lines.join('\n'));
      if (status) {
        status.textContent = 'Thank you. Your email app is opening with your inquiry ready to send. You can also call 718-541-0372.';
        status.className = 'form-status is-success';
      }
      window.location.href = mail;
    });
  }
})();

/* ---------- Scrollspy for in-page navigation (FAQ page) ---------- */
(function () {
  'use strict';
  var links = Array.prototype.slice.call(document.querySelectorAll('[data-scrollspy] a[href^="#"]'));
  if (!links.length || !('IntersectionObserver' in window)) return;
  var map = {};
  links.forEach(function (a) {
    var target = document.getElementById(a.getAttribute('href').slice(1));
    if (target) map[target.id] = a;
  });
  var spy = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      links.forEach(function (l) { l.classList.remove('is-current'); });
      if (map[entry.target.id]) map[entry.target.id].classList.add('is-current');
    });
  }, { rootMargin: '-30% 0px -60% 0px' });
  Object.keys(map).forEach(function (id) { spy.observe(document.getElementById(id)); });
})();

/* ---------- Preselect a collection when arriving from an "Inquire" button ---------- */
(function () {
  'use strict';
  var select = document.querySelector('[data-inquiry-form] [name="collection"]');
  if (!select) return;
  var match = /[?&]collection=([^&#]+)/.exec(window.location.search);
  if (!match) return;
  var value = decodeURIComponent(match[1]);
  Array.prototype.forEach.call(select.options, function (o) { if (o.value === value) select.value = value; });
})();

/* ============================================================
   KUTUNGA DIGITAL — MAIN.JS
   Animations | Carousel | Counters | Mobile Menu | Navbar
   ============================================================ */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    /* ── STICKY NAVBAR ── */
    const navbar = document.getElementById('navbar');
    if (navbar) {
      const handleScroll = () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
      };
      window.addEventListener('scroll', handleScroll, { passive: true });
      handleScroll();
    }

    /* ── MOBILE MENU ── */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('open');
        hamburger.classList.toggle('open', isOpen);
        hamburger.setAttribute('aria-expanded', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
      });

      mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.remove('open');
          hamburger.classList.remove('open');
          hamburger.setAttribute('aria-expanded', 'false');
          document.body.style.overflow = '';
        });
      });
    }

    /* ── SCROLL REVEAL ── */
    const revealEls = document.querySelectorAll('.reveal');
    if (revealEls.length > 0) {
      const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });

      revealEls.forEach(el => revealObserver.observe(el));
    }

    /* ── COUNTER ANIMATION ── */
    const counterEls = document.querySelectorAll('[data-count]');
    if (counterEls.length > 0) {
      const easeOutCubic = t => 1 - Math.pow(1 - t, 3);

      function animateCount(el) {
        const target = parseFloat(el.getAttribute('data-count'));
        const prefix = el.getAttribute('data-prefix') || '';
        const suffix = el.getAttribute('data-suffix') || '';
        const decimals = el.getAttribute('data-decimals') || 0;
        const duration = 2200;
        const startTime = performance.now();

        function tick(now) {
          const elapsed = now - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const current = easeOutCubic(progress) * target;
          el.textContent = prefix + current.toFixed(decimals) + suffix;
          if (progress < 1) requestAnimationFrame(tick);
          else el.textContent = prefix + target.toFixed(decimals) + suffix;
        }

        requestAnimationFrame(tick);
      }

      const countObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !entry.target.dataset.counted) {
            entry.target.dataset.counted = '1';
            animateCount(entry.target);
            countObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.4 });

      counterEls.forEach(el => countObserver.observe(el));
    }

    /* ── SERVICES CAROUSEL ── */
    const viewport = document.getElementById('carouselViewport');
    const track = document.getElementById('carouselTrack');
    if (viewport && track) {
      const cards = track.querySelectorAll('.svc-card');
      const prevBtn = document.getElementById('carouselPrev');
      const nextBtn = document.getElementById('carouselNext');
      const dotsWrap = document.getElementById('carouselDots');
      const gap = 24;
      let idx = 0;

      function getVisible() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 1024) return 2;
        return 3;
      }

      function cardWidth() {
        const visible = getVisible();
        return (viewport.offsetWidth - (gap * (visible - 1))) / visible;
      }

      function maxIdx() {
        return Math.max(0, cards.length - getVisible());
      }

      function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        const count = maxIdx() + 1;
        for (let i = 0; i < count; i++) {
          const dot = document.createElement('button');
          dot.className = 'dot' + (i === 0 ? ' active' : '');
          dot.setAttribute('aria-label', 'Ir para slide ' + (i + 1));
          dot.addEventListener('click', () => goTo(i));
          dotsWrap.appendChild(dot);
        }
      }

      function updateDots() {
        if (!dotsWrap) return;
        dotsWrap.querySelectorAll('.dot').forEach((d, i) => {
          d.classList.toggle('active', i === idx);
        });
      }

      function setCardWidths() {
        const w = cardWidth();
        cards.forEach(c => { c.style.width = w + 'px'; });
      }

      function goTo(i) {
        idx = Math.max(0, Math.min(i, maxIdx()));
        const w = cardWidth();
        track.style.transform = `translateX(-${idx * (w + gap)}px)`;
        updateDots();
        if (prevBtn) prevBtn.disabled = idx === 0;
        if (nextBtn) nextBtn.disabled = idx >= maxIdx();
      }

      function init() {
        setCardWidths();
        buildDots();
        goTo(0);
      }

      if (prevBtn) prevBtn.addEventListener('click', () => goTo(idx - 1));
      if (nextBtn) nextBtn.addEventListener('click', () => goTo(idx + 1));

      /* Touch swipe */
      let touchX = 0;
      track.addEventListener('touchstart', e => { touchX = e.touches[0].clientX; }, { passive: true });
      track.addEventListener('touchend', e => {
        const diff = touchX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) goTo(diff > 0 ? idx + 1 : idx - 1);
      }, { passive: true });

      let resizeTimer;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => { init(); }, 120);
      });

      init();
    }

    /* ── ACTIVE NAV LINK ── */
    const path = window.location.pathname.split('/').pop() || 'index.html';
    document.querySelectorAll('.navbar-nav a, .mobile-menu a').forEach(link => {
      const href = (link.getAttribute('href') || '').split('/').pop();
      const isHome = (!href || href === 'index.html') && (!path || path === 'index.html');
      if (href === path || isHome) link.classList.add('active');
    });

    /* ── SMOOTH ANCHOR SCROLL ── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          const navH = navbar ? navbar.offsetHeight : 0;
          const top = target.getBoundingClientRect().top + window.scrollY - navH - 20;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      });
    });

    /* ── CONTACT FORM (EmailJS) ── */
    const contactForm = document.getElementById('contactForm');
    const formStatus = document.getElementById('formStatus');
    const submitBtn = document.getElementById('submitFormBtn');

    if (contactForm && submitBtn) {
      contactForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Basic validation
        if (!contactForm.checkValidity()) {
          contactForm.reportValidity();
          return;
        }

        // Visual feedback
        const btnText = document.getElementById('btnText');
        const originalText = btnText ? btnText.textContent : 'Enviar mensagem';
        if (btnText) btnText.textContent = 'Enviando...';
        submitBtn.disabled = true;

        // EmailJS implementation
        // NOTE: The service and template IDs should be configured in EmailJS dashboard
        // and passed here. I'll use placeholders that the user might need to update.
        const serviceID = 'default_service';
        const templateID = 'template_kutunga'; // Suggested name

        emailjs.sendForm(serviceID, templateID, this)
          .then(() => {
            if (formStatus) {
              formStatus.innerHTML = `
                <div class="form-alert form-alert-success" role="alert">
                  <strong>🎉 Mensagem enviada com sucesso!</strong><br>
                  Entraremos em contacto em menos de 24 horas.
                </div>
              `;
            }
            contactForm.reset();
          }, (err) => {
            console.error('EmailJS Error:', err);
            if (formStatus) {
              formStatus.innerHTML = `
                <div class="form-alert form-alert-error" role="alert">
                  <strong>Erro ao enviar a mensagem.</strong><br>
                  Por favor tente novamente ou contacte-nos directamente via WhatsApp.
                </div>
              `;
            }
          })
          .finally(() => {
            if (btnText) btnText.textContent = originalText;
            submitBtn.disabled = false;
          });
      });
    }

  });
})();

/* ===== MAIN JS — Dr. Khalid Website ===== */

document.addEventListener('DOMContentLoaded', () => {



  /* ---------- Mobile Menu ---------- */
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');
  const navCta    = document.getElementById('navCta');

  if (hamburger) {
    hamburger.addEventListener('click', () => {
      if (navLinks) {
        const open = navLinks.classList.toggle('mobile-open');
        hamburger.classList.toggle('open', open);
        if (navCta) navCta.style.display = open ? 'none' : '';
      }
    });
  }

  if (navLinks) {
    // Close menu on link click
    navLinks.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        navLinks.classList.remove('mobile-open');
        if (hamburger) hamburger.classList.remove('open');
      });
    });
  }

  /* ---------- Smooth Scroll ---------- */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ---------- Scroll Fade-In ---------- */
  const fadeEls = document.querySelectorAll(
    '.hero-content, .hero-img-col, .stats-inner, .service-card, ' +
    '.article-card, .review-card, .faq-item, .faq-header'
  );
  fadeEls.forEach(el => el.classList.add('fade-in'));

  const io = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        en.target.classList.add('visible');
        io.unobserve(en.target);
      }
    });
  }, { threshold: 0.12 });

  fadeEls.forEach(el => io.observe(el));

  /* ---------- FAQ Accordion ---------- */
  document.querySelectorAll('.faq-q').forEach(btn => {
    btn.addEventListener('click', () => {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      // Close all
      document.querySelectorAll('.faq-q').forEach(b => {
        b.setAttribute('aria-expanded', 'false');
        b.closest('.faq-item').classList.remove('active-item');
        const panel = document.getElementById(b.getAttribute('aria-controls'));
        if (panel) panel.classList.remove('open');
      });
      // Open clicked if it was closed
      if (!expanded) {
        btn.setAttribute('aria-expanded', 'true');
        btn.closest('.faq-item').classList.add('active-item');
        const panel = document.getElementById(btn.getAttribute('aria-controls'));
        if (panel) panel.classList.add('open');
      }
    });
  });

  /* ---------- Reviews Slider ---------- */
  const reviews = (window.dynamicReviews && window.dynamicReviews.length > 0) ? window.dynamicReviews : [
    {
      name: 'اسم العميل',
      handle: '@Username',
      stars: 5,
      score: '4.5',
      text: '"خدمة مميزة واسعارها مرة مناسبة وكمان رعاية تصلح، انصح أحبائكم بالاهتمام حقهم مبررة حلوة، بشكل عام مرة كويس وخدمة ممتازة شكرا لكم 🤝😊❤️"'
    }
  ];

  let currentReview = 0;
  const totalReviews = reviews.length;
  const slideCounter = document.getElementById('currentSlide');
  const reviewCard   = document.getElementById('reviewCard');
  const prevBtn      = document.getElementById('prevReview');
  const nextBtn      = document.getElementById('nextReview');

  function renderReview(idx) {
    const r = reviews[idx];
    if (!reviewCard) return;
    reviewCard.style.opacity = '0';
    reviewCard.style.transform = 'translateY(10px)';
    setTimeout(() => {
      const starsStr = '★'.repeat(r.stars) + '☆'.repeat(5 - r.stars);
      reviewCard.innerHTML = `
        <div class="review-card-header">
          <div class="review-card-right">
            <div class="review-card-info">
              <strong class="reviewer-name">${r.name}</strong>
              <span class="reviewer-handle">${r.handle}</span>
            </div>
            <div class="reviewer-avatar">
              ${r.avatar ? `<img src="${r.avatar}" alt="${r.name}">` : ''}
            </div>
          </div>
          <div class="review-card-left">
            <span class="review-card-score">${r.score} review</span>
            <div class="review-card-stars">${starsStr}</div>
          </div>
        </div>
        <div class="review-content-wrap">
          <blockquote class="review-text">${r.text}</blockquote>
        </div>
      `;


      reviewCard.style.opacity = '1';
      reviewCard.style.transform = 'translateY(0)';
    }, 220);
    if (slideCounter) {
      slideCounter.textContent = String(idx + 1).padStart(2, '0');
    }
  }

  if (reviewCard) {
    reviewCard.style.transition = 'opacity 0.22s ease, transform 0.22s ease';
    renderReview(0);

    nextBtn && nextBtn.addEventListener('click', () => {
      currentReview = (currentReview + 1) % totalReviews;
      renderReview(currentReview);
    });
    prevBtn && prevBtn.addEventListener('click', () => {
      currentReview = (currentReview - 1 + totalReviews) % totalReviews;
      renderReview(currentReview);
    });

    // Auto-slide every 5s
    let autoSlide = setInterval(() => {
      currentReview = (currentReview + 1) % totalReviews;
      renderReview(currentReview);
    }, 5000);

    [prevBtn, nextBtn].forEach(btn => {
      btn && btn.addEventListener('click', () => {
        clearInterval(autoSlide);
        autoSlide = setInterval(() => {
          currentReview = (currentReview + 1) % totalReviews;
          renderReview(currentReview);
        }, 5000);
      });
    });
  }

  /* ---------- Email Subscribe ---------- */
  const subscribeBtn = document.getElementById('subscribeBtn');
  const emailInput   = document.getElementById('emailInput');

  subscribeBtn && subscribeBtn.addEventListener('click', () => {
    const val = emailInput ? emailInput.value.trim() : '';
    if (!val || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
      emailInput.style.borderBottom = '2px solid #ff6b6b';
      emailInput.placeholder = 'يرجى إدخال بريد إلكتروني صحيح';
      return;
    }
    subscribeBtn.textContent = 'تم الاشتراك ✓';
    subscribeBtn.style.background = '#27ae60';
    subscribeBtn.disabled = true;
    emailInput.value = '';
  });

  /* ---------- Active Nav Link on Scroll ---------- */
  const sections = document.querySelectorAll('section[id]');
  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(sec => {
      if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
    });
    document.querySelectorAll('.nav-links a').forEach(a => {
      a.style.color = a.getAttribute('href') === `#${current}` ? 'var(--teal)' : '';
    });
  });

  /* ---------- Number Counter ---------- */
  const counters = document.querySelectorAll('.counter');
  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
        entry.target.classList.add('counted');
        
        const counter = entry.target;
        const target = +counter.getAttribute('data-target');
        const isK = counter.hasAttribute('data-format-k');
        
        const duration = 2000;
        const start = performance.now();
        
        const updateCounter = (currentTime) => {
          const elapsedTime = currentTime - start;
          const progress = Math.min(elapsedTime / duration, 1);
          
          const easeOut = 1 - Math.pow(1 - progress, 4);
          let currentVal = Math.ceil(easeOut * target);
          
          if (progress === 1 && isK) {
            counter.innerText = (target / 1000) + 'K';
          } else {
            counter.innerText = currentVal;
          }
          
          if (progress < 1) {
            requestAnimationFrame(updateCounter);
          }
        };
        requestAnimationFrame(updateCounter);
      }
    });
  }, { threshold: 0.5 });
  
  counters.forEach(c => counterObserver.observe(c));

});

window.addEventListener('load', function() { const preloader = document.getElementById('preloader'); if (preloader) { preloader.classList.add('fade-out'); setTimeout(() => { preloader.style.display = 'none'; }, 500); } });

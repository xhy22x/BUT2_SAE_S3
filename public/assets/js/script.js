// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    if (href !== '#') {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    }
  });
});

// Animation au scroll
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
    }
  });
}, observerOptions);

document.querySelectorAll('.opportunity-card, .testimonial-card, .stat-item').forEach(el => {
  observer.observe(el);
});

// Pause animation au hover
const partnersTrack = document.querySelector('.partners-track');
if (partnersTrack) {
  partnersTrack.addEventListener('mouseenter', () => {
    partnersTrack.style.animationPlayState = 'paused';
  });
  partnersTrack.addEventListener('mouseleave', () => {
    partnersTrack.style.animationPlayState = 'running';
  });
}

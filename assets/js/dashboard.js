(function () {
  "use strict";

  // Toggle class saat scroll: tambahkan .scrolled ke <body> jika scroll > 100px
  function toggleScrolled() {
    const body = document.querySelector('body');
    const header = document.querySelector('#header');
    if (!header) return;
    if (window.scrollY > 100) {
      body.classList.add('scrolled');
    } else {
      body.classList.remove('scrolled');
    }
  }

  window.addEventListener('load', toggleScrolled);
  document.addEventListener('scroll', toggleScrolled);

  // Tombol nav toggle mobile
  const navToggle = document.querySelector('.mobile-nav-toggle');
  if (navToggle) {
    navToggle.addEventListener('click', function () {
      document.body.classList.toggle('mobile-nav-active');
      this.classList.toggle('bi-list');
      this.classList.toggle('bi-x');
    });
  }

  // Tutup nav mobile jika link diklik
  document.querySelectorAll('#navmenu a').forEach(link => {
    link.addEventListener('click', () => {
      if (document.body.classList.contains('mobile-nav-active')) {
        document.body.classList.remove('mobile-nav-active');
        navToggle?.classList.toggle('bi-list');
        navToggle?.classList.toggle('bi-x');
      }
    });
  });

  // Tombol scroll to top
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    function toggleScrollTop() {
      if (window.scrollY > 100) {
        scrollTop.classList.add('active');
      } else {
        scrollTop.classList.remove('active');
      }
    }

    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }

})();

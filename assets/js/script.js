
/*Dropdown Menu*/
document.addEventListener('DOMContentLoaded', function () {
  const triggers = document.querySelectorAll('.menu-trigger');
  const overlay = document.getElementById('bgOverlay');
  const allMenus = document.querySelectorAll('.mega-dropdown');
  const menuLinks = document.querySelectorAll('.mega-dropdown a');

  function closeAll() {
    allMenus.forEach(menu => menu.classList.remove('is-open'));
    if (overlay) overlay.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  triggers.forEach(trigger => {
    trigger.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('data-target');
      const targetMenu = document.getElementById(targetId);
      if (!targetMenu) return;

      if (targetMenu.classList.contains('is-open')) {
        closeAll();
      } else {
        allMenus.forEach(m => m.classList.remove('is-open'));
        targetMenu.classList.add('is-open');
        if (overlay) overlay.classList.add('is-open');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  /* ---- mega-left tab switching (data-target -> mega-content) ---- */
  const servicesMenu = document.getElementById('servicesMenu');
  if (servicesMenu) {
    const leftItems = servicesMenu.querySelectorAll('.mega-left li');
    const panels = servicesMenu.querySelectorAll('.mega-content');

    function switchPanel(item) {
      const target = item.getAttribute('data-target');
      leftItems.forEach(li => li.classList.remove('active'));
      item.classList.add('active');
      panels.forEach(p => {
        p.classList.toggle('active', p.id === target);
      });
    }

    leftItems.forEach(item => {
      item.addEventListener('click', function (e) { e.stopPropagation(); switchPanel(this); });
    });
  }

  /* ---- Close on link click / overlay / ESC ---- */
  menuLinks.forEach(link => link.addEventListener('click', closeAll));
  if (overlay) overlay.addEventListener('click', closeAll);
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeAll(); });
});
/*Dropdown Menu End*/


/*Header Sticky*/
document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('header');
  if (!header) return;

  let headerHeight = header.offsetHeight;

  // Create spacer
  const spacer = document.createElement('div');
  spacer.style.height = headerHeight + 'px';
  spacer.style.display = 'none';
  header.after(spacer);

  function handleScroll() {
    if (window.scrollY > 50) {
      if (!header.classList.contains('is-sticky')) {
        header.classList.add('is-sticky');
        spacer.style.display = 'block'; // prevent layout jump
      }
    } else {
      header.classList.remove('is-sticky');
      spacer.style.display = 'none';
    }
  }

  window.addEventListener('scroll', handleScroll);

  // Recalculate only on resize
  window.addEventListener('resize', function () {
    headerHeight = header.offsetHeight;
    spacer.style.height = headerHeight + 'px';
  });
});
/*Header Sticky End*/


$(document).ready(function () {

  /* Client Testimonial Slider */
  $('.client-testi-slider').slick({
    slidesToShow: 1.6,
    slidesToScroll: 1,
    autoplay: true,
    autoplay: 2000,
    speed: 1000,
    infinite: true,
    pauseOnHover: false,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });


  /* Client Testimonial Slider */
  $('.area-services-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
  cssEase: 'ease-in-out',
    pauseOnHover: false,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('.testimonial-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $('.related-links-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1300,
    pauseOnHover: false,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

});


/*Counter*/
document.addEventListener("DOMContentLoaded", function () {

    const elements = document.querySelectorAll(".counter, .fraction-counter");

    const animate = (el) => {

        // FRACTION COUNTER
        if (el.classList.contains("fraction-counter")) {

            const target = parseInt(el.getAttribute("data-target"));
            let count = 1;
            const duration = 2000;
            const increment = target / (duration / 16);

            const updateFraction = () => {
                count += increment;

                if (count < target) {
                    el.innerText = "1/" + Math.floor(count);
                    requestAnimationFrame(updateFraction);
                } else {
                    el.innerText = "1/" + target;
                }
            };

            updateFraction();
        }

        // NORMAL NUMBER COUNTER
        else {

            const target = parseFloat(el.getAttribute("data-target"));
            const duration = 2000;
            const increment = target / (duration / 16);
            let count = 0;

            const updateNumber = () => {
                count += increment;

                if (count < target) {
                    el.innerText = count.toFixed(1);
                    requestAnimationFrame(updateNumber);
                } else {
                    el.innerText = target;
                }
            };

            updateNumber();
        }
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animate(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    elements.forEach(el => observer.observe(el));

});
/*Counter*/




/* =========================
   TAB ACTIVE (SAFE)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  const sections = document.querySelectorAll(".taxtion-content section");
  const navItems = document.querySelectorAll(".taxation-nav-tabs li");

  if (navItems.length) {
    navItems[0].classList.add("active");
  }

  if (sections.length && navItems.length) {

    window.addEventListener("scroll", () => {

      let current = "";

      sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.offsetHeight;

        if (window.scrollY >= sectionTop &&
          window.scrollY < sectionTop + sectionHeight) {
          current = section.id;
        }
      });

      navItems.forEach(li => {
        const link = li.querySelector("a");
        if (!link) return;

        li.classList.toggle(
          "active",
          link.getAttribute("href") === `#${current}`
        );
      });

    });
  }
});


/* =========================
   MOBILE MENU (SAFE)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  const isMobile = () => window.innerWidth <= 991;

  const triggers = document.querySelectorAll(".menu-trigger");
  const subMenus = document.querySelectorAll(".mega-dropdown");
  const overlay = document.getElementById("bgOverlay");

  let burger;

  const closeMenu = () => {
    document.body.classList.remove("menu-open");

    subMenus.forEach(menu => {
      menu.classList.remove("active");
      menu.querySelector(".mega-container")?.classList.remove("show-right");
    });

    overlay?.classList.remove("is-open");
  };

  const createHamburger = () => {

    if (!isMobile() || document.querySelector(".mobile-hamburger")) return;

    burger = document.createElement("div");
    burger.className = "mobile-hamburger";
    burger.innerHTML = "<span></span>";

    document.body.appendChild(burger);

    burger.addEventListener("click", () => {
      const isOpen = document.body.classList.toggle("menu-open");

      if (!isOpen) closeMenu();
      else overlay?.classList.add("is-open");
    });
  };

  createHamburger();

  /* CREATE BACK BUTTONS (no click handlers here) */
  triggers.forEach(trigger => {

    const panel = document.getElementById(trigger.dataset.target);
    if (!panel) return;

    if (!panel.querySelector(".mobile-back")) {
      const back = document.createElement("div");
      back.className = "mobile-back";
      back.innerText = "Back";
      panel.prepend(back);
    }

    trigger.addEventListener("click", e => {

      if (!isMobile()) return;

      e.preventDefault();

      subMenus.forEach(menu => {
        menu.classList.remove("active");
        menu.querySelector(".mega-container")?.classList.remove("show-right");
      });

      document.body.classList.add("menu-open");
      panel.classList.add("active");

      overlay?.classList.add("is-open");
    });
  });

  /* ✅ BULLETPROOF BACK BUTTON HANDLER */
  document.addEventListener("click", (e) => {

    const backBtn = e.target.closest(".mobile-back");
    if (!backBtn) return;

    const panel = backBtn.closest(".mega-dropdown");
    if (!panel) return;

    const container = panel.querySelector(".mega-container");

    /* Right panel → slide back */
    if (container?.classList.contains("show-right")) {
      container.classList.remove("show-right");
      return;
    }

    /* Submenu → close submenu only */
    panel.classList.remove("active");

  });

  /* SERVICES SLIDE */
  const servicesMenu = document.getElementById("servicesMenu");

  if (servicesMenu) {

    const container = servicesMenu.querySelector(".mega-container");
    const leftItems = servicesMenu.querySelectorAll(".mega-left li");
    const contents = servicesMenu.querySelectorAll(".mega-content");

    if (container && leftItems.length) {

      leftItems.forEach(item => {
        item.addEventListener("click", () => {

          if (!isMobile()) return;

          const target = item.dataset.target;

          leftItems.forEach(li => li.classList.remove("active"));
          item.classList.add("active");

          contents.forEach(content => {
            content.classList.toggle("active", content.id === target);
          });

          container.classList.add("show-right");
        });
      });
    }
  }

  if (overlay) overlay.addEventListener("click", closeMenu);

  window.addEventListener("resize", () => {
    if (!isMobile()) {
      closeMenu();
      burger?.remove();
      burger = null;
    } else createHamburger();
  });

});


/* =========================
   BOOKING BUTTON HIDE (SAFE)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  const bookBtn = document.querySelector(".book-apt-btn");
  const trigger = document.querySelector("footer");

  if (!bookBtn || !trigger) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      bookBtn.classList.toggle("btn-hidden", entry.isIntersecting);
    });
  });

  observer.observe(trigger);
});


/* =========================
   MOBILE TAB DROPDOWN (SAFE)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  if (window.innerWidth >= 992) return;

  const nav = document.querySelector(".taxation-nav-tabs");
  const ul = nav?.querySelector("ul");

  if (!nav || !ul) return;

  const toggle = document.createElement("div");
  toggle.className = "taxation-mobile-toggle";

  const active = nav.querySelector("li.active a") || nav.querySelector("a");
  if (!active) return;

  toggle.innerHTML = `<span>${active.innerText}</span><i>▼</i>`;
  nav.insertBefore(toggle, ul);

  toggle.addEventListener("click", () => ul.classList.toggle("show"));

  nav.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", function () {
      toggle.querySelector("span").innerText = this.innerText;
      ul.classList.remove("show");
    });
  });
});


/* =========================
   FAQ (SAFE — FIXED CRASH)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  const faqItems = document.querySelectorAll(".faq-item");
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const question = item.querySelector(".faq-question");
    if (!question) return;

    question.addEventListener("click", () => {
      faqItems.forEach(i => i !== item && i.classList.remove("active"));
      item.classList.toggle("active");
    });
  });
});


/* =========================
   ELIGIBILITY (SAFE)
========================= */
document.addEventListener("DOMContentLoaded", () => {

  const button = document.querySelector(".eligibility-submit-btn");
  const selects = document.querySelectorAll(".eligibility-q");
  const followUp = document.querySelector(".followUp");

  if (!button || !selects.length || !followUp) return;

  button.addEventListener("click", () => {

    let showFollowUp = false;

    selects.forEach(select => {
      const value = select.value.toLowerCase();

      if (value === "yes") showFollowUp = true;

      if (select.name === "q6" &&
        (value === "a" || value === "b" || value === "a or b")) {
        showFollowUp = true;
      }
    });

    followUp.style.display = showFollowUp ? "block" : "none";
  });
});




document.addEventListener("DOMContentLoaded", () => {

  document.querySelectorAll(".textrl").forEach(block => {

    const firstPara = block.querySelector("p");
    if (!firstPara) return;

    let afterFirst = false;
    const extras = [];

    [...block.children].forEach(child => {

      if (child === firstPara) {
        afterFirst = true;
        return;
      }

      if (afterFirst) extras.push(child);

    });

    if (!extras.length) return;

    /* Detect meaningful content */
    const hasMeaningfulContent = extras.some(el => {

      // Ignore pure links
      if (el.tagName === "A") return false;

      // Ignore containers that only contain links / svg / icons
      const text = el.textContent.trim();

      const containsOnlyLink =
        el.querySelector("a") &&
        text === el.querySelector("a").textContent.trim();

      if (containsOnlyLink) return false;

      // Ignore empty elements
      if (!text) return false;

      return true;

    });

    if (!hasMeaningfulContent) return;

    /* Wrap extra content */
    const wrapper = document.createElement("div");
    wrapper.className = "extra-content";

    extras.forEach(el => wrapper.appendChild(el));

    block.appendChild(wrapper);

    const btn = document.createElement("span");
    btn.className = "read-toggle";
    btn.innerText = "Read More";

    block.appendChild(btn);

    btn.addEventListener("click", () => {
      wrapper.classList.toggle("expanded");
      btn.innerText =
        btn.innerText === "Read More" ? "Read Less" : "Read More";
    });

  });

});


document.addEventListener("DOMContentLoaded", function() {

  const cookieBar = document.getElementById("cookieBar");
  const acceptBtn = document.getElementById("acceptCookies");
  const declineBtn = document.getElementById("declineCookies");

  // For testing (remove later)
  // localStorage.removeItem("cookieConsent");

  if (!localStorage.getItem("cookieConsent")) {
    setTimeout(() => {
      cookieBar.classList.add("show");
    }, 300);
  }

  function hideCookie() {
    cookieBar.classList.remove("show");
  }

  acceptBtn.addEventListener("click", function() {
    localStorage.setItem("cookieConsent", "accepted");
    hideCookie();
  });

  declineBtn.addEventListener("click", function() {
    localStorage.setItem("cookieConsent", "declined");
    hideCookie();
  });

});


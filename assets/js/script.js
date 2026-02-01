
/*Dropdown Menu*/
document.addEventListener('DOMContentLoaded', function() {
    const triggers = document.querySelectorAll('.menu-trigger');
    const overlay = document.querySelector('.overlay');
    const allMenus = document.querySelectorAll('.mega-dropdown');
    // 1. Select the links
    const menuLinks = document.querySelectorAll('.mega-dropdown a');

    function closeAll() {
        allMenus.forEach(menu => menu.classList.remove('is-open'));
        overlay.classList.remove('is-open');
        document.body.style.overflow = '';
    }

    triggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            const targetMenu = document.getElementById(targetId);

            if (targetMenu.classList.contains('is-open')) {
                closeAll();
            } else {
                allMenus.forEach(m => m.classList.remove('is-open'));
                targetMenu.classList.add('is-open');
                overlay.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // 2. Add the listener to close on link click
    menuLinks.forEach(link => {
        link.addEventListener('click', closeAll);
    });

    overlay.addEventListener('click', closeAll);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeAll();
    });
});

/*Dropdwon Menu End*/


$(document).ready(function () {

  /* Banner Slider */
  $('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    pauseOnHover: false,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          speed: 2000
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          speed: 1000
        }
      }
    ]
  });


  /* Client Testimonial Slider */
  $('.client-testi-slider').slick({
    slidesToShow: 1.6,
    slidesToScroll: 1,
    autoplay: true,
    autoplay:2000,
    speed:1000,
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
  autoplaySpeed: 1300,
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
  autoplaySpeed: 1300,
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

});





/*Tab Active */

const sections = document.querySelectorAll(".taxtion-content section");
const navItems = document.querySelectorAll(".taxation-nav-tabs li");

/* default active on load */
if (navItems.length > 0) {
  navItems[0].classList.add("active");
}

window.addEventListener("scroll", () => {
  let current = "";

  sections.forEach(section => {
    const sectionTop = section.offsetTop - 150;
    const sectionHeight = section.offsetHeight;

    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
      current = section.getAttribute("id");
    }
  });

  navItems.forEach(li => {
    const link = li.querySelector("a");
    if (!link) return;

    li.classList.remove("active");

    if (link.getAttribute("href") === `#${current}`) {
      li.classList.add("active");
    }
  });
});


/*Menu Mobile */
document.addEventListener("DOMContentLoaded", () => {

  const isMobile = () => window.innerWidth <= 991;
  const triggers = document.querySelectorAll(".menu-trigger");
  const nav = document.querySelector(".main-nav nav");
  const subMenus = document.querySelectorAll(".mega-dropdown");
  const overlay = document.getElementById("bgOverlay");

  /* ======================
     HAMBURGER (MOBILE)
  ====================== */
  let burger;

  const closeMenu = () => {
    document.body.classList.remove("menu-open");
    subMenus.forEach(menu => menu.classList.remove("active"));
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

      if (!isOpen) {
        closeMenu();
      } else {
        overlay?.classList.add("is-open");
      }
    });
  };

  createHamburger();

  /* ======================
     SUBMENU SLIDE PANELS
  ====================== */
  triggers.forEach(trigger => {
    const targetId = trigger.dataset.target;
    const panel = document.getElementById(targetId);
    if (!panel) return;

    if (!panel.querySelector(".mobile-back")) {
      const back = document.createElement("div");
      back.className = "mobile-back";
      back.innerText = "Back";
      panel.prepend(back);

      back.addEventListener("click", () => {
        panel.classList.remove("active");
      });
    }

    trigger.addEventListener("click", e => {
      if (!isMobile()) return;
      e.preventDefault();

      document.body.classList.add("menu-open");
      panel.classList.add("active");
      overlay?.classList.add("is-open");
    });
  });

  /* ======================
     HANDLE RESIZE
  ====================== */
  window.addEventListener("resize", () => {
    if (!isMobile()) {
      closeMenu();
      burger?.remove();
      burger = null;
    } else {
      createHamburger();
    }
  });

});
/*Menu Mobile */

/*Booking scroll hide */

document.addEventListener("DOMContentLoaded", function() {
    const bookBtn = document.querySelector('.book-apt-btn');
    // Using 'footer' as the universal trigger for all pages
    const trigger = document.querySelector('footer'); 

    if (bookBtn && trigger) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    bookBtn.classList.add('btn-hidden');
                } else {
                    bookBtn.classList.remove('btn-hidden');
                }
            });
        }, { threshold: 0 }); // Triggers as soon as footer hits the bottom of the screen

        observer.observe(trigger);
    }
});



/*Select Dropdown for tab pages */

if (window.innerWidth < 992) {

    const nav = document.querySelector(".taxation-nav-tabs");
    const ul = nav.querySelector("ul");

    // Create mobile dropdown button
    const toggle = document.createElement("div");
    toggle.className = "taxation-mobile-toggle";

    // Get active tab text
    const active = nav.querySelector("li.active a") || nav.querySelector("a");
    toggle.innerHTML = `<span>${active.innerText}</span><i>▼</i>`;

    // Insert toggle before UL
    nav.insertBefore(toggle, ul);

    // Toggle menu
    toggle.addEventListener("click", () => {
        ul.classList.toggle("show");
    });

    // On link click
    nav.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", function(){
            toggle.querySelector("span").innerText = this.innerText;
            ul.classList.remove("show");

            nav.querySelectorAll("li").forEach(li => li.classList.remove("active"));
            this.parentElement.classList.add("active");
        });
    });
}


  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
      faqItems.forEach(i => {
        if (i !== item) i.classList.remove('active');
      });

      item.classList.toggle('active');
    });
  });

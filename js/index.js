document.addEventListener('DOMContentLoaded', function () {
  new LazyLoad();

  cursorInit();

  menuToggle();

  try {
    new Swiper(".portfolio", {
      spaceBetween: 20,
      slidesPerView: 1.1,
      speed: 1000,
      navigation: {
        nextEl: "#portfolio .arrow-right",
        prevEl: "#portfolio .arrow-left",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
        }
      }
    });
  } catch (error) {
    console.log('Swiper error:', error);
  }
});

function menuToggle () {
  const burger = document.querySelector('.navbar-burger');
  const mobileMenu = document.querySelector('.mobile-menu');
  const menuOpen = gsap.timeline({ paused: true })
    .to(".mobile-menu",{
      display: 'block',
      opacity: 1,
      pointerEvents: 'all',
    }, "<")
    .from("#menu-menu-1 li", 1,{
      y: -200,
      opacity: 0,
      ease: "power2.out",
      stagger: {
          amount: 0.5,
          from: "end"
      }
    })
    .from(".mobile-menu .foot",  1, {
      y: 200,
      opacity: 0,
      ease: "power2.out",
    })

  burger.addEventListener('click', ()=> {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('active');

    if (mobileMenu.classList.contains("active")) {        
      menuOpen.play();
    } else {           
      menuOpen.reverse();
    }
  });
}

function cursorInit () {
  const mouseCursor = document.querySelector('.cursor');
  const links = document.querySelectorAll('a, .btn, .slider-arrow');
  const burger = document.querySelector('.navbar-burger');
  const whiteCursorAreas = document.querySelectorAll('.white-cursor-area');

  if(!mouseCursor) return false;

  window.addEventListener('mousemove', cursor);

  function cursor(e) {
    requestAnimationFrame(() =>{
      mouseCursor.style.top = e.clientY + 'px';
      mouseCursor.style.left = e.clientX + 'px'
    });
  }

  links.forEach(link => {
    link.addEventListener('mouseover', () => {
      mouseCursor.classList.add('grow');
    });
    link.addEventListener('mouseout', () => {
      mouseCursor.classList.remove('grow');
    });
  });

  whiteCursorAreas.forEach(whiteCursorArea => {
    whiteCursorArea.addEventListener('mouseover', () => {
      mouseCursor.classList.add('white');
    });
    whiteCursorArea.addEventListener('mouseout', () => {
      mouseCursor.classList.remove('white');
    });
  })

  burger.addEventListener('mouseover', () => {
    mouseCursor.classList.add('burger');
  });
  burger.addEventListener('mouseout', () => {
    mouseCursor.classList.remove('burger');
  });

  document.addEventListener('mousedown', function(){
    mouseCursor.classList.add('click');
  });
  document.addEventListener('mouseup', function(){
    mouseCursor.classList.remove('click')
  });
}
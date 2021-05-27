document.addEventListener('DOMContentLoaded', function () {

  headerAnimation();

  mouseIconAnimation();

  CursorInit();
});

function headerAnimation () {
  let animating = false;
  const headerHome = document.querySelector('.header-home');

  if(!headerHome) return false;

  document.addEventListener('mousemove', (e) => {
    requestAnimationFrame(() =>{
      const x = e.pageX;
      const y = e.pageY;


      gsap.to(headerHome, {
        background: `radial-gradient(circle at ${x}px ${y}px, var(--primary-light), var(--primary))`,
        ease: "back.out(1.7)"
      })

    });
  });
}

function mouseIconAnimation () {
  const mouseIcon = document.querySelector('.scroll-down');

  if(!mouseIcon) return false;

  const mouseWheel = mouseIcon.querySelector('.mouse-wheel');
  const mouseLine = mouseIcon.querySelector('.line');
  gsap.to(mouseWheel, 2, {
    translateY: 5,
    repeat: -1,
    yoyo: true,
  })
  gsap.to(mouseLine, 2, {
    background: `linear-gradient(0deg, #fff, transparent)`,
    repeat: -1,
    yoyo: true
  })
}

function CursorInit () {
  let mouseCursor = document.querySelector('.cursor');
  let links = document.querySelectorAll('a');
  let burger = document.querySelector('.navbar-burger');
  let whiteCursorAreas = document.querySelectorAll('.white-cursor-area');

  if(!mouseCursor) return false;

  window.addEventListener('mousemove', cursor);

  function cursor(e) {
    requestAnimationFrame(() =>{
      mouseCursor.style.top = e.pageY + 'px';
      mouseCursor.style.left = e.pageX + 'px'
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
}
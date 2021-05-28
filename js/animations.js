document.addEventListener('DOMContentLoaded', function () {
  headerBgAnimation();

  mouseIconAnimation();

  servicesAnimation();

  // Functiions
  function headerBgAnimation() {
    const headerHome = document.querySelector('.header-home');
  
    if(!headerHome) return false;
  
    headerHome.addEventListener('mousemove', (e) => {
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
  
    gsap.to(mouseWheel, 1, {
      translateY: 5,
      repeat: -1,
      yoyo: true,
    });
    gsap.to(mouseLine, 1, {
      background: `linear-gradient(0deg, #fff, transparent)`,
      repeat: -1,
      yoyo: true
    });
  }
  
  function servicesAnimation () {
    const services = document.querySelector('.services');
  
    if(!services) return false;
    
    services.addEventListener('mouseover', (e) => {
      if(e.target.classList.contains('service')) {
        e.target.classList.add('active');
        e.target.closest('.services').classList.add('gray');     
      } else if(e.target.parentNode.classList.contains('service')) {
        e.target.parentNode.classList.add('active');
        e.target.closest('.services').classList.add('gray');
      }
    });
    services.addEventListener('mouseout', (e) => {
      services.querySelectorAll('.service').forEach(service => service.classList.remove('active'));
      e.target.closest('.services').classList.remove('gray');
    });
  }
});


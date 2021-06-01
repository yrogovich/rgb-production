document.addEventListener('DOMContentLoaded', function () {
  headerShow();

  headerBgAnimation();

  mouseIconAnimation();

  servicesAnimation();

  // Functions
  function headerShow() {
    try {
      gsap.registerPlugin(ScrollTrigger);
    
      const headerTimeline = gsap.timeline({
        scrollTrigger: { 
            trigger: ".header", 
            end: "bottom top", 
            toggleActions: "play pause play pause"
        }
      });
      headerTimeline
        .from(".header-home h1", 1, {
          opacity: 0,
          y: 100,
        })
        .from('.header-home p', 1, {
          opacity: 0,
          y: 100,
          stagger: {
            amount: 0.3,
          }
        })
        .from(".header-home .navbar", 1, {
          opacity: 0,
        }, "-=.5")
        .from('.header-home .scroll-down', 1, {
          opacity: 0,
          y: 100,
        }, "-=1");

      const h2 = document.querySelectorAll('.h2');
      h2.forEach(item => {
          gsap.from(item, .6, {
              scrollTrigger: { 
                  trigger: item,
                  toggleActions: "play pause play pause",
              }, 
              opacity: 0,
              translateY: 100,
              ease: "power3.out"
          });
      });

      const aboutTimeline = gsap.timeline({
        scrollTrigger: { 
            trigger: "#about", 
            end: "bottom top", 
            toggleActions: "play pause play pause"
        }
      });
      aboutTimeline
        .from("#about .digits-block", .6, {
          scale: 0,
          stagger: {
            amount: 0.6,
          }
        })
        .from("#about .column-about p", .4, {
          opacity: 0,
        }, "-=.3")
        .from("#about .h4", 1, {
          opacity: 0,
        })
        .from("#about .service", .6, {
          opacity: 0,
          stagger: {
            amount: .6,
          }
        }, "-=1");

      gsap.from(".brand", 2, {
        scrollTrigger: { 
          trigger: ".brands",
          toggleActions: "play pause play pause",
        },
        opacity: 0,
        stagger: {
          amount: .6,
        }
      })
    } catch (error) {
      console.log('GSAP error:', error);
    }
  }

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


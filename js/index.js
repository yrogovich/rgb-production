document.addEventListener('DOMContentLoaded', function () {
  new LazyLoad();

  CursorInit();
});

function CursorInit () {
  let mouseCursor = document.querySelector('.cursor');
  let links = document.querySelectorAll('a, .btn');
  let burger = document.querySelector('.navbar-burger');
  let whiteCursorAreas = document.querySelectorAll('.white-cursor-area');

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
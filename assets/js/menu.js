let btnMenu = document.getElementById('btnmenu');
let menu = document.getElementById('menu');
btnMenu.addEventListener('click', function() {
    'use strict';
    menu.classList.toggle('mostrar');
});
const sections = document.querySelectorAll('section');

function checkVisibility() {
  sections.forEach((section) => {
    const sectionRect = section.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (sectionRect.top < windowHeight * 0.9) {
      section.classList.add('animate__fadeInUp');
      section.classList.remove('animate__animated');
    } else {
      section.classList.add('animate__animated');
      section.classList.remove('animate__fadeInUp');
    }
  });
}

checkVisibility();

window.addEventListener('scroll', () => {
  checkVisibility();
});



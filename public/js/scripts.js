/*!
* Start Bootstrap - Agency v7.0.10 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 


window.addEventListener('DOMContentLoaded', event => {

  // Navbar shrink function
  var navbarShrink = function () {
      const navbarCollapsible = document.body.querySelector('#mainNav');
      if (!navbarCollapsible) {
          return;
      }
      if (window.scrollY === 0) {
          navbarCollapsible.classList.remove('navbar-shrink')
      } else {
          navbarCollapsible.classList.add('navbar-shrink')
      }

  };

  // Shrink the navbar 
  navbarShrink();

  // Shrink the navbar when page is scrolled
  document.addEventListener('scroll', navbarShrink);

  // Activate Bootstrap scrollspy on the main nav element
  const mainNav = document.body.querySelector('#mainNav');
  if (mainNav) {
      new bootstrap.ScrollSpy(document.body, {
          target: '#mainNav',
          offset: 74,
      });
  };

  // Collapse responsive navbar when toggler is visible
  const navbarToggler = document.body.querySelector('.navbar-toggler');
  const responsiveNavItems = [].slice.call(
      document.querySelectorAll('#navbarResponsive .nav-link')
  );
  responsiveNavItems.map(function (responsiveNavItem) {
      responsiveNavItem.addEventListener('click', () => {
          if (window.getComputedStyle(navbarToggler).display !== 'none') {
              navbarToggler.click();
          }
      });
  });

});


/////////////////////////////// CIRCLES IMAGES SECTION/////////////////////////

/*

var circles = [11111,22222,3333,44444,55555, 'tryzt', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh', 'jgvnh'];
var div = 360 / 16;
var radius = 525;
var parentdiv = document.getElementById('parentdiv');
var offsetToParentCenter = parseInt(parentdiv.offsetWidth / 2);
var offsetToChildCenter = 20;
var totalOffset = offsetToParentCenter - offsetToChildCenter;

for (var i = 0; i <= 15; ++i) {
  var childdiv = document.createElement('img');
  var textDiv = document.createElement('h3');
  var y = Math.sin((div * i) * (Math.PI / 180)) * radius;
  var x = Math.cos((div * i) * (Math.PI / 180)) * radius;
  childdiv.className = 'childDiv';
  childdiv.style.position = 'absolute';
  childdiv.textContent = circles[i];

  childdiv.src = "assets/img/team/3.jpg"
  childdiv.style.top = (y + totalOffset).toString() + "px";
  childdiv.style.left = (x + totalOffset).toString() + "px";
  parentdiv.appendChild(childdiv);
}
console.log(childdiv);
*/
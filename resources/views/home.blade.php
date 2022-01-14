@extends('layout.default')
    
    @section('header')
        @include('includes.header')
    @endsection

    @section('contenu')

        @include('includes.content')

    @endsection

    
    @section('contact')

        @include('includes.contact')

    @endsection

    @section('footer')

        @include('includes.footer')

    @endsection


    @section('scripts')

        <script>
            //  Scroll control       // 
            window.addEventListener('DOMContentLoaded', event => {

            // Navbar shrink function
            var navbarShrink = function () {
                const navbarCollapsible = document.body.querySelector('#mainNav');
                if (!navbarCollapsible) {
                    return;
                }
                if (window.scrollY === 0) {
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

            let properties = JSON.parse('{!! $properties !!}')
            var div = 360 / 16;
            var radius = 525;
            var parentdiv = document.getElementById('parentdiv');
            var offsetToParentCenter = parseInt(parentdiv.offsetWidth / 2);
            var offsetToChildCenter = 20;
            var totalOffset = offsetToParentCenter - offsetToChildCenter;

            for (var i = 0; i <= 15; ++i) {
                var _div = document.createElement('div')
                var childdiv = document.createElement('img');
                var textDiv = document.createElement('h5');
                var textDiv2 = document.createElement('span');
                var y = Math.sin((div * i) * (Math.PI / 180)) * radius;
                var x = Math.cos((div * i) * (Math.PI / 180)) * radius;
                childdiv.className = 'childDiv';
                childdiv.style.position = 'absolute';
                textDiv.style.position = 'absolute';
                textDiv2.style.position = 'absolute';
                textDiv.style.justifyContent = 'center';
                textDiv2.style.justifyContent = 'center';
                _div.style.color = 'white';
                textDiv.textContent = properties[i].titre;
                textDiv2.textContent = properties[i].capacite + ' RSV';

                var link = 'http://127.0.0.1:8000'

                var a = document.createElement('a');
                a.href= link + '/details/' + properties[i].id;
                /* Image */
                childdiv.src = link + '/storage/img/' + properties[i].image; 
                childdiv.style.top = (y + totalOffset).toString() + "px";
                childdiv.style.left = (x + totalOffset).toString() + "px";
                /* Texte */
                textDiv.style.top = (y + totalOffset + 25).toString() + "px" ;
                textDiv.style.left = (x + totalOffset + 50).toString() + "px";
                textDiv2.style.top = (y + totalOffset + 150).toString() + "px" ;
                textDiv2.style.left = (x + totalOffset + 60).toString() + "px";
                
                a.appendChild(childdiv);
                _div.appendChild(a);
                _div.appendChild(textDiv);
                _div.appendChild(textDiv2);
                parentdiv.appendChild(_div);
            }

        </script>
    @endsection
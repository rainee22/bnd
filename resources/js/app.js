import './bootstrap';

import '../sass/app.scss';
import '../css/app.css';
import * as bootstrap from 'bootstrap';

// Import AOS 
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 1500,
    disable: 'phone',
    disable: 'tablet',
    disable: 'mobile',
    once: true,
 });

 // Preloader
 window.addEventListener("load", function() {
    const loadingScreen = document.querySelector(".loading");
    loadingScreen.style.display = "none";
 });

 //navbar
 document.querySelectorAll(".nav-link").forEach((link) => {
   if (link.href === window.location.href) {
       link.classList.add("active");
       link.setAttribute("aria-current", "page");
   }
});
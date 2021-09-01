// Déclaration Wow, pour animate.css
$(document).ready(function() {
    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       false        // trigger animations on mobile devices (true is default)
      }
    );
    wow.init();
});

// Gestion header
function scrolled(){
    if ($('#hero').length) {
        var hero = document.querySelector("#hero");
        var header = document.querySelector("#header");
        var windowHeight = document.body.clientHeight, 
            currentScroll = document.body.scrollTop || document.documentElement.scrollTop;

        if (currentScroll >= (hero.offsetHeight-header.offsetHeight)) {
            header.className = "fixed"; 
        } else {
            header.className = "";
        }
    }
}
addEventListener("scroll", scrolled, false); 

// ScrollSpy
$('body').scrollspy({ target: '#menu-principal' })


// Smooth Scroll
$('a[href^="#"].nav-link').on('click', function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').animate({
        'scrollTop': $target.offset().top
    }, 900);
});
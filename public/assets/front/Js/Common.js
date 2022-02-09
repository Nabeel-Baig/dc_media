var navbar = document.querySelector('.navbar')
window.onscroll = function () {
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
    } else {
        navbar.classList.remove('scrolled')
    }
}

$('nav li a').filter(function () {
    return this.href === location.href;
}).addClass('active');

AOS.init();
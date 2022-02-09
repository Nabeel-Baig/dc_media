window.addEventListener('DOMContentLoaded', function (e) {
    $('.carousel').slick({
        slidesToShow: 3,
        autoplay: false,
        prevArrow: '<button class="previous-button is-control">' +
            '  <span class="fas fa-angle-left" aria-hidden="true"></span>' +
            '  <span class="sr-only">Previous slide</span>' +
            '</button>',
        nextArrow: '<button class="next-button is-control">' +
            '  <span class="fas fa-angle-right" aria-hidden="true"></span>' +
            '  <span class="sr-only">Next slide</span>' +
            '</button>',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

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
let header = document.querySelector('header');


// Home Swiper Script
var swiper = new Swiper(".home", {
    spaceBetween: 30,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});



//New Releasesd swiper

var swiper = new Swiper(".coming-container", {
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 100000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        568: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        968: {
            slidesPerView: 5,
        },

    }
});



//Login Scripts
// Show register form by default when the page loads
window.addEventListener('load', () => {
    document.querySelector('.form-wrapper').classList.add('rotate');
});

// Switch from register to login form
document.querySelector('.switch-to-login').addEventListener('click', () => {
    document.querySelector('.form-wrapper').classList.remove('rotate');
});

// Switch from login to register form
document.querySelector('.switch-to-register').addEventListener('click', () => {
    document.querySelector('.form-wrapper').classList.add('rotate');
});
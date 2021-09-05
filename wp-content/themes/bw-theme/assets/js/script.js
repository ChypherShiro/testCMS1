function testWebP(callback) {

    var webP = new Image();
    webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
    };
    webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

    if (support == true) {
        document.querySelector('body').classList.add('webp');
    } else {
        document.querySelector('body').classList.add('no-webp');
    }
});

let user_icon = document.querySelector('.user-header__icon');
let user_menu = document.querySelector('.user-header__menu');
let menu_list = document.querySelector('.menu__list');
user_icon.addEventListener("click", function (e) {
    // let user_menu = document.querySelector('.user-header__menu');
    // user_menu.classList.toggle('_active')
    
});

menu_list.addEventListener("click", function(event) {
    if(event.target.classList.contains('menu__link')) {
         let menu__body = document.querySelector('.menu__body');
         let icon__menu = document.querySelector('.icon-menu');
        let body = document.body;
        body.classList.remove('lock');
        menu__body.classList.remove('active');
        icon__menu.classList.remove('active');

    }
})

// document.documentElement.addEventListener("click", function (e) {
//     if (!e.target.closest('.user-header')) {
//         console.log(user_menu);
//         // user_menu.classList.remove('_active');
//     }
// });


$(document).ready(function () {
    $('.icon-menu').click(function (event) {
        $('.icon-menu,.menu__body').toggleClass('active');
        $('body').toggleClass('lock')
    })
})

function ibg() {

    let ibg = document.querySelectorAll("._ibg");
    for (var i = 0; i < ibg.length; i++) {
        if (ibg[i].querySelector('img')) {
            ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
        }
    }
}

ibg();
let swiper = new Swiper(".mySwiper", {
    slidesPerView:3,
        pagination: {
          el: ".swiper-pagination",
          type: "fraction",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 1,
              spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 3,
              spaceBetween: 40
            }
          }
      });
window.onscroll = function() {fixedNav()};

var header = document.getElementById("main-header");

function fixedNav() {
    if (window.pageYOffset > 125) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

// The following add active to fist carousel-item class
function carouselActive() {
    var carousel_active = document.getElementById("carousel-inner-id");
    if (typeof carousel_active  !== 'undefined' || typeof carousel_active  !== null) {
        carousel_active.firstElementChild.classList.add('active');
    }
}
carouselActive();
//carousel_active = document.getElementById("carousel-inner-id");
//carousel_active.firstElementChild.classList.add('active');


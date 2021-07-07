require('./bootstrap');

require('alpinejs');

let slick = require('slick-carousel')

let $ = require('jquery')

$(".w-bg-slider").slick({

    infinite: true,
    arrows: false,
    autoplay: true,
    // fade: true,
});

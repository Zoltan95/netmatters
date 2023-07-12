$(document).ready(function(){
    $('.banner__box').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        adaptiveHeight: true,
    });
    $('.slick-dots li button').html("");
});
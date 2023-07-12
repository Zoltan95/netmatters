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
/*
let navbar = document.getElementById("header");
let navPos = navbar.getBoundingClientRect().top;

window.addEventListener("scroll", e => {
  let scrollPos = window.scrollY;
  if (scrollPos > navPos) {
    navbar.classList.add('sticky');
    header.classList.add('navbarOffsetMargin');
  } else {
    navbar.classList.remove('sticky');
    header.classList.remove('navbarOffsetMargin');
  }
});
*/

const headerSticky = document.getElementById("header-sticky");
const header = document.getElementById("header");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;
  if (currentScroll <= 0) {
    header.classList.remove(scrollUp);
    $('#header').css('visibility', 'visible');
    $('#header-sticky').css('display', 'none');
    headerSticky.classList.remove('sticky');
    return;
  }
  if (currentScroll > lastScroll && !header .classList.contains(scrollDown)) {
    // down 
    header .classList.remove(scrollUp);
    header .classList.add(scrollDown);
    $('#header-sticky').css('visibility', 'hidden');
    headerSticky.classList.remove('sticky');
    headerSticky.classList.remove("slide-out");
    headerSticky.classList.add("slide-in");
  } else if (
    currentScroll < lastScroll &&
    header.classList.contains(scrollDown)
  ) {
    // up 
    header.classList.remove(scrollDown);
    header.classList.add(scrollUp);
    $('#header-sticky').css('display', 'block');
    headerSticky.classList.add('sticky');
    headerSticky.classList.remove("slide-in");
    headerSticky.classList.add("slide-out");
  }
  lastScroll = currentScroll;
});

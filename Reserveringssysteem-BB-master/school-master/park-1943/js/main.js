$(document).ready(function () {

    $('.carousel').carousel({fullWidth: true});
});

// Scroll down function naar tekst

  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });

  let position = $(window).scrollTop();

  $(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if ($(window).scrollTop() <= 100 && scroll > position) {
      $('html, body').animate({
        scrollTop: $('.foto').offset().top + 250
      }, 500);
    }
    position = scroll;
  });
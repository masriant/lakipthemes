// --------------------------------------------------
//         This is for button scroll to top
// --------------------------------------------------
$(document).ready(function () {

  $(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
      $('.btnScrollTop').fadeIn();
    } else {
      $('.btnScrollTop').fadeOut();
    }
  });

});

function scrolltotop() {
  $('html, body').animate({
    scrollTop: 0
  }, 100);
}
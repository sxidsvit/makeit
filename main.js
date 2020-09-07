jQuery(document).ready(function () {
  /* Check width on page load*/
  if (jQuery(window).width() < 993) {
    jQuery('.menu-button').addClass('hide');
  }
  else { }
});

jQuery(window).resize(function () {
  /*If browser resized, check width again */
  if (jQuery(window).width() < 993) {
    jQuery('.menu-button').removeClass('hide');
  }
  else {
    jQuery('.menu-button').addClass('hide');
  }
});

jQuery(function () {
  var hasBeenTrigged = false;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 100 && !hasBeenTrigged) { // if scroll is greater/equal then 100 and hasBeenTrigged is set to false.
      jQuery('nav').addClass('small-nav');
      hasBeenTrigged = true;
    } else if (jQuery(this).scrollTop() <= 100 && hasBeenTrigged) {
      jQuery('nav').removeClass('small-nav');
      hasBeenTrigged = false;
    }
  });
});
//Toogle Mobile Menu
jQuery(".menu-button").click(function () {
  jQuery('.menu').toggleClass('slide');
});
// Scroll To Section of Page
jQuery(document).on('click', 'a[href^="#"]', function (e) {
  e.preventDefault();
  jQuery('.menu').removeClass('slide');
  jQuery('html, body').stop().animate({
    scrollTop: jQuery(jQuery(this).attr('href')).offset().top
  }, 800, 'linear');
});
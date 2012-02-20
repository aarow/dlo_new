$(document).ready(function () {
	theMenu = $('.header-nav');
  var top = theMenu.offset().top - parseFloat(theMenu.css('marginTop').replace(/auto/, 0));
  $(window).scroll(function (event) {
	// what the y position of the scroll is
	var y = $(this).scrollTop();
	// whether that's below the form
	if (y >= top) {
	  // if so, ad the fixed class
	  theMenu.addClass('fixed');
	} else {
	  // otherwise remove it
	  theMenu.removeClass('fixed');
	}
  });
});
(function($) {
	"use strict";
  
  // Dropdown on Hover
  $('.dropdown').hover(
    function () {
      $(this).toggleClass('open');
    },
    function() {
      $(this).toggleClass('open');
    }
  );
  // Dropdown on Hover End
})(jQuery);
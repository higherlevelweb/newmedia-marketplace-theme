(function ($) {
	"use strict";
  	
	uiLoad.load('https://aetheronmedia.com/wp-content/themes/newmedia-marketplace-theme/libs/screenfull/dist/screenfull.min.js');
	$(document).on('click', '[ui-fullscreen], [data-ui-fullscreen]', function (e) {
		e.preventDefault();
		if (screenfull.enabled) {
		  screenfull.toggle();
		}
	});
})(jQuery);

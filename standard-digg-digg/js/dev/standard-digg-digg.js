/** Repositions the position of the Digg Digg sharer. */
function standard_reposition_digg_digg() {
	"use strict";

	var sLeft = '-95px';
	if (1 === jQuery('.format-quote').length) {
		sLeft = '-175px';
	} else if (1 === jQuery('.format-status').length) {
		sLeft = '-195px';
	} else if (1 === jQuery('.format-image').length || 1 === jQuery('.format-video').length) {
		sLeft = '-75px';
	} // end if

	jQuery('#dd_ajax_float').css('left', sLeft);


} // end standard_reposition_digg_digg 

/* -- jQuery-specific code -- */

(function ($) {
	"use strict";
	$(function () {

		// Reposition Digg Digg on window load, scroll, and resize
		standard_reposition_digg_digg();
		$(window)
			.resize(standard_reposition_digg_digg)
			.load(standard_reposition_digg_digg)
			.scroll(standard_reposition_digg_digg);

	});
}(jQuery));
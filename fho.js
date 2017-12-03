/* This file just exists to provide more context to the other files */

(function($) {
	$(function() {

		var	$window = $(window),
			$modal = $('.modalbg'),
			$close = $('.close'),
			$showModal = $('.showAnimation');

		$close.click(function(e) {
			$modal.hide();
			$modal.children(".dialog").css("opacity", "0");
			$modal.children(".dialog").css("top", "-1000px");
		});

		$showModal.click(function() {
			var attr = $(this).attr("data-modal");
			$("#"+attr).show();
			$("#"+attr).children(".dialog").animate({opacity: 1, top:"-20px"},'slow');
		});
	});

})(jQuery);
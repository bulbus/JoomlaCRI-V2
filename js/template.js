(function($){
	$(document).ready(function () {
		// Dropdown menu
		if ($('.parent').children('ul').length > 0) {
			$('.parent > a').append('<b class="caret"></b>');
		}

$(".pagination li:empty").remove();
// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();
		// Fix hide dropdown
		$('.dropdown-menu input, .dropdown-menu label').click(function(e) {
			e.stopPropagation();
		});
		// Tooltip
		$('.tooltip').tooltip({
			html: true
		});
		// To top
		var offset = 220;
		var duration = 500;
		$(window).scroll(function() {
			if ($(this).scrollTop() > offset) {
				$('.back-to-top').fadeIn(duration);
			} else {
				$('.back-to-top').fadeOut(duration);
			}
		});
		$('.back-to-top').click(function(event) {
			event.preventDefault();
			$('html, body').animate({scrollTop: 0}, duration);
			return false;
		});

		// Fix mootools hide
		var bootstrapLoaded = (typeof $().carousel == 'function');
		var mootoolsLoaded = (typeof MooTools != 'undefined');
		if (bootstrapLoaded && mootoolsLoaded) {
			Element.implement({
				hide: function () {
					return this;
				},
				show: function (v) {
					return this;
				},
				slide: function (v) {
					return this;
				}
			});
		}
	});
})(jQuery);

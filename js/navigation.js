/* Author:
Sherrie Gonzalez
*/

jQuery(document).ready(function($) {

    var pull =  $('h1.menu-toggle');
	var menu =  $('#access');

	if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    var viewportmeta = document.querySelector('meta[name="viewport"]');
    if (viewportmeta) {
        viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
        document.body.addEventListener('gesturestart', function () {
            viewportmeta.content = 'width=device-width, minimum-scale=0.25, maximum-scale=1.6';
        }, false);
    }
  }

	$(pull).bind("click touch", function(){
		if ($(menu).is('.open')) {
			menu.slideUp( function() {
			menu.removeClass('open');
		});
		} else if (!$(menu).is('.open')) {
			menu.slideDown( function() {
			menu.addClass('open');
			});
		}
	});

		$(window).resize(function () {
	      var imageHeight = $(".fixed_ad.mobile img").attr('height');
	      var w = $(window).width();
		if (w > 960) {
			$('#access').css('display','block');
		}
	     if (w < 960) {
	     	$('#access').css('display','none');
	     }
	 });
});

$(document).ready(function() {
	
	
	/* Header bar shadow on scroll */

	/*$(window).scroll(function() {
		if($(window).scrollTop() > 125) {
			$(".page-header").css('box-shadow', '0 2px 5px rgba(0,0,0,.26)');
		} else{
			$(".page-header").css('box-shadow', 'none');
		}
	});*/


	/* Open/close responsive menu */

	$(".resp-name-logo").click(function(){
		$(".header-menu").css("marginLeft", "0");
		$(".responsive-menu-overlay").css("display", "block");
	});
	$(".responsive-menu-overlay").click(function(){
		$(".header-menu").css("marginLeft", "-280px");
		$(".responsive-menu-overlay").css("display", "none");
	});


	/* Navigate between articles with keyboard arrows */

	function TeclaRedir() {
		if (window.event) {
			var keynum = event.keyCode;
		} else if (event.which) {
			var keynum = event.which;
		} if (keynum == 39) {
			window.self.location.href = "http://ndroidme.com/news.php?article=473"; // replace by a dynamic URL (php) to get the prev. article
		} else if (keynum == 37) {
			window.self.location.href = "http://ndroidme.com/news.php?article=475"; // replace by a dynamic URL (php) to ge the next article
		}
	};
	
});
// Toggle open primary menu on mobile
$(function() {
    $(".menuButtonWrap").click(function(e){
        $("#PrimaryMenu").toggleClass("open");
        	e.stopPropagation();
    });
});
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".secondaryMenuWrap").toggleClass("open");
        	e.stopPropagation();
    });
});
// Hamburger menu icon animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Hide and reveal main navigation on scroll
$(document).ready(function () {

  'use strict';

   var c, currentScrollTop = 0,
       navbar = $('.site-header');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
  });

});
// Lamers connect schedule tabs
$(document).on("click", ".destinationTab .menu div", function() {
	var numberIndex = $(this).index();

	if (!$(this).is("active")) {
		$(".destinationTab .menu div").removeClass("active");
		$(".destinationTab ul li").removeClass("active");

		$(this).addClass("active");
		$(".destinationTab ul").find("li:eq(" + numberIndex + ")").addClass("active");

		var listItemHeight = $(".destinationTab ul")
			.find("li:eq(" + numberIndex + ")")
			.innerHeight();
		$(".destinationTab ul").height(listItemHeight + "px");
	}
});
// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}

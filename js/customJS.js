// open menu
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
//close menu
$(function() {
    $(".closeMenuButton").click(function(e){
        	$(".mobile-menu").removeClass("open");
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$(".mobile-menu").removeClass("open");
    	}
    });
});
// Hamburger menu animation
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".hamburger").toggleClass("is-active");
    });
});
// Hide main navigation on scroll
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

// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<p style="text-align: center; position: relative; z-index: 99999; background-color: #f4a81d; color: #000000;">You are using a browser no longer supported by Microsoft. For the best and most secure viewing experience, please use a modern browser like <a href="https://www.google.com/chrome/" target="_blank" rel="noreferrer" style="color: #000000;">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank" rel="noreferrer" style="color: #000000;">Firefox</a>.</p>');
}

// Lamers connect destination tabs
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

// Travel policies accordion
// Custom JS for our accordions on the FAQ page
var accordion = $('body').find('[data-behavior="accordion"]');
var expandedClass = 'is-expanded';

$.each(accordion, function () { // loop through all accordions on the page

  var accordionItems = $(this).find('[data-binding="expand-accordion-item"]');

  $.each(accordionItems, function () { // loop through all accordion items of each accordion
    var $this = $(this);
    var triggerBtn = $this.find('[data-binding="expand-accordion-trigger"]');

    var setHeight = function (nV) {
      // set height of inner content for smooth animation
      var innerContent = nV.find('.accordion__content-inner')[0],
          maxHeight = $(innerContent).outerHeight(),
          content = nV.find('.accordion__content')[0];

      if (!content.style.height || content.style.height === '0px') {
        $(content).css('height', maxHeight);
      } else {
        $(content).css('height', '0px');
      }
    };

    var toggleClasses = function (event) {
      var clickedItem = event.currentTarget;
      var currentItem = $(clickedItem).parent();
      var clickedContent = $(currentItem).find('.accordion__content')
      $(currentItem).toggleClass(expandedClass);
      setHeight(currentItem);

      if ($(currentItem).hasClass('is-expanded')) {
        $(clickedItem).attr('aria-selected', 'true');
        $(clickedItem).attr('aria-expanded', 'true');
        $(clickedContent).attr('aria-hidden', 'false');

      } else {
        $(clickedItem).attr('aria-selected', 'false');
        $(clickedItem).attr('aria-expanded', 'false');
        $(clickedContent).attr('aria-hidden', 'true');
      }
    }

    triggerBtn.on('click', event, function (e) {
      e.preventDefault();
      toggleClasses(event);
    });

    // open tabs if the spacebar or enter button is clicked whilst they are in focus
    $(triggerBtn).on('keydown', event, function (e) {
      if (e.keyCode === 13 || e.keyCode === 32) {
        e.preventDefault();
        toggleClasses(event);
      }
    });
  });

});

// open menu
$(function () {
	$(".menuButtonWrap").click(function () {
		$("#PrimaryMenu").toggleClass("open");
	});
});
$(function () {
	$(".menuButtonWrap").click(function () {
		$(".secondaryMenuWrap").toggleClass("open");
	});
});
// Hamburger menu animation
$(function () {
	$(".menuButtonWrap").click(function (e) {
		$(".hamburger").toggleClass("is-active");
	});
});
// Toggle accordion icon
$(function () {
	$(".accordion").click(function () {
		$(".iconToggle").toggleClass("iconOpacity");
	});
});
// hide outdated browser popup
$(function () {
	$("#btnCloseUpdateBrowser").click(function () {
		$("#outdated").addClass("none");
	});
});
// close notification bar and add a preference to the session storage
$(function () {
	$(".notification-close").click(function () {
		$(".notification-bar").addClass("none");
		sessionStorage.setItem('preference', 'closed');
	});
});
var userPreference = sessionStorage.getItem('preference');
$(document).ready(function () {
	if (userPreference === 'closed') {
		$(".notification-bar").addClass("none");
	}
});
// set height of notification spacer
$(function () {
	var notificationBar = $(".notification-bar");
	var notificationBarSpacer = $(".notification-bar-spacer");
	var spacer = notificationBar.height();
	notificationBarSpacer.height(spacer);
	$(".notification-close").click(function () {
		notificationBarSpacer.height(0);
	});
});
// Hide main navigation on scroll
$(document).ready(function () {
	"use strict";

	var c,
		currentScrollTop = 0,
		navbar = $(".site-header");

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

// Lamers connect destination tabs

function getListItemHeight(idx) {
	return (
		$(".destinationTab ul")
			.find("li:eq(" + idx + ")")
			.innerHeight() + "px"
	);
}

$(document).on("click", ".destinationTab .menu div", function () {
	var numberIndex = $(this).index();

	if (!$(this).is("active")) {
		$(".destinationTab .menu div").removeClass("active");
		$(".destinationTab ul li").removeClass("active");

		$(this).addClass("active");
		$(".destinationTab ul")
			.find("li:eq(" + numberIndex + ")")
			.addClass("active");

		$(".destinationTab ul").height(getListItemHeight(numberIndex));
	}
});

// get and set the height after waiting for the destinationTabs to be created.
setTimeout(function () {
	$(".destinationTab ul").height(getListItemHeight(0));
}, 200);

"use strict";

// open menu
$(function () {
  $(".menuButtonWrap").click(function (e) {
    $("#PrimaryMenu").toggleClass("open");
    e.stopPropagation();
  });
});
$(function () {
  $(".menuButtonWrap").click(function (e) {
    $(".secondaryMenuWrap").toggleClass("open");
    e.stopPropagation();
  });
}); // Hamburger menu animation

$(function () {
  $(".menuButtonWrap").click(function (e) {
    $(".hamburger").toggleClass("is-active");
  });
}); // Toggle accordion icon

$(function () {
  $(".accordion").click(function (e) {
    $(".iconToggle").toggleClass("iconOpacity");
    e.stopPropagation();
  });
}); // hide outdated browser popup

$(function () {
  $("#btnCloseUpdateBrowser").click(function (e) {
    $("#outdated").addClass("none");
    e.stopPropagation();
  });
}); // Hide main navigation on scroll

$(document).ready(function () {
  'use strict';

  var c,
      currentScrollTop = 0,
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
}); // Lamers connect destination tabs

function getListItemHeight(idx) {
  return $(".destinationTab ul").find("li:eq(" + idx + ")").innerHeight() + "px";
}

$(document).on("click", ".destinationTab .menu div", function () {
  var numberIndex = $(this).index();

  if (!$(this).is("active")) {
    $(".destinationTab .menu div").removeClass("active");
    $(".destinationTab ul li").removeClass("active");
    $(this).addClass("active");
    $(".destinationTab ul").find("li:eq(" + numberIndex + ")").addClass("active");
    $(".destinationTab ul").height(getListItemHeight(numberIndex));
  }
}); // get and set the height after waiting for the destinationTabs to be created.

setTimeout(function () {
  $(".destinationTab ul").height(getListItemHeight(0));
}, 200);
"use strict";

// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<div id="outdated"><h6>Your browser is out-of-date!</h6><p>Update your browser for a more secure and modern website experience. Some features of this website may not work properly in outdated browsers.<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">Update my browser now</a></p><p class="last"><a data-toggle="hidden" data-target="#outdated" href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div>');
}
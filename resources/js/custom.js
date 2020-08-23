"use strict";

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
}); // Hamburger menu animation

$(function () {
  $(".menuButtonWrap").click(function (e) {
    $(".hamburger").toggleClass("is-active");
  });
}); // Toggle accordion icon

$(function () {
  $(".accordion").click(function () {
    $(".iconToggle").toggleClass("iconOpacity");
  });
}); // hide outdated browser popup

$(function () {
  $("#btnCloseUpdateBrowser").click(function () {
    $("#outdated").addClass("none");
  });
}); // close notification bar and add a preference to the session storage

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
}); // set height of notification spacer

$(function () {
  var notificationBar = $(".notification-bar");
  var notificationBarSpacer = $(".notification-bar-spacer");
  var spacer = notificationBar.height();
  notificationBarSpacer.height(spacer);
  $(".notification-close").click(function () {
    notificationBarSpacer.height(0);
  });
}); // Hide main navigation on scroll

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

/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
  var container, button, menu, links, i, len;
  container = document.getElementById('site-navigation');

  if (!container) {
    return;
  }

  button = container.getElementsByTagName('button')[0];

  if ('undefined' === typeof button) {
    return;
  }

  menu = container.getElementsByTagName('ul')[0]; // Hide menu toggle button if menu is empty and return early.

  if ('undefined' === typeof menu) {
    button.style.display = 'none';
    return;
  }

  menu.setAttribute('aria-expanded', 'false');

  if (-1 === menu.className.indexOf('nav-menu')) {
    menu.className += ' nav-menu';
  }

  button.onclick = function () {
    if (-1 !== container.className.indexOf('toggled')) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-expanded', 'false');
    } else {
      container.className += ' toggled';
      button.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-expanded', 'true');
    }
  }; // Get all the link elements within the menu.


  links = menu.getElementsByTagName('a'); // Each time a menu link is focused or blurred, toggle focus.

  for (i = 0, len = links.length; i < len; i++) {
    links[i].addEventListener('focus', toggleFocus, true);
    links[i].addEventListener('blur', toggleFocus, true);
  }
  /**
   * Sets or removes .focus class on an element.
   */


  function toggleFocus() {
    var self = this; // Move up through the ancestors of the current link until we hit .nav-menu.

    while (-1 === self.className.indexOf('nav-menu')) {
      // On li elements toggle the class .focus.
      if ('li' === self.tagName.toLowerCase()) {
        if (-1 !== self.className.indexOf('focus')) {
          self.className = self.className.replace(' focus', '');
        } else {
          self.className += ' focus';
        }
      }

      self = self.parentElement;
    }
  }
  /**
   * Toggles `focus` class to allow submenu access on tablets.
   */


  (function (container) {
    var touchStartFn,
        i,
        parentLink = container.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');

    if ('ontouchstart' in window) {
      touchStartFn = function touchStartFn(e) {
        var menuItem = this.parentNode,
            i;

        if (!menuItem.classList.contains('focus')) {
          e.preventDefault();

          for (i = 0; i < menuItem.parentNode.children.length; ++i) {
            if (menuItem === menuItem.parentNode.children[i]) {
              continue;
            }

            menuItem.parentNode.children[i].classList.remove('focus');
          }

          menuItem.classList.add('focus');
        } else {
          menuItem.classList.remove('focus');
        }
      };

      for (i = 0; i < parentLink.length; ++i) {
        parentLink[i].addEventListener('touchstart', touchStartFn, false);
      }
    }
  })(container);
})();
"use strict";

// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<div id="outdated"><h6>Your browser is out-of-date!</h6><p>Update your browser for a more secure and modern website experience. Some features of this website may not work properly in outdated browsers.<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">Update my browser now</a></p><p class="last"><a data-toggle="hidden" data-target="#outdated" href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div>');
}
"use strict";

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
  var isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();
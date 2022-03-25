$(document).ready(function () {
  initCookieInfo();
  initOverlayMenuOpen();
  initStanardMenuScroll();
  initMenuScroll();
  // onScrolling();
  stickyNews();
});

function multiParallax() {
  var $winHeight = $(window).height();

  $("[data-parallax]").each(function () {
    var $position = $(this).offset().top - $(document).scrollTop();

    if ($winHeight >= $position) {
      var $depth, $i, $layer, $layers, $len, $movement, $translate3d;
      var $layers = $('[data-type="parallax"]');

      $($layers).each(function () {
        $parent = $(this).parent();
        $curPos = $($parent).offset().top - $(document).scrollTop();

        $depth = $(this).attr("data-depth");
        $movement = $curPos * $depth;
        $translate = "translate3d(0, " + $movement + "px, 0)";

        $(this).css({
          "-webkit-transform": $translate,
          "-moz-transform": $translate,
          "-ms-transform": $translate,
          "-o-transform": $translate,
          transform: $translate,
        });
      });
    }
  });
}

$(window).on("load scroll", function () {
  multiParallax();
});

/* ------------------------------------------------------------------------------------------ */

function lockScroll(e) {
  e.preventDefault();
}

/* ------------------------------------------------------------------------------------------ */

function initMenuScroll() {
  $("ul.menu a, #mobile-menu a").click(function () {
    var scroll_to = $(this).attr("data-scroll");

    if (scroll_to != "" && $("#" + scroll_to).length > 0) {
      if (!$("#" + scroll_to).hasClass("disableScroll")) {
        $(".menu-toggle, .menu-wrapper").attr("aria-expanded", "false");

        var scrollpx = $("#" + scroll_to).offset().top - 80;

        if ($("#hamburger").hasClass("open")) {
          $("#hamburger").click();
        }

        $("html, body").animate(
          {
            scrollTop: scrollpx,
          },
          1000
        );

        return false;
      }
    }
  });
}

/* ------------------------------------------------------------------------------------------ */

function scroll_top() {
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
      $(".scroll").fadeIn(200);
    } else {
      $(".scroll").fadeOut(200);
    }
  });
  $(".scroll").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      1500
    );
  });
}

/* ------------------------------------------------------------------------------------------ */

function onScrolling(event) {
  $(document).scroll(function () {
    var scrollPos = jQuery(document).scrollTop();

    jQuery("nav#menu-standard #primary-menu a").each(function () {
      var currLink = jQuery(this);
      var elementClass = currLink.attr("data-scroll");
      var refElement = jQuery("#" + elementClass);

      if (refElement != undefined) {
        if (
          refElement.position().top - 100 <= scrollPos &&
          refElement.position().top + refElement.height() > scrollPos
        ) {
          jQuery("#primary-menu li a").removeClass("active");
          currLink.addClass("active");
        } else {
          currLink.removeClass("active");
        }
      }
    });
  });
}

/* ------------------------------------------------------------------------------------------ */

function initOverlayMenuOpen() {
  $("#hamburger").click(function () {
    $("#hamburger > div").toggleClass("open");
    $("#hamburger").toggleClass("open");
    $("nav#menu-overlay").toggleClass("closed");

    if ($("#hamburger").hasClass("open")) {
      $("body").bind("mousewheel touchmove", lockScroll);
      $("header .logo").removeClass("small");
    } else {
      $("body").unbind("mousewheel touchmove", lockScroll);
    }
  });
}

/* ------------------------------------------------------------------------------------------ */

function initStanardMenuScroll() {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $("body").addClass("sticky");
      $("header").addClass("sticky");
      $("nav#menu-standard").addClass("sticky");
      $("nav#menu-mobile").addClass("sticky");
      $(".stickyLogo").show();
      $(".logo").hide();
    } else {
      $("body").removeClass("sticky");
      $("header").removeClass("sticky");
      $("nav#menu-standard").removeClass("sticky");
      $("nav#menu-mobile").removeClass("sticky");
      $(".stickyLogo").hide();
      $(".logo").show();
    }
  });

  $(window).scroll();
}

/* ------------------------------------------------------------------------------------------ */

function initCookieInfo() {
  if (ajax_options.cookies_enabled == "true") {
    if (checkCookie(window.cookieName) != window.cookieValue) {
      var data = {
        action: "test",
      };

      jQuery.post(ajax_options.admin_ajax_url, data, function (response) {
        createDiv(response);
      });
    }
  }
}

var dropCookie = true;
var cookieDuration = 14;
var cookieName = "complianceCookie";
var cookieValue = "on";

/* ------------------------------------------------------------------------------------------ */

function createDiv(content) {
  var content_array = JSON.parse(content);

  var bodytag = document.getElementsByTagName("body")[0];
  var div = document.createElement("div");
  div.setAttribute("id", "cookie-law");
  div.innerHTML =
    "<div>" +
    content_array.cookies_text +
    '</div><div><a class="close-cookie-banner" href="javascript:void(0);" onclick="removeMe();"><span>' +
    content_array.cookies_button_label +
    "</span></a></div></div>";

  bodytag.appendChild(div);
  document.getElementsByTagName("body")[0].className += " cookiebanner";
}

/* ------------------------------------------------------------------------------------------ */

function createCookie(name, value, days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    var expires = "; expires=" + date.toGMTString();
  } else {
    var expires = "";
  }
  if (window.dropCookie) {
    document.cookie = name + "=" + value + expires + "; path=/";
  }
}

/* ------------------------------------------------------------------------------------------ */

function checkCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

/* ------------------------------------------------------------------------------------------ */

function eraseCookie(name) {
  createCookie(name, "", -1);
}

/* ------------------------------------------------------------------------------------------ */

function removeMe() {
  createCookie(window.cookieName, window.cookieValue, window.cookieDuration); // Create the cookie

  var element = document.getElementById("cookie-law");
  element.parentNode.removeChild(element);
}

/* ------------------------------------------------------------------------------------------ */

function stickyNews() {
  if (!$("body").hasClass("home")) {
    $("body").addClass("forceSticky");
    $("header").addClass("forceSticky");
    $("nav#menu-standard").addClass("forceSticky");
  }
}

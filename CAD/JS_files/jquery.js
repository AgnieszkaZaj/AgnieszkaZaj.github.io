$(document).ready(function () {
    $(".toSec1, #button1").click(function () {
      $("html, body").animate(
        {
          scrollTop: $("#sekcja1").offset().top - 30,
        },
        2000
      );
    });
  });
  $(document).ready(function () {
    $(".toSec2, #button2").click(function () {
      $("html, body").animate(
        {
          scrollTop: $("#sekcja2").offset().top - 30,
        },
        2000
      );
    });
  });
  $(document).ready(function () {
    $(".toSec3, #button3").click(function () {
      $("html, body").animate(
        {
          scrollTop: $("#sekcja3").offset().top - 30,
        },
        2000
      );
    });
  });
  $(document).ready(function () {
    $(".toSec4, #button4").click(function () {
      $("html, body").animate(
        {
          scrollTop: $("#sekcja4").offset().top - 30,
        },
        2000
      );
    });
  });
  $(document).ready(function () {
    $(".side-menu-container").hide();
    $("header").show();
    $(window).scroll(function () {
      if (window.pageYOffset < window.innerHeight * 1.15) {
        $("header").css("visibility", "visible");
        $(".side-menu-container").hide("fast");
      } else {
        $("header").css("visibility", "hidden");
        $(".side-menu-container").show("fast");
      }
    });
  });
jQuery(document).ready(function($) {
  $(document).on("click", ".hamburger-1", function() {
    $(this).css({
      opacity: "0"
    });
    $("#site-nav").addClass("open");
    $("body").addClass("no-scroll");
    $(".hamburger-2").css({
      opacity: "1"
    });
  });
  $(document).on("click", ".hamburger-2", function() {
    $("#site-nav").removeClass("open");
    $("body").removeClass("no-scroll");
    $(this).css({
      opacity: "0"
    });
    $(".hamburger-1").css({
      opacity: "1"
    });
  });

  if ($(this).scrollTop() > 50) {
    $("header").addClass("slideup");
  } else {
    $("header").removeClass("slideup");
  }

  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $("header").addClass("slideup");
    } else {
      $("header").removeClass("slideup");
    }
  });

  $(document).on("click", "#reviews_btn", function() {
    if ($(window).width() <= 992) {
      $(".review_hide")
        .detach()
        .appendTo($("#rev_column"));
    }
    $(".review_hide").fadeIn();
  });

  $(window).on("load", function() {
    galeryButton();
  });

  function galeryButton() {
    if ($(document).width() <= 992) {
      $(".owl-carousel-teacher .owl-next").css({
        right: "-20px"
      });
    } else {
      $(".owl-carousel-teacher .owl-next").css({
        right: "-35px"
      });
    }
  }

  function thoughtsBg() {
    if (!$("section").is("#thoughts")) return;
    let w = $("#thoughts .container").width();
    let l = $("#thoughts .container").offset().left;
    $("#thoughts").css({
      "background-position-x": l - 285 + "px, " + (w + l - 130) + "px",
      "background-position-y": "-26px, -26px"
    });
  }

  function programmBg() {
    if (!$("section").is("#programm")) return;
    let s =
      ($(document).width() >= 768 && $(document).width()) <= 992 ? 200 : 0;
    let l = $("#programm .container").offset().left;
    $("#programm").css({
      "background-position-x": l - 240 - s + "px",
      "background-position-y": "bottom"
    });
  }

  function resultBg() {
    if (!$("section").is("#result")) return;
    let s =
      ($(document).width() >= 768 && $(document).width()) <= 992 ? 200 : 0;
    let l = $("#result .container").offset().left;
    $("#result").css({
      "background-position-x": l - 240 - s + "px",
      "background-position-y": "bottom"
    });
  }

  $(window).resize(function() {
    thoughtsBg();
    programmBg();
    galeryButton();
    resultBg();
  });

  thoughtsBg();
  programmBg();
  resultBg();

  //Маска под телефонный номер для поля Input
  $('input[name="fenomen-phone"]').mask("+7 (999) 999-99-99");

  $(".owl-carousel-teacher").owlCarousel({
    margin: 20,
    navText: [
      '<i class="fas fa-arrow-left"></i>',
      '<i class="fas fa-arrow-right"></i>'
    ],
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      786: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});

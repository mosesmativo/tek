var windows = $(window);
var sticky = $(".header-area");

windows.on("scroll", function () {
   if (windows.scrollTop() > 320) {
      sticky.addClass("sticky");
   } else {
      sticky.removeClass("sticky");
   }
});

$(".three_cards_slides").owlCarousel({
   loop: false,
   nav: false,
   dots: false,
   margin: 20,
   mouseDrag: false,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: false,
   rewind: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         dots: true,
         mouseDrag: true,
      },
      576: {
         items: 2,
         dots: true,
         mouseDrag: true,
      },
      768: {
         items: 2,
         dots: true,
         mouseDrag: true,
      },
      992: {
         items: 2,
         dots: true,
         mouseDrag: true,
      },
      1200: {
         items: 3,
         dots: true,
      },
   },
});

$(".four_cards_slides").owlCarousel({
   loop: false,
   nav: true,
   dots: false,
   margin: 30,
   mouseDrag: false,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: false,
   rewind: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         mouseDrag: true,
      },
      576: {
         items: 2,
         mouseDrag: true,
      },
      768: {
         items: 2,
         mouseDrag: true,
      },
      992: {
         items: 3,
         mouseDrag: true,
      },
      1200: {
         items: 4,
      },
   },
});

$(".two_cards_slides").owlCarousel({
   loop: false,
   nav: false,
   dots: true,
   margin: 0,
   mouseDrag: false,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: false,
   rewind: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         mouseDrag: true,
      },
      576: {
         items: 2,
         mouseDrag: true,
      },
      768: {
         items: 2,
         mouseDrag: true,
      },
      992: {
         items: 2,
         mouseDrag: true,
      },
      1200: {
         items: 2,
      },
   },
});

$(".courses_slides").owlCarousel({
   loop: true,
   nav: false,
   dots: true,
   margin: 15,
   mouseDrag: true,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: true,
   center: false,
   autoWidth: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         autoWidth: false,
      },
      576: {
         items: 2,
         autoWidth: false,
      },
      768: {
         items: 1,
         autoWidth: false,
      },
      991: {
         items: 1,
         autoWidth: false,
      },
      1200: {
         items: 3,
      },
   },
});

$(".historySLides").owlCarousel({
   loop: false,
   nav: true,
   dots: false,
   margin: 0,
   mouseDrag: false,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: false,
   rewind: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         mouseDrag: true,
      },
   },
});
$(".historyButtons").owlCarousel({
   loop: false,
   nav: false,
   dots: false,
   margin: 0,
   smartSpeed: 800,
   autoplayHoverPause: true,
   autoplay: false,
   rewind: true,
   navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>',
   ],
   responsive: {
      0: {
         items: 1,
         autoWidth: true,
         mouseDrag: true,
      },
   },
});
//LightBox / Fancybox
$(".lightbox-image").fancybox({
   openEffect: "fade",
   closeEffect: "fade",
   helpers: {
      media: {},
   },
});

$("path, circle").on("mouseenter", function (e) {
   const infoBubble = $("#infoBubble");

   // Show and update the content of the info bubble
   infoBubble.css({
      display: "block",
      top: e.pageY + 10, // Positioning tooltip slightly below the cursor
      left: e.pageX + 10, // Positioning tooltip slightly to the right of the cursor
   });
   infoBubble.html($(this).data("info"));
});

$("path, circle").on("mouseleave", function () {
   $("#infoBubble").css("display", "none"); // Hide tooltip on mouse leave
});

$("path, circle").on("mousemove", function (e) {
   // Update tooltip position as the mouse moves
   $("#infoBubble").css({
      top: e.pageY + 10,
      left: e.pageX + 5,
   });
});

// iOS-specific handling remains the same
var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
if (ios) {
   $("a").on("click touchend", function () {
      var link = $(this).attr("href");
      window.open(link, "_blank");
      return false;
   });
}

$(document).ready(function () {
   // Toggle sidebar
   $("#hamburger-icon, #sidebarClose").click(function () {
      $("#sidebar").toggleClass("active");
   });
});

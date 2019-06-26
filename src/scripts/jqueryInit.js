import $ from "jquery";
window.jQuery = $;
window.$ = $;
require("@fancyapps/fancybox");
require("jquery-lazy");

/**
 * Lazy init
 */
$(function() {
  $(".lazy").Lazy({
    effect: "fadeIn",
    effectTime: 500
  });
});

/**
 * Fancybox init
 */
$('[data-fancybox="gallery"]').fancybox({
  arrows: true,
  animationEffect: "slide",
  smallBtn: "auto",
  buttons: ["close"]
});

import $ from "jquery";
window.jQuery = $;
window.$ = $;
require("@fancyapps/fancybox");
require("jquery-lazy");

/**
 * Lazy init
 */
$(function() {
  $(".lazy").Lazy();
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

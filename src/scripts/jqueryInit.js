import $ from "jquery";
window.jQuery = $;
window.$ = $;
require("@fancyapps/fancybox");

/**
 * Fancybox init
 */
$('[data-fancybox="gallery"]').fancybox({
  arrows: true,
  animationEffect: "slide",
  smallBtn: "auto",
  buttons: ["close"]
});

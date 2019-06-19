import Masonry from "masonry-layout";

var elem = document.querySelector(".grid");

var msnry = new Masonry(elem, {
  itemSelector: ".grid-item",
  isFitWidth: true,
  gutter: 8,
  horizontalOrder: false
});

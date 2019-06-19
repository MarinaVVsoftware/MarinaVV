import Masonry from "masonry-layout";
import imagesLoaded from "imagesloaded";

var elem = document.querySelector(".grid");

var msnry = new Masonry(elem, {
  itemSelector: ".grid-item",
  isFitWidth: true,
  gutter: 8,
  horizontalOrder: false
});

imagesLoaded(elem).on("progress", () => {
  msnry.layout();
});

document.addEventListener("DOMContentLoaded", () => {
  try {
    if (!window.matchMedia("(pointer: coarse) and (hover: none)").matches) {
      let videoBackground = document.getElementById("video-background");
      if (!videoBackground) throw "Null id";
      videoBackground.load();
      videoBackground.play();
    }
  } catch (er) {}
});

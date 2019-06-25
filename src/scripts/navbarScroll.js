const navbar = document.getElementById("navbar");

window.addEventListener("scroll", e => {
  try {
    let y = window.scrollY;
    scrollNavbar(y);
  } catch (er) {
    console.log(er);
  }
});

function scrollNavbar(y) {
  if (y > 150) {
    navbar.classList.remove("navbar-initial");
    navbar.classList.add("navbar-scroll");
  } else {
    navbar.classList.remove("navbar-scroll");
    navbar.classList.add("navbar-initial");
  }
}

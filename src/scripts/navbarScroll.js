window.addEventListener("scroll", e => {
  let y = window.scrollY;
  scrollNavbar(y);
});

function scrollNavbar(y) {
  try {
    const navbar = document.getElementById("navbar");
    if (y > 450) {
      navbar.classList.remove("navbar-initial");
      navbar.classList.add("navbar-scroll");
    } else {
      navbar.classList.remove("navbar-scroll");
      navbar.classList.add("navbar-initial");
    }
  } catch (err) {
    console.log(err);
  }
}

import AOS from "aos";

/**
 *
 * AOS instance
 */
AOS.init({
  debounceDelay: 100,
  once: true,
  disable: "phone",
  mirror: true,
  delay: 0
  //mirror: true,
});
AOS.refresh();

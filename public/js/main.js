const books = document.getElementById("books");
const loader = document.getElementById("loader");
const myTimeout = setTimeout(myGreeting, 1500);

function myGreeting() {
  loader.style.display = "none";
  new WOW().init();
  new LocomotiveScroll();
}

function openMenu() {
  menu.classList.add("open");
  window.addEventListener("keyup", handleKeyUp);
}

function closeMenu() {
  menu.classList.remove("open");
}

function handleKeyUp(event) {
  if (event?.key === "Escape" || event?.key === "Esc" || event?.keyCode === 27) {
    closeMenu();
    window.removeEventListener("keyup", handleKeyUp);
  }
}

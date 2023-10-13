const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute(
    "class",
    isOpen ? "ri-close-line" : "ri-menu-3-line"
  );
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-3-line");
});

const scrollRevealOptions = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// header container
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOptions,
});

ScrollReveal().reveal(".header__btn", {
  ...scrollRevealOptions,
  delay: 500,
});

// service container
ScrollReveal().reveal(".service__card", {
  ...scrollRevealOptions,
  interval: 500,
});

// price container
ScrollReveal().reveal(".price__card", {
  ...scrollRevealOptions,
  interval: 500,
});

const swiper = new Swiper(".swiper", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
});

// email copy
function copy(elementId) {
  const emailElement = document.getElementById(elementId);

  // Create a temporary input element to copy the text
  const input = document.createElement("input");
  input.value = emailElement.innerText;
  document.body.appendChild(input);

  // Select the text in the input and copy it to the clipboard
  input.select();
  document.execCommand("copy");

  // Remove the temporary input element
  document.body.removeChild(input);

  // Alert the user that the text has been copied
  // alert("Copied the text: " + emailElement.innerText);
}
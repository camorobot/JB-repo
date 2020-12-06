const cookieContainer = document.querySelector(".cookie-bar");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("Allow_Cookies", "true");
});

setTimeout(() => {
    if (!localStorage.getItem("Allow_Cookies")) {
      cookieContainer.classList.add("active");
    }
  }, 250);
const navButtons = document.querySelectorAll(
  ".nav-menu ul li:not(.dropdown) a"
);

const dropBtn = document.getElementById("master-button");
const dropContent = document.querySelector("#sidebar .dropdown");

navButtons.forEach((button) => {
  button.addEventListener("click", function () {
    // Remove active class from all nav buttons
    navButtons.forEach((btn) => btn.classList.remove("active"));
    // Add active class to the clicked button
    this.classList.add("active");
    dropContent.classList.remove("show");
    dropContent.setAttribute("inert", "");
  });
});

dropBtn.addEventListener("click", function () {
  dropContent.classList.toggle("show");
  dropContent.removeAttribute("inert");
});

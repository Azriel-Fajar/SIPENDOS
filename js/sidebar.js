const navButtons = document.querySelectorAll(
  ".nav-menu ul li:not(.dropdown) a"
);

navButtons.forEach((button) => {
  button.addEventListener("click", function () {
    // Remove active class from all nav buttons
    navButtons.forEach((btn) => btn.classList.remove("active"));
    // Add active class to the clicked button
    this.classList.add("active");
  });
});

const dropBtn = document.getElementById("master-button");
const dropContent = document.querySelector("#sidebar .dropdown");

dropBtn.addEventListener("click", function () {
  dropContent.classList.toggle("show");
});

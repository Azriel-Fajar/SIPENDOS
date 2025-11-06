const loader = document.getElementById("loader");
const app = document.getElementById("main-content");

// Saat halaman selesai dimuat
window.addEventListener("load", () => {
    loader.classList.add("hidden");
});

// Saat user berpindah halaman
window.addEventListener("beforeunload", () => {
    loader.classList.remove("hidden");
});

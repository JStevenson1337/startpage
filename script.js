// script.js

// Toggle between light and dark theme
function toggleTheme() {
    const body = document.body;
    body.classList.toggle("dark-theme");
}

// Event listener to display a welcome message
document.addEventListener("DOMContentLoaded", function () {
    const welcomeBtn = document.getElementById("welcome-btn");
    const message = document.getElementById("message");

    welcomeBtn.addEventListener("click", function () {
        message.innerText = "Hello! Welcome to our website.";
    });
});

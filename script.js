// script.js

// Theme toggle functionality
document.getElementById("theme-toggle").addEventListener("click", function () {
    document.body.classList.toggle("dark-theme");
});

// Display current year in the footer
document.addEventListener("DOMContentLoaded", function () {
    const currentYear = new Date().getFullYear();
    document.getElementById("current-year").textContent = currentYear;
});

// Personalized welcome message
document.getElementById("welcome-btn").addEventListener("click", function () {
    const name = document.getElementById("name-input").value;
    const welcomeMessage = document.getElementById("welcome-message");

    if (name) {
        welcomeMessage.textContent = `Welcome, ${name}! We're glad to have you here.`;
    } else {
        welcomeMessage.textContent = "Please enter your name to get a personalized welcome message.";
    }
});

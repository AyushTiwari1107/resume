// ==================================================================
// AYUSH TIWARI — PORTFOLIO SCRIPT
// Small, vanilla JS. No frameworks, no build step, no dependencies.
// This file does 3 things:
//   1. Toggles the mobile nav menu open/closed.
//   2. Closes the mobile menu after a link is clicked.
//   3. Handles the light/dark theme switch (and remembers your choice).
//   4. Writes the current year into the footer automatically.
// ==================================================================

document.addEventListener("DOMContentLoaded", function () {
  // ---------- Mobile nav toggle ----------
  var navToggle = document.getElementById("navToggle");
  var primaryNav = document.getElementById("primaryNav");

  if (navToggle && primaryNav) {
    navToggle.addEventListener("click", function () {
      var isOpen = primaryNav.classList.toggle("is-open");
      navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    // Close the mobile menu once a nav link is tapped.
    primaryNav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        primaryNav.classList.remove("is-open");
        navToggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  // ---------- Light / dark theme toggle ----------
  var themeToggle = document.getElementById("themeToggle");
  var htmlEl = document.documentElement;

  // On load: use the saved preference, or fall back to the
  // visitor's system setting if they haven't chosen one yet.
  var savedTheme = localStorage.getItem("theme");
  var systemPrefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

  if (savedTheme === "dark" || (!savedTheme && systemPrefersDark)) {
    htmlEl.setAttribute("data-theme", "dark");
    if (themeToggle) themeToggle.textContent = "☀️";
  }

  if (themeToggle) {
    themeToggle.addEventListener("click", function () {
      var isDark = htmlEl.getAttribute("data-theme") === "dark";

      if (isDark) {
        htmlEl.removeAttribute("data-theme");
        localStorage.setItem("theme", "light");
        themeToggle.textContent = "🌙";
      } else {
        htmlEl.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark");
        themeToggle.textContent = "☀️";
      }
    });
  }

  // ---------- Footer year ----------
  var yearEl = document.getElementById("year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
});

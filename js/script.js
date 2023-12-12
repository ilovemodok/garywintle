// Current Year Footer
const yearEl = document.querySelector(".year");
const currentYear = new Date().getFullYear();
console.log(currentYear);
yearEl.textContent = new Date().getFullYear();

// Mobile Nav
const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");

btnNavEl.addEventListener("click", function () {
  headerEl.classList.toggle("nav-open");
});

const allLinks = document.querySelectorAll("nav a");
// const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    const href = link.getAttribute("href");

    e.preventDefault();

    // Scroll back to top
    if (href === "#") {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    }

    // Scroll to other links
    if (href !== "#" && href.startsWith("#")) {
      const sectionEl = document.querySelector(href);
      sectionEl.scrollIntoView({ behavior: "smooth" });
    }

    // Close mobile navigation on link click
    if (link.classList.contains("main-nav-link")) {
      headerEl.classList.toggle("nav-open");
    }
  });
});

// Button Rollovers

const container = document.querySelector(".svg-rollover");

container.addEventListener("mouseenter", () => {});

container.addEventListener("mouseleave", () => {});

//Navbar and Back to Top Appearing after Scroll

// const navBar = document.querySelector(".mobile-nav-bar");
const backToTop = document.querySelector(".back-to-top");

window.addEventListener("scroll", () => {
  const scrollPositionToShowElements = 700;

  if (window.scrollY > scrollPositionToShowElements) {
    backToTop.style.opacity = 1;
    backToTop.style.visibility = "visible";
    // navBar.style.opacity = 1;
    // navBar.style.visibility = "visible";
  } else {
    // navBar.style.opacity = 0;
    backToTop.style.opacity = 0;
    // backToTop.style.visibility = "hidden";
  }
});

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

const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    const href = link.getAttribute("href");

    // Allow mailto links to open the email client
    if (href && href.startsWith("mailto:")) {
      return;
    }

    if (href && href.startsWith("https://")) {
      return;
    }

    if (href && href.startsWith("/cranimals")) {
      return;
    }

    // Prevent default behavior for other links
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

//Lightbox

const lightbox = document.createElement("div");
lightbox.id = "lightbox";
document.body.appendChild(lightbox);

const imageFolder = "/img/portfolioart"; // Path to image folder
const imageFiles = [
  "cranimals.webp",
  "surfinburrito.webp",
  "potheadbooks.webp",
  "rakuten.webp",
  "bumblebee.webp",
  "dankarson.webp",
]; // Array of image filenames

const images = document.querySelectorAll(".portfolio-link");
images.forEach((image, index) => {
  image.addEventListener("click", (e) => {
    lightbox.classList.add("active");

    const imagePath = `${imageFolder}/${imageFiles[index]}`;

    const img = document.createElement("img");
    img.src = imagePath;
    img.classList.add("lightbox-image");

    while (lightbox.firstChild) {
      lightbox.removeChild(lightbox.firstChild);
    }

    lightbox.appendChild(img);
  });
});

lightbox.addEventListener("click", (e) => {
  if (e.target !== e.currentTarget) return;
  lightbox.classList.remove("active");
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
    scrollToTopButton.style.opacity = 0;
  }
});

// Lottie Pencil Animate on Scroll

// Initialize Lottie animation
// const animation = lottie.loadAnimation({
//   container: document.getElementById("#lottie-pencil"),
//   renderer: "svg",
//   loop: true,
//   autoplay: true,
//   path: "/img/lottie/gwhero-test-04.json", // Replace with your animation file
// });

// // Set up the ScrollTrigger
// gsap.registerPlugin(ScrollTrigger);

// const animationTimeline = gsap.timeline({
//   scrollTrigger: {
//     trigger: "#pencil-anim",
//     start: "top top", // Adjust as needed
//     end: "bottom bottom", // Adjust as needed
//     scrub: true, // Smooth animation
//   },
// });

// animationTimeline.to(animation, {
//   frame: animation.totalFrames, // Animate throughout the entire timeline
//   ease: "none", // Linear animation
// });

// gsap.from(".hero-image-box", {
//   duration: 1,
//   y: "-100vw",
//   ease: "back.out(1.7)",
//   delay: 0,
// });

gsap.to(".mediamite-img", {
  duration: 6,
  ease: "bounce.out",
  delay: 1,
  stagger: 0.5,
  scrollTrigger: ".",
});

// gsap.fromTo(
//   ".mediamite-img",
//   {
//     duration: 0.3,
//     // opacity: 0,
//     // ease: "power1.in",
//     delay: 0.1,
//     stagger: 0.5,
//     y: "-100vh",
//     ease: "elastic",
//     rotation: 45,
//     scale: 3,
//   },
//   {
//     duration: 1,
//     // opacity: 0,
//     // ease: "power1.in",
//     delay: 0.1,
//     stagger: 0.5,
//     y: "0",
//     ease: "back.out(1.7)",
//     rotation: 720,
//     scale: 1,
//   }
// );

// const timeline = gsap.timeline();

// gsap.from(".port-header-image", {
//   duration: 3,
//   y: "10rem",
//   stagger: 0.5,
//   ease: "back.out(1.7)",
// });

// gsap.registerPlugin(ScrollTrigger);

gsap.from(".main-nav-link", {
  duration: 3,
  y: "10rem",
  stagger: 0.5,
  ease: "back.out(1.7)",
  scrollTrigger: ".",
});

gsap.from(".hero-image-box", {
  duration: 1,
  y: "-100vw",
  ease: "back.out(1.7)",
  delay: 0,
});

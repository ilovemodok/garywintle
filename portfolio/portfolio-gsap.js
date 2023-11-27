gsap.registerPlugin(ScrollTrigger);

gsap.from(".port-image", {
  duration: 1,
  x: "-100vw",
  stagger: 0.5,
  ease: "back.out(1.7)",
  scrollTrigger: ".port-image",
});

// gsap.from(".main-nav-link", {
//   duration: 3,
//   y: "10rem",
//   stagger: 0.5,
//   ease: "back.out(1.7)",
//   scrollTrigger: ".",
// });

gsap.from(".mediamite-img", {
  delay: 0,
  duration: 1,
  ease: "power1.out",
  y: "100vw",
  stagger: 0.5,
  scale: 0.1,
  scrollTrigger: {
    scrub: 1,
    trigger: "#link-services",
    start: "top 80%",
    end: "top 30%",
    markers: false,
    toggleActions: "restart none none none",
    // onEnter onLeave onEnterBack onLeaveBack
  },
});

gsap.from(".gw-lottie", {
  opacity: 0,
  duration: 1,
  ease: "power1.out",
});

// gsap.to(".main-logo", {
//   duration: 30,
//   motionPath: {
//     path: "#motion-path",
//     autoRotate: true,
//     // start: 0.1,
//     // end: 1.2,
//   },
//   xPercent: -50,
//   yPercent: -50,
//   transformOrigin: "50% 50%",
//   // scrollTrigger: {
//   //   scrub: 0.5,
//   //   trigger: "#link-services",
//   //   start: "top 80%",
//   //   end: "top 30%",
//   // },
// });

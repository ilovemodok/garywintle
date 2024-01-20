gsap.registerPlugin(ScrollTrigger);

gsap.from(".port-image", {
  duration: 1,
  x: "-100vw",
  stagger: 0.5,
  ease: "back.out(1.7)",
  scrollTrigger: ".port-image",
});

gsap.from(".mediamite-img", {
  delay: 0.3,
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
  duration: 0.3,
  ease: "power1.out",
});

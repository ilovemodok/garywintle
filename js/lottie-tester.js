// LottieInteractivity.create({
//   player: "#firstLottie",
//   mode: "cursor",
//   actions: [
//     {
//       type: "pauseHold",
//     },
//   ],
// });

// Pencil GW Animation
LottieInteractivity.create({
  player: "#firstLottie",
  mode: "scroll",
  // container: "#pencil-anim",
  actions: [
    {
      visibility: [0, 0.1],
      type: "stop",
      frames: [0],
    },
    {
      visibility: [0.2, 0.6],
      type: "seek",
      frames: [1, 240],
    },
  ],
});

// Back to Top Button
LottieInteractivity.create({
  player: "#back-to-top-lottie",
  mode: "cursor",
  // container: "#pencil-anim",
  actions: [
    {
      type: "hover",
      forceFlag: true,
    },
  ],
});

LottieInteractivity.create({
  player: "#back-to-top-lottie",
  mode: "cursor",
  // container: "#pencil-anim",
  actions: [
    {
      type: "click",
      forceFlag: true,
    },
  ],
});

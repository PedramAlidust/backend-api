const playPresentButton = document.querySelector("#play-preset");
const presentVideo = document.querySelector("#present-video");
const playVoiceButton = document.querySelector("#play-voice");
const loadNumbersText = document.querySelectorAll(".load-number");
const coWorkerSection = document.querySelector("#co-worker-section");

let load = 0;

const wavesurfer = WaveSurfer.create({
  container: "#waveform",
  waveColor: "#E9ECEE",
  progressColor: "#A57F6A",
  barRadius: 3,
  height: 50,
  responsive: true,
  // If true, normalize by the maximum peak instead of 1.0.
  normalize: true,
  // Use the PeakCache to improve rendering speed of large waveforms.
  partialRender: true,
});

playPresentButton.addEventListener("click", () => {
  // Condition when to play a video
  playPresentButton.style.display = "none";
  presentVideo.setAttribute("controls", true);
  presentVideo.play();
});

wavesurfer.load("../assets/voice/02_-_forever_and_ever.mp3");

playVoiceButton.addEventListener("click", () => {
  wavesurfer.playPause();
});

// ----- counter for count experience ----- //
function trigerInterval() {
  let int = setInterval(() => {
    load++;
    if (load >= 501) {
      clearInterval(int);
    } else {
      for (let loadNumberText of loadNumbersText) {
        loadNumberText.innerText = `${load}`;
      }
    }
  }, 50);
}

function isInViewPort(element) {
  const bounding = element.getBoundingClientRect();

  if (
    bounding.top >= 0 &&
    bounding.left >= 0 &&
    bounding.right <=
      (window.innerWidth || document.documentElement.clientWidth) &&
    bounding.bottom <=
      (window.innerHeight || document.documentElement.clientHeight)
  ) {
    if (load <= 500) {
      trigerInterval();
    }
  } else {
    return false;
  }
}

window.addEventListener(
  "scroll",
  function (event) {
    if (isInViewPort(coWorkerSection)) {
      return;
    }
  },
  false
);

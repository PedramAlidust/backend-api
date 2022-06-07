const accordion = document.querySelectorAll(".contentBx");
const content = document.querySelectorAll(".content");

for (let i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
    // const panel = this.nextElementSibling;
    // if (panel.style.maxHeight) {
    //   panel.style.maxHeight = 0;
    // } else {
    //   panel.style.maxHeight = panel.scrollHeight + "px";
    // }
  });
}

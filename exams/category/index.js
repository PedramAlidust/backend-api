function openTab(evt) {
  const tabContents = document.getElementsByClassName("tabcontent");
  const tablinks = document.getElementsByClassName("tablink");

  for (let i = 0; i < tabContents.length; i++) {
    tablinks[i].classList.remove("tab-active");
    const target = tablinks[i].dataset.target;
    document.getElementById(target).classList.remove("active");
  }

  evt.classList.add("tab-active");

  const target = evt.dataset.target;
  document.getElementById(target).classList.add("active");
}

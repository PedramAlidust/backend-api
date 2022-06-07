// Get the modal
const modal = document.getElementById("searchModal");

// Get the button that opens the modal
const btns = document.querySelectorAll(".searchBtn");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal

const handleClickButton = (btn) => {
  btn.onclick = function () {
    modal.style.display = "block";
  };
};
const handleShowDialog = () => {
  [...btns].map((btn) => handleClickButton(btn));
};
handleShowDialog();

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Get the modal
const authModal = document.getElementById("authModal");
// Get the button that opens the modal
const authBtns = document.querySelectorAll(".loginBtn");
const closeBtn = document.querySelector(".closeAuth");

// Get tabs content
const forgetPasswordTab = document.querySelector(
  "#forget-password-content-tab"
);
const loginTab = document.querySelector("#login-content-tab");
const registerTab = document.querySelector("#register-content-tab");

// Get header tab buttons
const registerHeaderBtn = document.querySelector("#register-tab-header-btn");
const loginHeaderBtn = document.querySelector("#login-tab-header-btn");

// Get buttons that change tabs
const loginTabBtns = document.querySelectorAll(".login-tab-btn");
const registerTabBtns = document.querySelectorAll(".register-tab-btn");
const forgetPasswordTabBtns = document.querySelectorAll(
  ".forget-password-tab-btn"
);

const handleClickAuthButton = (btn) => {
  btn.onclick = function () {
    authModal.style.display = "block";
  };
};
const handleShowAuthDialog = () => {
  [...authBtns].map((btn) => handleClickAuthButton(btn));
};
handleShowAuthDialog();

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function () {
  authModal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == authModal) {
    authModal.style.display = "none";
  }
};

// handle click on register btns
for (let loginTabBtn of loginTabBtns) {
  loginTabBtn.addEventListener("click", function () {
    registerTab.classList.remove("block");
    registerTab.classList.add("hidden");
    forgetPasswordTab.classList.remove("block");
    forgetPasswordTab.classList.add("hidden");
    loginHeaderBtn.classList.remove("text-[#0F2846]");
    loginHeaderBtn.classList.add("text-[#946E5F]", "bg-white");
    registerHeaderBtn.classList.remove("text-[#946E5F]", "bg-white");
    registerHeaderBtn.classList.add("text-[#0F2846]");
    loginTab.classList.remove("hidden");
    loginTab.classList.add("block");
  });
}
// handle click on register btns
for (let registerTabBtn of registerTabBtns) {
  registerTabBtn.addEventListener("click", function () {
    loginTab.classList.remove("block");
    loginTab.classList.add("hidden");
    forgetPasswordTab.classList.remove("block");
    forgetPasswordTab.classList.add("hidden");
    loginHeaderBtn.classList.remove("text-[#946E5F]", "bg-white");
    loginHeaderBtn.classList.add("text-[#0F2846]");
    registerHeaderBtn.classList.remove("text-[#0F2846]");
    registerHeaderBtn.classList.add("text-[#946E5F]", "bg-white");
    registerTab.classList.remove("hidden");
    registerTab.classList.add("block");
  });
}

// handle click on forget passowrd authBtns
for (let forgetPasswordBtn of forgetPasswordTabBtns) {
  forgetPasswordBtn.addEventListener("click", function () {
    loginTab.classList.remove("block");
    loginTab.classList.add("hidden");
    registerTab.classList.remove("block");
    registerTab.classList.add("hidden");
    forgetPasswordTab.classList.remove("hidden");
    forgetPasswordTab.classList.add("block");
  });
}

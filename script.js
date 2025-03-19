var popup = document.getElementById("login");
var popRegister = document.getElementById("register");
var popAlert = document.getElementById("alert");
function openLogin(){
    popup.classList.add("open-login");
}
function closeLogin(){
    popup.classList.remove("open-login");
}
function openRegister(){
    popRegister.classList.add("open-register");
}
function closeRegister(){
    popRegister.classList.remove("open-register");
}
// function openAlert(){
//     popAlert.classList.add("open-alert");
// }

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    centeredSlides: false,
    slidesPerGroupSkip: 1,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    breakpoints: {
      769: {
        slidesPerView: 4,
        slidesPerGroup: 4,
      },
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});
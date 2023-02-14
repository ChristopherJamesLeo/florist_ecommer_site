
let getHeader = document.querySelector(".header");
window.onscroll = function(){
    let getscrollval = window.scrollY;
    if(getscrollval > 0) {
        getHeader.classList.add("header-ani");
    }else {
        getHeader.classList.remove("header-ani");
    }
}
let getCarts = JSON.parse(localStorage.getItem("carts"));
let getShowCartAmount = document.getElementById("show-cart-amount");
let cartAmount = 0
if(getCarts != null){
    getCarts.forEach(function(getCart){
        let getPrice = +getCart.price; // to changet number datatype
        cartAmount += getPrice;
    })
}
// console.log(cartAmount);
// console.log(getCarts.length)
let cartIcons = `<ion-icon name="bag-handle-outline"></ion-icon><span class="nav-remark">(${getCarts.length < 10 ? "0"+getCarts.length : getCarts.length})<span class="nav-remark-price">$${cartAmount}.0</span></span>`
getShowCartAmount.innerHTML = cartIcons;

let getTaps = document.querySelectorAll(".our-service-tap-container");
let getTapTitles = document.querySelectorAll(".our-service-tap-content h3");

let getserviceTitles = document.querySelector(".our-service-content-header h1");

getTaps.forEach(function(getTap){
    // console.log(getTap);
    getTap.addEventListener("click",function(){
        getserviceTitles.innerText = "";
        getTaps.forEach(function(clrActive){
            clrActive.classList.remove("active");
        })
        this.classList.add("active");
        // console.log(this.getAttribute("data-servece-show"));
        // console.log(getTapTitles[this.getAttribute("data-servece-show")].innerText);
        getserviceTitles.innerText = getTapTitles[this.getAttribute("data-servece-show")].innerText;
    })
})

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoWidth: false,
        items: 1,
        loop: true,
        autoplay : true,
        autoplayTimeout : 5000,
        autoplayHoverPause : true,
        smartSpeed:2000,
    });
    $("#owl-carousel").owlCarousel({
        autoWidth: false,
        items: 3,
        loop: true,
        autoplay : true,
        autoplayTimeout : 5000,
        autoplayHoverPause : true,
        smartSpeed:2000,
    });
});



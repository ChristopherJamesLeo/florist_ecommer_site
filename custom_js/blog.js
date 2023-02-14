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
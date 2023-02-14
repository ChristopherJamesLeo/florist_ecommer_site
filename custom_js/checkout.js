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

// let getCarts = JSON.parse(localStorage.getItem("carts"));
let cartListContainer = document.getElementById("cart-list-container");

getCarts.forEach(function(getCart,idx){
    let getCartlist = `
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted"><span class="quantity">${getCart.quantity}</span>x ${getCart.name}</span>
                            <input type="hidden" name="" id="price" class="price" value="${getCart.price}">
                            <span class="fw-bold">$<span class="total-price">${getCart.price}</span>.00</span>
                        </div>`;
    cartListContainer.innerHTML += getCartlist;
})

let getProductPrices = document.querySelectorAll(".price");
let getQuantitys = document.querySelectorAll(".quantity");
let getTotalPrices = document.querySelectorAll(".total-price");
let getcartsubtotal = document.querySelector("#cart-subtotal");
let getcarttotal = document.querySelector("#cart-total");

var getCartTotalvalue = 0

getProductPrices.forEach(function(getProductPrice,idx){
    // console.log(getProductPrice.innerText,idx)
    let getPrice = getProductPrice.value;
    let getQuan = +getQuantitys[idx].innerText ;
    // console.log(getQuan)
    // console.log(typeof getPrice)
    let getTotal = getPrice * getQuan;
    getTotalPrices[idx].innerText = getTotal;
    // console.log(getTotal)
    getCartTotalvalue += getTotal;
    
})
// console.log(getCartTotal);
getcartsubtotal.innerText = getCartTotalvalue;
getcarttotal.innerText = getCartTotalvalue;

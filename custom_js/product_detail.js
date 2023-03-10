
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

let getDetailTabs = document.querySelectorAll(".detail-tabs")
let getShowParas = document.querySelectorAll(".show-para");
showidx = 0;

getDetailTabs.forEach(function(getDetailTab,idx){
    getDetailTab.addEventListener("click",function(){
        getDetailTabs.forEach((item,idx)=>{getDetailTabs[idx].classList.remove("active")});
        this.classList.add("active");
        // console.log(this.getAttribute("show-detail"))
        showPara(showidx = this.getAttribute("show-detail"));

    })
})
function showPara(idx){
    getShowParas.forEach((getShowPara)=>{getShowPara.style.display="none"})
    getShowParas[idx].style.display= "block";
}
showPara(showidx);

let getAddCartBtns = document.querySelectorAll(".item-add-to-cart");
// console.log(getAddCartBtns);
var cartArr = [] ;
getAddCartBtns.forEach(function(getAddCartBtn){
    // console.log(getAddCartBtn);
    getAddCartBtn.addEventListener("click",function(e){
        // console.log(this.parentElement.querySelector(".price").textContent.trim());
        let getImgSrc = this.parentElement.previousElementSibling.querySelector("img").src ;
        let getProductName = this.parentElement.querySelector(".item-name").textContent.trim();
        let getPrice = this.parentElement.querySelector(".price").textContent.trim();
        // console.log(getImgSrc,getProductName,getPrice);
        
        if(localStorage.getItem("carts") === null){
            cartArr = [];
        }else {
            cartArr = JSON.parse(localStorage.getItem("carts"))
        }
        

        cartArr.push({
            img : getImgSrc,
            name : getProductName,
            price : getPrice,
            quantity : 1 
        })
        localStorage.setItem("carts" , JSON.stringify(cartArr));

        console.log(cartArr);
    })
});
let getCart = JSON.parse(localStorage.getItem("carts"));
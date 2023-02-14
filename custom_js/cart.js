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
            let getCartBody = document.getElementById("cart-body");
            let getCartList = document.getElementById("cart-list");
             
            if(getCarts != null){
                getCarts.forEach(function(getCart,idx){
                let getTr =`<tr class="cart-role">
                                    <td class="product-column">
                                        <div class=" d-flex justify-content-start align-items-center cart-product-container">
                                            <img src="${getCart.img}" alt="" class="d-block me-2 cart-product-img">
                                            <div>
                                                <span class="product-name">${getCart.name}</span><br><span class="product-price">$<span class="price">${getCart.price}</span>.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="quantity-column">
                                        <input type="number" name="quantity" id="quantity" class="quantity" value="${getCart.quantity}">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center product-total-column">
                                            <div class="product-total-price">$<span class="total-price">11</span>.00</div>
                                            <div><a href="javascript:void(0)"  class="deleteCart"><i class="fas fa-times"></i></a></div>
                                        </div>
                                    </td>
                                </tr>`
                    getCartBody.innerHTML += getTr;
                    let cartList = `
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted"><span class="quantity">${getCart.quantity}</span>x ${getCart.name}</span>
                                    <input type="hidden" name="" id="price" class="p-price" value="">
                                    <span class="fw-bold">$<span class="total-price">${getCart.price}</span>.00</span>
                                </div>`;

                    getCartList.innerHTML += cartList;
                    
                })
            }

        
                let getClearCartBtn = document.getElementById("clear-cart");
                let getCartRoles = document.querySelectorAll(".cart-role");

                getClearCartBtn.addEventListener("click",function(){
                    localStorage.removeItem("carts");
                    getCartBody.innerHTML = " ";

                })
            let getDeleteCartEachItems = document.querySelectorAll(".deleteCart");
            // console.log(getDeleteCartEachItems);
            
            let getLocalProductNames = document.querySelectorAll(".product-name");
            let getLocalPrices = document.querySelectorAll(".price");
            let getLocalQuantitys = document.querySelectorAll(".quantity");

            // console.log(getCartRole);
            var cartArrLocal = [];
            getDeleteCartEachItems.forEach(function(getDeleteCartEachItem,idx){
                // console.log(getLocalImgs[idx].src)
                getDeleteCartEachItem.addEventListener("click",function(e){
                    // console.log(getDeleteCartEachItem);
                    // console.log(this.parentElement.parentElement.parentElement.parentElement);
                    if(cartArrLocal.length === 1) {
                        localStorage.removeItem("carts");
                        console.log("cart clear");
                    }
                    this.parentElement.parentElement.parentElement.parentElement.remove();
                    if(localStorage.getItem("carts") === null){
                        cartArrLocal = []
                    }else {
                        JSON.parse(localStorage.getItem("carts"));
                    }

                    let getLocalImgs = document.querySelectorAll(".cart-product-img");
                    let getLocalProductNames = document.querySelectorAll(".product-name");
                    let getLocalPrices = document.querySelectorAll(".price");
                    let getLocalQuantitys = document.querySelectorAll(".quantity");
                    getLocalImgs.forEach(function(getLocalImg,idx){
                        console.log(getLocalImgs[idx].src);
                        // console.log(idx)
                        cartArrLocal.push({
                        img : getLocalImgs[idx].src,
                        name : getLocalProductNames[idx].textContent,
                        price : getLocalPrices[idx].textContent,
                        quantity : getLocalQuantitys[idx].value
                    })
                    localStorage.setItem("carts",JSON.stringify(cartArrLocal));
                    })

                    // console.log(cartArrLocal);
                })
                
            })
            // console.log(JSON.parse(localStorage.getItem("carts")));

            let getProductPrices = document.querySelectorAll(".price");
            let getQuantitys = document.querySelectorAll(".quantity");
            let getTotalPrices = document.querySelectorAll(".total-price");
            let getcartsubtotal = document.querySelector("#cart-subtotal");
            let getcarttotal = document.querySelector("#cart-total");

            var getCartTotalvalue = 0

            getProductPrices.forEach(function(getProductPrice,idx){
                // console.log(getProductPrice.innerText,idx)
                let getPrice = +getProductPrice.innerText;
                let getQuan = getQuantitys[idx].value ;
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

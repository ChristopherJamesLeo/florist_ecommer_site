


let getHeader = document.querySelector(".header");
        window.onscroll = function(){
            let getscrollval = window.scrollY;
            if(getscrollval > 0) {
                getHeader.classList.add("header-ani");
            }else {
                getHeader.classList.remove("header-ani");
            }
        }
        let getAddCartBtns = document.querySelectorAll(".item-add-to-cart");
        // console.log(getAddCartBtns);
        var cartArr = [] ;
        getAddCartBtns.forEach(function(getAddCartBtn){
            // console.log(getAddCartBtn);
            getAddCartBtn.addEventListener("click",function(e){
                // console.log(this.parentElement.querySelector(".price").textContent.trim());
                let getcartalert = document.getElementById("cart-alert");
                getcartalert.classList.add("show");
                this.style.display = "none";
                setTimeout(function(){
                    getcartalert.classList.remove("show");
                    // console.log(e.target);
                    e.target.style.display = "block";
                },1000)
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
console.log(getCarts);
if(getCarts != null) {
    let cartIcons = `<ion-icon name="bag-handle-outline"></ion-icon><span class="nav-remark">(${getCarts.length < 10 ? "0"+getCarts.length : getCarts.length})<span class="nav-remark-price">$${cartAmount}.0</span></span>`
    getShowCartAmount.innerHTML = cartIcons;
}


        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                autoWidth: false,
                items: 1,
                loop: true,
                autoplay : true,
                autoplayTimeout : 8000,
                autoplayHoverPause : true,
                smartSpeed:2000,
            });
            $("#owl-carousel").owlCarousel({
                autoWidth: false,
                items: 3,
                loop: true,
                autoplay : true,
                autoplayTimeout : 8000,
                autoplayHoverPause : true,
                smartSpeed:2000,
            });
        });
        $(".ourflowertaps").click(function(){
        $tabvalue = $(this).attr("data-items");
        // $parent = $(this).parent();
        // console.log($parent);
        $(this).parent().addClass("active").siblings().removeClass("active");
        if($tabvalue === "all"){
            // console.log($(".our-flower-item-container"))
            $(".our-flower-item-container").show("slow").css({
                "transform" : "scale(1)",
                "transform-origin" : "center",
            });
        }else {
            $(".our-flower-item-container").hide();
            $(".our-flower-item-container").not("."+$tabvalue).css({
                "transform" : "scale(0)",
                "transform-origin" : "center",
            });
            $(".our-flower-item-container").filter("."+$tabvalue).show("slow").css({
                "transform" : "scale(1)",
                "transform-origin" : "center",
            });
        }
    })
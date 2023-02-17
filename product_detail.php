<?php
    include "./phpEngine/config.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link rel="shortcut icon" href="./assets/imgs/logo_fav/benefit-1.png.webp" type="image/x-icon">

    <!--  bootstrap 5.3 css1 js 1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Nothing+You+Could+Do&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- owl carousel css2 js2 -->
    <link rel="stylesheet" href="./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="./custom_css/style.css">
</head>
<body>
    <header class=" header ">
        <nav class="navbar navbar-expand-lg container justify-content-between ">
            <a href="./index.php" class="navbar-brand d-block">
                <img src="./assets/imgs/logo_fav/logo.png.webp" class="brand-logo" alt="logo">
            </a>
            <button class="btn navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <div class="nav-btn-lines"></div>
                <div class="my-1 nav-btn-lines"></div>
                <div class="nav-btn-lines"></div>
            </button>
            <div id="nav" class="navbar-collapse collapse justify-content-end ">
                <ul class="navbar-nav text-uppercase ">
                    <li class="nav-item "><a href="./index.php" class="nav-link ">home</a></li>
                    <li class="nav-item"><a href="./about.php" class="nav-link ">about</a></li>
                    <li class="nav-item"><a href="./service.php" class="nav-link">services</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link">shop</a></li>
                    <li class="nav-item"><a href="./cart.php" class="nav-link active">pages</a>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="./cart.php">Cart</a></li>
                            <li class="list-group-item"><a href="./checkout.php">Checkout</a></li>
                            <li class="list-group-item"><a href="#">Wishlist</a></li>
                            <li class="list-group-item"><a href="./portfolio.php">Portfolio</a></li>
                            <li class="list-group-item"><a href="./product_detail.php">Shop Details</a></li>
                            <li class="list-group-item"><a href="./blog_detail.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="./blog.php" class="nav-link ">blog</a></li>
                    <li class="nav-item"><a href="./contactus.php" class="nav-link ">contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><ion-icon name="search-outline"></ion-icon></a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-flex"><ion-icon name="heart-outline"></ion-icon><span class="nav-remark">(01)</span></a></li>
                    <li class="nav-item"><li class="nav-item"><a href="./cart.php" id="show-cart-amount" class="nav-link d-flex"></a></li></li>
                </ul>
            </div>
        </nav>

    </header>
    <!-- page header section start  -->
    <section class="page-header mb-5">
        <div class="py-5 page-header-container">
            <div class="text-center mx-auto page-header-content">
                <h1>Product detail</h1>
                <span class="text-uppercase text-muted"><a href="./index.php">home</a> &nbsp; | &nbsp; <a href="./checkout.php" class="text-muted">Product detail</a></span>
            </div>
        </div>
    </section>
    <!-- page header section end -->  
    <!-- Product Detail section start -->
    <section>
        <div class="product-detail-section-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 p-2">
                        <form action="<?php $_SERVER["PHP_SELF"] ?>">
                            <?php
                                if(isset($_REQUEST["id"] )){
                                    $pid = $_REQUEST["id"] ;
                                }else {
                                    $pid = 1;
                                }
                                // $pid = $_REQUEST["id"] ;
                                $shosql = "SELECT * FROM products WHERE id = {$pid}";
                                $shoresult = mysqli_query( $conn , $shosql );
                                if(mysqli_num_rows($shoresult) >0){
                                    while($shorow = mysqli_fetch_assoc($shoresult)){
                                        ?>
                            <div class="row">
                                <div class="col-lg-9 col-md-12 main-product-img-container">
                                    <img src="./assets/imgs/products/<?php  echo $shorow["product_img1"] ?>" id="main-product-img" class="main-product-img" alt="product-details-1">
                                </div>
                                <div class="col-lg-3 col-md-12 slide-product-img-container">
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-1.jpg.webp" show-img="0" alt="thumb-1">
                                    </div>
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-2.jpg.webp" show-img="1" alt="thumb-2">
                                    </div>
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-3.jpg.webp" show-img="2" alt="thumb-3">
                                    </div>
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-4.jpg.webp" show-img="3" alt="thumb-4">
                                    </div>
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-5.jpg.webp" show-img="4" alt="thumb-5">
                                    </div>
                                    <div class="slide-product-img">
                                        <img src="./assets/imgs/products/thumb-6.jpg.webp" show-img="5" alt="thumb-6">
                                    </div>
                                </div>
                            </div
                                        <?php
                                    }
                                }
                            ?>
                            >
                            <script>
                                let getMainImg = document.getElementById("main-product-img");
                                let getSlideImgs = document.querySelectorAll(".slide-product-img img");
                                let productImgs = ["product-details-2.jpg.webp","product-details-3.jpg.webp","product-details-4.jpg.webp","product-details-5.jpg.webp","product-details-6.jpg.webp","product-details-1.jpg.webp"];

                                getSlideImgs.forEach(function(getSlideImg){
                                    getSlideImg.addEventListener("click",function(){
                                        // console.log(this.getAttribute("show-img"));
                                        getMainImg.src = `./assets/imgs/products/`+ productImgs[this.getAttribute("show-img")];
                                    })
                                })
                            </script>
                        </form>
                        
                    </div>
                    <div class="col-lg-6 col-md-12 p-2 product-detail-form-container">
                        <form action="" method="get" enctype="multipart/form-data">
                            <?php 
                                if(isset($_REQUEST["id"] )){
                                    $formpid = $_REQUEST["id"] ;
                                }else {
                                    $formpid = 1;
                                }
                                
                                $formsql = "SELECT * FROM products WHERE id = {$formpid}";
                                $formresult = mysqli_query( $conn , $formsql );
                                if(mysqli_num_rows($formresult) > 0){
                                    
                                    while($formrow = mysqli_fetch_assoc($formresult)){
                                        
                            ?>
                            <div class="mb-5 form-header">
                                <div class="d-flex justify-content-between align-items-center product-detail-form-header">
                                    <div class="product-detail-header">
                                        <span class="text-uppercase">Succulent</span><br>
                                        <h1><?php echo $formrow["name"]; ?></h1>
                                    </div>
                                    <div class="product-detail-price">
                                        <span>$<?php echo $formrow["price"]; ?>.00</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center product-rating-container ">
                                    <div class="rating-stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="text-center px-2 review-count">
                                        <span>03 reviews</span>
                                    </div>
                                    <div class="write-review">
                                        <span>Write a review</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-head-categories">
                                <span class="text-muted">Categories: </span><span>Succlent</span><br>
                                <span class="text-muted">Product code: </span><span>PM 101</span><br>
                                <span class="text-muted">Reward points: </span><span>30</span><br>
                                <span class="text-muted">Availability: </span><span>In Stock</span><br>
                            </div>
                            <hr class="my-4">
                            <div class="product-control">
                                <input type="number" name="p-quantity" id="p-quantity" class="p-quantity" value="2">
                                <a href="#" class="text-uppercase text-light bg-dark nav-link addcart">Add to cart</a>
                                <a href="#" class="addwishlist"><i class="fas fa-heart"></i></a>
                            </div>
                            <hr class="my-4">
                            <div class="product-detail-show-container">
                                <div class="mb-3 product-detail-tab">
                                    <span id="description" class="detail-tabs active" show-detail = "0">Description</span> / <span id="shipping-return" class="detail-tabs " show-detail = "1">Shipping & Returns</span> / <span id="review" class="detail-tabs " show-detail = "2">Reviews ( 03 )</span>
                                </div>
                                <div class="product-detail-para-container">
                                    <div class="show-para description">
                                        <p>
                                        <?php echo $formrow["description"]; ?>
                                        </p>
                                    </div>
                                    <div class="show-para shipping-return">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque numquam
                                        </p>
                                    </div>
                                    <div class="show-para reviews">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro neque numquam cumque dicta, qui ab harum voluptas quos expedita ipsum praesentium culpa perferendis ipsam hic maxime, accusamus, minus odio et? Lorem ipsum dolor sit amet consectetur adipisicing elit. Non facilis ea odio rerum? Sed voluptatum nulla voluptates blanditiis consequatur cum, dolore, qui cupiditate quasi esse exercitationem beatae, voluptate non ipsum.
                                        </p>
                                    </div>


                                </div>
                            </div>
                            <?php
                                    }
                                }
                                
                            ?>


                            


                        </form>
                    </div>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </section>
    <!-- Product Detail Section End -->
    <!-- Relative Product Section Start -->
    <section class="our-flower py-5">
        <div class="our-flower-container container">
            <!-- title start -->
            <div class="text-center mb-4 section-title ">
                <h1>Related products</h1>
            </div>
            <!-- title end -->
            <div class="our-flower-item-show-main-container">
                <div class="our-flower-item-show-container">
                    <div class="row">
                        <?php
                            $psql = "SELECT * FROM products";
                            $presult = mysqli_query( $conn , $psql );
                            if(mysqli_num_rows($presult)){
                                while($prow = mysqli_fetch_assoc($presult)){
                                    
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container <?php echo $prow["categories"]; ?>">
                            <input type="hidden" name ="p-id" value = "<?php echo $prow['id'] ;?>">
                            <div class="our-flower-item-img-container">
                                <a href="./product_detail.php?id=<?php echo $prow['id'] ;?>">
                                    <img src="./assets/imgs/products/<?php echo $prow["product_img1"] ;?>" alt="<?php echo $prow["product_img1"]; ?>">
                                </a>
                                
                                <div class="d-flex justify-content-center align-items-center our-flower-item-icons-container">
                                    <a href="#" class="our-flower-item-icon"><ion-icon name="search-outline"></ion-icon></a>
                                    <a href="#" class="our-flower-item-icon"><ion-icon name="heart-outline"></ion-icon></a>
                                    <a href="#" class="our-flower-item-icon"><ion-icon name="bag-handle-outline"></ion-icon></a>
                                </div>
                                <div class="text-uppercase fw-bold item-info">
                                    <span class="item-detail-info">New</span>
                                </div>
                            </div>
                            <div class="text-center our-flower-item-content-container">
                                <h3 class="item-name">
                                <?php echo $prow["name"]; ?>
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price"><?php echo $prow["price"]; ?></span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div> 
                        <?php
                                }
                            }
                        ?>
                                                                                                    
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Relative Product Sectio End -->
    <!-- follow us section start -->
    <section class="follow-us-section">
        <div class="p-3 follw-us-section-container">
            <div class="row justify-content-evenly align-items-start flex-wrap">
                <div class="mb-3 follow-us-items-container">
                    <div class=" text-center follw-us-items-content">
                        <i class="fab fa-instagram"></i>
                        <span class="d-block">Follow Us <a href="#">@florist</a></span>
                    </div>
                </div>
                <div class="mb-3 follow-us-items-container">
                    <div class=" text-center follw-us-items-content">
                        <i class="fab fa-instagram"></i>
                        <span class="d-block">Follow Us <a href="#">@florist</a></span>
                    </div>
                </div>
                <div class="mb-3 follow-us-items-container">
                    <div class=" text-center follw-us-items-content">
                        <i class="fab fa-instagram"></i>
                        <span class="d-block">Follow Us <a href="#">@florist</a></span>
                    </div>
                </div>
                <div class="mb-3 follow-us-items-container">
                    <div class=" text-center follw-us-items-content">
                        <i class="fab fa-instagram"></i>
                        <span class="d-block">Follow Us <a href="#">@florist</a></span>
                    </div>
                </div>
                <div class="mb-3 follow-us-items-container">
                    <div class=" text-center follw-us-items-content">
                        <i class="fab fa-instagram"></i>
                        <span class="d-block">Follow Us <a href="#">@florist</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- follow us section end -->
    <!-- footer section start -->
    <footer>
        <!-- cart alert start -->
        <div id="cart-alert" class="cart-alert alert alert-success">Succeesul you cart</div>
        <!-- cart alert end -->
        <div class="footer-section-container">
            <div class="container">
                <div class="row py-4 footer-header-container ">
                    <div class="col-lg-3 col-md-3 col-sm-12 my-2 text-start">
                        <img src="./assets/imgs/logo_fav/logo.png.webp" alt="logo">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-2 text-start ">
                        <p class="text-muted">
                            The floristry business has a significant market in the corporate and social event world, as flowers
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 my-2 text-start footer-icons-container">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="row footer-body-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-5 company-account-container">
                        <div class="row">
                            <div class="col-6 company-container">
                                <h1>Company</h1>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="#" class=" text-muted text-decoration-none">About Us</a></li>
                                    <li class="list-group-item border-0"><a href="#"  class=" text-muted text-decoration-none">Services</a></li>
                                    <li class="list-group-item border-0"><a href="#"  class=" text-muted text-decoration-none">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 account-container">
                                <h1>Account</h1>
                                <ul class="list-group">
                                    <li class="list-group-item border-0"><a href="#" class=" text-muted text-decoration-none">My cart</a></li>
                                    <li class="list-group-item border-0"><a href="#"  class=" text-muted text-decoration-none">Wishlist</a></li>
                                    <?php
                                        if (!isset($_SESSION["id"])){
                                    ?>
                                            <li class="list-group-item border-0"><a href="./login.php"  class=" text-muted text-decoration-none">Login/Register</a></li>
                                    <?php
                                        }else {
                                    ?>
                                            <li class="list-group-item border-0"><a href="./phpEngine/logout.php"  class=" text-muted text-decoration-none">Log Out</a></li>
                                    <?php
                                        }
                                    ?>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-5 border newletter-container">
                        <h1>Newletter</h1>
                        <p class="text-muted">
                            Subcribe to our newsletter to get more free tips. No Spam, Promise.
                        </p>
                        <div class="py-2 input-group">
                            <input type="email" name="subscribe" id="subscribe" class=" subscribe-input" placeholder="Email">
                            <input type="submit" value="subscribe" class="text-uppercase subscribe-btn">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-5 getintouch-container">
                        <h1>Get In Touch</h1>
                        <p class="my-3 text-muted">
                            69 North Cleveland Street, Memphis,USA.
                        </p>
                        <p class="my-3 text-muted">
                            (123) 8111 9210 - (012) 1111 6868
                        </p>
                        <p class="my-3 text-muted">
                            Florisr@supportthem.com
                        </p>

                    </div> 
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="./assets/libs/jquery-3_6_3.js"></script>
        
    <!-- owl carousel js2 -->
    <script src="./assets/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    
    <!-- iconicon js 2 -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <!-- custom js -->
    <!-- <script src="./custom_js/product_detail.js"></script> -->
<script>
        
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
if(getCarts != null){
    let cartIcons = `<ion-icon name="bag-handle-outline"></ion-icon><span class="nav-remark">(${getCarts.length < 10 ? "0"+getCarts.length : getCarts.length})<span class="nav-remark-price">$${cartAmount}.0</span></span>`
    getShowCartAmount.innerHTML = cartIcons;
}

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
        let getcartalert = document.getElementById("cart-alert");
        
        getcartalert.classList.add("show");
        setTimeout(function(){
            getcartalert.classList.remove("show")
            console.log("done");
        },1000)
        let getImgSrc = this.parentElement.previousElementSibling.querySelector("img").src ;
        let getProductName = this.parentElement.querySelector(".item-name").textContent.trim();
        let getPrice = this.parentElement.querySelector(".price").textContent.trim();
        let productid = this.parentElement.parentElement.querySelector("input").value;
        let useriddb = <?php echo $_SESSION["id"] ?>;
                // console.log(getImgSrc,getProductName,getPrice);
                
                if(localStorage.getItem("carts") === null){
                    cartArr = [];
                }else {
                    cartArr = JSON.parse(localStorage.getItem("carts"))
                }
                console.log("hello");
                cartArr.push({
                    
                    userId : useriddb,
                    pid : productid,
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
</script>
    
    
</body>
</html>
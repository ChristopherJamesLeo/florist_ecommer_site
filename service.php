<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our services</title>
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
                    <li class="nav-item"><a href="./service.php" class="nav-link active">services</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link">shop</a></li>
                    <li class="nav-item"><a href="./cart.php" class="nav-link ">pages</a>
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
                <h1>Our services</h1>
                <span class="text-uppercase text-muted"><a href="./index.php">home</a> &nbsp; | &nbsp; <a href="./service.php" class="text-muted">services</a></span>
            </div>
        </div>
    </section>
    <!-- page header section end -->
    <!-- services main section start -->
    <section class="our-service">
        <div class="our-services-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 p-3 our-service-tap-main-container">
                        <div class="text-center mb-5 our-service-tap-container active" data-servece-show="0">
                            <div class="our-service-tap-icon">
                                <img src="./assets/imgs/logo_fav/services-1.png.webp" alt="">
                            </div>
                            <div class="our-service-tap-content">
                                <h3>Customer Orders</h3>
                                <p class="text-muted">
                                    Flower helps you perfectly express how important your significant.
                                </p>
                            </div>
                        </div>
                        <div class="text-center mb-5 our-service-tap-container" data-servece-show="1">
                            <div class="our-service-tap-icon">
                                <img src="./assets/imgs/logo_fav/services-2.png.webp" alt="">
                            </div>
                            <div class="our-service-tap-content">
                                <h3>Event decoration</h3>
                                <p class="text-muted">
                                    Flower helps you perfectly express how important your significant.
                                </p>
                            </div>
                        </div>
                        <div class="text-center mb-5 our-service-tap-container" data-servece-show="2">
                            <div class="our-service-tap-icon">
                                <img src="./assets/imgs/logo_fav/services-3.png.webp" alt="">
                            </div>
                            <div class="our-service-tap-content">
                                <h3>Green landscape</h3>
                                <p class="text-muted">
                                    Flower helps you perfectly express how important your significant.
                                </p>
                            </div>
                        </div>                                                
                    </div>
                    <div class="col-lg-8 col-md-12 p-3 our-service-content-main-container">
                        <div class="our-service-content-container">
                            <div class="our-service-content-head-img-container">
                                <img src="./assets/imgs/bgimages/services-video.jpg.webp" alt="services-video">
                                <a href="javascript:void(0)"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="our-service-content-body-container">
                                <div class="our-service-content-header">
                                    <h1 id="our-service-content-header">Customer Orders</h1>
                                    <p class="fw-semibold">From $60 - $300</p>
                                </div>
                                <div class="our-service-content-body">
                                    <p class="text-muted">
                                        For Heather Henson, of Boreal Blooms in Cold Lake, Alberta, Canada, growing flowers that can be dried and incorporated into late fall and winter floral arrangements has been a game-changer. During her growing season, this farmer-florist relies on a vivid palette of annuals, perennials and ornamental grasses to supply her studio.
                                    </p>
                                    <table class="my-5">
                                        <tr class="">
                                            <td>
                                                <div class="d-flex our-service-content-table-item">
                                                    <div class="our-service-content-table-icon me-2">
                                                        <img src="./assets/imgs/logo_fav/icon.png.webp" alt="">
                                                    </div>
                                                    <div class="our-service-content">
                                                        <p>
                                                            Free initial consulting. For retail and office tenants who are interested in a weekly delivery program floral design plan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex our-service-content-table-item">
                                                    <div class="our-service-content-table-icon me-2">
                                                        <img src="./assets/imgs/logo_fav/icon.png.webp" alt="">
                                                    </div>
                                                    <div class="our-service-content">
                                                        <p>
                                                            Free initial consulting. For retail and office tenants who are interested in a weekly delivery program floral design plan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="mt-5">
                                                <div class="mt-3 d-flex our-service-content-table-item">
                                                    <div class="our-service-content-table-icon me-2">
                                                        <img src="./assets/imgs/logo_fav/icon.png.webp" alt="">
                                                    </div>
                                                    <div class="our-service-content">
                                                        <p>
                                                            Free initial consulting. For retail and office tenants who are interested in a weekly delivery program floral design plan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="mt-3 d-flex our-service-content-table-item">
                                                    <div class="our-service-content-table-icon me-2">
                                                        <img src="./assets/imgs/logo_fav/icon.png.webp" alt="">
                                                    </div>
                                                    <div class="our-service-content">
                                                        <p>
                                                            Free initial consulting. For retail and office tenants who are interested in a weekly delivery program floral design plan.
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <p class="text-muted">
                                        For Heather Henson, of Boreal Blooms in Cold Lake, Alberta, Canada, growing flowers that can be dried and incorporated into late fall and winter floral arrangements has been a game-changer. During her growing season, this farmer-florist relies on a vivid palette of annuals, perennials and ornamental grasses to supply her studio.
                                    </p>
                                    <div class="text-center service-quote-container">
                                        <h1 class="text-uppercase mb-4">Get A Quote</h1>
                                        <form action="" method="get" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 mb-4 form-group">
                                                    <input type="text" name="name" id="service-input-name" class=" rounded-0 border form-controls" placeholder="Name">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-4 form-group">
                                                    <input type="text" name="phonenumber" id="service-input-phonenumber" class=" rounded-0 border form-controls" placeholder="Phone">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-4 form-group">
                                                    <input type="email" name="email" id="service-input-email" class=" rounded-0 border form-controls" placeholder="Email">
                                                </div>
                                                <div class="col-lg-6 col-md-12 mb-4 form-group">
                                                    <select name="service-type" id="service-type"  class=" rounded-0 border form-controls" >
                                                        <option value="type-of-service" selected>Type Of Service</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 mb-4 form-group">
                                                    <textarea name="service-message" id="service-message"  class=" rounded-0 border form-controls"  placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- services main section end -->
    <!-- footer section start -->
    <footer>
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
                                    <li class="list-group-item border-0"><a href="#"  class=" text-muted text-decoration-none">Login/Register</a></li>
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
    <!-- <script src="./custom_js/service.js"></script> -->
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



</script>
    

</body>
</html>
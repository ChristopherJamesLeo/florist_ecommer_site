<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
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
                    <li class="nav-item"><a href="./service.php" class="nav-link ">services</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link active">shop</a></li>
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
                <h1>Shop</h1>
                <span class="text-uppercase text-muted"><a href="./index.php">home</a> &nbsp; | &nbsp; <a href="./shop.php" class="text-muted">Shop</a></span>
            </div>
        </div>
    </section>
    <!-- page header section end -->
    <!-- our flower section start -->
    <section class="our-flower py-5">
        <div class="our-flower-container container">
            <!-- title start -->
            <div class="text-center section-title ">
                <h5 class="text-uppercase">our flower</h5>
                <h1>New Arrivals</h1>
            </div>
            <!-- title end -->
            <div class="our-flower-taps-container" >
                <ul class="d-flex flex-wrap justify-content-center align-items-center our-flower-taps-list-group">
                    <li class="active"><a href="javascript:void(0)" id="all" class="ourflowertaps" data-items = "all">All</a></li>
                    <li><a href="javascript:void(0)" id="bouquet" class="ourflowertaps" data-items = "bouquet">Bouquet</a></li>
                    <li><a href="javascript:void(0)" id="flowerbox" class="ourflowertaps" data-items = "flowerbox">Flower Box</a></li>
                    <li><a href="javascript:void(0)" id="flowershelf" class="ourflowertaps" data-items = "flowershelf">Flower Shelf</a></li>
                    <li><a href="javascript:void(0)" id="basketflower" class="ourflowertaps" data-items = "basketflower">Basket Of Flower</a></li>
                    <li><a href="javascript:void(0)" id="gift" class="ourflowertaps" data-items = "giftcombos">Gift Combos</a></li>
                </ul>
            </div>
            <div class="our-flower-item-show-main-container">
                <div class="our-flower-item-show-container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container bouquet">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-1.jpg.webp" alt="product-1.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container flowerbox">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-2.jpg.webp" alt="product-2">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container bouquet">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-3.jpg.webp" alt="product-3.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container bouquet">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-4.jpg.webp" alt="product-4.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container flowerbox">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-5.jpg.webp" alt="product-5.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container giftcombos">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-6.jpg.webp" alt="product-6.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container basketflower">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-7.jpg.webp" alt="product-7.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container giftcombos">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-8.jpg.webp" alt="product-8.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container flowershelf">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-9.jpg.webp" alt="product-9.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>   
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container flowershelf">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/product-10.jpg.webp" alt="product-10.jpg">
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
                                    Fly Me To The Moon
                                </h3>
                                <h6 class="item-price">
                                    <span>$</span><span class="price">230</span><span>.00</span>
                                </h6>
                                <a href="javascript:void(0)" class="d-block text-uppercase item-add-to-cart">Add To Cart</a>
                            </div>
                        </div>                                                                                                                                                                                                                                                                                                                                                     
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- our flower section end -->
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
    <script src="./custom_js/home.js"></script>
    
</body>
</html>
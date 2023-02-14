<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check out</title>
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
                    <li class="nav-item"><a href="./contactus.php" class="nav-link">contact</a></li>
                    <li class="nav-item"><a href="javascrpt:void(0)" class="nav-link"><ion-icon name="search-outline"></ion-icon></a></li>
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
                <h1>Check out</h1>
                <span class="text-uppercase text-muted"><a href="./index.php">home</a> &nbsp; | &nbsp; <a href="./checkout.php" class="text-muted">checkout</a></span>
            </div>
        </div>
    </section>
    <!-- page header section end -->  
    <!-- Check out section start -->
    <section>
        <div class="cart-table-section checkout-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 p-3">
                        <div class="contact-information-container">
                            <div class="d-flex justify-content-between align-items-center mb-3 contact-information-header">
                                <h1>Contact Informaiton</h1>
                                <span class="d-block">Already have an account? <a href="./logIn.php" class="nav-link d-inline">Login</a></span>
                            </div>
                            <div class="form-group my-2">
                                <input type="text" name="emailorphonr" id="form-control" class="form-control rounded-0 py-2 px-3" placeholder="Email or mobile phone number">
                            </div>
                            <div class="form-group my-3">
                                <input type="checkbox" name="keep" id="keep" class="form-check-input me-2">
                                <label for="keep">Keep me up to dateon news and exclusive offers</label>
                            </div>
                        </div>
                        <div class="contact-information-container shipping-address-container">
                            <div class="d-flex justify-content-start align-items-center mb-3 contact-information-header shipping-address-header">
                                <h1>Shipping address</h1>
                            </div>
                            <div class="shipping-address-body">
                                <form action="" method="get" enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                        <label for="firstname" class="mb-2">First name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control rounded-0 py-2 px-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="lastname" class="mb-2">Last name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control rounded-0 py-2 px-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="contact" class="mb-2">Contact</label>
                                        <input type="text" name="contact" id="contact" class="form-control rounded-0 py-2 px-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address" class="mb-2">Address</label>
                                        <input type="text" name="str-address" id="str-address" class="form-control rounded-0 py-2 px-3 mb-2" placeholder="Steet Address">
                                        <input type="text" name="apart-address" id="apart-address" class="form-control rounded-0 py-2 px-3" placeholder="Apartment,suite,unite ect (optional)">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="town" class="mb-2">Country/State</label>
                                        <input type="text" name="town" id="town" class="form-control rounded-0 py-2 px-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="postcode" class="mb-2">Postcode/Zip</label>
                                        <input type="text" name="postcode" id="postcode" class="form-control rounded-0 py-2 px-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="odernote" class="mb-2">Order note</label>
                                        <input type="text" name="odernote" id="odernote" class="form-control rounded-0 py-2 px-3" placeholder="Note about your order, e.g, special noe for delivery"> 
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="checkbox" name="keep" id="keep" class="form-check-input me-2">
                                        <label for="keep">Keep me up to dateon news and exclusive offers</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-4 col-md-12 p-3">

                        <div class="p-4 apply-box-container your-order-container mb-5">
                            <form action="" method="post" enctype="multipart/form-data">
                                <h3 class="mb-3">Your Order</h3>
                                <p class="pb-2 text-muted">Enter coupon code. It will be applied at checkout.</p>
                                <div class="d-flex apply-box pb-5">
                                    <input type="text" name="code" id="apply-input" class="rounded-0 apply-input" placeholder="Your code Here">
                                    <button type="submit" class="text-uppercase fw-semibold text-light bg-dark btn rounded-0">apply</button>
                                </div>
                                <h3 class="mb-5">Cart Total</h3>
                                <div id="cart-list-container">
                                    <!-- <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted"><span class="quantity">3</span>x Succulent gym</span>
                                        <input type="hidden" name="" id="price" class="price" value="25">
                                        <span class="fw-bold">$<span class="total-price">0</span>.00</span>
                                    </div> -->

                                </div>
                                
                                <hr>
                                <div class="cart-total-box-container checkbox-total-container">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-muted">Subtotal</span>
                                        <span class="fw-bold">$<span id="cart-subtotal">0</span>.00</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <span class="text-muted">Total</span>
                                        <span class="fw-bold">$<span id="cart-total">0</span>.00</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group my-3">
                                    <input type="checkbox" name="cheque" id="cheque" class=" me-2">
                                    <label for="cheque">Cheque payment</label>
                                </div>
                                <div class="form-group my-3">
                                    <input type="checkbox" name="paypal" id="paypal" class=" me-2">
                                    <label for="paypal">PayPal</label>
                                </div>
                                
                                <button type="submit" class="btn btn-dark rounded-0 fw-bold d-block py-3 text-light text-uppercase">Proceed to Order</a>
                            </form>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Check Out section end -->
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
    <script src="./custom_js/checkout.js"></script>
    
</body>
</html>
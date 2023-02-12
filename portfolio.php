<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
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
                    <li class="nav-item"><a href="#" class="nav-link d-flex"><ion-icon name="bag-handle-outline"></ion-icon><span class="nav-remark">(01) <span class="nav-remark-price">$65.0</span></span></a></li>
                </ul>
            </div>
        </nav>
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
        </script>
    </header>
    <!-- page header section start  -->
    <section class="page-header mb-5">
        <div class="py-5 page-header-container">
            <div class="text-center mx-auto page-header-content">
                <h1>Portfolio</h1>
                <span class="text-uppercase text-muted"><a href="./index.php">home</a> &nbsp; | &nbsp; <a href="./cart.php" class="text-muted">Portfolio</a></span>
            </div>
        </div>
    </section>
    <!-- page header section end -->  
    <!-- Portfolio body start -->
    <section>
        <div class="portfolio-body-container">
            <div class="container">
                <div class="row portfolio-grid">
                    <div class="col-lg-4">
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-1.jpg.webp" alt="portfolio-1.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-2.jpg.webp" alt="portfolio-2.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-3.jpg.webp" alt="portfolio-3.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-2">
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-4.jpg.webp" alt="portfolio-5.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-5.jpg.webp" alt="portfolio-5.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-6.jpg.webp" alt="portfolio-6.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 px-2">
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-7.jpg.webp" alt="portfolio-7.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-8.jpg.webp" alt="portfolio-8.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="portfolio-item-container">
                                <div class="porfolio-item-img">
                                    <img src="./assets/imgs/portfolio/portfolio-9.jpg.webp" alt="portfolio-9.jpg">
                                    <div class=" text-center portfolio-items-content">
                                        <h4 class="d-block">Flower Day</h4>
                                        <span>Decoration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio body End -->
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
    <script src="./custom_js/home.js"></script>
    
    <script>
        $(document).ready(function(){


        });
    </script>
    
</body>
</html>
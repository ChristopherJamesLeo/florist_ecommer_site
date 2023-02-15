<?php
    include "./phpEngine/config.php";

    session_start();
    // echo $_SESSION["email"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folrist Site</title>
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
                    <li class="nav-item "><a href="./index.php" class="nav-link active">home</a></li>
                    <li class="nav-item"><a href="./about.php" class="nav-link ">about</a></li>
                    <li class="nav-item"><a href="./service.php" class="nav-link">services</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link">shop</a></li>
                    <li class="nav-item"><a href="./cart.php" class="nav-link">pages</a>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="./cart.php">Cart</a></li>
                            <li class="list-group-item"><a href="./checkout.php">Checkout</a></li>
                            <li class="list-group-item"><a href="#">Wishlist</a></li>
                            <li class="list-group-item"><a href="./portfolio.php">Portfolio</a></li>
                            <li class="list-group-item"><a href="./product_detail.php">Shop Details</a></li>
                            <li class="list-group-item"><a href="./blog_detail.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="./blog.php" class="nav-link">blog</a></li>
                    <li class="nav-item"><a href="./contactus.php" class="nav-link">contact</a></li>
                    <!-- <li class="nav-item"><a href="./contactus.php" class="nav-link">Log In</a></li> -->
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><ion-icon name="search-outline"></ion-icon></a></li>
                    <li class="nav-item"><a href="#" class="nav-link d-flex"><ion-icon name="heart-outline"></ion-icon><span class="nav-remark">(01)</span></a></li>
                    <?php
                        if(isset($_SESSION["id"])){
                    ?>
                        <li class="nav-item"><a href="./cart.php" id="show-cart-amount" class="nav-link d-flex"></a></li>
                    <?php
                        }
                    ?>
                    
                </ul>
            </div>
        </nav>
    </header>
    
    <!-- banner carousel start -->
    <section class="banner-carousel-section">
        <div class="banner-carousel-container">
            <div class="owl-carousel owl-theme owl-loaded banner-carousel">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item owl-item1">
                            <div class="owl-item-container container d-flex justify-content-start align-items-center">
                                <div class="row ">
                                    <div class="col-lg-5 col-md-8 col-sm-12">
                                        <h3 class="font-uppercase fw-semibold">Fresh flower & gift shop</h3>
                                        <h1>Making beautiful flowers a part of your life.</h1>
                                        <a href="#" class="btn rounded-lg fw-bold p-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="owl-item owl-item2">
                            <div class="owl-item-container container d-flex justify-content-start align-items-center">
                                <div class="row ">
                                    <div class="col-lg-5 col-md-8 col-sm-12">
                                        <h3 class="font-uppercase fw-semibold">Fresh flower & gift shop</h3>
                                        <h1>Making beautiful flowers a part of your life.</h1>
                                        <a href="#" class="btn rounded-lg fw-bold p-2 px-3">Shop Now</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
                <!-- <div class="owl-dots container">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- banner carousel end -->
    <!-- our benefits start -->
    <section class="our-benefits">
        <div class="our-benefits-container container pt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-start align-items-start px-1 py-3">
                        <div class="benefits-icons me-3">
                            <img src="./assets/imgs/logo_fav/benefit-1.png.webp" alt="benefit-1">
                        </div>
                        <div class="benefits">
                            <h2 class="mb-2">100% Freshness</h2>
                            <p>
                                Most people are unaware of the less common flower
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-start align-items-start px-1 py-3">
                        <div class="benefits-icons me-3">
                            <img src="./assets/imgs/logo_fav/benefit-2.png.webp" alt="benefit-2">
                        </div>
                        <div class="benefits">
                            <h2 class="mb-2">Made by artist</h2>
                            <p>
                                Most people are unaware of the less common flower
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-start align-items-start px-1 py-3">
                        <div class="benefits-icons me-3">
                            <img src="./assets/imgs/logo_fav/benefit-3.png.webp" alt="benefit-3">
                        </div>
                        <div class="benefits">
                            <h2 class="mb-2">Own courier</h2>
                            <p>
                                Most people are unaware of the less common flower
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="d-flex justify-content-start align-items-start px-1 py-3">
                        <div class="benefits-icons me-3">
                            <img src="./assets/imgs/logo_fav/benefit-4.png.webp" alt="benefit-4">
                        </div>
                        <div class="benefits">
                            <h2 class="mb-2">100% Freshness</h2>
                            <p>
                                Most people are unaware of the less common flower
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our benefits end -->
    <!-- Item show start -->
    <section class="item-show">
        <div class="item-show-container container mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 px-2 mb-2 show-item-count-container">
                    <div class="p-3 d-flex justify-content-center align-items-end show-item-count show-item-count-1">
                        <div class=" text-center show-item-count-content ">
                            <h2>Fresh Flower</h2>
                            <span>( 25 items )</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-2 mb-2 show-item-count-container">
                    <div class="p-3 d-flex justify-content-center align-items-end show-item-count show-item-count-2">
                        <div class=" text-center show-item-count-content">
                            <h2>Succulent plants</h2>
                            <span>( 162 items )</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-2 mb-2 show-item-count-container">
                    <div class="p-3 d-flex justify-content-center align-items-end show-item-count show-item-count-3">
                        <div class=" text-center show-item-count-content">
                            <h2>Cactus plants</h2>
                            <span>( 58 items )</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 px-2 mb-2 show-item-count-container">
                    <div class="p-3 d-flex justify-content-center align-items-end show-item-count show-item-count-4">
                        <div class=" text-center show-item-count-content">
                            <h2>Funiture tree</h2>
                            <span>( 25 items )</span>
                        </div>
                    </div>
                </div>                                                
            </div>
        </div>
    </section>
    <!-- item show end -->
    <!-- about us section start -->
    <section class="about-us">
        <div class="about-us-container container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 about-us-title">
                    <h6 class="text-uppercase">about us</h6>
                    <h1>We provide all kinds of fresh flower services</h1>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 about-us-content">
                    <p class="text-muted">
                        For Heather Henson, of Boreal Blooms in Cold Lake, Alberta, Canada, growing flowers that can be dried and incorporated into late fall and winter floral arrangements has been a game-changer. During her growing season, this farmer-florist relies on a vivid palette of annuals, perennials and ornamental grasses to supply her studio.
                    </p>
                </div>

            </div>
            <div class="row content-container">
                <div class="col-lg-6 col-md-12 about-video-container">
                    <div class="about-video">
                        <a href="javascript:void(0)"><i class="fas fa-play"></i></a>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12 content-us-container">
                    <h6 class="text-uppercase ">SLOW FLOWERS’ FLORAL INSIGHTS</h6>
                    <h1>Dried flowers are having a <br> renaissance</h1>
                    <p>
                        This awareness has been stimulated by sustainable sourcing practices and the desire on the part of North American flower growers to “extend the season” beyond the last frost.
                    </p>
                    <a href="#" class="btn rounded-lg fw-bold p-2 px-3 text-uppercase">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end -->
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
                        <?php
                            $psql = "SELECT * FROM products";
                            $presult = mysqli_query( $conn , $psql );
                            if(mysqli_num_rows($presult)){
                                while($prow = mysqli_fetch_assoc($presult)){
                                    
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 p-2 our-flower-item-container <?php echo $prow["categories"]; ?>">
                            <input type="hidden" name ="p-id" value = "<?php echo $prow['id'] ;?>">
                            <div class="our-flower-item-img-container">
                                <img src="./assets/imgs/products/<?php echo $prow["product_img1"] ;?>" alt="<?php echo $prow["product_img1"]; ?>">
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
    <!-- our flower section end -->
    <!-- View all product section start -->
    <section class="view-all-product-section">
        <div class="view-all-product-container">
            <!-- view all title start -->
            <div class="d-flex justify-content-center view-all-title-container">
                <h4 class="text-uppercase view-all-title">view all products</h4>
            </div>
            <!-- view all title end -->
            <div class="view-all-product-body-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12 view-all-body">
                            <h5 class="text-uppercase">customer flower</h5>
                            <h1>Let our flowers make your party more perfect.</h1>
                            <div class="view-all-btn-container">
                                <a href="#" class="text-uppercase btn">Order now</a>
                                <a href="#" class="text-uppercase btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- View all product section End -->
    <!-- latest post section start -->
    <section class="latest-post-section py-5">
        <div class="container latest-post-container">
            <div class="d-flex justify-content-between align-items-center py-5 latest-post-heard-container ">
                <div class="latest-post-header">
                    <h4 class="text-uppercase">latest posts</h4>
                    <h1>Florist Tricks</h1>
                </div>
                <div class="latest-post-btn-container">
                    <a href="#" class="btn text-uppercase">view all posts</a>
                </div>
            </div>
            <div class="latest-post-body-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3 latest-body-items-container">
                        <div class="lates-body-items-img-container">
                            <img src="./assets/imgs/products/blog-1.jpg.webp" alt="blog 2">
                            <div class="items-title-container">
                                <span class="text-uppercase fw-semibold">TIPS & IDEA</span>
                            </div>
                        </div>
                        <div class="text-center mt-3 p-3 latest-body-items-content-container ">
                            <h1>Red Rose - Flower of love of Greek Mythology</h1>
                            <p class="text-muted">
                                Flowers have a language all their own. In Victorian times, receiving a…
                            </p>
                            <span class="text-muted">MAY 22, 2020</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3 latest-body-items-container">
                        <div class="lates-body-items-img-container">
                            <img src="./assets/imgs/products/blog-2.jpg.webp" alt="blog 2">
                            <div class="items-title-container">
                                <span class="text-uppercase fw-semibold">TIPS & IDEA</span>
                            </div>
                        </div>
                        <div class="text-center mt-3 p-3 latest-body-items-content-container ">
                            <h1>Red Rose - Flower of love of Greek Mythology</h1>
                            <p class="text-muted">
                                Flowers have a language all their own. In Victorian times, receiving a…
                            </p>
                            <span class="text-muted">MAY 22, 2020</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3 mb-3 latest-body-items-container">
                        <div class="lates-body-items-img-container">
                            <img src="./assets/imgs/products/blog-3.jpg.webp" alt="blog 3">
                            <div class="items-title-container">
                                <span class="text-uppercase fw-semibold">DIY & CRAFTS</span>
                            </div>
                        </div>
                        <div class="text-center mt-3 p-3 latest-body-items-content-container ">
                            <h1>Beautiful Mandalas Made From Flowers by Kathy Klein</h1>
                            <p class="text-muted">
                                Flowers have a language all their own. In Victorian times, receiving a…
                            </p>
                            <span class="text-muted">MAY 22, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest post section end -->
    <!-- cover letter section start -->
    <section class="cover-letter-section">
        <div class="cover-letter-main-container">
            <div class="container py-5">
                <div class=" cover-letter-carousel-container">
                    <div class="owl-carousel ">
                        <div class="item d-flex justify-content-center align-items-center flex-column  mx-auto cover-letter-container">
                            <div class="text-center  cover-letter-content-container">
                                <div class="cover-letter-content-header mx-auto">
                                    <img src="./assets/imgs/logo_fav/quote.png.webp" alt="quote.png">
                                </div>
                                <div class="cover-letter-content">
                                    <p class="text-muted">
                                        “I just wanted to say thank you for making such gorgeous arrangements for our
                                        birthday celebration. I couldn’t get over how perfect they were for the
                                        party. You did a fantastic job, and I appreciate it very much”
                                    </p>
                                    <h4>
                                        Alejandro Houston
                                    </h4>
                                    <span class="text-muted text-uppercase fw-semibold">Businessman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item d-flex justify-content-center align-items-center flex-column  mx-auto cover-letter-container">
                            <div class="text-center  cover-letter-content-container">
                                <div class="cover-letter-content-header mx-auto">
                                    <img src="./assets/imgs/logo_fav/quote.png.webp" alt="quote.png">
                                </div>
                                <div class="cover-letter-content">
                                    <p class="text-muted">
                                        “I just wanted to say thank you for making such gorgeous arrangements for our
                                        birthday celebration. I couldn’t get over how perfect they were for the
                                        party. You did a fantastic job, and I appreciate it very much”
                                    </p>
                                    <h4>
                                        Farador Houston
                                    </h4>
                                    <span class="text-muted text-uppercase fw-semibold">Businessman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item d-flex justify-content-center align-items-center flex-column  mx-auto cover-letter-container">
                            <div class="text-center  cover-letter-content-container">
                                <div class="cover-letter-content-header mx-auto">
                                    <img src="./assets/imgs/logo_fav/quote.png.webp" alt="quote.png">
                                </div>
                                <div class="cover-letter-content">
                                    <p class="text-muted">
                                        “I just wanted to say thank you for making such gorgeous arrangements for our
                                        birthday celebration. I couldn’t get over how perfect they were for the
                                        party. You did a fantastic job, and I appreciate it very much”
                                    </p>
                                    <h4>
                                        Jonthan Houston
                                    </h4>
                                    <span class="text-muted text-uppercase fw-semibold">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cover letter section end -->
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
    <!-- Elf sight start -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-d4e9d066-35a6-4c00-99a7-67010896b3db"></div>
    <!-- Elf sight End -->
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
    <!-- <script src="./custom_js/home.js"></script> -->
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

                // console.log(cartArr);
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
<?php
    if(isset($_SESSION["id"])){
        ?>
        if(getCarts !== null) {
            let cartIcons = `<ion-icon name="bag-handle-outline"></ion-icon><span class="nav-remark">(${getCarts.length < 10 ? "0"+getCarts.length : getCarts.length})<span class="nav-remark-price">$${cartAmount}.0</span></span>`
            getShowCartAmount.innerHTML = cartIcons;
        }
        <?php
    }
    ?>
        
    




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
        });
        
</script>
</body>

</html>
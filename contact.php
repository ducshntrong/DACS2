<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Male_Fashion Template" />
        <meta name="keywords" content="Male_Fashion, unica, creative, html" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Fashion Shop</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
            rel="stylesheet" />

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__option">
                <div class="offcanvas__links">
                    <a href="#">Sign in</a>
                    <a href="#">FAQs</a>
                </div>
                <div class="offcanvas__top__hover">
                    <span>Usd <i class="arrow_carrot-down"></i></span>
                    <ul>
                        <li>USD</li>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </div>
            </div>
            <div class="offcanvas__nav__option">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt="" /></a>
                <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                <a href="#"><img src="img/icon/cart.png" alt="" /> <span>0</span></a>
                <div class="price">$0.00</div>
            </div>
            <div id="mobile-menu-wrap"></div>
            <div class="offcanvas__text">
                <p>Free shipping, 30-day return or refund guarantee.</p>
            </div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="header__top__left">
                                <p>Free shipping, 30-day return or refund guarantee.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    <a href="#">Sign in</a>
                                    <a href="#">FAQs</a>
                                </div>
                                <div class="header__top__hover">
                                    <span>Usd <i class="arrow_carrot-down"></i></span>
                                    <ul>
                                        <li>USD</li>
                                        <li>EUR</li>
                                        <li>USD</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./shop.php">Shop</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./about.php">About Us</a></li>
                                        <li><a href="./shop-details.php">Shop Details</a></li>
                                        <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="./checkout.php">Check Out</a></li>
                                        <li><a href="./blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.php">Blog</a></li>
                                <li class="active"><a href="./contact.php">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__nav__option">
                            <a href="#" class="search-switch"><img src="img/icon/search.png" alt="" /></a>
                            <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                            <?php
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num'];
                        }
                        ?>
                            <a href="shopping-cart.php"><img src="img/icon/cart.png" alt="" /></a>
                            <div class="price"><?= $count ?></div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Map Begin -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d930.8874854112767!2d105.8047464!3d21.0506866!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1661611286248!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Map End -->

        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__text">
                            <div class="section-title">
                                <span>Information</span>
                                <h2>Contact Us</h2>
                                <p>
                                    As you might expect of a company that began as a high-end
                                    interiors contractor, we pay strict attention.
                                </p>
                            </div>
                            <ul>
                                <li>
                                    <h4>America</h4>
                                    <p>
                                        195 E Parker Square Dr, Parker, CO 801 <br />+43
                                        982-314-0958
                                    </p>
                                </li>
                                <li>
                                    <h4>France</h4>
                                    <p>
                                        109 Avenue Léon, 63 Clermont-Ferrand <br />+12 345-423-9893
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email" />
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <?php include_once './layout/footer.php' ?>

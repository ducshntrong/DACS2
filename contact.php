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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
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
        <div class="modal">
			<div class="modal__overlay">
				<i class="fa-solid fa-xmark close-form"></i>
			</div>
			<div class="modal__body">

				<!-- Form đăng ký và đăng nhập -->
				<!-- Đăng ký -->
				<div class="auth-form"  id="popup-register"  style="display:none">
					<div class="auth-form__container">
						<div class="auth-form__header">
							<h3 class="auth-formheading">Sign Up</h3>
							<span class="auth-form__switch_btn" id="btn-signin">Sign in</span>
						</div>

						<div class="auth-form__form">
							<div class="auth-form__group">
								<input type="text" class="auth-form__input" placeholder="Email or phone number">
							</div>
							<div class="auth-form__group">
								<input type="password" class="auth-form__input" placeholder="Password">
							</div>
							<div class="auth-form__group">
								<input type="password" class="auth-form__input" placeholder="Reenter password">
							</div>
						</div>

						<div class="auth-form__aside">
							<p class="auth-form__policy-text">
                            By registering, you agree to Male fashion Terms of
								<a href="" class="auth-form__text-link">Service</a> &
								<a href="" class="auth-form__text-link">Privacy Policy</a>
							</p>
						</div>

						<div class="auto-form__controls">
							<button class="btn auto-form__controls-back btn-back-register btn--normal">BACK</button>
							<button class="btn btn--primary btn--primary-dk">SIGN UP</button>
						</div>
					</div>

					<div class="auth-form__socials">
						<a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
							<span class="auth-form__socials-title">Connect with Facebook</span> 
						</a>
						<a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
							<img id="img-google" src="img/gg-removebg-preview.png">
							<span class="auth-form__socials-title">Connect with Google</span>
						</a>
					</div>
				</div>
				<!-- Đăng nhập -->
				<div class="auth-form" id="popup-signin" style="display:none">
					<div class="auth-form__container">
						<div class="auth-form__header">
							<h3 class="auth-formheading">Sign in</h3>
							<span id="btn-register" class="auth-form__switch_btn">Sign Up</span>
						</div>

						<div class="auth-form__form">
							<div class="auth-form__group">
								<input type="text" class="auth-form__input" placeholder="Email or phone number">
							</div>
							<div class="auth-form__group">
								<input type="password" class="auth-form__input" placeholder="Password">
							</div>
						</div>

						<div class="auth-form__aside">
							<div class="auth-form__help">
								<a href="" class="auth-form__help-link auth-form__help-forgot">Forgotten password?</a>
								<span class="auth-form__help-separate"></span>
								<a href="" class="auth-form__help-link">Help?</a>
							</div>
						</div>

						<div class="auto-form__controls">
							<button class="btn auto-form__controls-back btn-back-signin btn--normal">BACK</button>
							<button class="btn btn--primary btn--primary-dn">SIGN IN</button>
						</div>
					</div>

					<div class="auth-form__socials">
						<a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
							<i class="auth-form__socials-icon fa-brands fa-facebook-square"></i>
							<span class="auth-form__socials-title">
							Connect with Facebook</span>
						</a>
						<a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
							<img id="img-google" src="img/gg-removebg-preview.png">
							<span class="auth-form__socials-title">Connect with Google</span>
						</a>
					</div>
				</div>
			</div>
		</div>
        <div class="button-circle-div">
            <a href="#top" class="button-circle">
                <i class="fa-solid fa-angle-up"></i>
            </a>
        </div>
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
                                    <a href="#" id="btn-login">Sign in</a>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5503.460036374365!2d108.24939970506277!3d15.97485377035392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4!5e0!3m2!1svi!2sus!4v1662974767552!5m2!1svi!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

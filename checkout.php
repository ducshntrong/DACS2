<?php

require_once('./db/dbhelper.php');
require_once('./utility/utility.php');
require_once('./api/checkout_form.php');
include_once('./layout/shop_header.php');


$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}

$idList = [];
foreach ($cart as $item) {
    $idList[] = $item['id'];
}


if (count($idList) > 0) {
    $idList = implode(',', $idList);
    $sql = "SELECT * FROM product WHERE id IN ($idList)";
    $cartList = executeResult($sql);
} else {
    $cartList = [];
}

?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Check Out</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form method="post" action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="coupon__code">
                            <span class="icon_tag_alt"></span> Have a coupon?
                            <a href="#">Click here</a> to enter your code
                        </h6>
                        <h6 class="checkout__title">Billing Details</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="firstname" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Country<span>*</span></p>
                            <input type="text" name="country" />
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" placeholder="Street Address" class="checkout__input__add"
                                name="address" />
                            <!-- <input type="text" placeholder="Apartment, suite, unite ect (optinal)" /> -->
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="town_city" />
                        </div>
                        <div class="checkout__input">
                            <p>Date<span>*</span></p>
                            <input type="text" name="country_state" />
                        </div>
                        <div class="checkout__input">
                            <p>Postcode / ZIP<span>*</span></p>
                            <input type="text" name="postcode_zip" />
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="phone" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" name="email" />
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" id="acc" />
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Create an account by entering the information below. If you
                                are a returning customer please login at the top of the page
                            </p>
                        </div>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="text" />
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Note about your order, e.g, special noe for delivery
                                <input type="checkbox" id="diff-acc" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" placeholder="Notes about your order, e.g. special notes for delivery." />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">
                                Product <span>Total</span>
                            </div>

                            <?php
                            $position = 1;
                            $count = 0;
                            $total = 0;

                            foreach ($cartList as $item) {
                                $num = 0;
                                foreach ($cart as $value) {
                                    if ($value['id'] == $item['id']) {
                                        $num = $value['num'];
                                        break;
                                    }
                                }
                                $total += $num * $item['price'];


                                echo '
                                <ul class="checkout__total__products">
                                <li>' . $position++ . '. ' . $item['name'] . ' x ' . $num . ' <span>$ ' . $num * number_format($item['price'], '2', '.', '.') . '</span></li>
                                </ul>
                                ';
                            }
                            ?>

                            <ul class="checkout__total__all">
                                <li>Subtotal <span>$<?= number_format($total, '2', '.', '.') ?></span></li>
                                <li>Total <span>$<?= number_format($total, '2', '.', '.') ?></span></li>
                            </ul>
                            <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    Create an account?
                                    <input type="checkbox" id="acc-or" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Check Payment
                                    <input type="checkbox" id="payment" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="checkbox" id="paypal" />
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <button type="submit" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php include_once './layout/footer.php' ?>

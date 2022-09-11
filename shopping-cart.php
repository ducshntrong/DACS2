<?php
require_once('./db/dbhelper.php');
require_once('./utility/utility.php');
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
                    <h4>Shopping Cart</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

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
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="img/product/' . $item['img'] . '" alt="" />
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>' . $item['name'] . '</h6>
                                        <h5>$' . number_format($item['price'], '2', '.', '.') . '</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="' . $num . '" />
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">$' . $num * number_format($item['price'], '2', '.', '.') . '</td>
                                <td> <button class="cart__close"><i class="fa fa-close" onclick="deleteCart(' . $item['id'] . ')"></i></button> </td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="shop.php">Continue Shopping</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="shopping-cart.php"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code" />
                        <button type="submit">Apply</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Subtotal <span>$<?= number_format($total, '2', '.', '.') ?></span></li>
                        <li>Total <span>$<?= number_format($total, '2', '.', '.') ?></span></li>
                    </ul>
                    <a href="checkout.php" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->


<script type="text/javascript">
function deleteCart(id) {
    $.post('api/cookie.php', {
        'action': 'delete',
        'id': id
    }, function(data) {
        location.reload()
    })
}
</script>


<!-- Footer -->
<?php include_once './layout/footer.php' ?>

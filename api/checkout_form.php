<?php
if (!empty($_POST)) {
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    if ($cart == null || count($cart) == 0) {
        header('Location: shop.php');
        die();
    }

    $firstname = getPost('firstname');
    $lastname = getPost('lastname');
    $country = getPost('country');
    $address = getPost('address');
    $town_city = getPost('town_city');
    $orderdate = date('Y-m-d H:i:s');
    $postcode_zip = getPost('postcode_zip');
    $phone = getPost('phone');
    $email = getPost('email');

    //add order
    $sql = "insert into checkout(firstname, lastname, country, address, town_city, orderdate, postcode_zip, phone, email) 
    values ('$firstname', '$lastname', '$country', '$address', '$town_city', '$orderdate', '$postcode_zip', '$phone', '$email')";
    execute($sql);

    $sql = "select * from checkout where orderdate = '$orderdate'";
    $order = executeResult($sql, true);

    $orderId = $order['id'];

    $idList = [];
    foreach ($cart as $item) {
        $idList[] = $item['id'];
    }
    if (count($idList) > 0) {
        $idList = implode(',', $idList);
        //[2, 5, 6] => 2,5,6

        $sql = "select * from product where id in ($idList)";
        $cartList = executeResult($sql);
    } else {
        $cartList = [];
    }

    foreach ($cartList as $item) {
        $num = 0;
        foreach ($cart as $value) {
            if ($value['id'] == $item['id']) {
                $num = $value['num'];
                break;
            }
        }

        $sql = "insert into orders(order_id, product_id, num, price) values ($orderId, " . $item['id'] . ", $num, " . $item['price'] . ")";
        execute($sql);
    }

    header("Location: shop.php");
    setcookie('cart', '[]', time() - 1000, '/');
}

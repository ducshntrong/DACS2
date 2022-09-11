<?php
$connect = mysqli_connect("localhost", "root", "", "dacs2");
$output = '';
$sql = "SELECT * FROM product WHERE name LIKE '%" . $_POST["search"] . "%'   ";

$result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" >
                                    <a href="shop-details.php?id=' . $row['id'] . '"><img src="img/product/' . $row['img'] . '" alt=""></a>
                                        <ul class="product__hover">
                                            <li>
                                                <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="img/icon/compare.png" alt="" />
                                                    <span>Compare</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="img/icon/search.png" alt="" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>' . $row['name'] . '</h6>
                                        <a href="#" class="add-cart" onclick="addToCart(' . $row['id'] . ')">+ Add To Cart</a>

                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$' . number_format($row['price'], '2', '.', '.') . '</h5>
                    <div class="product__color__select">
                        <label for="pc-4">
                            <input type="radio" id="pc-4" />
                        </label>
                        <label class="active black" for="pc-5">
                            <input type="radio" id="pc-5" />
                        </label>
                        <label class="grey" for="pc-6">
                            <input type="radio" id="pc-6" />
                        </label>
                    </div>
                </div>
            </div>
        </div>';
    }
    echo $output;
} else {
    echo "data not found";
}

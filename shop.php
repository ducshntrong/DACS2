<?php
require_once('./db/dbhelper.php');
require_once('./utility/utility.php');
include_once('./layout/shop_header.php');


// if (isset($_POST['search'])) {
//     $tukhoa = $_POST['tukhoa'];
// }



$sql = 'SELECT COUNT(id) AS number FROM product';
$result = executeResult($sql);
$number = 0;
if ($result != null && count($result) > 0) {
    $number = $result[0]['number'];
}
$pages = ceil($number / 8);

$current_page = 1;
if (isset($_GET['page'])) {
    $current_page = $_GET['page'];
}
$index = ($current_page - 1) * 8;


// if (isset($_POST['search'])) {
//     $product_list = executeResult("SELECT * FROM product WHERE product.name LIKE '%" . $tukhoa . "%' LIMIT $index, 8 ");
// } else {
$product_list = executeResult('SELECT * FROM product LIMIT ' . $index . ', 8');
// }



$id = getGet('id');
if ($id == null) {
    $id = 1;
}
$product = executeResult('SELECT * FROM product WHERE id = ' . $id, true);

if ($product == null) {
    header('location: shop.php');
    die();
}

?>



<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form method="post">
                            <input type="text" placeholder="Search..." name="search_text " id="search_text" />
                            <button name="search">
                                <span class="icon_search"></span>
                            </button>
                        </form>

                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="#">Men (20)</a></li>
                                                <li><a href="#">Women (20)</a></li>
                                                <li><a href="#">Bags (20)</a></li>
                                                <li><a href="#">Clothing (20)</a></li>
                                                <li><a href="#">Shoes (20)</a></li>
                                                <li><a href="#">Accessories (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                                <li><a href="#">Kids (20)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <li><a href="#">Louis Vuitton</a></li>
                                                <li><a href="#">Chanel</a></li>
                                                <li><a href="#">Hermes</a></li>
                                                <li><a href="#">Gucci</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <li><a href="#">$0.00 - $50.00</a></li>
                                                <li><a href="#">$50.00 - $100.00</a></li>
                                                <li><a href="#">$100.00 - $150.00</a></li>
                                                <li><a href="#">$150.00 - $200.00</a></li>
                                                <li><a href="#">$200.00 - $250.00</a></li>
                                                <li><a href="#">250.00+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                </div>
                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__size">
                                            <label for="xs">xs
                                                <input type="radio" id="xs" />
                                            </label>
                                            <label for="sm">s
                                                <input type="radio" id="sm" />
                                            </label>
                                            <label for="md">m
                                                <input type="radio" id="md" />
                                            </label>
                                            <label for="xl">xl
                                                <input type="radio" id="xl" />
                                            </label>
                                            <label for="2xl">2xl
                                                <input type="radio" id="2xl" />
                                            </label>
                                            <label for="xxl">xxl
                                                <input type="radio" id="xxl" />
                                            </label>
                                            <label for="3xl">3xl
                                                <input type="radio" id="3xl" />
                                            </label>
                                            <label for="4xl">4xl
                                                <input type="radio" id="4xl" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                </div>
                                <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__color">
                                            <label class="c-1" for="sp-1">
                                                <input type="radio" id="sp-1" />
                                            </label>
                                            <label class="c-2" for="sp-2">
                                                <input type="radio" id="sp-2" />
                                            </label>
                                            <label class="c-3" for="sp-3">
                                                <input type="radio" id="sp-3" />
                                            </label>
                                            <label class="c-4" for="sp-4">
                                                <input type="radio" id="sp-4" />
                                            </label>
                                            <label class="c-5" for="sp-5">
                                                <input type="radio" id="sp-5" />
                                            </label>
                                            <label class="c-6" for="sp-6">
                                                <input type="radio" id="sp-6" />
                                            </label>
                                            <label class="c-7" for="sp-7">
                                                <input type="radio" id="sp-7" />
                                            </label>
                                            <label class="c-8" for="sp-8">
                                                <input type="radio" id="sp-8" />
                                            </label>
                                            <label class="c-9" for="sp-9">
                                                <input type="radio" id="sp-9" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__tags">
                                            <a href="#">Product</a>
                                            <a href="#">Bags</a>
                                            <a href="#">Shoes</a>
                                            <a href="#">Fashio</a>
                                            <a href="#">Clothing</a>
                                            <a href="#">Hats</a>
                                            <a href="#">Accessories</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1???12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="result">
                    <?php

                    // C??ch ????? d??? li???u ?????i v???i While  ^_^ @hoangthanh21it173

                    // $con = mysqli_connect('localhost', 'root', '', 'dacs2');
                    // $sql = "SELECT * FROM product";
                    // $result = mysqli_query($con, $sql);
                    // while ($row = mysqli_fetch_array($result)) {}





                    // C??ch ????? d??? li???u ?????i v???i For-each

                    foreach ($product_list as $row) {
                        echo '<div class="col-lg-4 col-md-6 col-sm-6">
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
                    <h5>' . number_format($row['price'], '2', '.', '.') . '??</h5>
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
                    // mysqli_close($con); d??ng ?????i v???i while ( do while th?? kh??ng require c??c function)
                    ?>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <?php
                            // <!-- <a class="active" href="#">1</a> -->

                            for ($i = 1; $i <= $pages; $i++) {
                                if (isset($_GET['page'])) {
                                    $page_num = (int)$_GET['page'];
                                } else {
                                    $page_num = 1;
                                }
                                if ($i == $page_num) {
                                    echo '<a class = "active" href="?page=' . $i . '">' . $i . '</a>';
                                } else
                                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                            }


                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section End -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js
"></script>

<script type="text/javascript">
    function addToCart(id) {
        $.post('./api/cookie.php', {
            'action': 'add',
            'id': id,
            'num': 1,
        }, function(data) {

            location.reload();
        });
    }
</script>

<script>
    $(document).ready(function() {
        $('#search_text').keyup(function() {
            var txt = $(this).val();
            $('#result').html('');
            $.ajax({
                url: "layout/fetch.php",
                method: "post",
                data: {
                    search: txt
                },
                dataType: "text",
                success: function(data) {
                    $('#result').html(data);
                }
            })
        });
    });
</script>



<?php include_once './layout/footer.php' ?>
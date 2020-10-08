<!-- ============================================== HEADER : END ============================================== -->
<script src="../view/assets/js/jquery-1.11.1.min.js"></script>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Clothing</a></li>
                <li class='active'>Floral Print Buttoned</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n outer-bottom-xs">
                        <img src="../view/assets/images/banners/LHS-banner.jpg" alt="Image">
                    </div>

                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals outer-bottom-xs">
                        <div class="more-info-tab clearfix ">
                            <?php
                            $type = getalltype(2);
                            echo '<h3 class="new-product-title pull-left"> ' . $type['name'] . '</h3>'
                            ?>
                        </div>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                            <?php
                            $getallproduct =     getallproductwhereid_hot(2);
                            foreach ($getallproduct as $getallpro) {
                                $product_detail_selectall = product_detail_select_all($getallpro['id']);
                                foreach ($product_detail_selectall as  $product_detail) {
                                    echo '<div class="item">
                            <div class="products">
                                <div class="hot-deal-wrapper">
                                    <!-- img -->';
                                    $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                    foreach ($getallproductwhereid as  $getall) {
                                        $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                        echo '<div class="image">
                                        <a href="' . $linksp . '">';
                                        $a = $getall['image'];
                                        $images = explode(',', $a);
                                        $j = 1;
                                        for ($i = 0; $i < 1; $i++) {
                                            echo  '<img src="' . $img_product_dienthoai . $images[$i] . '" alt="">
                                            <img src="' . $img_product_dienthoai . $images[$j] . '" alt=""
                                                class="hover-image">';
                                        }
                                        echo ' </a>
                                    </div>
                                    <!-- end -->';
                                    }


                                    echo ' 
                                    <div class="sale-offer-tag"><span>49%<br>
                                            off</span></div>
                                    <div class="timing-wrapper">
                                        <div class="box-wrapper">
                                            <div class="date box"> <span class="key">120</span> <span
                                                    class="value">DAYS</span> </div>
                                        </div>
                                        <div class="box-wrapper">
                                            <div class="hour box"> <span class="key">20</span> <span
                                                    class="value">HRS</span> </div>
                                        </div>
                                        <div class="box-wrapper">
                                            <div class="minutes box"> <span class="key">36</span> <span
                                                    class="value">MINS</span> </div>
                                        </div>
                                        <div class="box-wrapper">
                                            <div class="seconds box"> <span class="key">60</span> <span
                                                    class="value">SEC</span> </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- /.hot-deal-wrapper -->
                                <!-- price -->';
                                    $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                    foreach ($getallproductwhereid as  $getall) {
                                        $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                        echo ' <div class="product-info text-left m-t-20">';
                                        echo '   <h3 class="name"><a href="$linksp">' . $getall['name'] . '</a></h3>';
                                    }
                                    echo '  <div class="rating rateit-small"></div>';
                                    foreach ($product_detail_selectall as  $product_detail) {
                                        $price = $product_detail['price'];
                                        $priceold = $product_detail['price-old'];
                                        echo '<div class="product-price"> <span class="price"> ' . number_format($price, "0", ",", ".")  . ' VNĐ </span> <span
                                            class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                    <!-- /.product-price -->';
                                    }
                                    echo '</div>';
                                    echo ' <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i> </button>
                                            <button class="btn btn-primary cart-btn" type="button">Mua ngay</button>
                                        </div>
                                    </div>
                                    <!-- /.action -->
                                </div>
                                <!-- /.cart -->
                            </div>
                        </div>';
                                }
                            }
                            ?>


                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->

                    <!-- ============================================== NEWSLETTER ============================================== -->

                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                    <!-- ============================================== Testimonials============================================== -->


                    <!-- ============================================== Testimonials: END ============================================== -->



                </div>
            </div><!-- /.sidebar -->
            <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                <div class="detail-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery" id="color">
                                <div id="owl-single-product">
                                    <?php
                                    if (isset($_GET['id'])) {
                                        $id = $_GET['id'];
                                    } else {
                                        $id = 0;
                                    }
                                    $product = getallproduct_id($id);
                                    $a = $product['image'];
                                    $images = explode(',', $a);
                                    $max = count($images);
                                    $j = 1;
                                    for ($i = 0; $i < $max; $i++) {
                                        echo '
                                    <div class="single-product-gallery-item" id="slide' . $j . '">
                                        <a data-lightbox="image-1" data-title="Gallery"
                                            href="' . $img_product_dienthoai . $images[$i] . '">
                                            <img class="img-responsive" alt=""
                                                data-echo="' . $img_product_dienthoai . $images[$i] . '" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                     ';

                                        $j++;
                                    }
                                    ?>


                                </div><!-- /.single-product-slider -->
                                <div class="single-product-gallery-thumbs gallery-thumbs">

                                    <div id="owl-single-product-thumbnails">
                                        <!-- 1 -->
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $id = $_GET['id'];
                                        } else {
                                            $id = 0;
                                        }
                                        $product = getallproduct_id($id);
                                        $a = $product['image'];
                                        $images = explode(',', $a);
                                        $max = count($images);
                                        $j = 1;
                                        for ($i = 0; $i < $max; $i++) {

                                            echo '<div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product"
                                                data-slide="' . $j . '" href="#slide' . $j . '">
                                                <img class="img-responsive" alt="" src=""
                                                    data-echo="' . $img_product_dienthoai . $images[$i] . '" />
                                            </a>
                                        </div>';

                                            $j++;
                                        }

                                        ?>

                                    </div><!-- /#owl-single-product-thumbnails -->



                                </div>

                            </div><!-- /.single-product-gallery -->

                        </div><!-- /.gallery-holder -->
                        <?php
                        echo ' <div class="col-sm-12 col-md-8 col-lg-8 product-info-block">
              <div class="product-info">';
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                        } else {
                            $id = 0;
                        }
                        $detail = product_detail_select_all($id);
                        foreach ($detail as  $getall_id) {
                            $name = $product['name'];
                            $product = getallproduct_id($getall_id['id_product']);
                            echo '<h1 class="name">' . $product['name'] . '</h1>';

                            echo '<div class="rating-reviews m-t-20">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="pull-left">
                        <div class="rating rateit-small"></div>
                      </div>
                      <div class="pull-left">
                        <div class="reviews">
                          <a href="#" class="lnk">(13 Reviews)</a>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.rating-reviews -->

                <div class="stock-container info-container m-t-10">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="pull-left">
                        <div class="stock-box">
                          <span class="label">Availability :</span>
                        </div>
                      </div>
                      <div class="pull-left">
                        <div class="stock-box">
                          <span class="value">In Stock</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.stock-container -->';
                        ?>

                        <?php
                            echo '<div class="description-container m-t-20">';
                            $getallproductwhereid = getallproductwhereid($id);
                            foreach ($getallproductwhereid as  $getall) {
                                echo ' <h4>' . $getall['detail'] . '</h4>';
                            }
                            echo ' </div><!-- /.description-container -->';
                            echo ' <div class="price-container info-container m-t-30">
                  <div class="row">';
                            echo '   <div class="col-sm-6 col-xs-6">';
                            echo ' <div class="price-box">';
                            $product_detail_selectall = product_detail_select_all($id);
                            foreach ($product_detail_selectall as  $product_detail) {

                                $price = $product_detail['price'];
                                $priceold = $product_detail['price-old'];
                                echo ' <span class="price">' . number_format($price, "0", ",", ".")  . ' VNĐ</span>
                        <span class="price-strike">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span>';

                                echo '</div><h3>Color</h2>';
                            ?>

                        <script src="../view/assets/js/color.js"></script>
                        <?php
                                //      $idcolor= product_detail_select_all_color($getall['id']);
                                //   foreach ($idcolor as $idclor) {
                                $product_detail_selectall1 = product_detail_select_all1($product_detail['id_product']);
                                foreach ($product_detail_selectall1 as  $product_detail1) {
                                    $loadcolor =   getallcolorwhereid($product_detail1['id_color']);
                                    foreach ($loadcolor as $color) {
                                        echo '
                                         <input type="text" name="id_pro_" value="' . $_GET['id'] . '">
                                         <input type="text" name="id_color" value="' . $color['id'] . '">
                                        <button id="sendcolor">' . $color['name'] . '</button> ';
                                    }
                                }
                            }
                            echo '
                    </div>';
                            echo ' <div class="col-sm-6 col-xs-6">
                        <div class="favorite-button m-t-5">
                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist"
                                href="#">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                                title="Add to Compare" href="#">
                                <i class="fa fa-signal"></i>
                            </a>
                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail"
                                href="#">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.price-container -->
            <div class="quantity-container info-container">
                <div class="row">
                    <div class="qty">
                        <span class="label">Qty :</span>
                    </div>
                    <div class="qty-count">
                        <div class="cart-quantity">
                            <div class="quant-input">
                                <div class="arrows">
                                    <div class="arrow plus gradient"><span class="ir"><i
                                                class="icon fa fa-sort-asc"></i></span></div>
                                    <div class="arrow minus gradient"><span class="ir"><i
                                                class="icon fa fa-sort-desc"></i></span></div>
                                </div>
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>';
                        }
                        echo ' <div class="add-btn">
                        <form action="index.php?act=viewcart" method="post">
                            <input type="hidden" name="idpro" value="' . $_GET['id'] . '">
                            <input type="hidden" name="name" value="' . $product['name'] . '">
                            <input type="hidden" name="price" value="' . $product_detail['price'] . '">';
                        $product = getallproduct_id($_GET['id']);
                        $a = $product['image'];
                        $images = explode(',', $a);
                        for ($i = 0; $i <= 0; $i++) {
                            echo ' <input type="hidden" name="image" value="' .
                                $images[$i] . '">';
                        }
                        echo ' <input type="submit" name="submit" value="Mua ngay" class="btn btn-primary">
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.quantity-container -->
        </div><!-- /.product-info -->
    </div><!-- /.col-sm-7 -->'; ?>
                    </div><!-- /.row -->
                </div>

                <div class="product-tabs inner-bottom-xs">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">Bình luận</a>
                                </li>
                                <li><a data-toggle="tab" href="#review"></a></li>
                                <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                            <div class="tab-content">

                                <style>
                                input[type=text] {
                                    width: 30%;
                                    padding: 7px 5px;
                                    margin: 8px 0;
                                    box-sizing: border-box;
                                    border: 2px solid #ccc;
                                    -webkit-transition: 0.5s;
                                    transition: 0.5s;
                                    outline: none;
                                }

                                input[type=text]:focus {
                                    border: 3px solid #555;
                                }
                                </style>
                                <!-- <script src="../view/assets/js/jquery-1.11.1.min.js"></script> -->
                                <script src="../view/assets/js/binhluan.js"></script>
                                <div class="tab-pane in active">
                                    <div class="product-tab">
                                        <input type="hidden" id="bl_idpro" value="<?php echo $_GET['id'] ?>">
                                        <input type="text" id="bl_name" placeholder="Nhập tên"
                                            value="<?php echo $_SESSION['name'] ?>"><br>
                                        <input type="text" id="bl_email" placeholder="Nhập email"
                                            value="<?php echo $_SESSION['email'] ?>"><br>
                                        <input type="text" id="bl_mess" placeholder="Nhập phẩn hồi" multiple=""><br>
                                        <button id="sendmess">Gửi Bình luận</button>
                                        <hr>
                                        <div id="message"></div>
                                        <div class="showmess">
                                            <h4>Bình luận mới</h2>
                                                <div id="dsbl"></div>
                                        </div>
                                    </div>
                                </div><!-- /.tab-pane -->



                                <div id="review" class="tab-pane">
                                    <div class="product-tab">
                                        <div class="product-reviews">
                                            <h4 class="title">Customer Reviews</h4>

                                            <div class="reviews">
                                                <div class="review">
                                                    <div class="review-title"><span class="summary">We love
                                                            this
                                                            product</span><span class="date"><i
                                                                class="fa fa-calendar"></i><span>1 days
                                                                ago</span></span></div>
                                                    <div class="text">"Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipiscing elit.Aliquam suscipit."</div>
                                                </div>

                                            </div><!-- /.reviews -->
                                        </div><!-- /.product-reviews -->



                                        <div class="product-add-review">
                                            <h4 class="title">Write your own review</h4>
                                            <div class="review-table">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="cell-label">&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="cell-label">Quality</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Price</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="cell-label">Value</td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="1"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="2"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="3"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="4"></td>
                                                                <td><input type="radio" name="quality" class="radio"
                                                                        value="5"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table><!-- /.table .table-bordered -->
                                                </div><!-- /.table-responsive -->
                                            </div><!-- /.review-table -->

                                            <div class="review-form">
                                                <div class="form-container">
                                                    <form class="cnt-form">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputName">Your Name
                                                                        <span class="astk">*</span></label>
                                                                    <input type="text" class="form-control txt"
                                                                        id="exampleInputName" placeholder="">
                                                                </div><!-- /.form-group -->
                                                                <div class="form-group">
                                                                    <label for="exampleInputSummary">Summary
                                                                        <span class="astk">*</span></label>
                                                                    <input type="text" class="form-control txt"
                                                                        id="exampleInputSummary" placeholder="">
                                                                </div><!-- /.form-group -->
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputReview">Review
                                                                        <span class="astk">*</span></label>
                                                                    <textarea class="form-control txt txt-review"
                                                                        id="exampleInputReview" rows="4"
                                                                        placeholder=""></textarea>
                                                                </div><!-- /.form-group -->
                                                            </div>
                                                        </div><!-- /.row -->

                                                        <div class="action text-right">
                                                            <button class="btn btn-primary btn-upper">SUBMIT
                                                                REVIEW</button>
                                                        </div><!-- /.action -->

                                                    </form><!-- /.cnt-form -->
                                                </div><!-- /.form-container -->
                                            </div><!-- /.review-form -->

                                        </div><!-- /.product-add-review -->

                                    </div><!-- /.product-tab -->
                                </div><!-- /.tab-pane -->

                                <div id="tags" class="tab-pane">
                                    <div class="product-tag">

                                        <h4 class="title">Product Tags</h4>
                                        <form class="form-inline form-cnt">
                                            <div class="form-container">

                                                <div class="form-group">
                                                    <label for="exampleInputTag">Add Your Tags: </label>
                                                    <input type="email" id="exampleInputTag" class="form-control txt">


                                                </div>

                                                <button class="btn btn-upper btn-primary" type="submit">ADD
                                                    TAGS</button>
                                            </div><!-- /.form-container -->
                                        </form><!-- /.form-cnt -->

                                        <form class="form-inline form-cnt">
                                            <div class="form-group">
                                                <label>&nbsp;</label>
                                                <span class="text col-md-offset-3">Use spaces to separate
                                                    tags. Use
                                                    single quotes (') for phrases.</span>
                                            </div>
                                        </form><!-- /.form-cnt -->

                                    </div><!-- /.product-tab -->
                                </div><!-- /.tab-pane -->

                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3 class="section-title">Đồng giá</h3>
                            <div class="ad-imgs">
                                <img class="img-responsive" src="../view/assets/images/banners/home-banner1.jpg" alt="">
                                <img class="img-responsive" src="../view/assets/images/banners/home-banner2.jpg" alt="">
                            </div>
                        </div>


                        <div class="col-lg-9">
                            <div
                                class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                <?php
                                $productdetail_ = product_detail_select_all($_GET['id']);
                                foreach ($productdetail_ as $profrto_) {
                                    // if ($profrto_['id_product'] == $_GET['id']) {
                                    //     echo '';
                                    // } else {
                                    // }
                                    $fr = $profrto_['price'] - 6000000;
                                    $to = $profrto_['price'] + 6000000;
                                    $pricefrto =   product_detail_price($fr, $to);
                                    foreach ($pricefrto as $price_) {
                                        echo '<div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">';
                                        $productWhereid = getallproductwhereid($price_['id_product']);
                                        $a = $price_['image'];
                                        $images = explode(',', $a);
                                        // $max = count($images);
                                        // $j = 1;

                                        for ($i = 0; $i < 1; $i++) {
                                            echo ' <div class="product-image">
                                                <div class="image">
                                                    <a href="index.php?act=productdetail&id=' . $price_['id_product'] . '">
                                                    <img src="' . $img_product_dienthoai  . $images[$i] . '" alt=""></a>
                                                </div><!-- /.image -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div><!-- /.product-image -->';

                                            // $j++;
                                        }
                                        foreach ($productWhereid as $pro_) {
                                            echo '<div class="product-info text-left">
                                                <h3 class="name"><a href="index.php?act=productdetail&id=' . $price_['id_product'] . '">' . $pro_['name'] . '</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                        ' .  number_format($price_['price'], "0", ",", ".")  . ' </span>
                                                    <span class="price-before-discount">  ' .  number_format($price_['price-old'], "0", ",", ".")  . '</span>

                                                </div><!-- /.product-price -->

                                            </div><!-- /.product-info -->
                                    ';
                                        }
                                        echo '<div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                type="button">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </button>
                                                            <button class="btn btn-primary cart-btn" type="button">Add
                                                                to cart</button>

                                                        </li>

                                                        <li class="lnk wishlist">
                                                            <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                                <i class="icon fa fa-heart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="lnk">
                                                            <a class="add-to-cart" href="detail.html" title="Compare">
                                                                <i class="fa fa-signal"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->
                                        </div><!-- /.product -->

                                    </div><!-- /.products -->
                                </div><!-- /.item -->';
                                    }
                                }
                                ?>







                            </div><!-- /.home-owl-carousel -->
                        </div>
                    </div>
                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand1.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand2.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand3.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand4.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand5.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand6.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand2.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand4.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand1.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="../view/assets/images/brands/brand5.png" src="" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================== INFO BOXES ============================================== -->

<!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->
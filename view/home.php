<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">


                <!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->

                <!-- ============================================== HOT DEALS ============================================== -->
                <div class="sidebar-widget hot-deals outer-bottom-xs">
                    <!-- sản phẩm Đặc biệt -->
                    <div class="more-info-tab clearfix ">
                        <?php
                        $type = getalltype(2);
                        echo '<h3 class="new-product-title pull-left"> ' . $type['name'] . '</h3>'
                        ?>
                    </div>
                    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                        <?php
                        $getallproduct =  getallproductwhereid_hot(2);
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
                                        echo  '<img src="../view/assets/images/Dienthoai/' . $images[$i] . '" alt="">
                                            <img src="../view/assets/images/Dienthoai/' . $images[$j] . '" alt=""
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
                                    echo '   <h3 class="name"><a href="' . $linksp . '">' . $getall['name'] . '</a></h3>';
                                }
                                echo '  <div class="rating rateit-small"></div>';
                                $price = $product_detail['price'];
                                $priceold = $product_detail['price-old'];
                                echo '<div class="product-price"> <span class="price"> ' . number_format($price, "0", ",", ".")  . ' VNĐ </span> <span
                                            class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                    <!-- /.product-price -->';
                                echo '</div>';
                                echo ' <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <div class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                <i class="fa fa-shopping-cart"></i> </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
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

                <!-- ============================================== SPECIAL OFFER ============================================== -->


                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->
                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag">
                    <h3 class="section-title">Product tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a class="item active" title="Vest" href="category.html">Vest</a> <a class="item" title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture" href="category.html">Furniture</a>
                            <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a class="item" title="Sneaker" href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a>
                        </div>
                        <!-- /.tag-list -->
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                <!-- ============================================== SPECIAL DEALS ============================================== -->


                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->
                <!-- ============================================== NEWSLETTER ============================================== -->

                <!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

                <!-- ============================================== Testimonials============================================== -->

                <!-- ============================================== Testimonials: END ============================================== -->


            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div class="wide-banners outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="wide-banner1 cnt-strip">
                                <div class="image"> <img class="img-responsive" src="../view/assets/images/banners/home-banner.jpg" alt="">
                                </div>
                                <div class="strip strip-text">
                                    <div class="strip-inner">
                                        <h2 class="text-right">Amazing Sunglasses<br>
                                            <span class="shopping-needs">Get 40% off on selected items</span></h2>
                                    </div>
                                </div>
                                <div class="new-label">
                                    <div class="text">NEW</div>
                                </div>
                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="../view/assets/images/banners/home-banner4.jpg" alt="">
                                </div>


                                <!-- /.new-label -->
                            </div>
                            <!-- /.wide-banner -->
                        </div>

                    </div>
                    <!-- /.row -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->


                <!-- ============================================== SCROLL TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                    <div class="more-info-tab clearfix ">
                        <!-- sản phẩm mới -->
                        <?php
                        $type = getalltype(0);
                        echo '<h3 class="new-product-title pull-left">   SẢN PHẨM ' . $type['name'] . '</h3>';
                        ?>
                        <!-- /.nav-tabs -->
                    </div>

                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <?php
                            echo '<div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">';
                            $getallproduct =   getallproduct();
                            foreach ($getallproduct as $getallpro) {
                                $product_detail_selectall = product_detail_select_all($getallpro['id']);
                                foreach ($product_detail_selectall as  $product_detail) {
                                    echo '
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">';
                                    $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                    foreach ($getallproductwhereid as  $getall) {
                                        $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                        echo ' <div class="product-image">
                                                        <div class="image">
                                                            <a href="' .  $linksp . '">';
                                        $a = $getall['image'];
                                        $images = explode(',', $a);
                                        $j = 1;
                                        for ($i = 0; $i < 1; $i++) {
                                            echo ' <img src="' . $img_product_dienthoai  . $images[$i] . '" alt="">
                                                                <img src="' . $img_product_dienthoai . $images[$j] . '"
                                                                    alt="" class="hover-image">';
                                        }
                                        echo '     </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->';
                                    }
                                    $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                    foreach ($getallproductwhereid as  $getall) {
                                        $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                        echo '<div class="product-info text-left">
                                                  <h3 class="name"><a href="' . $linksp . '">' . $getall['name'] . '</a>
                                                                            </h3>
                                                                                    <div class="rating rateit-small"></div>
                                                        <div class="description">Detail</div>';
                                    }
                                    foreach ($product_detail_selectall as  $product_detail) {
                                        $price = $product_detail['price'];
                                        $priceold = $product_detail['price-old'];
                                        echo ' <div class="product-price"> <span class="price">  ' . number_format($price, "0", ",", ".")  . ' VNĐ </span>
                                                                <span class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                                                <!-- /.product-price -->
                                                                </div>';
                                    }
                                }
                                echo '  <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip"
                                                                    class="btn btn-primary icon" type="button"
                                                                    title="Add Cart"> <i
                                                                        class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Wishlist"> <i class="icon fa fa-heart"></i>
                                                                </a> </li>
                                                            <li class="lnk"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Compare"> <i class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item --> ';
                            }
                            echo ' </div>
                            </div>';
                            ?>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->


                    <!-- /.scroll-tabs -->
                    <!-- ============================================== SCROLL TABS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->

                    <!-- /.wide-banners -->

                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->

                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                    <!-- ============================================== WIDE PRODUCTS ============================================== -->

                    <!-- /.wide-banners -->
                    <!-- ============================================== WIDE PRODUCTS : END ============================================== -->



                    <!-- /.sidebar-widget -->
                    <!-- ============================================== BEST SELLER : END ============================================== -->

                    <!-- ============================================== BLOG SLIDER ============================================== -->

                    <!-- /.section -->
                    <!-- ============================================== BLOG SLIDER : END ============================================== -->

                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    <div class="sidebar-widget hot-deals outer-bottom-xs">


                        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                            <div class="more-info-tab clearfix ">
                                <!-- sản phẩm hot -->
                                <?php
                                $type = getalltype(1);
                                echo '<h3 class="new-product-title pull-left">SẢN PHẨM ' . $type['name'] . '</h3>'
                                ?>
                            </div>
                            <div class="tab-content outer-top-xs">
                                <div class="tab-pane in active" id="all">
                                    <?php
                                    echo '<div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">';
                                    $getallproduct =    getallproductwhereid_hot(1);
                                    foreach ($getallproduct as $getallpro) {
                                        $product_detail_selectall = product_detail_select_all($getallpro['id']);
                                        foreach ($product_detail_selectall as  $product_detail) {
                                            echo '
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">';
                                            $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                            foreach ($getallproductwhereid as  $getall) {
                                                $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                                echo ' <div class="product-image">
                                                        <div class="image">
                                                            <a href="' .  $linksp . '">';
                                                $a = $getall['image'];
                                                $images = explode(',', $a);
                                                $j = 1;
                                                for ($i = 0; $i < 1; $i++) {
                                                    echo ' <img src="' . $img_product_dienthoai . $images[$i] . '" alt="">
                                                                <img src="' . $img_product_dienthoai . $images[$j] . '"
                                                                    alt="" class="hover-image">';
                                                }
                                                echo '     </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->';
                                            }
                                            $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                            foreach ($getallproductwhereid as  $getall) {
                                                $linksp = "index.php?act=productdetail&id=" .  $getall['id'];
                                                echo '<div class="product-info text-left">
                                                  <h3 class="name"><a href="' . $linksp . '">' . $getall['name'] . '</a>
                                                                            </h3>
                                                                                    <div class="rating rateit-small"></div>
                                                        <div class="description">Detail</div>';
                                            }
                                            foreach ($product_detail_selectall as  $product_detail) {
                                                $price = $product_detail['price'];
                                                $priceold = $product_detail['price-old'];

                                                echo ' <div class="product-price"> <span class="price">' . number_format($price, "0", ",", ".")  . ' VNĐ </span>
                                                                <span class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                                                <!-- /.product-price -->
                                                                </div>';
                                            }
                                        }
                                        echo '  <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip"
                                                                    class="btn btn-primary icon" type="button"
                                                                    title="Add Cart"> <i
                                                                        class="fa fa-shopping-cart"></i> </button>
                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Add to cart</button>
                                                            </li>
                                                            <li class="lnk wishlist"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Wishlist"> <i class="icon fa fa-heart"></i>
                                                                </a> </li>
                                                            <li class="lnk"> <a data-toggle="tooltip"
                                                                    class="add-to-cart" href="detail.html"
                                                                    title="Compare"> <i class="fa fa-signal"
                                                                        aria-hidden="true"></i> </a> </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item --> ';
                                    }
                                    echo ' </div></div>';
                                    ?>
                                    <!-- /.product-slider -->
                                </div>
                                <!-- /.tab-pane -->
                                <!-- end -->
                                <?php
                                $type1 = getalltype(3);
                                $type2 = getalltype(1);
                                echo ' <h3 class="section-title">ĐIỆN THOẠI ' . $type1['name'] . ' ' . $type2['name'] . '</h3>'
                                ?>
                                </h3>
                                <div id="myTabContent" class="tab-content category-list">
                                    <div class="tab-pane active " id="grid-container">
                                        <div class="category-product">
                                            <div class="row">
                                                <?php
                                                $getallproduct = getallproductwhere_id_catalog(9);
                                                foreach ($getallproduct as $getallpro) {
                                                    $product_detail_selectall = product_detail_select_all($getallpro['id']);
                                                    $linksp = "index.php?act=productdetail&id=" .  $getallpro['id'];
                                                    foreach ($product_detail_selectall as  $product_detail) {
                                                        echo ' <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="item">
                                            <div class="products">
                                                <div class="product">';
                                                        $getallproductwhereid = getallproductwhereid_GORUPBY($product_detail['id_product']);
                                                        foreach ($getallproductwhereid as  $getall) {
                                                            echo ' <div class="product-image">
                                                        <div class="image">
                                                            <a href="' .  $linksp . '">';
                                                            $a = $getall['image'];
                                                            $images = explode(',', $a);
                                                            $j = 1;
                                                            for ($i = 0; $i < 1; $i++) {
                                                                echo ' <img src="' . $img_product_dienthoai . $images[$i] . '" alt="">
                                                                <img src="' . $img_product_dienthoai . $images[$j] . '"
                                                                    alt="" class="hover-image">';
                                                            }
                                                            echo '     </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->';
                                                        }

                                                        echo ' <div class="product-info text-left">';
                                                        $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                                        foreach ($getallproductwhereid as  $getall) {
                                                            echo '
                                                        <h3 class="name"><a href="' .  $linksp . '">' . $getall['name'] . '</a>
                                                        </h3>';
                                                        }
                                                        $price = $product_detail['price'];
                                                        $priceold = $product_detail['price-old'];

                                                        echo '<div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> ' . number_format($price, "0", ",", ".")  . ' VNĐ </span>
                                                            <span class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                                        <!-- /.product-price -->
                                                </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button"> <i
                                                                            class="fa fa-shopping-cart"></i> </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"> <a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i> </a> </li>
                                                                <li class="lnk"> <a class="add-to-cart"
                                                                        href="detail.html" title="Compare"> <i
                                                                            class="fa fa-signal"></i> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                    </div>';
                                                    }
                                                }
                                                ?>
                                                <!-- /.item -->


                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.category-product -->

                                    </div>
                                    <!-- /.tab-pane -->

                                    <!-- end -->
                                    <?php
                                    $type = getalltype(4);
                                    echo '  <h3 class="section-title">LAPTOP ' . $type['name'] . ' </h3>'
                                    ?>
                                    <div id="myTabContent" class="tab-content category-list">
                                        <div class="tab-pane active " id="grid-container">
                                            <div class="category-product">
                                                <div class="row">
                                                    <?php
                                                    $getallproduct = getallproductwhere_id_catalog(11);
                                                    foreach ($getallproduct as $getallpro) {
                                                        $product_detail_selectall = product_detail_select_all($getallpro['id']);
                                                        $linksp = "index.php?act=productdetail&id=" .  $getallpro['id'];
                                                        foreach ($product_detail_selectall as  $product_detail) {
                                                            echo ' <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="item">
                                            <div class="products">
                                                <div class="product">';
                                                            $getallproductwhereid = getallproductwhereid_GORUPBY($product_detail['id_product']);
                                                            foreach ($getallproductwhereid as  $getall) {
                                                                echo ' <div class="product-image">
                                                        <div class="image">
                                                            <a href="' .  $linksp . '">';
                                                                $a = $getall['image'];
                                                                $images = explode(',', $a);
                                                                $j = 1;
                                                                for ($i = 0; $i < 1; $i++) {
                                                                    echo ' <img src="' . $img_product_dienthoai . $images[$i] . '" alt="">
                                                                <img src="' . $img_product_dienthoai . $images[$j] . '"
                                                                    alt="" class="hover-image">';
                                                                }
                                                                echo '     </a>
                                                        </div>
                                                        <!-- /.image -->
                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->';
                                                            }

                                                            echo ' <div class="product-info text-left">';
                                                            $getallproductwhereid = getallproductwhereid($product_detail['id_product']);
                                                            foreach ($getallproductwhereid as  $getall) {
                                                                echo '
                                                        <h3 class="name"><a href="' .  $linksp . '">' . $getall['name'] . '</a>
                                                        </h3>';
                                                            }
                                                            $price = $product_detail['price'];
                                                            $priceold = $product_detail['price-old'];

                                                            echo '<div class="rating rateit-small"></div>
                                                        <div class="description"></div>
                                                        <div class="product-price"> <span class="price"> ' . number_format($price, "0", ",", ".")  . ' VNĐ </span>
                                                            <span class="price-before-discount">' . number_format($priceold, "0", ",", ".")  . ' VNĐ</span> </div>
                                                        <!-- /.product-price -->
                                                </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon"
                                                                        data-toggle="dropdown" type="button"> <i
                                                                            class="fa fa-shopping-cart"></i> </button>
                                                                    <button class="btn btn-primary cart-btn"
                                                                        type="button">Add to cart</button>
                                                                </li>
                                                                <li class="lnk wishlist"> <a class="add-to-cart"
                                                                        href="detail.html" title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i> </a> </li>
                                                                <li class="lnk"> <a class="add-to-cart"
                                                                        href="detail.html" title="Compare"> <i
                                                                            class="fa fa-signal"></i> </a> </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                    </div>';
                                                        }
                                                    }
                                                    ?>
                                                    <!-- /.item -->


                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.category-product -->

                                        </div>
                                        <!-- /.tab-pane -->



                                    </div>
                                    <!-- /.tab-content -->
                                    <!-- end san pham hot -->
                                </div>


                            </div>
                        </div>
                        <!-- /.section -->
                        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->


                        <!-- /.homebanner-holder -->
                        <!-- ============================================== CONTENT : END ============================================== -->
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================== BRANDS CAROUSEL ============================================== -->
                <div id="brands-carousel" class="logo-slider">
                    <div class="logo-slider-inner">
                        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand1.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand2.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand3.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand4.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand5.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand6.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand2.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand4.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand1.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->

                            <div class="item"> <a href="#" class="image"> <img data-echo="../view/assets/images/brands/brand5.png" src="../view/assets/images/blank.gif" alt=""> </a> </div>
                            <!--/.item-->
                        </div>
                        <!-- /.owl-carousel #logo-slider -->
                    </div>
                    <!-- /.logo-slider-inner -->

                </div>
                <!-- /.logo-slider -->
                <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
            </div>
            <!-- /.container -->
        </div>

        <!-- /#top-banner-and-menu -->
        <!-- ============================================== INFO BOXES ============================================== -->

        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
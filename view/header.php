<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>MigChi Store</title>
    <link rel="icon" href="../view/assets/images/logo/favicon.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../view/assets/css/main.css">
    <link rel="stylesheet" href="../view/assets/css/blue.css">
    <link rel="stylesheet" href="../view/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../view/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../view/assets/css/animate.min.css">
    <link rel="stylesheet" href="../view/assets/css/rateit.css">
    <link rel="stylesheet" href="../view/assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="../view/assets/css/font-awesome.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800"
        rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">
                            <li class="myaccount"><a href="#"><span>My Account</span></a></li>
                            <li class="wishlist"><a href="#"><span>Wishlist</span></a></li>
                            <li class="header_cart hidden-xs"><a href="index.php?act=viewcart"><span>My Cart</span></a>
                            </li>
                            <li class="check"><a href="#"><span>Checkout</span></a></li>
                            <?php
                            if (isset($_SESSION['id']) > 0) {
                                echo ' <li  class="login"><a href="index.php?act=info">Chào mừng [' . $_SESSION['name'] . ']</a>
                                        <li  class="login"> <a href="index.php?act=logout">Đăng xuất </a>
                                        <li  class="login"><a href="../admin.php">Admin</a></li>';
                            } else {
                                echo '<li class="login"><a href="index.php?act=signin">Đăng nhập</a></li>';
                            }
                            ?>


                        </ul>
                    </div>
                    <!-- /.cnt-account -->

                    <div class="cnt-block">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle"
                                    data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle"
                                    data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.list-unstyled -->
                    </div>
                    <!-- /.cnt-cart -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo"> <a href="index.php"> <img src="../view/assets/images/logo.png" alt="logo">
                            </a> </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                                href="category.html">Categories <b class="caret"></b></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li class="menu-header">Computer</li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                        href="category.html">- Clothing</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                        href="category.html">- Electronics</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                        href="category.html">- Shoes</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                        href="category.html">- Watches</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <input class="search-field" placeholder="Search here..." />
                                    <a class="search-button" href="#"></a>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->

                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
                        <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                        <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                                data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket">
                                        <div class="basket-item-count"><span class="count">2</span></div>
                                        <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span
                                                class="value">$4580</span> </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image"> <a href="detail.html"><img
                                                            src="../view/assets/images/products/p4.jpg" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a>
                                                </h3>
                                                <div class="price">$600.00</div>
                                            </div>
                                            <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix cart-total">
                                        <div class="pull-right"> <span class="text">Sub Total :</span><span
                                                class='price'>$600.00</span> </div>
                                        <div class="clearfix"></div>
                                        <a href="checkout.html"
                                            class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                    </div>
                                    <!-- /.cart-total-->

                                </li>
                            </ul>
                            <!-- /.dropdown-menu-->
                        </div>
                        <!-- /.dropdown-cart -->

                        <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                    </div>
                    <!-- /.top-cart-row -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown yamm mega-menu"> <a href="index.php">Trang chủ</a>
                                    <li class="dropdown yamm mega-menu"> <a href="index.php?act=shop">Shop</a>
                                        <?php
                                        foreach ($catalog as $catalog) {
                                            $linkcata = "index.php?act=shop&id_catalog=" .  $catalog['id'];
                                            echo '<li class="dropdown yamm mega-menu"> <a href="' . $linkcata . '" data-hover="dropdown"
                                      class="dropdown-toggle" data-toggle="dropdown">' .     $catalog['name']  . '</a>
                                    <!-- loaddanhmuc -->
                                    <ul class="dropdown-menu container">
                                      <li>
                                          <div class="yamm-content ">
                                              <div class="row">';
                                            $sub_catalog = showname_subcatalog($catalog['id'], 0);
                                            foreach ($sub_catalog as $sub_catalog) {
                                                echo ' <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                          <h2 class="title">' . $sub_catalog['name']  . '</h2>';

                                                $sub_catalog2 = showname_subcatalog($catalog['id'], $sub_catalog['id']);
                                                echo '<ul class="links">';
                                                foreach ($sub_catalog2 as $sub_catalog2) {
                                                    $idproducer = $sub_catalog2['id_producer'];
                                                    $nameproducer = getnameproducer($idproducer);

                                                    foreach ($nameproducer as $nameproducer) {
                                                        $linkproducer = "index.php?act=shop&id_producer=" .  $nameproducer['id'];
                                                        echo '<li><a href="' . $linkproducer . '">' .  $nameproducer['name'] . '</a></li>';
                                                    } // end

                                                } //chuyền id_producer
                                                echo '<ul>';
                                                echo '</div>';
                                            } // sub
                                            echo ' <!-- /.yamm-content -->
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                              </li>';
                                        }
                                        ?>

                                    <li>
                                    <li class="dropdown yamm mega-menu"> <a href="index.php?act=contact">Liên hệ</a>


                                    <li class="dropdown  navbar-right special-menu"> <a href="#">Get 30% off on
                                            selected
                                            items</a> </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>
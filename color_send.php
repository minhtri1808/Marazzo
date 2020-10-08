    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../view/assets/css/main.css">
    <link rel="stylesheet" href="../view/assets/css/blue.css">
    <link rel="stylesheet" href="../view/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../view/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../view/assets/css/animate.min.css">
    <link rel="stylesheet" href="../view/assets/css/rateit.css">
    <link rel="stylesheet" href="../view/assets/css/bootstrap-select.min.css">


    <div id="owl-single-product">
        <?php
        require_once 'model/pdo.php';
        require "model/color.php";
        require "global.php";
        $id_product_ = $_POST['id_product_'];
        $id_color = $_POST['id_color'];
        $loadcolor = colorselectallID($id_product_, $id_color);
        $a = $loadcolor['image'];
        $images = explode(',', $a);
        $j = 1;
        for ($i = 0; $i < sizeof($images); $i++) {
            echo '
                                    <div class="single-product-gallery-item" id="slide' . $j . '">
                                        <a data-lightbox="image-1" data-title="Gallery"
                                            href="' . $img_product_dienthoai_color . $images[$i] . '">
                                            <img class="img-responsive" alt=""
                                                data-echo="' . $img_product_dienthoai_color . $images[$i] . '" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                     ';
            $j++;
        }
        ?>
    </div><!-- /.single-product-slider -->
    <div class="single-product-gallery-thumbs gallery-thumbs">
        <div id="owl-single-product-thumbnails">
            <?php
            $id_product_ = $_POST['id_product_'];
            $id_color = $_POST['id_color'];
            $loadcolor = colorselectallID($id_product_, $id_color);
            $a = $loadcolor['image'];
            $images = explode(',', $a);
            $k = 1;
            for ($i = 0; $i < sizeof($images); $i++) {

                echo  '<div class="item">
                                            <a class="horizontal-thumb active" data-target="#owl-single-product"
                                                data-slide="' . $k . '" href="#slide' . $k . '">
                                                <img class="img-responsive" alt="" src=""
                                                    data-echo="' . $img_product_dienthoai_color . $images[$i] . '" />
                                            </a>
                                        </div>';

                $j++;
            }
            ?>
        </div><!-- /#owl-single-product-thumbnails -->
    </div>

    <script src="../view/assets/js/jquery-1.11.1.min.js"></script>
    <script src="../view/assets/js/jquery.rateit.min.js"></script>
    <script src="../view/assets/js/bootstrap.min.js"></script>
    <script src="../view/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="../view/assets/js/owl.carousel.min.js"></script>
    <script src="../view/assets/js/echo.min.js"></script>
    <script src="../view/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="../view/assets/js/bootstrap-slider.min.js"></script>

    <script src="../view/assets/js/lightbox.min.js"></script>
    <script src="../view/assets/js/bootstrap-select.min.js"></script>
    <script src="../view/assets/js/wow.min.js"></script>
    <script src="../view/assets/js/scripts.js"></script>
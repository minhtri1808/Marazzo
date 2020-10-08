<!-- ============================================== HEADER : END ============================================== -->

<style>
#more {
    display: none;
}
</style>
<!--  -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Shopping Cart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <?php
          if (isset($_SESSION['giohang'])) {

            echo '
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="cart-romove item">Remove</th>
                            <th class="cart-description item">Hình</th>
                            <th class="cart-product-name item">Tên sản phẩm</th>
                            <th class="cart-edit item">Edit</th>
                            <th class="cart-qty item">Số lượng</th>
                            <th class="cart-sub-total item">Giá</th>
                              <th class="cart-sub-total item">Tổng</th>
                          </tr>
                        </thead><!-- /thead -->
                        	<tbody id="giohang">';
            $tongtien = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
              $idpro = $_SESSION['giohang'][$i][0];
              $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
              $tongtien += $ttien;

              echo '
                          <tr>
                            <td class="romove-item"><a href="index.php?act=viewcart&delete=' . $idpro . '" class="icon"><i class="fa fa-trash-o"></i></a></td>
                            <td class="cart-image">
                              <a class="entry-thumbnail" href="detail.html">
                                  <img src="' . $img_product_dienthoai . $_SESSION['giohang'][$i][2] . '" alt="">
                              </a>
                            </td>
                         
                            <td class="cart-product-name-info">
                              <h4 class="cart-product-description"><a href="detail.html">' . $_SESSION['giohang'][$i][1] . '</a></h4>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="rating rateit-small"></div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="reviews">
                                    (06 Reviews)
                                  </div>
                                </div>
                              </div>
                              <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Blue</span></span>
                              </div>
                            </td>
                            <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                          
                             <td class="cart-product-quantity">
                              <div class="quant-input">
                                          <input type="number" onchange="gotoxuly(this,' . $i . ')" class="soluong" value="' . $_SESSION['giohang'][$i][4] . '">
                                      </div>
                          </td>
                        
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">' . number_format($_SESSION['giohang'][$i][3], "0", ",", ".")  . ' VNĐ </span></td>
                            
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">' . number_format($ttien, "0", ",", ".")  . ' VNĐ</span></td>
                          </tr>
                       ';
            }

            echo ' 
                            
                          <tr>
                            <td colspan="4"> <span>
                                     <a href="index.php?act=viewcart&delall=1" class="btn btn-upper btn-primary outer-left-xs">Xóa tất cả</a>
                                  </span>
                              <div class="shopping-cart-btn">
                                <span class=""> 
                               
                                  <a href="index.php?act=shop" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục mua sắm</a>
                                
                                  </span>
                                 
                              </div>
                            </td>
                            <td colspan="3">
                             <table class="table">
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            <input type="hidden" name="tongtien" id="" value="' . $tongtien . '">Tổng tiền<span class="inner-left-md">
                                             ' . number_format($tongtien, "0", ",", ".") . '   VNĐ </span>
                                        </div>';
            echo ' </tbody>';
            echo '   <div class="shopping-cart-btn">
                                <span class="">
                                  <a href="index.php?act=donhang" class="btn btn-upper btn-primary outer-left-xs">Tiếp tục thanh toán</a>
                                </span>
                              </div><!-- /.shopping-cart-btn -->
                                    </th>
                                </tr>
                        </table><!-- /table -->
                            </td>
                          </tr>
                       ';


            echo '   </table><!-- /table -->
                    </div>
                  </div><!-- /.shopping-cart-table -->				
';
          }
          ?>
                    <?php
          echo '<div class="col-md-12 col-sm-12 cart-shopping-total">
                       
                    </div><!-- /.cart-shopping-total -->';
          ?>
                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function gotoxuly(soluong, vitri) {
        alert('thêm số lượng thành công!');
        $.post("../xuly.php", {
                soluong: soluong.value,
                vitri: vitri
            },
            function(result) {
                $("#giohang").html(result);
            });
    }
    </script>
    <script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Nếu địa chỉ giao là nơi khác";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "";
            moreText.style.display = "inline";
        }
    }
    </script>
    <!-- ============================================================= FOOTER ============================================================= -->
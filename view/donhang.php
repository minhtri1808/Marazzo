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
                            $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                            $tongtien += $ttien;
                            echo '
                          <tr>
                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                            <td class="cart-image">
                              <a class="entry-thumbnail" href="detail.html">
                                  <img src="' . $img_product_dienthoai . $_SESSION['giohang'][$i][2] . '" alt="">
                              </a>
                            </td>
                            <!-- name -->
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
                              </div><!-- /.row -->
                              <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Blue</span></span>
                              </div>
                            </td>
                            <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
                            <!-- số lượng -->
                            <td class="cart-product-quantity">
                              <div class="quant-input">
                                          
                                          <input type="number" class="soluong" value="' . $_SESSION['giohang'][$i][4] . '">
                                      </div>
                          </td>
                          <!-- giá -->
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">' . number_format($_SESSION['giohang'][$i][3], "0", ",", ".")  . ' VNĐ </span></td>
                            
                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">' . number_format($ttien, "0", ",", ".")  . ' VNĐ</span></td>
                          </tr>
                          
                       ';
                        }
                        echo '
                             </tbody><!-- /tbody -->
                            <tfoot>
                          <tr>
                            <td colspan="7">
                            
                            </td>
                          </tr>
                        </tfoot>
                      </table><!-- /table -->
                    </div>
                  </div><!-- /.shopping-cart-table -->				
';
                    } ?> <form action="index.php?act=okdonhang" class="register-form outer-top-xs" method="post">
                        <?php
                        if (isset($_SESSION['id']) > 0) {
                            echo ' 
                         <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <!-- /thead -->
                            <tbody>
                             
                                    <h5 class="estimate-title">Thông tin người đặt</h5>
                                    </thead>
                                    <div class="form-group">
                                      <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Tên <span></span></label>
                                        <input type="text" name="name"
                                            class="form-control unicase-form-control text-input"
                                            id="exampleInputEmail1" value="' . $_SESSION['name'] . '" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Số điện thoại
                                            <span>*</span></label>
                                        <input type="text" name="phone"
                                            class="form-control unicase-form-control text-input"
                                            id="exampleInputEmail1" value="' . $_SESSION['phone'] . '" required>
                                    </div>
                                        <label class="info-title" for="exampleInputEmail2">Địa chỉ Email
                                            <span>*</span></label>
                                        <input type="email" name="email"
                                            class="form-control unicase-form-control text-input"
                                            id="exampleInputEmail2" value="' . $_SESSION['email'] . '" required>

                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Địa
                                            chỉ<span>*</span></label>
                                        <input type="text" name="address"
                                            class="form-control unicase-form-control text-input"
                                            id="exampleInputEmail1" value="' . $_SESSION['address'] . '" required>
                                    </div>
                            </tbody>
                        </table>
                    </div><!-- /.estimate-ship-tax -->
                    
                      <span id="dots"></span><span id="more">   <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                           <tbody>
                                   <h5 class="estimate-title">Thông tin người đặt nơi khác</h5>
                                    </thead>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail2">Địa chỉ Email
                                            <span>*</span></label>
                                        <input type="email" name="email1" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >

                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Tên <span></span></label>
                                        <input type="text" name="name1" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >

                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Số điện thoại
                                            <span>*</span></label>
                                        <input type="text" name="phone1" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="exampleInputEmail1">Địa
                                            chỉ<span>*</span></label>
                                        <input type="text" name="address1" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
                                    </div>

                               
                            </tbody>
                        </table><!-- /table -->
                      
                    </div><!-- /.estimate-ship-tax --></span>
                   <div>  <button onclick="myFunction()" id="myBtn"><h5 class="estimate-title">Nếu địa chỉ giao là nơi khác</h5></button></div>
                      ';
                        } else {
                            echo '
                        <div class="col-md-4 col-sm-12 estimate-ship-tax">
                        <table class="table">
                            <tbody>
                              <h5 class="estimate-title">Thông tin người đặt</h5>
                                <div class="register-form outer-top-xs" >
                                    </thead>
                                    <div class="form-group">
                                        <label class="info-title" for="">Tên <span></span></label>
                                        <input type="text" name="name2" class="form-control unicase-form-control text-input"  >

                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="">Số điện thoại
                                            <span>*</span></label>
                                        <input type="text" name="phone2" class="form-control unicase-form-control text-input"  >
                                    </div>
                                    <div class="form-group">
                                        <label class="info-title" for="">Địa
                                            chỉ<span>*</span></label>
                                        <input type="text" name="address2" class="form-control unicase-form-control text-input" >
                                    </div>

                            </tbody>
                        </table><!-- /table -->
                    </div><!-- /.estimate-ship-tax -->';
                        }
                        echo '<div class="col-md-4 col-sm-12 cart-shopping-total">
                      
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            <input type="hidden" name="total" id="" value="' . $tongtien . '">Tổng tiền<span class="inner-left-md">
                                             ' . number_format($tongtien, "0", ",", ".") . '   VNĐ </span>
                                        </div>
                                        <div class="cart-grand-total">
                                            <input type="radio" name="phuongthuc" value="1" checked>
                                            <label for="phuongthuc">COD</label>
                                            <input type="radio" name="phuongthuc" value="2">
                                            <label for="phuongthuc">Chuyển khoản</label>
                                            <input type="radio" name="phuongthuc" value="3">
                                            <label for="phuongthuc">Thánh toán online</label>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                             <div class="shopping-cart-btn">
                                <span class="">
                              
                             <input type="submit" name="submit" value="Thanh toán" class="btn btn-upper btn-primary outer-left-xs">
                                </span> 
                              </div><!-- /.shopping-cart-btn -->
                                        </div>
                                        
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.cart-shopping-total -->';
                        ?>
                    </form>
                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
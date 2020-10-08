<?php
session_start();
include "global.php";


$soluong = $_POST['soluong'];
$vitri = $_POST['vitri'];


$kq = "";
if ($soluong > 0) {
  for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
    if ($i == $vitri) {
      array_splice($_SESSION["giohang"][$i], 4, 1, $soluong);
      break;
    }
  }
}

$tongtien = 0;
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
  $idpro = $_SESSION['giohang'][$i][0];
  $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
  $tongtien += $ttien;

  $kq .= ' 
                          <tr>
                            <td class="romove-item"><a href="index.php?act=viewcart&del=' . $idpro . '" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
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

$kq .= ' 
                           
                          <tr>
                            <td colspan="4">
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
echo $kq;
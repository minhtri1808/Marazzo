<!-- ============================================== NAVBAR ============================================== -->

<!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->



<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Đăng nhập</h4>
                    <p class="">Xin chào, Chào mừng bạn đến với tài khoản của bạn.</p>
                    <!-- <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
                    </div> -->
                    <?php
                    echo '  <form action="" class="register-form outer-top-xs" method="post">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ email <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Mật khẩu <span>*</span></label>
                            <input type="password" name="password" class="form-control unicase-form-control text-input"
                                id="exampleInputPassword1" > 
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember
                                me!
                            </label>
                            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
                        </div>';

                    if (isset($_GET['errtxt'])) {
                        echo "<p style='color:red;'>Tài khoản hoặc mật khẩu không trùng khớp yêu cầu nhập đúng dùm cái</p>";
                    }

                    echo '<input type="submit" name="login" value="Đăng nhập"
                            class="btn-upper btn btn-primary checkout-page-button">
                    </form>';


                    ?>

                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Tạo tài khoản mới</h4>
                    <p class="text title-tag-line">Tạo tài khoản mới của bạn.</p>
                    <h6 style="color: red"> <?php echo $error_message; ?></h6>
                    <h6 style="color: blue"> <?php echo $error_message_; ?></h6>
                    <form action="" class="register-form outer-top-xs" method="post">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Địa chỉ Email <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail2">
                            <p style="color:red"><?php echo $emailErr ?></p>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Tên <span></span></label>
                            <input type="text" name="name" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                            <p style="color:red"><?php echo $nameErr ?></p>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Số điện thoại <span>*</span></label>
                            <input type="text" name="phone" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                            <p style="color:red"><?php echo $phonenumberErr ?></p>

                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Địa chỉ<span>*</span></label>
                            <input type="text" name="address" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Mật khẩu <span>*</span></label>
                            <input type="password" name="password1" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                            <p style="color:red"><?php echo $pass1Err ?></p>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Xác nhận mật
                                khẩu<span>*</span></label>
                            <input type="password" name="password2" class="form-control unicase-form-control text-input"
                                id="exampleInputEmail1">
                            <p style="color:red"><?php echo $pass2Err ?></p>
                        </div>

                        <div class="form-group">
                            <tr>
                                <td>Chức vụ:</td>
                                <td>
                                    <select name="role" id="role" disabled>
                                        <option value="0" selected>Khách hàng</option>
                                        <option value="9">Admin</option>
                                    </select>
                                </td>
                            </tr>
                        </div>


                        <input type="submit" name="register" value="Đăng kí"
                            class="btn-upper btn btn-primary checkout-page-button">
                    </form>


                </div>
                <!-- create a new account -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>
                    </div>
                    <!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
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
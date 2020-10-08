<?php

session_start();
ob_start();
unset($_SESSION['giohang']);
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];

// include "../model/connect.php";
include "../model/danhmuc.php";
include "../model/loadtheo.php";
include "../model/sanpham.php";
include "../model/color.php";
include "../model/user.php";
include "../model/donhang.php";
include "../global.php";
$catalog = showcatalog();

include "../view/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'shop':
            $fromto = price();
            include "../view/shop.php";
            break;
        case 'productdetail':
            include "../view/productdetail.php";
            break;
        case 'signin':
            $error_message = '';
            $error_message_ = '';
            if (isset($_POST['login']) && $_POST['login']) {
                $pass = md5($_POST['password']);
                $thongtin =  checkuser($_POST['email'], $pass);
                if ($thongtin['id'] > 0) {
                    $_SESSION['name'] = $thongtin['name'];
                    $_SESSION['id'] = $thongtin['id'];
                    $_SESSION['email'] = $thongtin['email'];
                    $_SESSION['phone'] = $thongtin['phone'];
                    $_SESSION['address'] = $thongtin['address'];
                    $_SESSION['role'] = $thongtin['role'];
                    if ($thongtin['role'] != 9) {
                        header('Location: index.php');
                    } else {
                        header('Location: ../admin.php');
                    }
                } else {
                    header('Location:index.php?act=signin&errtxt=1');
                }
            }
            $pass1Err = $pass2Err = $phonenumberErr = $nameErr = $rollErr = $emailErr = "";
            $password2 = $password = $phone = $name = $password1 = $email = "";
            if (isset($_POST['register']) && $_POST['register']) {
                $checkform = true;
                // if (empty($_POST["name"])) {
                //     $usernameErr = "*Username bắt buộc";
                //     $checkform = false;
                // } elseif (!preg_match("([a-zA-Z0-9][^\s])", $_POST["name"]) || $_POST["name"] = '') {
                //     $usernameErr = "*Chỉ cho phép chữ cái và số";
                //     $checkform = false;
                // }
                if (empty($_POST["email"])) {
                    $emailErr = "Email bắt buộc";
                } else {
                    // check if e-mail address is well-formed
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Định dạng email không hợp lệ";
                    }
                }
                if (empty($_POST["password1"])) {
                    $pass1Err = "*Password bắt buộc";
                    $checkform = false;
                } elseif (strlen($_POST["password1"]) <= '8' || strlen($_POST["password1"]) >= '16') {
                    $pass1Err = "*Nhập tối đa 16 số tối thiểu 8 kí tự";
                } elseif (!preg_match("#[0-9A-Za-z]+#", $_POST["password1"]) || $_POST["password1"] = '') {
                    $pass1Err = "*Không khoãn cách và không được để trống";
                    $checkform = false;
                }
                if (empty($_POST["password2"])) {
                    $pass2Err = "*Password bắt buộc";
                    $checkform = false;
                } elseif (strlen($_POST["password2"]) <= '8' || strlen($_POST["password2"]) >= '16') {
                    $pass2Err = "*Nhập tối đa 16 số tối thiểu 8 kí tự";
                } elseif (!preg_match("#[0-9A-Za-z]+#", $_POST["password2"]) || $_POST["password2"] = '') {
                    $pass2Err = "*Không khoãn cách và không được để trống";
                    $checkform = false;
                }

                if (empty($_POST["phone"])) {
                    $phonenumberErr = "*Phone bắt buộc";
                    $checkform = false;
                } elseif (!preg_match("([0-9])", $_POST["phone"]) || $_POST["phone"] = '') {
                    $phonenumberErr = "*Nhập tối đa 9 số và không được để trống";
                    $checkform = false;
                }
                if (empty($_POST["name"])) {
                    $nameErr = "*Name bắt buộc";
                    $checkform = false;
                } elseif (!preg_match("([a-zA-Z0-9])", $_POST["name"]) || $_POST["name"] = '') {
                    $nameErr = "*Chỉ cho phép chữ cái và số";
                    $checkform = false;
                }
                if ($checkform == true) {
                    if ($_POST["password1"] != $_POST["password2"]) {
                        $error_message = "Password không trùng khớp với ý kiến của bé";
                    } else {
                        $password = $_POST["password1"];
                        $error_message_ = "Đăng kí thành công";
                        user_insert($_POST['name'], md5($password), $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['role']);
                        header('Location:index.php?act=signin');
                    }
                }
            }
            include "../view/sign-in.php";
            break;
        case 'logout':
            $passs = md5($_SESSION['password']);
            unset($_SESSION['name']);
            unset($_SESSION['id']);
            unset($_SESSION['email']);
            unset($passs);
            unset($_SESSION['phone']);
            unset($_SESSION['role']);
            unset($_SESSION['address']);
            header('Location: index.php?act=contact');
            break;
        case 'contact':
            include "../view/contact.php";
            break;
            // case 'addcart':

            //     include "../view/shopping-cart.php";
            //     break;
        case 'donhang':

            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $idpro = $_POST['idpro'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;

                $vitri = 0;
                //kiem tra su ton tai
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    if ($_SESSION['giohang'][$i][0] == $idpro) {
                        $vitri = $i + 1;
                        $vitri_soluong = $_SESSION['giohang'][$i][4];
                        break;
                    }
                }
                if ($vitri > 0) {
                    //update gio hang
                    $soluongnew = $vitri + $soluong;
                    $_SESSION['giohang'][$vitri - 1][4] = $soluongnew;
                } else {
                    $item = [$idpro, $name, $image, $price, $soluong];
                    $_SESSION['giohang'][] = $item;
                }
            }

            include "../view/donhang.php";
            break;
        case 'viewcart':
            if (isset($_GET['delall']) && ($_GET['delall']) == 1) {
                $_SESSION['giohang'] = [];
            }

            if (isset($_GET['delete']) && ($_GET['delete']) >= 0) {
                array_splice($_SESSION['giohang'], $_GET['delete'], 1);
            }
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $idpro = $_POST['idpro'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $soluong = 1;

                $vitri = 0;
                //kiem tra su ton tai
                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                    if ($_SESSION['giohang'][$i][0] == $idpro) {
                        $vitri = $i + 1;
                        $vitri_soluong = $_SESSION['giohang'][$i][4];
                        break;
                    }
                }
                if ($vitri > 0) {
                    //update gio hang
                    $soluongnew = $vitri + $soluong;
                    $_SESSION['giohang'][$vitri - 1][4] = $soluongnew;
                } else {
                    $item = [$idpro, $name, $image, $price, $soluong];
                    $_SESSION['giohang'][] = $item;
                }
            }

            include "../view/shopping-cart.php";
            break;
        case 'okdonhang':
            //add thông tin trên form vào bảng đơn hàng
            // lấy id đơn hàng
            if (isset($_POST['name']) && $_POST['name'] != "") {
                $name = $_POST['name'];
            }
            if (isset($_POST['phone']) && $_POST['phone'] != "") {
                $phone = $_POST['phone'];
            }
            if (isset($_POST['email']) && $_POST['email'] != "") {
                $email = $_POST['email'];
            }
            if (isset($_POST['address']) && $_POST['address'] != "") {
                $address = $_POST['address'];
            }
            if (isset($_POST['total']) && $_POST['total'] != "") {
                $total = $_POST['total'];
            }
            if (isset($_POST['phuongthuc']) && $_POST['phuongthuc'] != "") {
                $phuongthuc = $_POST['phuongthuc'];
            }

            //tạo đơn hàng
            // $donhang = new donhang();
            adddonhang($name, $phone, $email, $address, $total, $phuongthuc);
            unset($_SESSION['giohang']);
            //duyệt mảng từng session giỏ hàng
            //mỗi vòng lặp :add thông tin từng sp trong giỏ
            //+id đơn hàng vừa tạo ở trên
            // vào bản donhangchitiet
            include "../view/donhangconfirm.php";
            break;
    }
} else {
    include "../view/home.php";
}

include "../view/footer.php";
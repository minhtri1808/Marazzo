<?php

ob_start();
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/admin/header.php";
include "./global.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include "view/admin/home.php";
            break;
        case 'qldm':
            if (isset($_POST['adddm'])) {
                if (catalog_exist($_POST['name'])) {
                    $error_message = "Tên danh mục đã tồn tại";
                } else {
                    catalog_insert(
                        $_POST['name'],
                        $_POST['parent_id'],
                        $_POST['sethome']
                    );
                }
            }
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                catalog_delete($_GET['del']);
            }
            if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
                $getdmone = catalog_select_by_id($_GET['edit']);
            }
            if (isset($_POST['updatedm']) && $_POST['updatedm']) {
                catalog_update(
                    $_GET['edit'],
                    $_POST['name'],
                    $_POST['parent_id'],
                    $_POST['sethome']
                );
                header("Location:admin.php?act=qldm");
            }
            $loadcatalog = catalog_select_all();
            include "view/admin/qldm.php";
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
            header('Location: controler/index.php?act=contact');
            break;
        case 'qlsp':
            if (isset($_POST['addsp'])) {
                if (product_exist($_POST['name'])) {
                    $error_message = "Tên danh mục đã tồn tại";
                } else {
                    if (isset($_POST['sale']) && $_POST['sale']) $sale = 1;
                    else $sale = 0;
                    if (isset($_POST['hot']) && $_POST['hot']) $hot = 1;
                    else $hot = 0;
                    $img = "";
                    foreach ($_FILES['myImages']['tmp_name'] as $key => $image) {
                        $imageName = $_FILES['myImages']['name'][$key];
                        $imageTmpName = $_FILES['myImages']['tmp_name'][$key];
                        $img .= $imageName . ',';
                        $directory = "upload/product/";
                        $result = move_uploaded_file($imageTmpName, $directory . $imageName);
                    }
                    echo  "Thêm thành công";
                    product_insert(
                        $_POST['name'],
                        $sale,
                        $img,
                        $_POST['date'],
                        $_POST['id_producer'],
                        $_POST['note'],
                        $_POST['view'],
                        $_POST['detail'],
                        $_POST['id_catalog'],
                        $hot
                    );
                }
            }
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                product_delete($_GET['del']);
            }
            if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
                $getone = product_select_by_id($_GET['edit']);
            }
            if (isset($_POST['updatesp'])) {
                $img = "";
                foreach ($_FILES['myImagess']['tmp_name'] as $key => $image) {
                    $imageName = $_FILES['myImagess']['name'][$key];
                    $imageTmpName = $_FILES['myImagess']['tmp_name'][$key];
                    $img .= $imageName . ',';
                    $directory = "upload/product/";
                    $result = move_uploaded_file($imageTmpName, $directory . $imageName);
                }

                product_update(
                    $_GET['edit'],
                    $_POST['name'],
                    $_POST['sale'],
                    $_POST['image'],
                    $_POST['date'],
                    $_POST['id_producer'],
                    $_POST['note'],
                    $_POST['view'],
                    $_POST['id_catalog'],
                    $_POST['hot']
                );
                header("Location:admin.php?act=qlsp");
            }
            $loadcolor = getallcolor();
            $loadproduct = productselectall();
            $loaddproducer = loadproducer();
            $loadcatalog = catalog_select_all();
            $loaddetail = loadproduct_detail();
            include "view/admin/qlsp.php";
            break;
        case 'qlprodetail':
            if (isset($_POST['adddm'])) {
                $img = '';
                foreach ($_FILES['myImages']['tmp_name'] as $key => $image) {
                    $imageName = $_FILES['myImages']['name'][$key];
                    $imageTmpName = $_FILES['myImages']['tmp_name'][$key];
                    $img .= $imageName . ',';
                    $directory = "upload/product/";
                    $result = move_uploaded_file($imageTmpName, $directory . $imageName);
                }
                detail_insert(
                    $_POST['id_product'],
                    $_POST['id_color '],
                    $img,
                    $_POST['price'],
                    $_POST['price-old']
                );
            }
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                detail_delete($_GET['del']);
            }
            if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
                $getone = detail_select_by_id($_GET['edit']);
            }
            if (isset($_POST['update']) && $_POST['update']) {
                $img = '';
                foreach ($_FILES['myImages']['tmp_name'] as $key => $image) {
                    $imageName = $_FILES['myImages']['name'][$key];
                    $imageTmpName = $_FILES['myImages']['tmp_name'][$key];
                    $img .= $imageName . ',';
                    $directory = "upload/product/";
                    $result = move_uploaded_file($imageTmpName, $directory . $imageName);
                }
                detail_update($_POST['edit'], $_POST['id_product'], $_POST['id_color'], $img, $_POST['price'], $_POST['price_old']);
                header("Location:admin.php?act=qlprodetail");
            }
            $loadcolor = getallcolor();
            $loadproduct = productselectall();
            $loaddproducer = loadproducer();
            $loadcatalog = catalog_select_all();
            $loaddetail = loadproduct_detail();
            include "view/admin/qlprodetail.php";
            break;
        case 'user':
            if (isset($_POST['adduser'])) {
                if (user_exist($_POST['name'])) {
                    $error_message = "Tên danh mục đã tồn tại";
                } else {
                    user_insert($name, $password, $email, $phone, $address, $role);
                }
            }
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                user_delete($_GET['del']);
            }
            if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
                $getone = user_select_by_id($_GET['edit']);
            }
            if (isset($_POST['updatedm']) && $_POST['updatedm']) {
                user_update($id, $name, $password, $email, $phone, $address, $role);
                header("Location:admin.php?act=qldm");
            }
            $loaduser = user_select_all();
            include "view/admin/qldm.php";
            break;
    }
} else {
    include "view/admin/home.php";
}

include "view/admin/footer.php";
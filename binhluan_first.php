<?php
require_once "model/pdo.php";
require "model/binhluan.php";

// if (
//     isset($_POST['name']) && $_POST['name'] > 0 && isset($_POST['content'])
//     && $_POST['content'] > 0 && isset($_POST['id_product']) && $_POST['id_product'] > 0
// ) {
// $name = $_POST['name'];
// $email = $_POST['email'];
// $content = $_POST['content'];
// $id_product = $_POST['id_product'];

$dsbl = binhluanselectall();
$kq = "";
foreach ($dsbl as $bl) {
    extract($dsbl);
    $kq .= "<strong>" . $bl['name'] . "(" . $bl['email'] . ")</strong> <br> " . $bl['content'] . "<hr>";
}
echo $kq;
// } else {
//     // echo "<h6>[Chưa có bình luận nào hết trơn!!]</h6>";
//     echo "";
// }
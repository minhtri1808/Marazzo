<?php
require_once 'model/pdo.php';
require "model/binhluan.php";
$dsbl = binhluanselectall();
$kq = "";

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];
$id_product = $_POST['id_product'];
bl_insert($name, $email, $content, $id_product);

foreach ($dsbl as $bl) {
    extract($dsbl);
    $kq .= "<strong>" . $name . "(" . $email . ")</strong> <br> <hr> " . $content . "<hr>";
}
echo $kq;
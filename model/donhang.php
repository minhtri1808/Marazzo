<?php
require_once 'pdo.php';

function adddonhang($name, $phone, $email, $address, $total, $phuongthuc)
{
    $sql = "INSERT INTO `cart_order` (name, phone, email,address, total, phuongthuc) VALUES 
    ('$name', '$phone', '$email', '$address', '$total', '$phuongthuc')";
    return  pdo_execute($sql);
}
<?php
require_once 'pdo.php';
function binhluanselectall()
{
    $sql = "SELECT * FROM `comment` order by id desc limit 5  ";
    return pdo_query($sql);
}
function bl_insert($name, $email, $content, $id_product)
{
    $sql = "INSERT INTO `comment` ( `name`,`email` ,`content`,`id_product`) 
    VALUES ( ' $name', '$email', '$content', '$id_product');";
    pdo_execute($sql);
}
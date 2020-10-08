<?php
require_once 'pdo.php';
function colorselectallID($id_product, $id_color)
{
    $sql = "SELECT * FROM `product_detail` WHERE id_product='$id_product' and id_color='$id_color'";
    return pdo_query_one($sql);
}

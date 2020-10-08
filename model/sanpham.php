<?php
require_once 'pdo.php';
/**
 * Thêm loại mới
 * @param String $ten_danh_muc là tên loại
 * @throws PDOException lỗi thêm mới
 */
function product_insert($name, $sale, $img, $date, $id_producer, $note, $view, $detail, $id_catalog, $hot)
{
    $sql = "INSERT INTO `product` ( name, sale, image, date, id_producer, note, view, detail, id_catalog, hot) 
    VALUES ('$name','$sale','$img','$date','$id_producer','$note',' $view','$detail','$id_catalog','$hot')";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 * @param int $id là mã loại cần cập nhật
 * @param String $ten_danh_muc là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function product_update($id, $name, $sale, $image, $date, $id_producer, $note, $view, $id_catalog, $hot)
{

    $sql = "UPDATE `product` SET `name` = '$name',`sale` = '$sale'";
    if ($image == "") {
        $sql .= " ,`date` = '$date',`id_producer` = '$id_producer',`note` = '$note' ,`view`=$view,`id_catalog`=$id_catalog,`hot`='$hot'
        WHERE `id` = $id";
    } else {
        $sql .= " ,`image` = '$image',`date` = '$date',`id_producer` = '$id_producer',`note` = '$note' ,`view`=$view,`id_catalog`=$id_catalog,`hot`='$hot'
        WHERE `id` = $id";
    }
    $r = pdo_execute($sql);
    return $r;
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function product_delete($id)
{
    $sql = "DELETE FROM product WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function product_detail_select_all($id_product)
{
    $sql = "SELECT * FROM product_detail where id_product='$id_product'";
    if (isset($_GET['rangePrice'])) {
        $rangePrice = $_GET['rangePrice'];
        $range = preg_split('[\s]', $rangePrice);
        $from = 0;
        $to = 0;
        if ($range[0] == "to") {
            $from = $range[1];
        } else {
            $range1 = preg_split('[\-]', $range[0]);
            $from = $range1[0];
            $to = $range1[1];
        }
        $sql .= " AND price>=" . $from;
        if ($to != 0) {
            $sql .= " AND price>='" . $from . "' AND price<=" . $to;
        }
    }
    $sql .= "  GROUP BY id_product ORDER BY id DESC";
    return pdo_query($sql);
}

function loadproducer()
{
    $sql = "SELECT * FROM `producer`";
    return pdo_query($sql);
}
function productselectall()
{
    $sql = "SELECT * FROM `product`";
    return pdo_query($sql);
}
function loadcatalog($id)
{
    $sql = "SELECT * FROM catalog where id='$id'  ";
    return pdo_query($sql);
}
function loadproductcatalog()
{
    $sql = "SELECT * FROM product where 1 group by id_catalog";
    return pdo_query($sql);
}
function loadnhasx($id)
{
    $sql = "SELECT * FROM producer where id='$id' ";
    return pdo_query($sql);
}
function loadproductnhasx()
{
    $sql = "SELECT * FROM product where 1 ";
    return pdo_query($sql);
}
// function selectid_producer($id_producer)
// {
//     $sql = "SELECT * FROM product where id_producer='$id_producer'";
//     return pdo_query($sql);
// }

function product_detail_select_all1($id_product)
{
    $sql = "SELECT * FROM product_detail where id_product='$id_product' ORDER BY id DESC";
    return pdo_query($sql);
}

function product_detail_select_all_color($id_product)
{
    $sql = "SELECT * FROM product_detail where id_product='$id_product'   ORDER BY id DESC";
    return pdo_query($sql);
}
function product_detail_price($fr, $to)
{
    $sql = "SELECT *  FROM product_detail WHERE price>='$fr' AND price<='$to' GROUP BY id_product ";
    return pdo_query($sql);
}
function getallproductwhereid($id)
{
    $sql = "SELECT * from product where id=$id ";
    $sql .= " order by id desc";

    return pdo_query($sql);
}
function getallproductwhereid_distint($id)
{
    $sql = "SELECT * from product where id=$id DISTINCT id";
    $sql .= " order by id desc";

    return pdo_query($sql);
}
function getallproductwhereidlienquan($id)
{
    $sql = "SELECT * from product where id=$id GROUP BY id";
    $sql .= " order by id desc";

    return pdo_query($sql);
}
function getalldetailwhereid($id)
{
    $sql = "SELECT * from product_detail where id=$id ";
    $sql .= " order by id desc";

    return pdo_query($sql);
}
function price()
{
    $sql = "SELECT * FROM price WHERE status=1";
    return pdo_query($sql);
}

function getallproductwhereid_GORUPBY($id)
{
    $sql = "SELECT * from product where id=$id ";
    return pdo_query($sql);
}
function getallproductwhereidandcata($id, $id_catalog)
{
    $sql = "SELECT * from product where id=$id and id_catalog=$id_catalog ";
    return pdo_query($sql);
}
function getallcolorwhereid($id)
{
    $sql = "SELECT * from color where id=$id ";
    return pdo_query($sql);
}
function getallcolor()
{
    $sql = "SELECT * from color ";
    return pdo_query($sql);
}
function getallproduct_id($id)
{
    $sql = "SELECT * from product WHERE id=" . $id;
    return pdo_query_one($sql);
}
function getallproduct()
{

    $sql = "SELECT * from product where 1";
    if (isset($_GET['id_producer'])) {
        $id_producer = $_GET['id_producer'];
        $sql .= " AND id_producer='$id_producer' ";
    }
    if (isset($_GET['id_catalog'])) {
        $id_catalog = $_GET['id_catalog'];
        $sql .= " AND id_catalog='$id_catalog' ";
    }
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    if (!empty($keyword)) {
        $sql .= " AND name like '%" . $keyword . "%' ";
        $sql .= " order by id desc";
    }
    $sql .= " order by id desc";
    return pdo_query($sql);
}
function getalltype($stt)
{
    $sql = "SELECT * FROM `type` where stt='$stt'";
    return pdo_query_one($sql);
}
function getallproduct_home_limit()
{
    $sql = "SELECT * from product ORDER BY id DESC limit 6";
    return pdo_query($sql);
}

function getallproductwhereid_hot($hot)
{
    $sql = "SELECT * from product where hot='$hot' ORDER BY id DESC";
    return pdo_query($sql);
}
function getallproductwhereid_catalog($id_catalog)
{
    $sql = "SELECT * from product where id_catalog='$id_catalog' ORDER BY id DESC";
    return pdo_query($sql);
}
function getallproductwhere_id_catalog($id_catalog)
{
    $sql = "SELECT * from product where id_catalog='$id_catalog' limit 8";
    return pdo_query($sql);
}

function loadproduct_detail()
{
    $sql = "SELECT * FROM `product_detail`";

    return pdo_query($sql);
}
function detail_insert($id_product, $id_color, $image, $price, $price_old)
{
    $sql = "INSERT INTO `product_detail` ( `id_product `, `id_color `, `image`, `price`, `price-old`) 
    VALUES ('$id_product','$id_color', '$image', '$price','$price_old')";
    pdo_execute($sql);
}

function detail_update($id, $id_product, $id_color, $image, $price, $price_old)
{
    $sql = "UPDATE `product_detail` SET `id_product` = '$id_product',`id_color` = '$id_color',`image` = '$image',`price` = '$price',`price_old` = '$price_old' WHERE `id` = $id";
    return pdo_execute($sql);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function detail_delete($id)
{
    $sql = "DELETE FROM `product_detail` WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
/**
 * Truy vấn một loại theo mã
 * @param int $id là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function detail_select_by_id($id)
{
    $sql = "SELECT * FROM product_detail WHERE id=?";
    return pdo_query_one($sql, $id);
}
function product_select_by_id($id)
{
    $sql = "SELECT * FROM product WHERE id=?";
    return pdo_query_one($sql, $id);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function product_exist($name)
{
    $sql = "SELECT count(*) FROM product WHERE name=?";
    return pdo_query_value($sql, $name) > 0;
}
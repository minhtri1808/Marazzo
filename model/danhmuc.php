<?php
require_once 'pdo.php';
/**
 * Thêm loại mới
 * @param String $ten_danh_muc là tên loại
 * @throws PDOException lỗi thêm mới
 */
// function multiLevelMenu()
// {
//     $sql = "SELECT * FROM danh_muc WHERE parent=0";
//     $r = pdo_query($sql);
//     if (count($r) > 0) {
//         echo '<li class="hassubs">
//         <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
//         <ul>';
//         // echo '<li class="hassubs">
//         //         <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
//         //         <ul>
//         //             <li><a href="#">Menu Item<i
//         //                         class="fas fa-chevron-right"></i></a></li>
//         //             <li><a href="#">Menu Item<i
//         //                         class="fas fa-chevron-right"></i></a></li>
//         //             <li><a href="#">Menu Item<i
//         //                         class="fas fa-chevron-right"></i></a></li>
//         //             <li><a href="#">Menu Item<i
//         //                         class="fas fa-chevron-right"></i></a></li>
//         //         </ul>
//         //     </li>';
//         while ($rows = mysqli_fetch_array($r)) {
//             echo '<li><a href="#">' . $rows['name'] . '<i class="fas fa-chevron-right"></i></a></li>';
//             echo '</ul>
//     </li>';
//         }
//     }
// }

// load menu 3 cấp theo 
function showcatalog()
{
    $sql = "select * from catalog order by name";
    return pdo_query($sql);
}
function showname_subcatalog($idCatalog, $parent)
{
    $sql = "select * from group_producer where id_catalog= $idCatalog and id_parent_name= $parent";
    // echo $sql;
    return pdo_query($sql);
}
function getnameproducer($id)
{
    $sql = "select * from producer where id=$id ";
    return pdo_query($sql);
}
// end
function catalog_insert($name, $parent_id, $sethome)
{
    $sql = "INSERT INTO `catalog` ( `name`, `parent_id`, `sethome`) 
    VALUES ( ' $name', '$parent_id', '$sethome');";
    pdo_execute($sql);
}
/**
 * Cập nhật tên loại
 * @param int $id là mã loại cần cập nhật
 * @param String $ten_danh_muc là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function catalog_update($id, $name, $parent_id, $sethome)
{
    $sql = " UPDATE catalog SET name = ?, parent_id =?,  sethome = ? 
    WHERE catalog.id = ?;";
    pdo_execute($sql, $name, $parent_id,  $sethome, $id);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $id là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function catalog_delete($id)
{
    $sql = "DELETE FROM catalog WHERE id=?";
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
function catalog_select_all()
{
    $sql = "SELECT * FROM catalog  ORDER BY id DESC ";
    return pdo_query($sql);
}
// function catalog_select_all_1($parent)
// {
//     $sql = "SELECT * FROM danh_muc WHERE parent='$parent' ORDER BY id DESC ";
//     return pdo_query($sql);
// }
// function danh_muc_select_all1()
// {
//     $sql = "SELECT * FROM danh_muc  ORDER BY id DESC ";
//     return pdo_query($sql);
// }
/**
 * Truy vấn một loại theo mã
 * @param int $id là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function catalog_select_by_id($id)
{
    $sql = "SELECT * FROM catalog WHERE id=?";
    return pdo_query_one($sql, $id);
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $id là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function catalog_exist($name)
{
    $sql = "SELECT count(*) FROM catalog WHERE name=?";
    return pdo_query_value($sql, $name) > 0;
}
//menu đa cấp
//function Menu($parent = 0,$space = '---', $trees = NULL){ 
//        if(!$trees){ $trees = array(); }
//	$sql = mysql_query("SELECT * FROM danh_muc WHERE parent = ".intval($parent)." ORDER BY tendanh_muc"); 
//	while($rs = mysql_fetch_assoc($sql)){ 
//		$trees[] = array('id'=>$rs['id'],'tendanh_muc'=>$space.$rs['tendanh_muc']); 
//		$trees = Menu($rs['id'],$space.'---',$trees); 
//	} 
//	return $trees; 
//} 
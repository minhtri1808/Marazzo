<?php
function san_pham_select_theodm($id_dm)
{
    $sql = "SELECT * FROM san_pham WHERE id_dm=' $id_dm'";
    return pdo_query($sql);
}
function san_pham_select_theodm1($id_dm)
{
    $sql = "SELECT * FROM san_pham WHERE id_dm=' $id_dm'";
    return pdo_query($sql);
}
function san_pham_select_gr_all()
{
    $sql = "SELECT * FROM group_name  ORDER BY id DESC ";
    return pdo_query($sql);
}
function san_pham_select_gr($id)
{
    $sql = "SELECT * FROM group_name WHERE id_dm=" . $id;
    return pdo_query($sql);
}


function namegrTranslate($id_gr)
{
    if ($id_gr == 1) {
        $kq = "Men";
    } elseif ($id_gr == 2) {
        $kq = "Women";
    } elseif ($id_gr == 3) {
        $kq = "Boys";
    } elseif ($id_gr == 4) {
        $kq = "Girl";
    } elseif ($id_gr == 5) {
        $kq = "Laptop";
    } elseif ($id_gr == 6) {
        $kq = "Desktop";
    } elseif ($id_gr == 7) {
        $kq = "Cameras";
    } elseif ($id_gr == 8) {
        $kq = "Mobile Phone";
    }
    return $kq;
}
<!-- <style>
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 50%;
        font: normal normal 11px Verdana, Arial, Sans-Serif;
    }

    .tabcontent {
        color: white;
        display: none;
        padding: 55px 20px;
        height: 100%;
    }
</style>
<button class="tablink" onclick="openPage('Home', this, 'blue')" id="defaultOpen">Quản lí quản phẩm</button>
<button class="tablink" onclick="openPage('News', this, 'red')">Quản lí sản phẩm chi tiết</button>

<div id="Home" class="tabcontent"> -->
<div class="flex-container">
    <div>
        <?php
        $error_message = '';
        if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
            echo '
            <form action="" method="post" enctype="multipart/form-data">
            <table>
             <tr>
                <td>Tên sản phẩm:</td>
                    <td><input class="w3-input" type="text" name="id" value="' . $_GET['edit'] . '" disabled></td>
                </tr>
                <tr>
                <td>Tên sản phẩm:</td>
                    <td><input class="w3-input" type="text" name="name" value="' . $getone['name'] . '" ></td>
                </tr>';
        ?>
        <tr>
            <td>sale:</td>
            <td><input type="checkbox" name="sale" <?php if ($getone['sale'] == 1) {
                                                            echo 'checked';
                                                        }; ?>></td>
        </tr>

        <tr>
            <td>Nhiểu ảnh:</td>
            <td><input type="file" name="myImagess[]" multiple="multiple">
                <br>
                <br>
                <?php
                    $a = $getone['image'];
                    $images = explode(',', $a);
                    for ($i = 0; $i < sizeof($images); $i++) {
                        echo ' <img width="60px" src="';
                        echo  $img_product_dienthoai_admin . $images[$i];
                        echo '" alt="">';
                    } ?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date" value="<?php echo $getone['date'] ?>"></td>
        </tr>
        <tr>

            <td>ID nhà san xuất:</td>
            <td>
                <select name="id_producer" id="id_producer">
                    <?php
                        foreach ($loaddproducer as $producer) {
                            $dk = "";
                            if ($getone['id_producer'] == $producer['id']) {
                                $dk = 'selected';
                            }
                            echo '<option value="' . $producer['id'] . '"' . $dk . ' >' . $producer['name'] . '</option>';
                        }
                        ?>
                </select>
            </td>
        </tr>

        <?php
            echo '
              <tr>
              <td>Ghi chú:</td>
                    <td><input class="w3-input" type="text" name="note" value="' . $getone['note'] . '"></td>
                </tr>
                  <tr>
                  <td>Lượt xem:</td>
                    <td><input class="w3-input" type="text" name="view" value="' . $getone['view'] . '"></td>
                </tr>
                  <tr>
                  <td>Detail:</td>
                    <td><input class="w3-input" type="text" name="detail" value="' . $getone['detail'] . '"></td>
                </tr>
                  ';

            ?>
        <tr>
            <td>ID danh mục:</td>
            <td>
                <select name="id_catalog" id="id_catalog">
                    <?php
                        foreach ($loadcatalog as $cata) {
                            $dk = "";
                            if ($getone['id_catalog'] == $cata['id']) {
                                $dk = 'selected';
                            }
                            echo '<option value="' . $cata['id'] .   '" ' . $dk . '>' . $cata['name'] . '</option>';
                        }
                        ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hot:</td>
            <td><input class="w3-input" type="checkbox" name="hot" <?php if ($getone['hot'] == 1) {
                                                                            echo 'checked';
                                                                        }; ?>></td>
        </tr>
        <tr>
            <td colspan="2">
                <center><input type="submit" class="submit" name="updatesp" value="Cập nhật"></center>
            </td>
        </tr>

        </table>
        </form>
        <?php
        } else {
            echo '
            ' . $error_message . '
            <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                <td>Tên sản phẩm:</td>
                    <td><input class="w3-input" type="text" name="name"></td>
                </tr>
                ' . $error_message . '
                <tr>
                <td>Sale:</td>
                    <td><input class="w3-input" type="checkbox" name="sale"></td>
                </tr>

                <tr> 
                <td>Nhiểu ảnh:</td>
                    <td> <input type="file" name="myImages[]" multiple="multiple" ></td>
                </tr>
                <tr>
                <td>Date</td>
                <td><input type="date"  name="date"></td>
                </tr>
                ';
        ?>
        <tr>
            <td>ID nhà san xuất:</td>
            <td>
                <select name="id_producer" id="id_producer">
                    <?php

                        foreach ($loaddproducer as $producer) {
                            echo '<option value="' . $producer['id'] . '" >' . $producer['name'] . '</option>';
                        }
                        ?>
                </select>
            </td>
        </tr>

        <?php
            echo '
            
              <tr>
              <td>Ghi chú:</td>
                    <td><input class="w3-input" type="text" name="note"></td>
                </tr>
                  <tr>
                  <td>Lượt xem:</td>
                    <td><input class="w3-input" type="text" name="view"></td>
                </tr>
                  <tr>
                  <td>Detail:</td>
                    <td><input class="w3-input" type="text" name="detail"></td>
                </tr>
                  ';

            ?>
        <tr>

            <td>ID danh mục:</td>
            <td>
                <select name="id_catalog" id="id_catalog">
                    <?php
                        foreach ($loadcatalog as $cata) {
                            echo '<option value="' . $cata['id'] . '" >' . $cata['name'] . '</option>';
                        }
                        ?>
                </select>
            </td>
        </tr>

        <?php
            echo '  
             <tr>
             <td>Hot:</td>
                    <td><input class="w3-input" type="checkbox" name="hot"></td>
                </tr>
            <tr>
               <td colspan="2"><center> <input class="submit" name="addsp" type="submit" value="Thêm mới"></center>
                       
                    </td>
                </tr>
               
        </table>
        </form>';
        }
        ?>
    </div>
    <div>
        <table>
            <tr>
                <th>
                    <center><em class="fa fa-cog"></em></center>
                </th>
                <th>Tên Sản phẩm</th>
                <th>Sale</th>
                <th>Ảnh</th>
                <th>Id_nsx</th>

                <th>ID_catalog</th>
                <th>hot</th>
            </tr>
            <?php

            foreach ($loadproduct as  $pro) {
                if ($pro['image'] != "") {
                    $a = $pro['image'];
                    $images = explode(',', $a);
                    for ($i = 0; $i < 1; $i++) {
                        $img = "<img src='" . $img_product_dienthoai_admin . $images[$i] . "' width='150px'>";
                    }
                } else {
                    $img = "no img";
                }
                $edit = "<a   class='btn btn-default' href='?act=qlsp&edit=" . $pro['id'] . "'><em class='fa fa-pencil'></em></a>";
                $del = " <a class='btn btn-danger delete'   href='?act=qlsp&del=" . $pro['id'] . "'><em class='fa fa-trash'></em></a>";
                echo '
                                        <tr>
                                        <td >' . $edit . "  " . $del . '</td>
                                        <td >' . $pro['name'] . '</td>
                                        <td >' . $pro['sale'] . '</td>
                                        <td >' . $img . '</td>
                                        <td >' . $pro['id_producer'] . '</td>                             
                                        <td >' . $pro['id_catalog'] . '</td>   
                                        <td >' . $pro['hot'] . '</td>  
                                    </tr>';
            }
            ?>
        </table>
    </div>
</div>
<!-- </div> -->

<!-- <div id="News" class="tabcontent">
    <?php
    include "view/admin/qlprodetail.php";
    ?>
</div>
</div>
<script>
    function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script> -->
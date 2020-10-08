<div class="flex-container">
    <div>
        <?php
        if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
            echo ' <form action="" method="post">
            <table>
            <tr>
            <td>Tên danh mục:</td>
            <td><input class="w3-input" type="text" name="id" value="' . $_GET['edit'] . '" disabled></td>
              </tr>
                <tr>
                <td>Tên danh mục:</td>
                    <td><input class="w3-input" type="text" name="name" value="' . $getdmone['name'] . '"></td>
                </tr>
                <tr>
                <td>ID Parent:</td>
                    <td><input class="w3-input" type="text" name="parent_id" value="' . $getdmone['parent_id'] . '"></td>
                </tr>
               
                <tr>
                <td>Home:</td>
                    <td><input class="w3-input" type="text" name="sethome" value="' . $getdmone['sethome'] . '"></td>
                </tr>
                <tr>
                    <td>
                        <input class="submit" name="updatedm" type="submit" value="Cập nhật">
                    </td>
                </tr>
            </table>
        </form>';
        } else {
            echo ' <form action="" method="post">
            <table>
                <tr>
                <td>Tên danh mục:</td>
                    <td><input class="w3-input" type="text" name="name"></td>
                </tr>
                <tr>
                <td>ID Parent:</td>
                    <td><input class="w3-input" type="text" name="parent_id"></td>
                </tr>

                <tr>
                <td>Home:</td>
                    <td><input class="w3-input" type="text" name="sethome"></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <center> <input class="submit" name="adddm" type="submit" value="Thêm mới"></center>
                       
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
                <th class="hidden-xs">STT</th>
                <th>Tên danh mục</th>
                <th>ID Parent</th>
                <th>Home</th>
            </tr>
            <?php
            $i = 1;
            foreach ($loadcatalog as $key => $item) {

                $edit = "<a   class='btn btn-default' href='?act=qldm&edit=" . $item['id'] . "'><em class='fa fa-pencil'></em></a>";
                $del = " <a class='btn btn-danger delete'   href='?act=qldm&del=" . $item['id'] . "'><em class='fa fa-trash'></em></a>
                                        ";
                echo '
                                        <tr>
                                        <td >' . $edit . "  " . $del . '</td>
                                        <td  class="hidden-xs">' . $i . '</td>
                                        <td >' . $item['name'] . '</td>
                                        <td >' . $item['parent_id'] . '</td>    
                                        <td >' . $item['sethome'] . '</td>                                      
                                    </tr>';
                $i++;
            }
            ?>
        </table>
    </div>
</div>
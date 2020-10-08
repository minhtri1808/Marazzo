  <div class="flex-container">
      <div>
          <?php
            if (isset($_GET['edit']) && ($_GET['edit']) > 0) {
            ?>
          <form action="" method="post">
              <table>
                  <tr>

                      <td>ID danh mục:</td>
                      <td>
                          <select name="id_catalog" id="id_catalog">
                              <?php
                                    foreach ($loadproduct as $idpro) {
                                        if ($loadproduct['id_catalog'] == $idpro['id']) {
                                            $dk = 'selected';
                                        }
                                        echo '<option value="' . $idpro['id'] . '"' . $dk . ' >' . $idpro['name'] . '</option>';
                                    }
                                    ?>
                          </select>
                      </td>
                  </tr>
                  <tr>

                      <td>ID danh mục:</td>
                      <td>
                          <select name="id_catalog" id="id_catalog">
                              <?php
                                    foreach ($loadcolor as $color) {
                                        if ($loadcolor['id_catalog'] == $color['id']) {
                                            $dk = 'selected';
                                        }
                                        echo '<option value="' . $color['id'] . '"' . $dk . ' >' . $color['name'] . '</option>';
                                    }
                                    ?>
                          </select>
                      </td>
                  </tr>
                  <td>Nhiểu ảnh:</td>
                  <td> <input type="file" name="myImages[]" multiple="multiple"> <br>
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
                      <td>Price:</td>
                      <td><input class="w3-input" type="text" name="price" value="<?php echo $getone['price'] ?>"></td>
                  </tr>
                  <tr>
                      <td>Price old:</td>
                      <td><input class="w3-input" type="text" name="price-old"
                              value="<?php echo $getone['price-old'] ?>">
                      </td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <center> <input class="submit" name="update" type="submit" value="Cập nhật"></center>

                      </td>
                  </tr>
              </table>
          </form>';
          <?php
            } else {
            ?>
          <form action="" method="post">
              <table>
                  <tr>

                      <td>ID danh mục:</td>
                      <td>
                          <select name="id_catalog" id="id_catalog">
                              <?php
                                    foreach ($loadproduct as $idpro) {
                                        echo '<option value="' . $idpro['id'] . '" >' . $idpro['name'] . '</option>';
                                    }
                                    ?>
                          </select>
                      </td>
                  </tr>
                  <tr>

                      <td>ID danh mục:</td>
                      <td>
                          <select name="id_catalog" id="id_catalog">
                              <?php
                                    foreach ($loadcolor as $color) {
                                        echo '<option value="' . $color['id'] . '" >' . $color['name'] . '</option>';
                                    }
                                    ?>
                          </select>
                      </td>
                  </tr>
                  <td>Nhiểu ảnh:</td>
                  <td> <input type="file" name="myImages[]" multiple="multiple"></td>
                  </tr>
                  <tr>
                      <td>Price:</td>
                      <td><input class="w3-input" type="text" name="price"></td>
                  </tr>
                  <tr>
                      <td>Price old:</td>
                      <td><input class="w3-input" type="text" name="price-old"></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <center> <input class="submit" name="adddm" type="submit" value="Thêm mới"></center>

                      </td>
                  </tr>
              </table>
          </form>';
          <?php
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
                  <th>Id Produce</th>
                  <th>Id Color</th>
                  <th>Images</th>
                  <th>Price</th>
                  <th>Price old</th>
              </tr>
              <?php
                $i = 1;
                foreach ($loaddetail as $detail) {
                    if ($detail['image'] != "") {
                        $a = $detail['image'];
                        $images = explode(',', $a);
                        for ($i = 0; $i < 1; $i++) {
                            $img = "<img src='" . $img_product_dienthoai_admin . $images[$i] . "' width='150px'>";
                        }
                    } else {
                        $img = "no img";
                    }
                    $edit = "<a   class='btn btn-default' href='?act=qlprodetail&edit=" . $detail['id'] . "'><em class='fa fa-pencil'></em></a>";
                    $del = " <a class='btn btn-danger delete'   href='?act=qlprodetail&del=" . $detail['id'] . "'><em class='fa fa-trash'></em></a>
                                        ";
                    echo '
                                        <tr>
                                        <td >' . $edit . "  " . $del . '</td>
                                        <td  class="hidden-xs">' . $i . '</td>
                                        <td >' . $detail['id_product'] . '</td>
                                        <td >' . $detail['id_color'] . '</td>    
                                        <td >' . $img . '</td>   
                                          <td >' . $detail['price'] . '</td>    
                                        <td >' . $detail['price-old'] . '</td>                                    
                                    </tr>';
                    $i++;
                }
                ?>
          </table>
      </div>
<?php
  /**
   * [menuMulti description]
   * @param  array  $data      [description]
   * @param  integer $parent_id [description]
   * @param  string  $prefix    [description]
   * @param  integer $select    [description]
   * @return string             [description]
   */
  function menuMulti($data, $parent_id = 0, $prefix = ' -- ', $select = 0){
    foreach ($data as $key => $val) {
      $name = $val['name'];
      $id = $val['id'];
      if ($val['parent_id'] == $parent_id) {
        if ($select != 0 && $id == $select) {
          echo '<option value="'.$id.'" selected>'.$prefix.$name.'</option>';
        }else{
          echo '<option value="'.$id.'">'.$prefix.$name.'</option>';
        }
        menuMulti($data, $id, $prefix." -- ");
      }
    }
  }

  function listCate($data, $parent_id = 0, $prefix = '--'){
    foreach ($data as $value) {
      if ($value['parent_id'] == $parent_id) {
        echo  '<tr class="list_data">';
        if ($parent_id == 0) {
          echo  '<td class="list_td alignleft"><b>'.$prefix.' '.$value['name'].'</b></td>';
        }else{
          echo  '<td class="list_td alignleft">'.$prefix.' '.$value['name'].'</td>';
        }
        echo    '<td class="list_td aligncenter">
                    <a href=""><img src="../../public/t95_admin/templates/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href=""><img src="../../public/t95_admin/templates/images/delete.png" /></a>
                </td>
              </tr>';
        listCate($data, $value['id'], $prefix."--");
      }

    }
  }

 ?>

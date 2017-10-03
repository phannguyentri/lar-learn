<?php
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

 ?>

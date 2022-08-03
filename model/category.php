<?php
/**
 *
 */
class category
{

  function __construct(){}

  function addCategory($data){
    $sql = "insert into category (category_id, category_name)
      values (
        '".$data['category_id']."',
        '".$data['category_name']."'
      )";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function getCategory(){
    $sql = "select * from category order by category_name";
    $result = $GLOBALS['mysqli']->query($sql);

    $arr = array();
    $i=0;
    while ($data = mysqli_fetch_assoc($result)) {
      $arr[$i]=$data;
      $i++;
    }

    return $arr;
  }

  function deleteCategoryById($id){
    $sql = "delete from category where category_id='$id'";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function getCategoryById($id){
    $sql = "select * from category where category_id = '$id'";
    $result = $GLOBALS['mysqli']->query($sql);

    if (mysqli_num_rows($result)==1) {
      $data = mysqli_fetch_assoc($result);
    }else{
      $data = null;
    }

    return $data;
  }

  function updateCategory($post,$id){

    $sql = "update category set
      category_name='".$post['category_name']."'
    where category_id = '$id'";

    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }
}

?>

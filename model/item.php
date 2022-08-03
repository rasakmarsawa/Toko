<?php
/**
 *
 */
class item
{

  function __construct(){}

  function addItem($data){
    $sql = "insert into item (category_id,item_name,item_price1,item_price2)
      values (
        '".$data['category_id']."',
        '".$data['item_name']."',
        '".$data['item_price1']."',
        '".$data['item_price2']."'
      )";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function getItem(){
    $sql = "select
      item.*,
      category.category_name
    from item
    inner join category on
      item.category_id = category.category_id";
    $result = $GLOBALS['mysqli']->query($sql);

    $arr = array();
    $i=0;
    while ($data = mysqli_fetch_assoc($result)) {
      $arr[$i]=$data;
      $i++;
    }

    return $arr;
  }

  function getItemById($category_id,$item_id){
    $sql = "select
      item.*,
      category.category_name
    from item
    inner join category on
      item.category_id = category.category_id
    where
      item.category_id = '$category_id' and
      item.item_id = $item_id";
    $result = $GLOBALS['mysqli']->query($sql);

    if (mysqli_num_rows($result)==1) {
      $data = mysqli_fetch_assoc($result);
    }else{
      $data = null;
    }

    return $data;
  }

  function updateItem($post,$category_id,$id){

    $sql = "update item set
      item_name='".$post['item_name']."',
      item_price1='".$post['item_price1']."',
      item_price2='".$post['item_price2']."'
    where category_id = '$category_id' and item_id = $id";

    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function deleteItemById($category_id,$id){
    $sql = "delete from item where category_id='$category_id' and item_id=$id";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

}

?>

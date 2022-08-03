<?php
/**
 *
 */
class supplier
{

  function __construct(){}

  function addSupplier($data){
    $sql = "insert into supplier (supplier_id, supplier_name)
      values (
        '".$data['supplier_id']."',
        '".$data['supplier_name']."'
      )";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function getSupplier(){
    $sql = "select * from supplier order by supplier_name";
    $result = $GLOBALS['mysqli']->query($sql);

    $arr = array();
    $i=0;
    while ($data = mysqli_fetch_assoc($result)) {
      $arr[$i]=$data;
      $i++;
    }

    return $arr;
  }

  function getSupplierById($id){
    $sql = "select
      *
    from supplier
    where
      supplier_id = '$id'";
    $result = $GLOBALS['mysqli']->query($sql);

    if (mysqli_num_rows($result)==1) {
      $data = mysqli_fetch_assoc($result);
    }else{
      $data = null;
    }

    return $data;
  }

  function updateSupplier($post,$id){

    $sql = "update supplier set
      supplier_name='".$post['supplier_name']."'
    where supplier_id = '$id'";

    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function deleteSupplierById($id){
    $sql = "delete from supplier where supplier_id='$id'";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

}

?>

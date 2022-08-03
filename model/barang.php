<?php
/**
 *
 */
class Barang
{

  function __construct()
  {
    // code...
  }

  function addBarang($data){
    $sql = "insert into barang (nama_barang,jual_st,jual_kt,beli)
      values (
        '".$data['nama_barang']."',
        '".$data['jual_st']."',
        '".$data['jual_kt']."',
        '".$data['beli']."'
      )";
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function getBarang(){
    $sql = "select * from barang order by nama_barang desc";
    $result = $GLOBALS['mysqli']->query($sql);

    $arr = array();
    $i=0;
    while ($data = mysqli_fetch_assoc($result)) {
      $arr[$i]=$data;
      $i++;
    }

    return $arr;
  }

  function getBarangById($id){
    $sql = "select * from barang where barang_id = ".$id;
    $result = $GLOBALS['mysqli']->query($sql);

    if (mysqli_num_rows($result)==1) {
      $data = mysqli_fetch_assoc($result);
    }else{
      $data = null;
    }

    return $data;
  }

  function deleteBarangById($id){
    $sql = "delete from barang where barang_id=".$id;
    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }

  function updateBarang($post,$id){

    $sql = "update barang set
      nama_barang='".$post['nama_barang']."',
      jual_st='".$post['jual_st']."',
      jual_kt='".$post['jual_kt']."',
      beli='".$post['beli']."'
    where barang_id = ".$id;

    $result = $GLOBALS['mysqli']->query($sql);

    return $result;
  }
}

?>

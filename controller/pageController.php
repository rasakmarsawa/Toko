<?php
require 'controller/sessionController.php';
require './model/barang.php';
require './model/category.php';
require './model/item.php';
require './model/supplier.php';

// $session = new session();
$barang = new Barang();
$category = new category();
$item = new item();
$supplier = new supplier();

//get file name
if (empty($_SERVER['QUERY_STRING'])) {
  $filename = basename($_SERVER['REQUEST_URI'],'.php');
}else{
  $filename = basename($_SERVER['REQUEST_URI'], '.php?' . $_SERVER['QUERY_STRING']);
}

switch ($filename) {
  case 'barang':
    $data = $barang->getBarang();

    if (isset($_GET['delete'])) {
      $barang->deleteBarangById($_GET['delete']);
      header('Location:barang.php');
    }
    break;

  case 'barang_new':
    if (isset($_POST['submit'])) {
      $barang->addBarang($_POST);
      header('Location:barang.php');
    }
    break;

  case 'barang_update':
    $data = $barang->getBarangById($_GET['id']);
    if ($data==NULL) {
      header('Location:barang.php');
    }

    if (isset($_POST['submit'])) {
      $barang->updateBarang($_POST,$_GET['id']);
      header('Location:barang.php');
    }
    break;

  case 'category':
    $data = $category->getCategory();
    if (isset($_GET['delete'])) {
      $category->deleteCategoryById($_GET['delete']);
      header('Location:category.php');
    }
    break;

  case 'category_new':
    if (isset($_POST['submit'])) {
      $category->addCategory($_POST);
      header('Location:category.php');
    }
    break;

  case 'category_update':
    $data = $category->getCategoryById($_GET['id']);
    if ($data==NULL) {
      header('Location:category.php');
    }

    if (isset($_POST['submit'])) {
      $category->updateCategory($_POST,$_GET['id']);
      header('Location:category.php');
    }
    break;

  case 'item':
    $data = $item->getItem();
    break;

  case 'item_new':
    $data = $category->getCategory();
    if (isset($_POST['submit'])) {
      $item->addItem($_POST);
      header('Location:item.php');
    }
    break;

  case 'item_detail':
    $data = $item->getItemById($_GET['cat_id'],$_GET['id']);
    if ($data==NULL) {
      header('Location:item.php');
    }

    if (isset($_GET['delete'])) {
      $item->deleteItemById($_GET['cat_id'],$_GET['id']);
      header('Location:item.php');
    }
    break;

  case 'item_update':
    $data = $item->getItemById($_GET['cat_id'],$_GET['id']);
    if ($data==NULL) {
      header('Location:item.php');
    }

    if (isset($_POST['submit'])) {
      $item->updateItem($_POST,$_GET['cat_id'],$_GET['id']);
      header('Location:item_detail.php?cat_id='.$_GET['cat_id'].'&&id='.$_GET['id']);
    }
    break;

  case 'supplier':
    $data = $supplier->getSupplier();
    break;

  case 'supplier_new':
    if (isset($_POST['submit'])) {
      $supplier->addSupplier($_POST);
      header('Location:supplier.php');
    }
    break;

  case 'supplier_detail':
    $data = $supplier->getSupplierById($_GET['id']);
    if ($data==NULL) {
      header('Location:supplier.php');
    }

      if (isset($_GET['delete'])) {
      $supplier->deleteSupplierById($_GET['id']);
      header('Location:supplier.php');
    }
    break;

  case 'supplier_update':
    $data = $supplier->getSupplierById($_GET['id']);
    if ($data==NULL) {
      header('Location:supplier.php');
    }

    if (isset($_POST['submit'])) {
      $supplier->updateSupplier($_POST,$_GET['id']);
      header('Location:supplier_detail.php?id='.$_GET['id']);
    }
    break;

  default:

    break;
}
?>

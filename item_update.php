<?php
session_start();
require 'controller/pageController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "header.php" ?>
</head>

<body>
  <?php require "sidebar.php" ?>
  <main class="content">

    <?php require "topbar.php" ?>

            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Ubah Item <?php echo $_GET['cat_id']."-".$_GET['id'] ?></h2>
                                </div>
                            </div>
                        </div>
                        <form class="m-4" method="post" >
                            <div class="form-group mb-4">
                                <label for="item_name">Nama Item</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="item_name" placeholder="Nama Item" name="item_name" value="<?php echo $data['item_name'] ?>" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="item_price1">Harga 1</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="item_price1" placeholder="Harga 1" name="item_price1" value="<?php echo $data['item_price1'] ?>" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="item_price2">Harga 2</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="item_price2" placeholder="Harga 2" name="item_price2" value="<?php echo $data['item_price2'] ?>" autofocus required>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800" name="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<?php require 'footer.php' ?>
</main>

<?php require 'script.php' ?>


</body>

</html>

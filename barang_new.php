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
                                    <h2 class="fs-5 fw-bold mb-0">New Item</h2>
                                </div>
                            </div>
                        </div>
                        <form class="m-4" method="post" >
                            <div class="form-group mb-4">
                                <label for="nama_barang">Nama Barang</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="jual_st">Jual Satuan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="jual_st" placeholder="Jual Satuan" name="jual_st" value="0" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="jual_kt">Jual Karton</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="jual_kt" placeholder="Jual Kartonan" name="jual_kt" value="0" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="beli">Beli</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="beli" placeholder="Beli" name="beli" value="0" autofocus required>
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

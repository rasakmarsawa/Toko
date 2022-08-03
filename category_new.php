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
                                    <h2 class="fs-5 fw-bold mb-0">Buat Kategori Baru</h2>
                                </div>
                            </div>
                        </div>
                        <form class="m-4" method="post" >
                            <div class="form-group mb-4">
                                <label for="category_id">Id Kategori</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="category_id" placeholder="Id Kategori" name="category_id" autofocus required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="category_name">Nama Kategori</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="category_name" placeholder="Nama Kategori" name="category_name" autofocus required>
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

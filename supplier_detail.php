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
                                    <h2 class="fs-5 fw-bold mb-0">Detail Supplier <?php echo $data['supplier_id'] ?></h2>
                                </div>
                                <div class="col text-end">
                                  <a href="supplier_update.php?id=<?php echo $_GET['id'] ?>" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                      Ubah
                                  </a>
                                  <a href="?id=<?php echo $_GET['id'] ?>&&delete=1" class="btn btn-sm btn-danger d-inline-flex align-items-center">
                                      <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                      Hapus
                                  </a>
                                </div>
                            </div>
                            <ul>
                                        <li>Nama Supplier : <?php echo $data['supplier_name'] ?></li>
                          </ul>
                        </div>
                        <!-- <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="myTable">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Id Item</th>
                                    <th class="border-bottom" scope="col">Kategori</th>
                                    <th class="border-bottom" scope="col">Nama Item</th>
                                    <th class="border-bottom" scope="col">Harga 1</th>
                                    <th class="border-bottom" scope="col">Harga 2</th>
                                    <th class="border-bottom" scope="col">Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($data as $key => $value): ?>
                                    <tr>
                                        <th class="text-gray-900" scope="row">
                                            <?php echo $value['category_id']."-".$value['item_id'] ?>
                                        </th>
                                        <td class="fw-bolder text-gray-500">
                                            <?php echo $value['category_name'] ?>
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            <?php echo $value['item_name'] ?>
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            <?php echo $value['item_price1'] ?>
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            <?php echo $value['item_price2'] ?>
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                          <div class="col text-end d-flex">
                                              <a href="item_detail.php?cat_id=<?php echo $value['category_id'] ?>&&id=<?php echo $value['item_id'] ?>" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                                  <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                                                  Detail
                                              </a>
                                          </div>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                </div>
            </div>
<?php require 'footer.php' ?>
</main>

<?php require 'script.php' ?>


</body>

</html>

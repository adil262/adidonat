<?php
    $title = "Tambah Produk";
    include "includes/header.php"; 

    if(isset($_POST['insert'])){
        $nama = $_POST['nama'];
        $qty = $_POST['qty'];
        $supplier = $_POST['supplier'];

            $query = mysqli_query($link, "INSERT INTO material (nama_material, qty_material, id_sup) 
                    VALUE ('$nama', '$qty', '$supplier')");
            if($query){
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/material.php'";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
        <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="material.php">Material</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>Data Tabel Material
                </div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Material</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Material" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Qty Material</label>
                                        <input type="number" name="qty" class="form-control" placeholder="Stok Material" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Produk Material</label>
                                        <select type="text" name="supplier" class="form-control" required>
                                            <option>-- Pilih Supplier</option>
                                            <?php
                                                $Qsupplier = mysqli_query($link, "SELECT * FROM supplier");
                                                $supplier = mysqli_fetch_assoc($Qsupplier);
                                                
                                                do{
                                            ?>
                                                <option value="<?=$supplier['id_sup'];?>"><?=$supplier['produk_sup'];?></option>
                                            <?php
                                                }while($supplier = mysqli_fetch_assoc($Qsupplier));
                                            ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="insert" value="Tambah" class="btn btn-sm btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>

</body>

</html>
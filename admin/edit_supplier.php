<?php
    $title = "Edit Supplier";
    include "includes/header.php"; 

    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $produk = $_POST['produk'];
        $harga = $_POST['harga'];

        $query = mysqli_query($link, "UPDATE supplier SET nama_sup = '$nama', alamat_sup = '$alamat', telp_sup = '$telp',
                    produk_sup = '$produk', harga_sup = '$harga' WHERE id_sup = '$id'");
        if($query){
            echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/supplier.php'";
        }
    }
    $query = mysqli_query($link, "SELECT * FROM supplier WHERE id_sup = '$id'");
    $data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
        <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i> Edit Tabel Supplier
                        </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Nama Supplier</label>
                                <input type="text" name="nama" value="<?=$data['nama_sup'];?>" class="form-control" placeholder="Nama Kategori" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Supplier</label>
                                <input type="text" name="alamat" value="<?=$data['alamat_sup'];?>" class="form-control" placeholder="Alamat Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Telp Supplier</label>
                                <input type="number" name="telp" value="<?=$data['telp_sup'];?>" class="form-control" placeholder="Telp Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Produk Supplier</label>
                                <input type="text" name="produk" value="<?=$data['produk_sup'];?>" class="form-control" placeholder="Produk Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="number" name="harga" value="<?=$data['harga_sup'];?>" class="form-control" placeholder="Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
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
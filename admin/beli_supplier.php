<?php
    $title = "Tambah Supplier";
    include "includes/header.php"; 

    if(isset($_POST['beli'])){
        if($insert){
            $cust_id = mysqli_query($link, "SELECT id_sup FROM supplier ORDER BY  id_sup DESC");
            $res_cust = mysqli_fetch_assoc($cust_id);
            $customer_id = $res_cust['id_sup'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];
    
            $setPembelian = mysqli_query($link, "INSERT INTO pembelian (tgl_pembelian, qty_penjualan, id_sup) 
                            VALUE ('$qty','$id','$customer_id')");
            
            if($setPembelian){
                $Qbarang = mysqli_query($link, "SELECT * FROM supplier WHERE id_sup = '$id'");
                $data = mysqli_fetch_assoc($Qbarang);
            }
        }
    }
        
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
                        <i class="fas fa-table"></i> Data Tabel Pembelian
                        </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Tanggal Pembelian</label>
                                <input type="text" name="nama" class="form-control" placeholder="Tanggal Pembelian" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Supplier</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Alamat Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Telp Supplier</label>
                                <input type="number" name="telp" class="form-control" placeholder="Telp Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Produk Supplier</label>
                                <input type="text" name="produk" class="form-control" placeholder="Produk Supplier" required>
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="number" name="harga" class="form-control" placeholder="Harga Produk" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="beli" value="Tambah" class="btn btn-sm btn-info">
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
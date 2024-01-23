<?php
    $title = "Edit Produk";
    include "includes/header.php";

    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $kategori = $_POST['kategori'];

        if(!empty($_FILES['gambar']['name'])){
            $gambar = $_FILES['gambar']['name'];
            $file = $_FILES['gambar']['tmp_name'];
            
            $path = "../assets/images/";
            move_uploaded_file($file, $path.$gambar);
            $query = mysqli_query($link, "UPDATE produk SET nama_produk = '$nama', gambar_produk = '$gambar', 
                                harga_produk = '$harga', id_kategori = '$kategori' 
                                WHERE id_produk = '$id'");
            if($query){
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'";
            }
        } 
    }
    $Qbarang = mysqli_query($link, "SELECT * FROM produk WHERE id_produk = '$id'");
    $barang = mysqli_fetch_assoc($Qbarang);
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
                        <i class="fas fa-table"></i> Edit Tabel Produk
                        </div>
                    <div class="card-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="nama" value="<?=$barang['nama_produk'];?>" class="form-control" placeholder="Nama Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar Produk</label>
                                        <input type="file" name="gambar" class="form-control">
                                        <img src="<?=BASE_URL;?>assets/images/<?=$barang['gambar_produk'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input type="number" name="harga" value="<?=$barang['harga_produk'];?>" class="form-control" placeholder="Harga Barang" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori Produk</label>
                                        <select type="text" name="kategori" class="form-control" required>
                                            <option>-- Pilih Kategori</option>
                                            <?php
                                                $Qkategori = mysqli_query($link, "SELECT * FROM kategori");
                                                $kategori = mysqli_fetch_assoc($Qkategori);

                                                do{
                                                    $select = "";
                                                    if($barang['id_kategori'] == $kategori['id_kategori']){
                                                        $select = "selected";
                                                    }
                                            ?>
                                                <option value="<?=$kategori['id_kategori'];?>" <?=$select;?>><?=$kategori['nama_kategori'];?></option>
                                            <?php
                                                }while($kategori = mysqli_fetch_assoc($Qkategori));
                                            ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
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
<?php
    $title = "Pembayaran Produk";
    include "includes/header.php";
?>
<form action="bayar.php" method="POST">
<br>
<br>
<center>
<div class= "card col-md-6">
    <div class="row">
    
        <div class="col-md-6">
            <h2>Isi Format Pembayaran</h2>
            <div class="form-group">
                <div class="form-label-group">
                    <label>Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label>Telephone</label>
                    <input class="form-control" type="text" name="phone" placeholder="Telephone" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-nm btn-success" type="submit" name="bayar" value="Bayar Sekarang">
                <input type="hidden" name="qty" value="<?=$_POST['qty'];?>">
                <input type="hidden" name="id" value="<?=$_POST['id'];?>">
            </div>
        </div>   
    </div>
    </div>
    </center>
</form>


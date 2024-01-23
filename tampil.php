<?php
    $title = "Tampil Produk";
    include "includes/header.php";

    if(isset($_GET['id'])){
        $query = mysqli_query($link, "SELECT kategori.*, produk.* FROM produk 
                            LEFT JOIN kategori ON kategori.id_kategori = produk.id_kategori 
                            WHERE produk.id_produk = '".$_GET['id']."'");
        $data = mysqli_fetch_assoc($query);
    }
?>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v11.0" nonce="X2yKinjW"></script>
    <form action="beli.php" method="POST">

    <br>
    <br>
         <div class="col-md-12">
            <div class="card">
            <br>
                    <div class="col-md-3">
                        <img class="card-img-top" src="<?=BASE_URL;?>assets/images/<?=$data['gambar_produk'];?>" alt="">
                    </div>
                        <div class="card-body">
            <div class="col-md-9">
            <h1><?=$data['nama_produk'];?></h1>
            <h5>Rp. <?=number_format($data['harga_produk']);?></h5>
            <h5>Stok : <?=$data['stok_produk'];?></h5>
            <div class="form-group">
            <label>Qty : </label>
            <input type="number" value="1" name="qty" class="col-lg-2 form-control" required>
            <span>Kategori: <?=$data['nama_kategori'];?></span><br>
            <input type="submit" class="btn btn-success btn-sm" name="beli" value="Beli">
            <input type="hidden" name="id" value="<?=$_GET['id'];?>">
            </div>

            <div class="card">
            <?php
                $uri = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            ?>
            <div class="fb-comments" data-href="http://localhost/AdiDonat/tampil.php?id=<?=$data['id_produk'];?>" data-width="" data-numposts="5"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>    
</form>

<?php
    $title = "Home";
    include "includes/header.php";

    if(isset($_GET['filter'])){
        $query = mysqli_query($link, "SELECT * FROM produk WHERE id_kategori = '".$_GET['filter']."'");
        $data = mysqli_fetch_assoc($query);
    }else{
        $query = mysqli_query($link, "SELECT * FROM produk order by id_produk DESC");
        $data = mysqli_fetch_assoc($query);
    }
?>
<div class="row">

<div class="col-md-13">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" style="width:1200px" src="assets/images/b1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" style="width:1200px" src="assets/images/b2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" style="width:1200px" src="assets/images/b3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="list-group">
        <a href="<?=BASE_URL;?>" class="list-group-item list-group-item-action active" aria-current="true">
            Semua Kategori
        </a>
        <?php
            $Qkategori = mysqli_query($link, "SELECT * FROM kategori order by nama_kategori ASC");
            $kategori = mysqli_fetch_assoc($Qkategori);

            do {
        ?>
        <a href="?filter=<?=$kategori['id_kategori'];?>" class="list-group-item list-group-item-action"><?=$kategori['nama_kategori'];?></a>
        <?php
            }while($kategori = mysqli_fetch_assoc($Qkategori));
        ?>
    </div>            
<div class="col-lg-11">
    <div class="row " style="margin-left: 200px; margin-top: -125px;">
        
        <?php
            if(mysqli_num_rows($query) > 0){    
                do{
        ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card w-20 h-100">
                        <a href="tampil.php?id=<?=$data['id_produk'];?>"><img class="card-img-top p-3" src="<?=BASE_URL;?>assets/images/<?=$data['gambar_produk'];?>" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title text-sm-3" style="font-size : 18px;">
                                <a href="tampil.php?id=<?=$data['id_produk'];?>"><?=$data['nama_produk'];?></a>
                            </h4>
                            <h5>Rp. <?=number_format($data['harga_produk']);?></h5>
                        </div>
                        <div class="card-footer">
                            <a href="tampil.php?id=<?=$data['id_produk'];?>">BELI</a>
                        </div>
                    </div>
                </div>
        <?php
                    }while($data = mysqli_fetch_assoc($query));
            }else{
                echo "Tidak Ada Produk!";
            }
        ?>

    </div>
</div>
</div>


<?php include "includes/footer.php"; ?>

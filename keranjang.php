<?php
    $title = "Tampil Produk";
    include "includes/header.php";

    session_start();

    $query = new mysqli("localhost", "root", "","adidonat");
?>
<body>
    <section class="konten">
        <div class="container">
            <h1>Keranjang Belanja</h1>
            <hr>
            <table clas="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($_SESSION["id"] as $id_produk => $jumlah):
                            $ambil = $query->query("SELECT * FROM prduk WHERE id_produk = '$id_produk'");
                            $pecah =$ambil->fetch_assoc();
                            $subharga = $pecah["harga_produk"]* $jumlah;
                    ?>
                    <tr>
                        <td>x</td>
                        <td><?php echo $pecah["nama_produk"];?></td>
                        <td>Rp. <?php echo number_format($pecah["harga_produk"]);?></td>
                        <td><?php echo $jumlah;?></td>
                        <td>Rp. <?php echo number_format($subharga); ?></td>
                    </tr>
                    <?php 
                        endforeach 
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

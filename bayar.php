<?php
    $title = "Pembayaran Produk";
    include "includes/header.php";

    if(isset($_POST['bayar'])){
        $nama = $_POST['nama'];
        $telp = $_POST['phone'];
        $alamat = $_POST['alamat'];
        
        $insert = mysqli_query($link, "INSERT INTO customer (nama_customer, alamat_customer, telp_customer)
                            VALUE ('$nama','$alamat','$telp')");
        if($insert){
            $cust_id = mysqli_query($link, "SELECT id_customer FROM customer ORDER BY  id_customer DESC");
            $res_cust = mysqli_fetch_assoc($cust_id);
            $customer_id = $res_cust['id_customer'];
            $qty = $_POST['qty'];
            $id = $_POST['id'];
    
            $setPenjualan = mysqli_query($link, "INSERT INTO penjualan (qty_penjualan, id_produk, id_customer) 
                            VALUE ('$qty','$id','$customer_id')");
            $stockOut = mysqli_query($link, "UPDATE produk SET stok_produk = stok_produk - '$qty' WHERE id_produk = '$id'");
            if($setPenjualan){
                $Qbarang = mysqli_query($link, "SELECT * FROM produk WHERE id_produk = '$id'");
                $data = mysqli_fetch_assoc($Qbarang);
                
?>
<center>
    
    <div class="row">
    <br>
    <br>
        <div class="col-md-9">
        <br>
        <br>
            <h2>Pembayaran</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?=$data['nama_produk'];?></td>
                        <td>Rp. <?=number_format($data['harga_produk']);?></td>
                        <td><?=$qty;?></td>
                        <td>Rp. <?=number_format($data['harga_produk'] * $qty);?></td>
                    </tr>
                </tbody>
            </table>
            <h3>Total Pembayaran : <?=number_format($data['harga_produk'] * $qty);?></h3>
        </div> 
    </div>
    </center>
<?php
            }
        }
    }
?>

<?php
    $title = "Daftar Pembelian";
    include "includes/header.php"; 
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
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Nama Supplier</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query1 = mysqli_query($link, "SELECT * FROM material");
                                        $data1 = mysqli_fetch_assoc($query1);
                                        $query2 = mysqli_query($link, "SELECT * FROM supplier");
                                        $data2 = mysqli_fetch_assoc($query2);
                                        if(mysqli_num_rows($query1) > 0){
                                            $no = 1;
                                            $total = 0;
                                            do{
                                                $total += $data1['qty_material'] * $data2['harga_sup']
                                    ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$data1['tgl_material'];?></td>
                                        <td><?=$data2['nama_sup'];?></td>
                                        <td><?=$data2['produk_sup'];?></td>
                                        <td style='text-align:right'>Rp. <?=number_format($data2['harga_sup']);?></td>
                                        <td style='text-align:center'><?=$data1['qty_material'];?></td>
                                        <td style='text-align:right'>Rp. <?=number_format($data1['qty_material'] * $data2['harga_sup']);?></td>
                                    </tr>
                                    <?php
                                        }while($data1 = mysqli_fetch_assoc($query1));

                                        echo "<tr>
                                                <td style='text-align:right' colspan='5'>Total</td>
                                                <td style='text-align:right'>Rp. ".number_format($total).",-</td>
                                            </tr>";
                                    }else{
                                        echo "<tr><td colspan='3'><center> Tidak Ada Data! </center></td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
                    <a class="btn btn-primary" href="../home.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
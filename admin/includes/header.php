<?php 
    include "head.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.php">Admin Adi Donat</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="home.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="barang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customer.php">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Customer</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="supplier.php">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Supplier</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="material.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Material</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pembelian.php">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pembelian</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="penjualan.php">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Penjualan</span></a>
            </li>
        </ul>

        <div id="content-wrapper">
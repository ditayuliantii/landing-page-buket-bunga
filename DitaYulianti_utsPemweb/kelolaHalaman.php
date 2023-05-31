<!-- supaya tidak bisa langsung masuk ke halaman kelolaHalaman.php -->
<?php 
require 'koneksi.php';
require 'produk/functionProduct.php';
$produk1 = query("SELECT * FROM produk");
$produk2 = query("SELECT * FROM produklaris");

session_start();
// jika session masih kosong
if (empty($_SESSION['username']) or empty($_SESSION['password']) ){
        echo "<script> alert ('Mohon Login Terlebih Dahulu..!'); 
        document.location = 'loginAdmin.php';
        </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Halaman Pengunjung</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div class="text-center bg-info py-2">
        <div class="d-flex justify-content">
            <div class="text-left mt-2">
                <a href="home.php" class="btn btn-primary btn-block" style="margin-right: 10px;">
                    <i class="fa fa-home"></i> Home
                </a>
            </div>
            <div class="text-right mt-2">
                <a href="logout.php" class="btn btn-danger btn-block">
                    <i class="fa fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>
        <h1 class="text-white my-auto">SELAMAT DATANG ADMIN!</h1>
    </div>

    <section class="product section-margin" id="product">

        <!-- new-product -->
        <div class="row mt-5">
            <div class="col">
                <h1 class="heading">Produk Baru</h1>
                <a href="produk/tambahProduk1.php">
                    <div class="btn btn-success text-light">
                        Tambah Data
                    </div>
                </a>
            </div>
        </div>
        <div class="row  new-product mt-5">
            <?php foreach($produk1 as $nproduk) : ?>
            <div class="col-lg-3 col-md-6 my-3">
                <div class="card m-auto new-card" style="width: 17rem;">
                    <div class="img-box d-flex justify-content-center align-items-center py-3">
                        <img src="assets/img/<?= $nproduk["gambar"]; ?>" width="150" class="img-fluid " alt="...">
                    </div>
                    <div class="card-body position-relative">
                        <h5 class="card-title"><?= $nproduk["nama"]; ?></h5>
                        <div class="rate d-flex">
                            <p>Rating : <?= $nproduk["rating"]; ?></p>
                        </div>
                        <div class="price-wrapper d-flex justify-content-between">
                            <h3 class="price">$<?= $nproduk["harga"]; ?></h3>
                            <div class="d-flex justify-content-end">
                                <a href="produk/ubahProduk1.php ?id=<?= $nproduk["id_produk"];?>"
                                    class="btn btn-sm btn-warning " style="margin-right: 10px;">
                                    <i class='bx bx-edit'></i> Edit
                                </a>
                                <a href="produk/hapusProduk1.php?id=<?= $nproduk["id_produk"];?>"
                                    class="btn btn-sm btn-danger" onclick="return confirm('yakin?')">
                                    <i class='bx bx-trash'></i> Hapus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <!-- AKHIR new-product -->
        <hr><br><br>
        <hr>
        <!-- produk terlaris -->
        <div class="row mt-5">
            <div class="col">
                <h1 class="heading">Produk Terlaris</h1>
                <a href="produk/tambahProduk2.php">
                    <div class="btn btn-success text-light">
                        Tambah Data
                    </div>
                </a>
            </div>
        </div>
        <div class="row new-product mt-5">
            <?php foreach($produk2 as $tproduk) : ?>
            <div class="col-lg-3 col-md-6 my-3">
                <div class="card m-auto new-card" style="width: 17rem;">
                    <div class="img-box d-flex justify-content-center align-items-center py-3">
                        <img src="assets/img/<?= $tproduk["gambar"]; ?>" width="150" class="img-fluid " alt="...">
                    </div>
                    <div class="card-body position-relative">
                        <h5 class="card-title"><?= $tproduk["nama"]; ?></h5>
                        <div class="price-wrapper d-flex justify-content-between">
                            <p><?= $tproduk["jumlah"]; ?> Produk</p>
                            <div class="d-flex justify-content-end">
                                <a href="produk/ubahProduk2.php ?id=<?= $tproduk["id_produk"];?>"
                                    class="btn btn-sm btn-warning" style="margin-right: 10px;"><i
                                        class='bx bx-edit'></i> Edit</a>
                                <a href="produk/hapusProduk2.php?id=<?= $tproduk["id_produk"];?>"
                                    class="btn btn-sm btn-danger" onclick="return confirm('yakin?')">
                                    <i class='bx bx-trash'></i> Hapus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>



</body>

</html>
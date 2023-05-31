<?php
require 'functionProduct.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$produk2 = query("SELECT * FROM produklaris WHERE id_produk = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["bkirim"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah2($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = '../kelolaHalaman.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = '../kelolaHalaman.php';
			</script>
		";
	}


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah produk terlaris</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- AWAL tambah data-->
    <div class="row mt-5">
        <div class="col-lg-4 mb-5 mx-auto">
            <div class="card shadow" style="width: 90%;">
                <!-- awal CARD-BODY -->
                <div class="card-body text-center">
                    <div class="p-3">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ubah Produk Terlaris</h1>
                        </div>

                        <!-- awal FORM -->
                        <form class="user" method="POST" action="" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?= $produk2["id_produk"]; ?>">
                            <input type="hidden" name="gambarLama" value="<?= $produk2["gambar"]; ?>">

                            <div class="form-group">
                                <input type="text" class="form-control control-user-control mt-2" name="nama"
                                    placeholder="Nama Produk" value="<?= $produk2["nama"]; ?>">
                            </div>

                            <div class=" form-group">
                                <input type="text" class="form-control control-user-control mt-3" name="jumlah"
                                    placeholder="Jumlah Produk" value="<?= $produk2["jumlah"]; ?>">
                            </div>

                            <div class="form-group text-center">
                                <img src="../assets/img/<?= $produk2['gambar']; ?>" width="250px"> <br>
                                <input type="file" class="form-control control-user-control mt-3 my-3" name="gambar"
                                    placeholder="Gambar">
                            </div>

                            <button type="submit" name="bkirim" class="btn btn-success btn-user
                        text-light btn-block mt-5 my-1">
                                Ubah Data
                            </button>

                        </form>
                        <!-- akhir FORM -->

                    </div>
                </div>
                <!-- akhir CARD-BODY -->
            </div>
        </div>


    </div>
    <!-- AKHIR tambah data -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
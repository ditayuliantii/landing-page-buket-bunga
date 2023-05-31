<?php 
require 'functionProduct.php';

// cek tombol submit sdh ditekan atau belum
if(isset($_POST["btambah"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST)>0){
		echo "
			<script>
                alert('data berhasil ditambahkan!');
                document.location.href = '../kelolaHalaman.php';
			</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
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
    <title>tambah produk baru</title>
    <!-- Bootstrap CSS -->
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
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Data Produk Baru</h1>
                        </div>

                        <!-- awal FORM -->
                        <form class="user" method="POST" action="" enctype="multipart/form-data">
                            <!-- required:data tidak boleh kosong -->
                            <div class="form-group">
                                <input type="text" class="form-control control-user-control mt-3" name="nama"
                                    placeholder="Nama Produk" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control control-user-control mt-3" name="rating"
                                    placeholder="Rating" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control control-user-control mt-3" name="harga"
                                    placeholder="Harga($)" required>
                            </div>


                            <div class="form-group">
                                <input type="file" class="form-control control-user-control mt-3" name="gambar"
                                    placeholder="Gambar" required>
                            </div>

                            <button type="submit" name="btambah" class="btn btn-success btn-user
                        text-light btn-block mt-5 my-1">
                                Tambah Data
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

</body>

</html>
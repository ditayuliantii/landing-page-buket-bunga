<?php
   $db = mysqli_connect("localhost", "root", "", "db_utspemweb");

   function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
   }

   function tambah($data){
		global $db;
		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$rating = htmlspecialchars($data["rating"]);
		$harga = htmlspecialchars($data["harga"]);

		// upload gambar
		$gambar = upload();
		if( !$gambar ) {
			return false;
		}

		$query = "INSERT INTO produk VALUES ('', '$nama', '$rating', $harga, '$gambar')";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
   }

   function tambah2($data){
		global $db;
		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
	
		// upload gambar
		$gambar = upload();
		if( !$gambar ) {
			return false;
		}

		$query = "INSERT INTO produklaris VALUES ('', '$nama', $jumlah, '$gambar')";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
   }


   	function upload() {
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		// cek apakah tidak ada gambar yang diupload
		if( $error === 4 ) {
			echo "<script>
					alert('pilih gambar terlebih dahulu!');
				</script>";
			return false;
		}

		// cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('yang anda upload bukan gambar!');
				</script>";
			return false;
		}

		// cek jika ukurannya terlalu besar
		if( $ukuranFile > 1000000 ) {
			echo "<script>
					alert('ukuran gambar terlalu besar!');
				</script>";
			return false;
		}

		// lolos pengecekan, gambar siap diupload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

		return $namaFileBaru;
	}
   

   function ubah($data){
		global $db;
		$id = $data["id"];
	
		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$rating = htmlspecialchars($data["rating"]);
		$harga = htmlspecialchars($data["harga"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}
		
		$query = "UPDATE produk SET
					nama = '$nama',
					rating = '$rating',
					harga = $harga,
					gambar = '$gambar'
				WHERE id_produk = $id ";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);		

	}

   	function ubah2($data){
		global $db;
		$id = $data["id"];
	
		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$jumlah = htmlspecialchars($data["jumlah"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}
		
		$query = "UPDATE produklaris SET
					nama = '$nama',
					jumlah= $jumlah,
					gambar = '$gambar'
				WHERE id_produk = $id ";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);		

	}

    function hapus($id){
        global $db;
        mysqli_query($db, "DELETE FROM produk WHERE id_produk = $id");
        return mysqli_affected_rows($db);
    }

    function hapus2($id){
        global $db;
        mysqli_query($db, "DELETE FROM produklaris WHERE id_produk = $id");
        return mysqli_affected_rows($db);
    }

?>
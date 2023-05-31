<?php 
require 'koneksi.php';

// uji jika tombol bsimpan diklik, maka
if(isset($_POST['bkirim'])){

    // htmlspecialchars agar inputan lebih aman,
    // jika ada yang memasukkan tag html 
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);

    // query simpan data
    $simpan = mysqli_query($koneksi, "INSERT INTO pengunjung VALUES('', '$name', '$email', '$message') ");

    // jika simpan data sukses
    if ($simpan){
        echo "<script> alert('Data Telah Terkirim');
            document.location = 'home.php' </script>";
    }else {
        echo "<script> alert('Data Gagal Terkirim!');
        document.location = 'home.php' </script>";
    }

}

?>
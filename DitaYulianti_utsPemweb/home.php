<?php 
   require 'produk/functionProduct.php';
   $produk1 = query("SELECT * FROM produk");
   $produk2 = query("SELECT * FROM produklaris");   
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Open+Sans:wght@300;400&display=swap"
        rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>garden-grove-ditayulianti</title>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-spy" data-bs-offset="200" class="scrollspy-example" tabindex="0">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3 ">
            <div class="container">
                <a class="navbar-brand" href="#"><span>MY </span>Garden Grove</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-items-lg-center"
                    id="navbarNavAltMarkup">

                    <div class="navbar-nav me-5" id="navbar-spy">
                        <a class="nav-link me-4 active" href="#home">Home</a>
                        <a class="nav-link me-4" href="#service">Services</a>
                        <a class="nav-link me-4" href="#product">Product</a>
                        <a class="nav-link me-4" href="#blog">Blog</a>
                        <a class="nav-link " href="#contact">Contact us</a>
                        <a class="nav-link " href="loginAdmin.php">Login Admin</a>
                    </div>

                    <div class="icons-home mt-4 mt-lg-0">
                        <a href="#"><i class='bx bx-user '></i></a>
                        <a href="#"><i class='bx bx-shopping-bag ms-3'></i></a>
                    </div>
                </div>
            </div>
            <!-- AKHIR container -->

        </nav>
    </header>
    <!-- AKHIR header -->

    <!-- Home -->
    <section class="home" id="home">
        <div class="container bg-image">
            <div class="row">
                <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-lg-end content-left" data-aos="fade-up">
                    <p class="heading">Buat Harimu Menjadi Berwarna</p>
                    <p class="heading">dengan Bunga dari Kami</p>
                    <p class="subheading text-center">Beragam Pilihan Buket Bunga yang Bisa Anda Pilih</p>
                    <div class="btn-home mt-1 text-center">
                        <a href="#" class="btn btn-buy py-2 px-3 px-lg-4 py-lg-3">Buy Now</a>
                        <a href="#" class="btn btn-learn ms-4 py-2 px-3 px-lg-4 py-lg-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service -->
    <section class="service section-margin" id="service">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="heading">Our Services</h1>
                    <p class="subheading">Kami Menyediakan Jasa Merangkai Buket Bunga</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4 service-card"
                        data-aos="flip-left">
                        <div class="detail">
                            <p class="label">Bunga Segar</p>
                            <h3 class="heading">Menggunakan bunga asli dan juga fresh</h3>
                            <a href="#" class="btn-service btn mt-4">
                                <i class='bx bx-shopping-bag'></i> Shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4 service-card"
                        data-aos="flip-left" data-aos-delay="300">
                        <div class="detail">
                            <p class="label">Wangi</p>
                            <h3 class="heading">Wangi bunga yang tahan hingga 48 Jam</h3>
                            <a href="#" class="btn-service btn mt-4"><i class='bx bx-shopping-bag'></i> Shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4 service-card"
                        data-aos="flip-left" data-aos-delay="600">
                        <div class="detail">
                            <p class="label">Pelayanan</p>
                            <h3 class="heading">Melayani Dengan dengan Sepenuh Hati </h3>
                            <a href="#" class="btn-service btn mt-4"><i class='bx bx-shopping-bag'></i> Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Product -->
    <section class="product section-margin" id="product">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="heading">Our Product</h1>
                    <p class="subheading">Tersedia pilihan bunga yang beragam..!</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col populer d-lg-flex justify-content-lg-between">
                    <h3 class="heading">Kategori Terlaris</h3>
                    <div class="toggle-slider d-lg-block d-flex justify-content-end">
                        <i class='bx bxs-chevron-left-circle'></i>
                        <i class='bx bxs-chevron-right-circle'></i>
                    </div>
                </div>
            </div>

            <div class="row mt-4 product-populer">
                <div class="col">
                    <!-- Swiper -->
                    <div class="swiper mySwiperPopuler">
                        <!-- product terlaris -->
                        <div class="swiper-wrapper">
                            <?php foreach($produk2 as $tproduk) : ?>
                            <div class="swiper-slide card-product">
                                <div
                                    class="img-box rounded-3 d-flex justify-content-center align-items-center py-4 px-2">
                                    <img src="assets/img/<?= $tproduk["gambar"]; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="detail-product mt-3 d-flex justify-content-between">
                                    <div class="info">
                                        <p class="label text-center py-2"><?= $tproduk["nama"]; ?></p>
                                        <p><?= $tproduk["jumlah"]; ?> Product</p>
                                    </div>
                                    <div class="btn-card">
                                        <a href="#" class="btn"><i class='bx bx-shopping-bag'></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- AKHIR product terlaris -->
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h1 class="heading">Produk Baru</h1>
                </div>
            </div>

            <!-- new-product -->
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
                                <div class="star">
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                    <i class='bx bxs-star text-warning'></i>
                                </div>                            
                                <p><?= $nproduk["rating"]; ?></p>
                            </div>
                            <div class="price-wrapper d-flex justify-content-between">                
                                <h3 class="price">$<?= $nproduk["harga"]; ?></h3>
                                <div class="d-flex justify-content-end">                        
                                </div>
                                <a href="#"
                                    class="btn position-absolute bottom-0 end-0 d-flex justify-content-center align-items-center p-3"><i
                                        class='bx bx-shopping-bag'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div class="col text-center">
                    <div class="card new-card">
                        <p>----------Tidak Ada Produk----------</p>
                    </div>
                </div>

            </div>
            <!-- AKHIR new-product -->

            <div class="btn-load text-center mt-4">
                <a href="" class="btn load-more">Load More</a>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog mt-5 section-margin" id="blog">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="heading">Latest Blog</h1>
                    <p class="subheading">Kami menyediakan berbagai informasi menarik tentang bunga</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <!-- Swiper -->
                    <div class="swiper mySwiperBlog py-5">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Rekomendasi Buket Bunga Terbaik Wisuda 2023</h5>
                                    <p class="date">10 Maret 2023</p>
                                    <p class="card-text">Buket bunga jumbo jadikan wisuda makin lucu dan seru!.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Rekomendasi Buket Bunga Flanel Terbaik</h5>
                                    <p class="date">08 Februari 2023</p>
                                    <p class="card-text">Apa kelebihan bunga flanel dibandingkan dengan bunga lainnya?.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Rekomendasi Bunga Kering Terbaik 2023</h5>
                                    <p class="date">08 Februari 2023</p>
                                    <p class="card-text">Bunga keabadian yang tidak akan layu, penuh makna untuk dikenang!.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Jenis Bunga Terbaik Untuk Membuat Hand Bouquet</h5>
                                    <p class="date">12 Maret 2021</p>
                                    <p class="card-text">Ada beberapa jenis bunga terbaik yang dapat digunakan dalam membuat bunga tangan. Apa saja?.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Daftar Harga Bunga Wisuda 2023</h5>
                                    <p class="date">01 Maret 2023</p>
                                    <p class="card-text">Buket bunga wisuda murah, sudah dengan boneka toga lengkap!.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Ide Buket Bunga Pernikahan</h5>
                                    <p class="date">04 Nov 2021</p>
                                    <p class="card-text">Sampaikan optimisme dan pesan turut berbahagia!.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                            <div class="swiper-slide card" style="width: 18rem;">
                                <img src="assets/img/bg-home.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">10 Model Buket Bunga Romantis</h5>
                                    <p class="date">30 Nov 20221</p>
                                    <p class="card-text">Hadiahkan buket mawar yang tak hanya cantik dipajang, tetapi bisa dijadikan sabun!.</p>
                                    <a href="#" class="btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact mt-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="heading">Contact Us</h1>
                    <p class="subheading">Kami melayani Anda sepanjang waktu.!</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 text-center">
                    <img src="assets/img/msg1.jpg" class="img-fluid rounded-3" width="100%" height="20%" alt="">
                </div>
                <div class="col-lg-6 mt-4">

                    <form action='rekapPengunjung.php' method='post' id="contactForm">

                        <!-- Name input -->
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Name" />
                        </div>

                        <!-- Email address input -->
                        <div class="mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control" id="emailAddress" type="email" name="email"
                                placeholder="Email Address" />
                        </div>

                        <!-- Message input -->
                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" type="text" name="message" placeholder="Message"
                                style="height: 10rem;"></textarea>
                        </div>

                        <!-- Form submit button -->
                        <div class="d-grid">
                            <button class="btn btn-lg" type="submit" name="bkirim">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col1">
                    <h3 class="footer-brand"><span>MY </span>Garden Grove</h3>
                    <a href="#" class="mt-3 d-inline-block">help@ditayulianti.com</a>
                    <a href="#" class="d-block">+6285764324567</a>
                    <div class="icon-footer mt-3">
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt mx-2'></i></a>
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col2 mt-4 mt-md-0">
                    <h3>Services</h3>
                    <ul class="ps-0">
                        <li><a href="#">House Plant</a></li>
                        <li><a href="#">Garden Plant</a></li>
                        <li><a href="#">Vase</a></li>
                        <li><a href="#">Fertilizer</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col3 mt-4 mt-md-0">
                    <h3>Information</h3>
                    <ul class="ps-0">
                        <li><a href="#">Office Hours</a></li>
                        <li><a href="#">Requirements</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col4 mt-4 mt-lg-0">
                    <h3>Helpfull Link</h3>
                    <ul class="ps-0">
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col5 mt-4 mt-lg-0">
                    <h3>Address</h3>
                    <p class="text-white">Jl.Mawar Fluppy no.78</p>

                    <a href="#">Google Maps</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p class="text-white">&copy;Copyright 2023 All Right Reserve | Built by <a href="#">Dita
                            Yulianti</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- AOS  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/script.js"></script>
</body>

</html>
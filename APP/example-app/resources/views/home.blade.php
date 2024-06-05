<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HiDOC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/hidoc.png" alt="" width="100px" height="100px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Sick</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Solusi Sehat HiDOC</h1>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="https://gemini.google.com/app/42dd03eb73a258bf" class="btn btn-brand me-2">KONSULTASI</a>
                        <a href="#team" class="btn btn-light ms-2">SICK</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- ABOUT -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Tentang Kami</h1>
                    <div class="line"></div>
                    <p>HiDOC adalah solusi digital terdepan di bidang kesehatan, memberikan kemudahan akses layanan kesehatan kapan saja dan di mana saja.</p>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/1 (1).jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/1 (2).jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/1 (1).jpeg" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>


  
   <!-- TEAM -->
<section id="team" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">TOP 3 PENYAKIT UMUM</h1>
                    <div class="line"></div>
                    <p>Pelajari berbagai penyebab umum sakit dan cara-cara efektif untuk mengatasinya.</p>           
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Article cards here -->
            <?php
                    foreach ($data as $nilai) { 
                        
                        ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo($nilai->image) ?>" class="card-img-top" alt="Common Cold">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo($nilai->title) ?></h5>
                        <p class="card-text"><?php echo($nilai->description) ?></p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php
                    }
                    ?>


   <!-- BLOG -->
<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Makanan yang Sehat</h1>
                    <div class="line"></div>
                    <p>Temukan berbagai jenis makanan yang dapat membantu menjaga kesehatan Anda.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Blog cards here -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/bayam.jpg" class="card-img-top" alt="Healthy Food 1">
                    <div class="card-body">
                        <h5 class="card-title">Manfaat Bayam untuk Kesehatan</h5>
                        <p class="card-text">Bayam adalah sayuran yang kaya akan nutrisi dan memiliki banyak manfaat bagi kesehatan tubuh.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/images/serat.jpg" class="card-img-top" alt="Healthy Food 2">
                    <div class="card-body">
                        <h5 class="card-title">Pentingnya Asupan Serat dalam Makanan</h5>
                        <p class="card-text">Serat sangat penting untuk menjaga kesehatan pencernaan dan mencegah berbagai penyakit.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/smotie.jpeg" class="card-img-top" alt="Healthy Food 3">
                    <div class="card-body">
                        <h5 class="card-title">Tips Membuat Smoothie Sehat</h5>
                        <p class="card-text">Smoothie merupakan minuman yang segar dan sehat jika dibuat dengan bahan-bahan yang tepat.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- REVIEW -->
  <section id="reviews" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Testimoni</h1>
                    <div class="line"></div>
                    <p>Kami senang menciptakan pengalaman digital untuk merek daripada lorem ipsum dan keterampilan gila lainnya</p>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                        Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                        Saya merasa lebih aman dan terlayani dengan baik.
                        Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/FANDHI.jpg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>FANDHI</h5>
                            <small>DOKTER ANAK</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                            Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                            Saya merasa lebih aman dan terlayani dengan baik.
                            Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/PRABOWO.jpg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>PRABOWO</h5>
                            <small>PRESIDEN</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                            Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                            Saya merasa lebih aman dan terlayani dengan baik.
                            Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/DAFAS.jpg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>DAFA</h5>
                            <small>KAPAL LAUT</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                            Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                            Saya merasa lebih aman dan terlayani dengan baik.
                            Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/JOKOWI.jpg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>JOKOWI</h5>
                            <small>EX PRESIDEN</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                            Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                            Saya merasa lebih aman dan terlayani dengan baik.
                            Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/GIBRAN.jpeg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>GIBRAN</h5>
                            <small>WAKIL PRESIDEN</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                <div class="review">
                    <div class="review-head p-4 bg-white theme-shadow">
                        <div class="text-warning">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                        <p>Layanan HiDOC sungguh luar biasa! Sangat membantu saya dalam mengatasi masalah kesehatan saya. 
                            Terima kasih atas profesionalisme dan keramahan tim HiDOC.
                            Saya merasa lebih aman dan terlayani dengan baik.
                            Sangat direkomendasikan untuk semua orang!.</p>
                    </div>
                    <div class="review-person mt-4 d-flex align-items-center">
                        <img class="rounded-circle" src="./assets/images/DEDDY.jpeg" alt="Foto Profil Dianne Russell" width="75" height="75">
                        <div class="ms-3">
                            <h5>DEDDY</h5>
                            <small>ARTIS</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



 <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="./assets/images/hidoc.png" alt=""></a>
                        <div class="line"></div>
                        <p>Solusi Terdepan di Dunia Kesehatan Digital</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                            <a href="#"><i class="ri-dribbble-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">SERVICES</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Konsultasi</a></li>
                            <li><a href="#">Obat</a></li>
                            <li><a href="#">Branding</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">ABOUT</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Rating</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Republik Pangkur</li>
                            <li>0812-1752-9861</li>
                            <li>ardha.rf.gd</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">©Copyright Kelompok 7</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">KELOMPOK 7 </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>

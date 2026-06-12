<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Techno Digital Persada - Solusi Digital & IT Terbaik</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Jasa Pembuatan Website, Aplikasi Android, Social Media Marketing, CV TDP, Techno Digital Persada" name="keywords">
    <meta content="CV. Techno Digital Persada menyediakan layanan profesional untuk pembuatan website, aplikasi, desain UI/UX, dan social media marketing." name="description">

    <link href="{{ asset('startup2-1.0.0/img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('startup2-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('startup2-1.0.0/lib/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('startup2-1.0.0/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('startup2-1.0.0/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Batu Bara, Sumatera Utara, Indonesia</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 82161965317</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>admin@technodigitalpersada.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-laptop-code me-2"></i>CV. TDP</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Beranda</a>
                    <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
                    <a href="service.html" class="nav-item nav-link">Layanan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Daftar Artikel</a>
                            <a href="detail.html" class="dropdown-item">Detail Artikel</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Paket Harga</a>
                            <a href="feature.html" class="dropdown-item">Keunggulan Kami</a>
                            <a href="team.html" class="dropdown-item">Tim Kami</a>
                            <a href="testimonial.html" class="dropdown-item">Testimoni</a>
                            <a href="quote.html" class="dropdown-item">Konsultasi Gratis</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Kontak</a>
                </div>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('startup2-1.0.0/img/carousel-1.jpg') }}" alt="Gambar">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Digitalisasi Tanpa Batas</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Solusi Digital Kreatif & Inovatif untuk Bisnis Anda</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Konsultasi Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('startup2-1.0.0/img/carousel-2.jpg') }}" alt="Gambar">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tingkatkan Performa Online Anda</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Website, Aplikasi & Strategi Marketing Terbaik</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Konsultasi Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </div>
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Ketik kata kunci pencarian...">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Klien Puas</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">150</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Proyek Selesai</h5>
                            <h1 class="mb-0" data-toggle="counter-up">320</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Mitra Kerja Sama</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">25</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                        <h1 class="mb-0">Mitra Teknologi & Digital Marketing Terbaik untuk Bisnis Anda</h1>
                    </div>
                    <p class="mb-4"><strong>Techno Digital Persada (CV. TDP)</strong> adalah penyedia jasa teknologi informasi dan agensi digital terdepan. Kami mengkhususkan diri dalam pembuatan website responsif, perancangan sistem informasi, pengembangan aplikasi Android yang tangguh, serta kampanye Social Media Marketing yang berorientasi pada hasil (ROI). Dedikasi kami adalah memberikan transformasi digital yang nyata untuk memajukan merek dan penjualan Anda.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Bergaransi & Berkualitas</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Staf Profesional</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Dukungan Penuh 24/7</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Harga Transparan</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Hubungi kami untuk konsultasi</h5>
                            <h4 class="text-primary mb-0">+62 821 6196 5317</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Minta Penawaran</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('startup2-1.0.0/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Mengapa Memilih Kami</h5>
                <h1 class="mb-0">Kami Hadir Untuk Mendongkrak Pertumbuhan Bisnis Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Teknologi Terkini</h4>
                            <p class="mb-0">Kami selalu menggunakan tumpukan teknologi modern seperti PHP terbaru, Kotlin, dan metodologi desain UI yang efisien.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Desain Elegan & Bersih</h4>
                            <p class="mb-0">Kami percaya bahwa desain profesional dan minimalis akan meningkatkan kepercayaan audiens terhadap *brand* Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('startup2-1.0.0/img/feature.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Tim Ahli & Berpengalaman</h4>
                            <p class="mb-0">Ditangani langsung oleh *developer*, pendidik IT, dan desainer handal yang siap mendedikasikan keterampilannya untuk proyek Anda.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-headset text-white"></i>
                            </div>
                            <h4>Dukungan Teknis Penuh</h4>
                            <p class="mb-0">Sistem Anda bermasalah? Jangan khawatir, tim layanan kami siap memberikan *maintenance* dan bantuan secara cepat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Layanan Kami</h5>
                <h1 class="mb-0">Solusi Layanan Digital Kustom untuk Kesuksesan Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Pembuatan Website</h4>
                        <p class="m-0">Membangun website profesional, e-commerce, portal edukasi, dan sistem manajemen manajemen kustom sesuai kebutuhan Anda.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Aplikasi Mobile</h4>
                        <p class="m-0">Pengembangan aplikasi Android native maupun platform silang yang ringan, dinamis, dan terintegrasi *database*.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-share-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Social Media Marketing</h4>
                        <p class="m-0">Meningkatkan interaksi, jangkauan pasar, dan popularitas merek Anda melalui kampanye sosial media yang terstruktur.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-palette text-white"></i>
                        </div>
                        <h4 class="mb-3">Desain Grafis & UI/UX</h4>
                        <p class="m-0">Menyediakan jasa desain pembuatan logo profesional, *layout* antarmuka, aset video, dan alat pembelajaran visual.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">Optimasi SEO</h4>
                        <p class="m-0">Tingkatkan visibilitas bisnis Anda di halaman pertama mesin pencari (Google) untuk menarik lebih banyak lalu lintas organik.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Tanya Harga Layanan</h3>
                        <p class="text-white mb-3">Ingin membangun sistem impian tapi bingung mulai dari mana? Mari berdiskusi dengan tim ahli kami.</p>
                        <h2 class="text-white mb-0">+62 821 6196 5317</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Paket Harga</h5>
                <h1 class="mb-0">Harga Kompetitif untuk Memenuhi Kebutuhan Anda</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Paket Basic</h4>
                            <small class="text-uppercase">Sangat Cocok Untuk UMKM</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>1,5<small class="align-bottom" style="font-size: 16px; line-height: 40px;"> Juta</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Website Landing Page</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Desain Responsif</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Bantuan Setup Domain</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Sistem Database CMS</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Paket Standar</h4>
                            <small class="text-uppercase">Untuk Bisnis Skala Menengah</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>3,5<small class="align-bottom" style="font-size: 16px; line-height: 40px;"> Juta</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Pembuatan Website Dinamis</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Sistem Database CMS</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Desain Responsif Kustom</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Aplikasi Mobile Terintegrasi</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Paket Advanced</h4>
                            <small class="text-uppercase">Sistem Korporasi Skala Besar</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>8,5<small class="align-bottom" style="font-size: 16px; line-height: 40px;"> Juta</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Aplikasi Multiplatform Lengkap</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Manajemen Server Lanjutan</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Integrasi API Keamanan</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Dukungan Teknis Prioritas</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Minta Penawaran</h5>
                        <h1 class="mb-0">Butuh Konsultasi Proyek? Jangan Ragu Hubungi Kami</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Kami membalas dalam 24 Jam</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Dukungan Layanan via Telepon</h5>
                        </div>
                    </div>
                    <p class="mb-4">Silakan isi formulir di samping untuk menyampaikan detail kebutuhan bisnis, masalah sistem, maupun rencana proyek digital yang ingin Anda kerjakan. Baik untuk sistem pendidikan, perusahaan, maupun manajemen e-commerce, tim representatif CV. TDP akan mempelajari kebutuhan Anda dan memberikan estimasi solusi serta harga yang paling sesuai.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Telepon untuk info cepat</h5>
                            <h4 class="text-primary mb-0">+62 821 6196 5317</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Nama Lengkap Anda" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Alamat Email Anda" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Pilih Layanan</option>
                                        <option value="1">Pembuatan Website</option>
                                        <option value="2">Pembuatan Aplikasi Android</option>
                                        <option value="3">Social Media Marketing</option>
                                        <option value="4">Desain Grafis UI/UX</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Pesan / Deskripsikan Proyek Anda"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Kirim Permintaan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimoni</h5>
                <h1 class="mb-0">Apa Kata Klien Tentang Layanan Kami</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('startup2-1.0.0/img/testimonial-1.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nama Klien</h4>
                            <small class="text-uppercase">Pemilik UMKM</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Aplikasi yang dibangun sangat membantu manajemen penjualan toko saya. Prosesnya cepat, fiturnya lengkap, dan layanannya sangat ramah.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('startup2-1.0.0/img/testimonial-2.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nama Klien</h4>
                            <small class="text-uppercase">Manajer IT Sekolah</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Sistem akademik e-learning buatan CV. TDP sangat minim *bug* dan desainnya sangat mudah dipahami oleh siswa. Recomended banget!
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('startup2-1.0.0/img/testimonial-3.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nama Klien</h4>
                            <small class="text-uppercase">Pengusaha Retail</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Tim pemasaran media sosial mereka berhasil menaikkan trafik dan omset secara eksponensial dalam bulan pertama. Sangat profesional!
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('startup2-1.0.0/img/testimonial-4.jpg') }}" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Nama Klien</h4>
                            <small class="text-uppercase">Founder Agensi</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Saya memesan desain UI/UX untuk logo perusahaan baru. Desain yang diberikan sangat bersih, modern, dan tidak norak. Luar biasa.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Tim Kami</h5>
                <h1 class="mb-0">Insinyur & Ahli Profesional Di Balik Kesuksesan Proyek Anda</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('startup2-1.0.0/img/team-1.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Nama Anggota</h4>
                            <p class="text-uppercase m-0">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('startup2-1.0.0/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Nama Anggota</h4>
                            <p class="text-uppercase m-0">Lead Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('startup2-1.0.0/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Nama Anggota</h4>
                            <p class="text-uppercase m-0">Social Media Strategist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Blog Terbaru</h5>
                <h1 class="mb-0">Baca Artikel Terkini Seputar Teknologi & Digital Marketing</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('startup2-1.0.0/img/blog-1.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin TDP</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2026</small>
                            </div>
                            <h4 class="mb-3">Pentingnya Desain Responsif</h4>
                            <p>Pelajari mengapa website bisnis Anda harus bisa beradaptasi sempurna di layar HP pengunjung...</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('startup2-1.0.0/img/blog-2.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Aplikasi Android</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin TDP</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>05 Feb, 2026</small>
                            </div>
                            <h4 class="mb-3">Tren Aplikasi Mobile 2026</h4>
                            <p>Apakah membuat aplikasi toko sendiri lebih menguntungkan dibanding bergabung ke marketplace?...</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('startup2-1.0.0/img/blog-3.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Sosial Media</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>Admin TDP</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>15 Mar, 2026</small>
                            </div>
                            <h4 class="mb-3">Strategi Social Media Efektif</h4>
                            <p>Tingkatkan brand awareness bisnis Anda dengan perencanaan konten kalender yang terstruktur dan matang...</p>
                            <a class="text-uppercase" href="">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-1.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-2.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-3.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-4.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-5.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-6.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-7.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-8.jpg') }}" alt="">
                    <img src="{{ asset('startup2-1.0.0/img/vendor-9.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-laptop-code me-2"></i>CV. TDP</h1>
                        </a>
                        <p class="mt-3 mb-4">Techno Digital Persada adalah perusahaan penyedia jasa IT & Agensi Digital berpengalaman yang fokus melayani pengerjaan website, mobile apps, desain UI, dan marketing strategis untuk menumbuhkan aset digital Anda.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Alamat Email Anda">
                                <button class="btn btn-dark">Berlangganan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Hubungi Kami</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Batu Bara, Sumatera Utara, Indonesia</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">admin@technodigitalpersada.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+62 821 6196 5317</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Tautan Cepat</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Beranda</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tentang Kami</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Layanan Kami</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tim Profesional</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Blog Terbaru</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Kontak Kami</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Layanan Populer</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pembuatan Website</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Aplikasi Android</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Social Media Marketing</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Optimasi SEO</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Desain Logo UI/UX</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Konsultasi Layanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; CV. Techno Digital Persada.
                        
                        Developed with <span class="heart">❤️</span> by <a href="#" class="dev-link">Mister Goyo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('startup2-1.0.0/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('startup2-1.0.0/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('startup2-1.0.0/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('startup2-1.0.0/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('startup2-1.0.0/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('startup2-1.0.0/js/main.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $identity->first()->title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="{{ route('ppdb.index') }}"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="{{ route('login') }}"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
                        <div class="dropdown-menu rounded">
                            <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>{{ $identity->first()->title }}</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    @foreach ($menu as $key)
                    <a href="{{ $key->url }}" class="nav-item nav-link">{{ $key->name }}</a>
                    @endforeach
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">LOGIN !</a>
            </div>
        </nav>

        <!-- Carousel Start -->
        <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($post as $key => $item)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <img src="../assets/{{ $item->image }}" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h1 class="display-2 text-capitalize text-white mb-4">{{ $item->title }}</h1>
                                <p class="mb-5 fs-5">{{ Str::words($item->content, 20, '') }}</p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn-hover-bg btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('ppdb.index') }}">Daftar Sekarang !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

    </div>

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="../assets/images/smk5.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                @foreach ($homepage as $key)
                <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">{{ $key->first()->section1 }}</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">SMKN 1 PACITAN</span></h1>
                    <p class="mb-4" style="text-align: justify;">{{ $key->first()->desc1 }}</p>

                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="#">Read More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            @foreach ($homepage as $key)
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">{{ $key->first()->section2 }}</h5>
                <h1 class="mb-0">{{ $key->first()->desc2 }}</h1>
            </div>
            @endforeach
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        @foreach ($jurusan->chunk($jurusan->count() / 2)[0] as $key)
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">{{ $key->name }}</h5>
                                    <p class="mb-0" style="text-align: justify;">{{ Str::words($key->desc, 25, '') }}</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="{{ $key->icon }} fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        @foreach ($jurusan->chunk($jurusan->count() / 2)[1] as $key)
                        <div class="col-12">
                            <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">{{ $key->name }}</h5>
                                    <p class="mb-0" style="text-align: justify;">{{ Str::words($key->desc, 25, '') }}</p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="{{ $key->icon }} fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Jurusan Lain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Explore Tour Start -->
    <div class="container-fluid ExploreTour py-5">
        <div class="container py-5">
            @foreach ($homepage as $key)
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">{{ $key->section3 }}</h5>
                    <h1 class="mb-4">Extra Kulikuler Paling Banyak Diminati</h1>
                    <p class="mb-0">{{ Str::words($key->desc3, 34, '') }}</p>
                </div>
            @endforeach
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#NationalTab-1">
                            <span class="text-dark" style="width: 250px;">Drumband Gema Goa Gong</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#InternationalTab-2">
                            <span class="text-dark" style="width: 250px;">Jurnalistik</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            @foreach ($post->take(6) as $key)
                                <div class="col-md-6 col-lg-4">
                                    <div class="national-item">
                                        <img src="../assets/{{ $key->image }}" class="img-fluid w-100 rounded" alt="Image" style="object-fit: cover; height: 250px;">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{ $key->title }}</h5>
                                                <a href="#" class="btn-hover text-white">Lihat Kegiatan <i class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="national-plus-icon">
                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="InternationalTab-2" class="tab-pane fade show p-0">
                        <div class="InternationalTour-carousel owl-carousel">
                            @foreach ($post->take(6) as $key)
                                <div class="international-item">
                                    <img src="../assets/{{ $key->image }}" class="img-fluid w-100 rounded" alt="Image" style="object-fit: cover; height: 250px;">
                                    <div class="international-content">
                                        <div class="international-info">
                                            <h5 class="text-white text-uppercase mb-2">{{ $key->title }}</h5>
                                            <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i> <span>Lihat Selengkapnya</span></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Tour Start -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            @foreach ($homepage as $key)
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">{{ $key->first()->section4 }}</h5>
                <h1 class="mb-0">{{ $key->first()->desc4 }}</h1>
            </div>
            @endforeach
            <div class="row g-4">
                @foreach ($teacher as $key)
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="../assets/{{ $key->photo }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">{{ $key->name }}</h4>
                                <p class="mb-0">Teknik Komputer dan Jaringan</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                        @foreach ($identity as $key)
                            <h4 class="mb-4 text-white"> {{ $key->first()->title }}</h4>
                            <a href=""><i class="fas fa-home me-2"></i> {{ $key->first()->alamat }}</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> {{ $key->first()->email }}</a>
                            <a href=""><i class="fas fa-phone me-2"></i> {{ $key->first()->telp }}</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> {{ $key->first()->fax }}</a>
                        @endforeach
                        {{-- @foreach ($social as $key)
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $key->first()->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $key->first()->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $key->first()->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="{{ $key->first()->youtube }}"><i class="fab fa-youtube"></i></a>
                            </div>
                        @endforeach --}}
                        </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Menu</h4>
                        @foreach ($menu as $key)
                            <a href="#"><i class="fas fa-angle-right me-2"></i> {{ $key->name }}</a>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Support</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>

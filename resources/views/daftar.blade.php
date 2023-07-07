<!-- 25 May 2023 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MyBeasiswa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Smart'S</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active">Beasiswa</a>
                <div class="dropdown-menu m-0">
                        <a href="/beasiswa" class="dropdown-item">Informasi</a>
                        <a href="/daftar" class="dropdown-item">Daftar</a>
                        <a href="/test/hasil" class="dropdown-item">Lihat Rank</a>
                    </div>
                </div>
                <a href="/berita" class="nav-item nav-link">Berita</a>
                <a href="/tips" class="nav-item nav-link">Rekomendasi</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="/welcome" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Chat AI<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Beasiswa</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Beasiswa</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Smart'S</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" >
                <h6 class="section-title bg-white text-center text-primary px-3">Beasiswa Smart'S</h6>
                <h1 class="mb-5">Sistem Pendukung Keputusan</h1>
            </div>

            
            <div class="col-lg-15 col-md-15 wow fadeInUp" >
                    <form method="POST" action="{{ url('/spk/store') }}">
                    @csrf

                        <div class="row g-3">

                            <div class="col-md-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                                    <label for="nama">Nama</label>
                                </div>
                            </div>

                            <div class="col-md-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="NISN">
                                    <label for="nisn">NISN</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir">
                                    <label for="tempatlahir">Tempat Lahir</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="tanggallahir" id="tanggallahir" placeholder="Tanggal Lahir">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                </div>
                            </div>

                            <div class="col-12">
                            <div class="form-floating">
                                <select class="form-control" name="jk" id="jk">
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <label for="jk">Jenis Kelamin</label>
                            </div>
                        </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="hp" id="hp" placeholder="No Hp">
                                    <label for="hp">No Hp</label>
                                </div>
                            </div>


                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nr" id="nr" placeholder="Nilai Rata-Rata Raport">
                                    <label for="nr">Nilai Rata-Rata Raport</label>
                                </div>
                            </div>

                            <div class="col-12">
                            <div class="form-floating">
                                <select class="form-control" name="po" id="po">
                                    <option value="1">< Rp. 1.000.000</option>
                                    <option value="2">Rp. 1.000.000 - Rp. 3.000.000</option>
                                    <option value="3">Rp. 3.000.000 - Rp. 5.000.000</option>
                                    <option value="4">> Rp. 5.000.000</option>
                                </select>
                                <label for="po">Penghasilan Orangtua</label>
                            </div>
                        </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="no" id="no" placeholder="Nilai Keaktifan Organisasi">
                                    <label for="no">Nilai Keaktifan Organisasi</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="js" id="js" placeholder="Jumlah Sertifikat atau Piagam">
                                    <label for="js">Jumlah Sertifikat atau Piagam</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="to" id="to" placeholder="Jumlah Tanggungan Orang Tua">
                                    <label for="to">Jumlah Tanggungan Orang Tua</label>
                                </div>
                            </div>

                            <div class="col-15">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                    <label for="alamat">Alamat</label>
                                </div>
                            </div>

                            <div class="col-15">
                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button></p><br>
                                <!-- <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button> -->
                            </div>
                        </div>
                    </form>
                </div>

    
        </div>
    </div>
    <!-- Contact End -->
    
    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Smart'S</h3>
      <p>Temukan informasi beasiswa pendidikan kuliah lebih banyak disini</p>
      <div class="social-links">
            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/firda.ar.25"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCIKZwqHiTK3xzE21jyMDznA"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/firda-aulia-rakhmah-b11577249/"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Beasiswa Smart'S</h6>
                <h1 class="mb-5">Sistem Pendukung Keputusan</h1>
            </div>

            
  <div class="card-body">
    <table id="ex" class="table table-bordered table-striped">

    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>Hasil</th>
      </tr>
    </thead>
    <tbody>
      @foreach($results as $i => $listHasil)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $listHasil['nama_alt'] }}</td>
        <td>{{ $listHasil['jk'] }}</td>
        <td>{{ $listHasil['alamat'] }}</td>
        <td>{{ $listHasil['hasil'] }}</td>
      </tr>
      @endforeach
      </tbody>
    </table>
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
    <script src="{{ url('lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>
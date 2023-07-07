<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyBeasiswa | Edit Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('siswa/dashboard') }}" class="brand-link">
      <img src="https://cdn.pixabay.com/photo/2016/10/06/19/03/graduation-1719741_960_720.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Smart People</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn.pixabay.com/photo/2016/10/06/19/03/graduation-1719741_960_720.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Website</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="{{ url('siswa/dashboard') }}" class="nav-link">  
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            
            <!-- Form CRUD -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('siswa/add/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('user/add/') }}"  class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Admin</p>
                  </a>
                </li>
              </ul>
            </li>

            <!--Table-->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
               <i class="nav-icon fas fa-edit"></i>
                <p>
                  Tabel
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('siswa/') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Siswa</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('user/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('kriteria/') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kriteria</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Siswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('siswa/update/'.$siswa->id) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" name="nisn" value="{{ $siswa->nis}}">
                  </div>

                  <div class="form-group">
                    <label for="namaSiswa">Nama Siswa</label>
                    <input type="text" class="form-control" name="namaSiswa" value="{{ $siswa->nama_siswa}}">
                  </div>

                  <div class="form-group">
                    <label for="tempats">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempats" value="{{ $siswa->tempat_lahir}}">
                  </div>

                  <div class="form-group">
                    <label for="tanggals">Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tanggals" value="{{ $siswa->tanggal_lahir}}">
                    <p for="exortu" style="color: grey;">* isikan : Tahun-Bulan-Tanggal</p>
                  </div>

                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="jk" id="jk">
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="alamats">Alamat</label>
                    <input type="text" class="form-control" name="alamats" value="{{ $siswa->alamat}}">
                  </div>

                  <div class="form-group">
                    <label for="emails">Email</label>
                    <input type="text" class="form-control" name="emails" value="{{ $siswa->email}}">
                  </div>

                  <div class="form-group">
                    <label for="hp">No Hp</label>
                    <input type="text" class="form-control" name="hp" value="{{ $siswa->no_hp}}">
                  </div>

                  <div class="form-group">
                    <label for="nilaiRaport">Nilai Rata-Rata Raport</label>
                    <input type="text" class="form-control" name="nilaiRaport" value="{{ $siswa->c1}}">
                  </div>
                  
                  <div class="form-group">
                    <label for="penghasilanOrtu">Penghasilan Orang Tua</label>
                    <select class="form-control" name="penghasilanOrtu" id="penghasilanOrtu">
                      <option value="1">< Rp 1.000.000</option>
                      <option value="2">Rp 1.000.000 - Rp 2.999.999</option>
                      <option value="3">Rp 3.000.000 - Rp 5.000.000</option>
                      <option value="4">> Rp 5.000.000</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="nilaiKeaktifan">Nilai Keaktifan Organisasi</label>
                    <input type="text" class="form-control" name="nilaiKeaktifan" value="{{ $siswa->c3}}">
                  </div>

                  <div class="form-group">
                    <label for="sertifikat">Jumlah Sertifikat / Piagam</label>
                    <input type="text" class="form-control" name="sertifikat" value="{{ $siswa->c4}}">
                  </div>

                  <!-- <div class="form-group">
                    <label for="tangOrtu">Beban Ortu</label>
                    <input type="text" class="form-control" name="tangOrtu" id="tangOrtu">
                  </div> -->

                  <div class="form-group">
                    <label for="ortu">Jumlah Tanggungan Orang Tua</label>
                    <input type="text" class="form-control" name="ortu" value="{{ $siswa->c5}}">
                    <p for="exortu" style="color: grey;">* contoh : 1 / 2 / 3</p>
                  </div>
           
                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>



      

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
  }

    selectElement('penghasilanOrtu','{{ $siswa->c2 }}')
    selectElement('jk','{{ $siswa->jk }}')

</script>

<!-- jQuery -->
<script src="{{ url('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ url('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ url('adminlte/dist/js/demo.js') }}"></script> -->
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

<?php
session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="paneladmin.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="indexlogin.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Barang
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="uploadbarang.php">
          <i class="fas fa-fw fa-upload"></i>
          <span>Upload</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editbarang.php">
          <i class="fas fa-fw fa-pen"></i>
          <span>Edit</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Akun
      </div>
      <li class="nav-item">
        <a class="nav-link" href="pengunjung.php">
          <i class="far fa-eye"></i>
          <span>Visitors</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Logout</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          
              
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, <b><?php echo $nama;?> </span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Panel Admin</h1>
            <br> <br>
          </div>
          <h4>Tribest Motor Accessories</h4>

          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
              <div class="form-group">
                <div>
                  <label>Upload Barang Baru</label>
                   <h6><strong style="color: red; font: sans-serif;">WARNING!</strong> Setiap link yang dimasukkan, harus menggunakan <strong>"Https:// "</strong></h6>
                </div>
                <hr>
              </div>

                <!-- Form Upload Barang-->
                <?php 
                  if(isset($_GET['alert'])){
                    if($_GET['alert']=='gagal_ekstensi'){
                ?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                      Ekstensi Tidak Diperbolehkan
                </div>                
              <?php
                }elseif($_GET['alert']=="gagal_ukuran"){
              ?>
              <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="icon fa fa-times"></i> Peringatan !</h4>
                  Ukuran File terlalu Besar
              </div>                
              <?php
                }elseif($_GET['alert']=="berhasil"){
              ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                  Berhasil Disimpan
              </div>                
              <?php
              }
            }
            ?>
            
                <form method="post" enctype="multipart/form-data" action="upload.php">
                  <form class="user">
                    <label>Masukkan Nama Barang : </label>
                    <div class="form-group">
                      <input type="text-area" class="form-control form-control-user" name="namaproduk" placeholder="Nama Barang" autocomplete="off" required>
                    </div>
                    <label>Masukkan Jenis Barang : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="jenisbarang" placeholder="Jenis Barang (Shock-Breaker, Spion, dll..)" required>
                    </div>
                    <label>Masukkan Harga Barang : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="hargabarang" placeholder="Harga Barang (Rp. .....)" required>
                    </div>
                    <label>Masukkan Link Tokopedia</label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="linktokped" placeholder="Masukkan Link Tokopedia" required>
                    </div>
                    <label>Masukkan Link Shopee : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="linkshopee" placeholder="Masukkan Link Shopee" required>
                    </div>
                    <label>Masukkan Link BukaLapak : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="linkbukalapak" placeholder="Masukkan Link Bukalapak" required>
                    </div>
                    <label>Masukkan Link Lazada : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="linklazada" placeholder="Masukkan Link Lazada" required>
                    </div>
                    <label>Masukkan Link BliBli : </label>
                    <div class="form-group">
                      <input type="text-area" autocomplete="off" class="form-control form-control-user" name="linkblibli" placeholder="Masukkan Link BliBli" required>
                    </div>
                  <input type="file" name="gambar" class = "btn-danger" required>
                  <p></p>
                     <input type="submit" class="btn btn-primary btn-user" value="Upload Barang">
                     <p></p>
                  </form>
                </form>
              </div>
          </div>

          <!-- Content Row -->


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Tribest Motor Accessories</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  </div>
</div>
</div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

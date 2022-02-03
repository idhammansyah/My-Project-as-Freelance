<?php include 'koneksi.php'; 
session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}
?>

<?php 
// search query 
$keyword = $_GET['keyword'];
// number of previously loaded results   
// $offset = $_GET[ "loaded" ]; 
$semuadata = array();
$ambil = $db->query("SELECT * FROM gambar WHERE MATCH( namaproduk )  AGAINST( '%$keyword%' )");
//$ambil = $db->query("SELECT * FROM gambar WHERE namaproduk LIKE '%$keyword%' OR jenisbarang LIKE '%$keyword%' ");
while ($pecah = $ambil->fetch_assoc()) {
	$semuadata[]=$pecah;
}
// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
		<title>Pencarian <?php echo $keyword;  ?></title>
	</head>
	<body>
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
      <li class="nav-item">
        <a class="nav-link" href="uploadbarang.php">
          <i class="fas fa-fw fa-upload"></i>
          <span>Upload</span></a>
      </li>
      <li class="nav-item active">
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
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Logout</span></a>
      </li>
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

    </ul>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang, <b><?php echo $nama;?></b> </span>
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
            <form action="cari.php" method="get">
                    <input class="search" type="text" name="keyword" placeholder="Cari barang..." autocomplete="off">
                    <button class="btn btn-primary" type ="submit" name="cari">Cari</button> 
                  </form>
          </div>
          <h5>Hasil Pencarian : <?php echo $keyword ?></h5>
		

		<div class="row">
    <?php  if (empty($semuadata)) { ?>
          <div class="alert alert-danger">Produk <strong><?php echo $keyword;?></strong> Tidak Ada!</div>
        <?php }?>
			<?php foreach ($semuadata as $key => $value): ?>
            <div class="card-body">
              <table border='1.5' cellpadding='8'>
                <tr>  
                  <!-- <th>No.</th> -->
                  <th>Nama Produk</th>  
                  <th>Jenis Produk</th>  
                  <th>Harga Produk</th>  
                  <th>Foto Produk</th>
                  <th>Edit dan Hapus</th>
                </tr>
                <tbody>
                <?php
                // echo "<td align = 'center'>".$value['id']."</td>";
                echo "<td align = 'center'>".$value['namaproduk']."</td>";
                echo "<td align = 'center'>".$value['jenisbarang']."</td>";
                echo "<td align = 'center'>".number_format($value['hargabarang'])."</td>";
                echo "<td align = 'center'><img src='images/".$value['namabarang']."' width='120px' height='120px'></td>";
                //edit data per id
                echo "<td align = 'center'> <a href='edit.php?id=$value[id]' class='btn btn-warning btn-sm'>Edit</a> <p></p> <a href = 'hapus.php?id=$value[id]' onclick='return confirm('Anda yakin akan menghapus data ini?')' class='btn btn-danger btn-sm' '>Hapus</a> </td>";    
                echo "</tr>";  
                ?></tbody>
              </table>
            </div>
            <?php endforeach ?>
          </div>
         

       <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
</div>
</div>

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
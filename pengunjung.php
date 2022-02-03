<?php
include 'koneksi.php'; 
$ip = $_SERVER['REMOTE_ADDR'];
$tanggal = date("Ymd");
$waktu = time();



$db = mysqli_connect("localhost", "root", "", "tribestmotor");

$query1 = mysqli_query($db, "SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal' ");
	if(mysqli_num_rows($query1) ==0) {
		$ins=mysqli_query($db, "INSERT INTO statistik(ip, tanggal, hits, online) VALUE ('$ip', '$tanggal', '1', '$waktu')");
	} else {
		$upd=mysqli_query($db, "UPDATE statistik SET hits=hits+1, online=$waktu WHERE ip='$ip' AND tanggal='$tanggal' ");
	}
$query1 = mysqli_query($db, "SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip");
$pengunjung = mysqli_num_rows($query1);

$query2 = mysqli_query($db, "SELECT count(hits) AS total FROM statistik");
$hasil2 = mysqli_fetch_array($query2);
$totPengunjung = $hasil2['total'];

$query3 = mysqli_query($db, "SELECT sum(hits) AS jumlah FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal");
$hasil3 = mysqli_fetch_array($query3);
$hits = $hasil3['jumlah'];

$query4 = mysqli_query($db, "SELECT sum(hits) AS total FROM statistik");
$hasil4 = mysqli_fetch_array($query4);
$totHits = $hasil4['total'];

$bataswaktu = time()-300;
$pengunjungOnline = mysqli_num_rows(mysqli_query($db, "SELECT * FROM statistik WHERE online > $bataswaktu"));
$folder = "counter";
$ext =".png";
$totpengunjunggbr = sprintf("%06d", $totPengunjung);
for ($i=0; $i <=9 ; $i++) {
	$totpengunjunggbr =str_replace($i, "<img src='$folder/$i$ext' alt='$i'>", $totpengunjunggbr);	
}
?>
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

  <title>Pengunjung</title>

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
      <li class="nav-item">
        <a class="nav-link" href="uploadbarang.php">
          <i class="fas fa-fw fa-upload"></i>
          <span>Upload</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editbarang.php">
          <i class="fas fa-fw fa-pen"></i>
          <span>Edit</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="category.php">
          <i class="fas fa-fw fa-cube"></i>
          <span>Category</span></a>
      </li> -->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Akun
      </div>
      <li class="nav-item active">
        <a class="nav-link"  href="pengunjung.php">
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  Selamat Datang, <b><?php echo $nama;?></span>
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
              <h5>Total Pengunjung Website Tribest Accessories</h5>
                <table border="1" cellpadding="12">
                <tr>   
                  <th>Pengunjung Hari Ini</th>  
                  <th>Total Pengunjung</th>  
                  <th>Refresh Halaman Web Ini</th>  
                  <th>Total Refresh Web Ini</th>
                  <th>Online Pada Web ini</th>
                </tr>
              
                <?php echo "
      						<td align = 'center'>$pengunjung</td>
      						<br>
      						<td align = 'center'>$totPengunjung</td>
      						<br>
      						<td align = 'center'>$hits</td>
      						<br>
      						<td align = 'center'>$totHits </td>
      						<br>
      						<td align = 'center'>$pengunjungOnline </td>"; 
                ?> 
                </table>
                <hr>
              
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

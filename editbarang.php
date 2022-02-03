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

  <title>Admin Panel - Edit</title>

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
          </div>
          <h4>Tribest Motor Accessories</h4>

          <!-- Content Row -->
          <div class="row">
            <div class="card-body">
              <div class="form-group">
                <div>
                  <label>Edit Barang</label>
                  <form action="cari.php" method="get">
                    <input class="search" type="text" name="keyword" placeholder="Cari barang..." autocomplete="off">
                    <button class="btn btn-primary" type ="submit" name="cari">Cari</button> 
                  </form>  
                </div>
              </div>

                <!-- Form Upload Barang-->
                
              <span><table border="1" cellpadding="14">
                <tr>  
                  <!-- <th>Kategori</th> -->
                  <th>Nama Produk</th>  
                  <th>Jenis Produk</th>  
                  <th>Harga Produk</th>  
                  <th>Foto Produk</th>
                  <th>Edit dan Hapus</th>
                </tr>
                  
                  <?php
                  // Load file koneksi.php
                  include "koneksi.php";
                  $page = (isset($_GET['page']))? $_GET['page'] : 1;
                  $limit = 10; 
                  $limit_start = ($page - 1) * $limit;
                  $no = $limit_start + 1;
                  $number=1;

                  $query = "SELECT * FROM gambar LIMIT $limit_start, $limit";
                  $sql = mysqli_query($db, $query);
                  $dataproduk = $db->prepare($query);
                  $dataproduk->execute();
                  $res1 = $dataproduk->get_result();
                  $row = mysqli_num_rows($sql);
                  if($row > 0){ 
                  // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                    while ($data = $res1->fetch_assoc()) { // Ambil semua data dari hasil eksekusi $data produk karena dibuatkan sebuah pagenya    
                      echo "<tr>";
                      // echo "<td align = 'center'>".$number++."</td>";
                      // echo "<td align = 'center'".$data['nama_kategori']."</td>";        
                      echo "<td align = 'center'>".$data['namaproduk']."</td>";    
                      echo "<td align = 'center'>".$data['jenisbarang']."</td>";    
                      echo "<td align = 'center'>".number_format($data['hargabarang'])."</td>";
                      echo "<td align = 'center'><img src='images/".$data['namabarang']."' width='120px' height='120px'></td>";
                      //edit data per id
                      echo "<td align = 'center'> <a href='edit.php?id=$data[id]' onclick = '' class='btn btn-warning btn-sm'>Edit</a> <p></p> <a href = 'javascript:hapusData(".$data['id'].")' onclick='return confirm('Yakin Hapus ?')' class='btn btn-danger btn-sm' '>Hapus</a> </td>";    
                      echo "</tr>";  
                    }
                    } else { // Jika data tidak ada  
                      echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                    }
                    ?>
                  </table> </span>
                  <script language="JavaScript" type="text/javascript">
                     
                      function hapusData(id){
                        if (confirm("Apakah anda yakin akan menghapus data ini?")){
                        window.location.href = 'hapus.php?id=' + id;
                        }
                      }
                  </script>
                  <br>
                   <?php
                    $query_jumlah = "SELECT count(*) AS jumlah FROM gambar";
                    $data_produk = $db->prepare($query_jumlah);
                    $data_produk->execute();
                    $res1 = $data_produk->get_result();
                    $row = $res1->fetch_assoc();
                    $total_records = $row['jumlah'];
                  ?>
                  <p>Total Barang : <u><?php echo $total_records; ?></u> Barang</p>
                  <nav class="mb-5">
                    <ul class="pagination justify-content-center">
                      <?php
                        $jumlah_page = ceil($total_records / $limit);
                        $jumlah_number = 9; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                        $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                        $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
                        
                        if($page == 1){
                          echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                          echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                        } else {
                          $link_prev = ($page > 1)? $page - 1 : 1;
                          echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
                          echo '<li class="page-item"><a class="page-link" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                        }
                   
                        for($i = $start_number; $i <= $end_number; $i++){
                          $link_active = ($page == $i)? ' active' : '';
                          echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                        }
                   
                        if($page == $jumlah_page){
                          echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                          echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
                        } else {
                          $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                          echo '<li class="page-item"><a class="page-link" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                          echo '<li class="page-item"><a class="page-link" href="?page='.$jumlah_page.'">Last</a></li>';
                        }
                      ?>
                    </ul>
                  </nav>
        
            </div>
          </div>

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
</div>
</div>

  <!-- End of Page Wrapper -->

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
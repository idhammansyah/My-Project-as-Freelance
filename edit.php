<?php
include_once("koneksi.php");
session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['Update'])) {   
    $id = $_POST['id'];
    $namaproduk = $_POST['namaproduk'];
    $jenisbarang = $_POST['jenisbarang'];
    $hargabarang = $_POST['hargabarang'];
    $linktokped = $_POST['linktokped'];
    $linkshopee = $_POST['linkshopee'];
    $linkbukalapak = $_POST['linkbukalapak'];
    $linklazada = $_POST['linklazada'];
    $linkblibli = $_POST['linkblibli'];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file= $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    $path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"|| empty($tmp_file)){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000000 || empty($tmp_file)){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path) || empty($tmp_file)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
        if(!empty($tmp_file)){
          $query = "UPDATE gambar SET id='$id',namaproduk='$namaproduk',jenisbarang='$jenisbarang',hargabarang='$hargabarang', linktokped='$linktokped',linkshopee='$linkshopee',linkbukalapak='$linkbukalapak',linklazada='$linklazada',linkblibli='$linkblibli',namabarang='$nama_file',ukuranbarang='$ukuran_file',tipebarang= '$tipe_file' WHERE id='$id'";
        }else{
          $query = "UPDATE gambar SET id='$id',namaproduk='$namaproduk',jenisbarang='$jenisbarang',hargabarang='$hargabarang', linktokped='$linktokped',linkshopee='$linkshopee',linkbukalapak='$linkbukalapak',linklazada='$linklazada',linkblibli='$linkblibli' WHERE id='$id'";
        }
       
      $sql = mysqli_query($db, $query);// Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("Location: editbarang.php?alert=berhasil"); // Redirectke halaman upload
      } else{
        // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a href='editbarang.php?alert=kesalahan'>Kembali Ke Form</a>";
        }
    } else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='editbarang.php?alert=gagal'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='editbarang.php?alert=gagal_ukuran'>Kembali Ke Form</a>";
  }
} else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a href='editbarang.php?alert=gagal_format'>Kembali Ke Form</a>";
  }
}

?>

<?php
// Display selected user data based on id
// Getting id from url
    $id = $_GET['id'];

// Fetech user data based on id
    $query = "SELECT * FROM gambar WHERE id=$id";
    $result = mysqli_query($db, $query);

 while($data = mysqli_fetch_array($result)) {
    $id = $data['id'];
    $namaproduk = $data['namaproduk'];
    $jenisbarang = $data['jenisbarang'];
    $hargabarang = $data['hargabarang'];
    $linktokped = $data['linktokped'];
    $linkshopee = $data['linkshopee'];
    $linkbukalapak = $data['linkbukalapak'];
    $linklazada = $data['linklazada'];
    $linkblibli= $data['linkblibli'];
    $namabarang = $data['namabarang'];
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
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">

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
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang,
                           <b><?php echo $nama;?></b> </span>
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

               <?php 
                  if(isset($_GET['alert'])){
                    if($_GET['alert']=='gagal_ekstensi'){
                ?>
               <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                  Ekstensi Tidak Diperbolehkan
               </div>
               <?php
                }elseif($_GET['alert']=="gagal_ukuran"){
              ?>
               <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                  Ukuran File terlalu Besar
               </div>
               <?php
                }elseif($_GET['alert']=="berhasil"){
              ?>
               <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success</h4>
                  Berhasil Disimpan
               </div>
               <?php
              }
            }
            ?>

               <!-- Content Row -->
               <div class="row">
                  <div class="card-body">
                     <div class="form-group">
                        <div>
                           <label>Edit Barang</label>
                        </div>
                     </div>
                     <!-- Form edit Barang-->

                     <form name="update_user" method="post" action="edit.php" enctype="multipart/form-data">
                        <table cellpadding="12" style="width: 50rem;">
                           <tr>
                              <td><b>ID Produk : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="id"
                                    value=<?php echo $id;?> disabled></td>
                           </tr>
                           <tr>
                              <td><b>Nama Produk : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="namaproduk"
                                    autocomplete="off" value=<?php echo "'".$namaproduk."'"; ?>></td>
                           </tr>
                           <tr>
                              <td><b>Jenis Barang : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="jenisbarang"
                                    autocomplete="off" value=<?php echo "'".$jenisbarang."'";?>></td>
                           </tr>
                           <tr>
                              <td><b>Harga Barang : </b></td>
                              <td><input autocomplete="off" type="text" class="form-control form-control-user"
                                    name="hargabarang" value=<?php echo $hargabarang; ?>></td>
                           </tr>
                           <tr>
                              <td><b>Link Tokopedia : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="linktokped"
                                    autocomplete="off" value=<?php echo $linktokped;?>></td>
                           </tr>
                           <tr>
                              <td><b>Link Shopee : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="linkshopee"
                                    autocomplete="off" value=<?php echo $linkshopee;?>></td>
                           </tr>
                           <tr>
                              <td><b>Link Bukalapak : </b></td>
                              <td><input type="text" class="form-control form-control-user" name="linkbukalapak"
                                    autocomplete="off" value=<?php echo $linkbukalapak;?>></td>
                           </tr>
                           <tr>
                              <td><b>Link Lazada : </b></td>
                              <td><input type="text" class="form-control form-control-user" autocomplete="off"
                                    name="linklazada" value=<?php echo $linklazada;?>></td>
                           </tr>
                           <tr>
                              <td><b>Link BliBli : </b></td>
                              <td><input type="text" class="form-control form-control-user" autocomplete="off"
                                    name="linklazada" value=<?php echo $linkblibli;?>></td>
                           </tr>

                           <tr class="form-group">
                              <td><b>Foto Barang : </b></td>
                              <td><img src="images/<?php echo $namabarang;?>"
                                    style="width: 150px;float: left;margin-bottom: 5px;"> </td>
                           </tr>
                           <tr>
                              <td><b>Foto Baru : </b></td>
                              <td><input type="file" name="gambar" class="btn-warning"> </td>

                           </tr>
                           <tr>
                              <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                              <td><input type="submit" name="Update" class="btn-primary" value=Update></td>
                           </tr>
                        </table>
                        <div class="container">
                           <h6><strong style="color: red; font: sans-serif;">WARNING!</strong> Setiap link yang
                              dimasukkan, harus menggunakan <strong>"Https:// "</strong></h6>
                        </div>
                     </form>
                     <!-- script language="JavaScript" type="text/javascript">
                function Update(id){
                  if (confirm("Simpan Perubahan ?")){
                      window.location.href = 'edit.php?id=' + id;
                    }
                }
                  </script> -->
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
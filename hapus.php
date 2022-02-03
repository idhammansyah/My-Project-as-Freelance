<?php
session_start();
if(!isset($_SESSION['nama'])) {
   header('location:login.php'); 
} else { 
   $nama = $_SESSION['nama']; 
}

?>

<?php
// include database connection file
include_once("koneksi.php");

// Get id from URL to delete that user
$id = $_GET['id'];

$sql = mysqli_query($db, "SELECT * FROM gambar WHERE id = $id");
$data = $sql->fetch_assoc();
$namabarang = $data['namabarang'];
if (file_exists("images/$namabarang")) {
	unlink("images/$namabarang");
} else {
	echo "Maaf foto gagal dihapus";
}

// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM gambar WHERE id=$id");
  if($result){
  	echo "<script>alert($namabarang)</script>";
    header("Location:editbarang.php?alert=berhasil");
  }else{
    echo "Maaf, Terjadi kesalahan saat menghapus barang di database.";
    echo "<br><a href='editbarang.php?alert=kesalahan'>Kembali Ke Edit</a>";
  }


?>
<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form

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
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

//Untuk id manual, jika ditambahkan data baru, data ke insert paling bawah
$sql = "SELECT id FROM gambar ORDER BY id DESC LIMIT 1";
$result = $db->query($sql);
$id;

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $id = $row['id'];
  }
} else {
  $id = 0;
  echo "0 results";
}
$id++;

// Set path folder tempat menyimpan gambarnya
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 10000000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file,$path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database

      $query = "INSERT INTO gambar(id,namaproduk,jenisbarang,hargabarang,linktokped,linkshopee, linkbukalapak,linklazada,linkblibli,namabarang,ukuranbarang,tipebarang) VALUES('".$id."','".$namaproduk."','".$jenisbarang."','".$hargabarang."','".$linktokped."','".$linkshopee."','".$linkbukalapak."','".$linklazada."','".$linkblibli."','".$nama_file."','".$ukuran_file."','".$tipe_file."')";
      $sql = mysqli_query($db, $query); // Eksekusi/ Jalankan query dari variabel $query

      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: uploadbarang.php?alert=berhasil"); // Redirectke halaman upload
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='uploadbarang.php?alert=kesalahan'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='uploadbarang.php?alert=gagal'>Kembali Ke Form</a>";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='uploadbarang.php?alert=gagal_ukuran'>Kembali Ke Form</a>";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='uploadbarang.php?alert=gagal_format'>Kembali Ke Form</a>";
}
?>
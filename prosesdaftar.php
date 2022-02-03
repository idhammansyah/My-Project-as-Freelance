<?php

   require_once("koneksi.php");
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $sql = "SELECT * FROM admin WHERE nama = '$nama'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "Nama Sudah Terdaftar! <a href='buatakun.php'>Back</a>";
   } else {
     if(!$nama || !$email || !$password ) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='buatakun.php'>Back</a>";
     } else {
       $data = "INSERT INTO admin VALUES (NULL, '$nama', '$email', '$password')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div)";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }


   
?>
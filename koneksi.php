<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "sony";
  $koneksi = mysqli_connect($host,$user,$pass) or die ("Koneksi ke database gagal");
  mysqli_select_db($koneksi,$name) or die ("Database tidak tersedia");
?>
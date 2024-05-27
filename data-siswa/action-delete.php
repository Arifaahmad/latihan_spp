<?php
  include '../koneksi.php';
  $nisn =$_GET['nisn'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM siswa WHERE nisn='$nisn' ");

  if ($query_mysqli) {
    echo "<script>alert('Data Kelas berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data Kelas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>
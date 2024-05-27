<?php
  include '../koneksi.php';
  $idpetugas =$_GET['id_petugas'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas=$idpetugas");

  if ($query_mysqli) {
    echo "<script>alert('Data petugas berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data petugas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>
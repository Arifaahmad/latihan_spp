<?php
  include '../koneksi.php';
  $idspp =$_GET['id_spp'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp=$idspp");

  if ($query_mysqli) {
    echo "<script>alert('Data Kelas berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data Kelas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>
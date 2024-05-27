<?php
  if (count($_POST) >= 3) {
    $idspp =$_POST['id_spp'];
    $tahun =$_POST['tahun'];
    $nominal =$_POST['nominal'];
    $keterangan =$_POST['keterangan'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE spp SET tahun='$tahun',nominal='$nominal',keterangan='$keterangan' WHERE id_spp=$idspp");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>
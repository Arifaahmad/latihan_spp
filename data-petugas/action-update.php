<?php
  if (count($_POST) >= 3) {
    $idpetugas =$_POST['id_petugas'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $namapetugas =$_POST['nama_petugas'];
    $level =$_POST['level'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE petugas SET username='$username',password='$password',nama_petugas='$namapetugas',level='$level'  WHERE id_petugas=$idpetugas");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>
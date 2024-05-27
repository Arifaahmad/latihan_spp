<?php
  if (count($_POST) > 4) {
    $idpetugas =$_POST['id_petugas'];
    $username =$_POST['username'];
    $password = md5($_POST['password']);
    $namapetugas =$_POST['nama_petugas'];
    $level =$_POST['level'];
    
    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES($idpetugas,'$username','$password','$namapetugas','$level')");

    if ($result) {
      echo "<script>alert('Data siwa berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data siswa gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>
<?php
  if (count($_POST) > 0) {
    $nisn =$_POST['nisn'];
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $idkelas =$_POST['id_kelas'];
    $alamat =$_POST['alamat'];
    $notelp =$_POST['no_telp'];
    $idspp =$_POST['id_spp'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES('$nisn','$nis','$nama','$idkelas','$alamat','$notelp','$idspp')");

    if ($result) {
      echo "<script>alert('Data siwa berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data siswa gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>
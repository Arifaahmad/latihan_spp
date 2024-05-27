<?php
  if (count($_POST) >= 3) {
    $nisn =$_POST['nisn'];
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $idkelas =$_POST['id_kelas'];
    $alamat =$_POST['alamat'];
    $notelp =$_POST['no_telp'];
    $idspp =$_POST['id_spp'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE siswa SET nis='$nis',nama='$nama',id_kelas='$idkelas',alamat='$alamat',no_telp='$notelp',id_spp='$idspp' WHERE nisn='$nisn'");

    if ($result) {
      echo "<script>alert('Data siswa berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data siswa gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>
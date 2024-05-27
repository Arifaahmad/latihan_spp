<?php
   $koneksi = mysqli_connect("localhost","root","","aplikasi_spp");
   if(mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
   }

?>
<?php
  session_start();
  if ($_SESSION['level']=="") {
    header("location:../auth-login-petugas.php?pesan=gagal");
  }
?>

<?php require('../template/header.php');?>

<?php require('../template/navbar.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Update Data siswa</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card w-auto">
            <div class="card-header">
              <p class="h3">Update Data siswa</p>
            </div>
              <?php
              include "../koneksi.php";
              $nisn= $_GET['nisn'];
              $query_mysql = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nisn=$nisn");
              $data= mysqli_fetch_array($query_mysql); ?>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="nisn" class="from-label">nisn</label> <br>
                      <input type="number" class="from-control w-75" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="nis" class="from-label">nis</label> <br>
                      <input type="number" class="from-control w-75" id="nis" name="nis" value="<?php echo $data['nis']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="from-label">nama</label> <br>
                      <input type="text" class="from-control w-75" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="id_kelas" class="from-label">id_kelas</label> <br>
                      <input type="number" class="from-control w-75" id="id_kelas" name="id_kelas" value="<?php echo $data['id_kelas']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="from-label">alamat</label> <br>
                      <input type="text" class="from-control w-75" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="no_telp" class="from-label">no_telp</label> <br>
                      <input type="number" class="from-control w-75" id="no_telp" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="id_spp" class="from-label">id_spp</label> <br>
                      <input type="number" class="from-control w-75" id="id_spp" name="id_spp" value="<?php echo $data['id_spp']; ?>">
                    </div>
                   
                    <button type="submit" class="btn btn-primary w-75">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require('../template/footer.php');?>
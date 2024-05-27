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
      <h1>Update Data SPP</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card w-auto">
            <div class="card-header">
              <p class="h3">Update Data SPP</p>
            </div>
              <?php
              include "../koneksi.php";
              $idspp= $_GET['id_spp'];
              $query_mysql = mysqli_query($koneksi,"SELECT * FROM spp WHERE id_spp=$idspp");
              $data= mysqli_fetch_array($query_mysql); ?>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="id_spp" class="from-label">ID spp</label> <br>
                      <input type="number" class="from-control w-75" id="id_spp" name="id_spp" value="<?php echo $data['id_spp']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="tahun" class="from-label">tahun</label> <br>
                      <input type="number" class="from-control w-75" id="tahun" name="tahun" value="<?php echo $data['tahun']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nominal" class="from-label">nominal</label> <br>
                      <input type="number" class="from-control w-75" id="nominal" name="nominal" value="<?php echo $data['nominal']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="keterangan" class="from-label">keterangan</label> <br>
                      <input type="text" class="from-control w-75" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; ?>">
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
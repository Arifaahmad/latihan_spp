<?php
  session_start();
  if ($_SESSION['level'] == "") {
    header("location:auth-login-petugas.php?pesan=gagal");
  }
?>

<?php require('../template/header.php');?>

<?php require('../template/navbar.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
        <h1>Tambah Data SPP</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Input Data SPP</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="id_spp">ID Spp</label>
                  <input id="id_spp" type="number" class="form-control" name="id_spp" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Id spp
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="tahun">Tahun</label>
                  <input id="tahun" type="number" class="form-control" name="tahun" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill tahun
                  </div>
                </div>
                <div<div class="form-group">
                  <label class="" for="nominal">nominal</label>
                  <input id="nominal" type="number" class="form-control" name="nominal" tabindex="3" required autofocus>
                  <div class="invalid-feedback">
                    Please fill nominal
                  </div>
                  <div class="form-group">
                  <label class="" for="keterangan">keterangan</label>
                  <input id="keterangan" type="text" class="form-control" name="keterangan" tabindex="4" required autofocus>
                  <div class="invalid-feedback">
                    Please fill keterangan
                  </div>
                </div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary btn-lg btn-block" tabindex="5">
                      SUBMIT
                    </button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  
</div>
  
  
<?php require('../template/footer.php');?>
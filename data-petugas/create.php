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
        <h1>Tambah Data petugas</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Input Data petugas</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="id_petugas">ID petugas</label>
                  <input id="id_petugas" type="number" class="form-control" name="id_petugas" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill Id petugas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="username">username</label>
                  <input id="username" type="text" class="form-control" name="username" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill username
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="password">password</label>
                  <input id="password" type="text" class="form-control" name="password" tabindex="3" required autofocus>
                  <div class="invalid-feedback">
                    Please fill password
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nama_petugas">nama petugas</label>
                  <input id="nama_petugas" type="text" class="form-control" name="nama_petugas" tabindex="4" required autofocus>
                  <div class="invalid-feedback">
                    Please fill nama petugas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="kompetensi_keahlian">level</label> <br>
                      <select class="form-select w-100" style="height: 40px;" name="level" id="level" tabindex="5" required>
                        <option selected>level</option>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                      </select>
                    </div>
                </div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary btn-lg btn-block" tabindex="6">
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
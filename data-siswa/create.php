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
        <h1>Tambah Data Siswa</h1>
    </div>
    <div class="section-body d-flex justify-content-center">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h1>Input Data Siswa</h1>
            </div>
            <div class="card-body">
              <form action="action-create.php" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="" for="nisn">Nisn</label>
                  <input id="nisn" type="text" class="form-control" name="nisn" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    Please fill nisn
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nis">Nis</label>
                  <input id="nis" type="text" class="form-control" name="nisn" tabindex="2" required autofocus>
                  <div class="invalid-feedback">
                    Please fill nis
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="nama">Nama</label>
                  <input id="nama" type="text" class="form-control" name="nama" tabindex="3" required autofocus>
                  <div class="invalid-feedback">
                    Please fill nama
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="id_kelas">ID kelas</label>
                  <input id="id_kelas" type="number" class="form-control" name="id_kelas" tabindex="4" required autofocus>
                  <div class="invalid-feedback">
                    Please fill id kelas
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="alamat">Alamat</label>
                  <input id="alamat" type="text" class="form-control" name="alamat" tabindex="5" required autofocus>
                  <div class="invalid-feedback">
                    Please fill alamat
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="no_telp">no telpon</label>
                  <input id="no_telp" type="number" class="form-control" name="no_telp" tabindex="6" required autofocus>
                  <div class="invalid-feedback">
                    Please fill no telpon
                  </div>
                </div>
                <div class="form-group">
                  <label class="" for="id_spp">ID spp</label>
                  <input id="id_spp" type="number" class="form-control" name="id_spp" tabindex="7" required autofocus>
                  <div class="invalid-feedback">
                    Please fill id spp
                  </div>
                </div>
                </div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary btn-lg btn-block" tabindex="8">
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
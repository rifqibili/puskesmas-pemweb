<?php
require_once 'app/functions/MY_model.php';

$pasiens = get("SELECT * FROM pasien");
$dokters = get("SELECT * FROM dokter");
$ruangs = get("SELECT * FROM ruang");
$obats = get("SELECT * FROM obat");
?>

<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=user" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah User</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/rekam-medis/proses/create.php" method="post">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Username</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" name="username" required/>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Password</label>
                      </div>
                      <div class="col-md-8">
                        <input type="password" class="form-control" name="password" required/>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Confirm Password</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" name="cpassword" required/>
                       
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group row">
                      <?php
                        $message = "This is a PHP-based alert message.";
                        if (!empty($message)) {
                            echo '<div id="alert" class="alert alert-danger col-md-12 alert-dismissible fade show text-center" role="alert">';
                            echo '<strong>' . $message . '</strong>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                  </div>

                  

                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
   function tempAlert(duration){
            var el = document.getElementById("alert");
            setTimeout(function(){
                el.style.display = "none";
            }, duration);
        }
        tempAlert(3000);
  </script>

<?php

$addon_script = ['assets/vendors/js/forms/select/select2.full.min.js', 'assets/js/scripts/forms/select/form-select2.js'];

?>
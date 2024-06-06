<?php
require_once 'app/functions/MY_model.php';
$users = get("SELECT * FROM users");

$no = 1;

$title = 'user';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User</h4>
          <a href="?page=tambah-user" class="btn btn-primary round waves-effect waves-light">
            Tambah User
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Username</th>
                    <th>Last Login</th>
                    <th>Created At</th>                    <th>
                      <i class="feather icon-settings"></i>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $u) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $u['username']; ?></td>
                      <td>
                        <?php
                        /*
                        $obats = mysqli_query($conn, "SELECT * FROM rm_obat JOIN obat ON rm_obat.obat_id = obat.id WHERE rm_id = '$rm[rm_id]'") or die(mysqli_error($conn));
                        while ($obat = mysqli_fetch_assoc($obats)) {
                          echo $obat['nama_obat'] . '<br>';
                        }*/
                        ?>
                      </td>
                      <td></td>
                      <td>
                        <a href="?page=hapus-rekam-medis&id=" class="btn-hapus"><i class="feather icon-trash"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'rekam_medis'; ?>
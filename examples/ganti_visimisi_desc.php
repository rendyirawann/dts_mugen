<?php 
error_reporting(1);
$id = '1';

$profile = $conn->query("select * from profile_home WHERE id = '$id'");
$data = $profile->fetch_assoc();


?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Ganti Content Profile <hr></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
    <a href="admin.php?p=landing"><i class="fas fa-arrow-circle-left mb-3"></i> Landing Settings</a>
    </div>
  </div>
  <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'edit') {
                  echo "<div class='alert alert-success'>Berhasil Mengedit Content Profile</div>";
              } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="gantiprofile_act.php" method="POST">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">

                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Profile Description</label>
                        <textarea id="myTextarea" name="profile_desc" maxlength="999"><?php echo $data['profile_desc'] ?></textarea>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-lg-12 pr-1">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        <!--  -->
        
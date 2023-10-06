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
                <form action="gantiprofile_act.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">

                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Profile Description</label>
                        <textarea id="myTextarea" name="profile_desc" maxlength="999"><?php echo $data['profile_desc'] ?></textarea>
                      </div>
                    </div>
                  <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" placeholder="Company Name" value="<?= $data["company_name"];?>">
                      </div>
                    </div>
                    <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>Leader Name</label>
                        <input type="text" name="leader_name" class="form-control" placeholder="Leader Name" value="<?= $data["leader_name"];?>">
                      </div>
                    </div>
                    <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>Website</label>
                        <input type="text" name="website" class="form-control" placeholder="Website Name" value="<?= $data["website"];?>">
                      </div>
                    </div>
                    <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="Phone Number" value="<?= $data["phone"];?>">
                      </div>
                    </div>
                    <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" class="form-control" placeholder="City" value="<?= $data["city"];?>">
                      </div>
                    </div>
                    <div class="col-lg-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="<?= $data["email"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <label>Profile Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                            <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            <img style="margin-top:10px;" height="120px" width="auto" src="<?php echo"../assets/img/upload/".$data["img"];?>">
                            <input type="hidden" value="<?php echo $data['img'] ?>" name="oldImg">
                            
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
        
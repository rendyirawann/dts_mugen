<?php 
error_reporting(1);
$id = '1';

$about = $conn->query("select * from about WHERE id = '$id'");
$data = $about->fetch_assoc();


?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Ganti Content About <hr></h3>
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
                <h5 class="title">Edit About</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'edit') {
                  echo "<div class='alert alert-success'>Berhasil Mengedit About</div>";
              } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="ganti_about_act.php" method="POST">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">
                    <!-- <div class="col-lg-12">
                    <label>Logo Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                            <input type="file" class="form-control" name="img" id="customFile">
                            
                            <img style="margin-top:10px;" height="120px" width="auto" src="<?php echo"../assets/img/upload/".$data["img"];?>">
                            <input type="hidden" value="<?php echo $data['img'] ?>" name="oldImg">
                            </div>
                    </div> -->
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>About Description</label>
                        <textarea id="myTextarea" name="about_desc" maxlength="999"><?php echo $data['about_desc'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Copyright</label>
                        <input type="text" name="copyright" class="form-control" placeholder="Copyright" value="<?= $data["copyright"];?>">
                      </div>
                    </div> -->
                    
                  <div class="row">
                    <div class="col-lg-12 pr-1">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </div>
                </form>
                </div>
        </div>
              </div>
            </div>
        <!--  -->
        
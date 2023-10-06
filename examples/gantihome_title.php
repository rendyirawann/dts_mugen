<?php 
error_reporting(1);
$id = '1';

$logos = $conn->query("select * from home WHERE id = '$id'");
$data = $logos->fetch_assoc();

$img = $data['img'];
?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Ganti Home Title <hr></h3>
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
                <h5 class="title">Edit Home Title</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'edit') {
                  echo "<div class='alert alert-success'>Berhasil Mengedit Home Title</div>";
              } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="gantihome_title_act.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">
                    
                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Logo Brand</label>
                        <input type="text" name="logo_brand" class="form-control" placeholder="Logo Brand" value="<?= $data["logo_brand"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Home Title</label>
                        <input type="text" name="home_title" class="form-control" placeholder="Home Title" value="<?= $data["home_title"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Home Description</label>
                        <textarea id="myTextarea" name="home_description" maxlength="999"><?php echo $data['home_description'] ?></textarea>
                      </div>
                    </div>
                    <div class="col-lg-12">
                    <label>Logo Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                            <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            <img style="margin-top:10px;" height="120px" width="auto" src="<?php echo"../assets/img/upload/".$data["img"];?>">
                            <input type="hidden" value="<?php echo $data['img'] ?>" name="oldImg">
                            
                    </div>
                  </div>

                    <!-- <div class="col-lg-12 pr-1">
                    <div class="form-group custom-file mt-1">
                    <label class="custom-file-label" for="customFile">Pilih Gambar Logo</label>
                    <div class="input-group">
                            <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            <img style="margin-top:25px;" height="120px" width="auto" src="<?php echo"assets/img/upload/".$data["img"];?>">
                            <input type="hidden" value="<?php echo $data['img'] ?>" name="oldImg">
          
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
        
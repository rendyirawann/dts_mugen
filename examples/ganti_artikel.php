<?php 
error_reporting(1);

$id = $_GET["id"];

$artikel = $conn->query("select * from artikel WHERE id = '$id'");
$data = $artikel->fetch_assoc();

$img = $data['img'];
?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Ganti Artikel <hr></h3>
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
                <h5 class="title">Ganti Artikel</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'edit') {
                  echo "<div class='alert alert-success'>Berhasil Mengedit Artikel</div>";
              } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
              
                <form action="ganti_artikel_act.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">
                  <div class="col-lg-12">
                    <label>Artikel Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                            <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            <img style="margin-top:10px;" height="120px" width="auto" src="<?php echo"../assets/img/upload/".$data["img"];?>">
                            <input type="hidden" value="<?php echo $data['img'] ?>" name="oldImg">
                            
                    </div>
                  </div>
                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Artikel Title</label>
                        <input type="text" name="title_artikel" class="form-control" placeholder="Artikel Title" value="<?= $data["title_artikel"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Content Artikel</label>
                        <textarea id="myTextarea" name="content_artikel" maxlength="999"><?php echo $data['content_artikel'] ?></textarea>
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
        
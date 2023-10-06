<?php 
error_reporting(1);

$id = $_GET["id"];

$products = $conn->query("select * from product WHERE id = '$id'");
$data = $products->fetch_assoc();

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
              
                <form action="ganti_product_act.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data["id"];?>">
                  <div class="row">
                  <div class="col-lg-12">
                    <label>Product Image</label>
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
                        <label>Nama Product</label>
                        <input type="text" name="name_product" class="form-control" placeholder="Nama Product" value="<?= $data["name_product"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Desc Product</label>
                        <input type="text" name="desc_product" class="form-control" placeholder="Desc Product" value="<?= $data["desc_product"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Category Product</label>
                        <input type="text" name="cat_product" class="form-control" placeholder="Category Product" value="<?= $data["cat_product"];?>">
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
        
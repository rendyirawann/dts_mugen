<?php 
error_reporting(1);
$id = '1';

$contact_us = $conn->query("select * from contact_us WHERE id = '$id'");
$data = $contact_us->fetch_assoc();


?>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Ganti Info Contact Us <hr></h3>
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
                <h5 class="title">Edit Info Contact Us</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'edit') {
                  echo "<div class='alert alert-success'>Berhasil Mengedit Contact Us</div>";
              } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="ganti_kontak_act.php" method="POST">
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
                        <label>Contact Description</label>
                        <textarea id="myTextarea" name="contact_desc" maxlength="999"><?php echo $data['contact_desc'] ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Contact Map Source iFrame</label>
                        <input type="text" name="contact_iframe" class="form-control" placeholder="Source iFrame Maps" value="<?= $data["contact_iframe"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link Name#1</label>
                        <input type="text" name="link_name1" class="form-control" placeholder="Link Name 1" value="<?= $data["link_name1"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link#1</label>
                        <input type="text" name="link1" class="form-control" placeholder="Link 1" value="<?= $data["link1"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link Name#2</label>
                        <input type="text" name="link_name2" class="form-control" placeholder="Link Name 2" value="<?= $data["link_name2"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link#2</label>
                        <input type="text" name="link2" class="form-control" placeholder="Link 2" value="<?= $data["link2"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link Name#3</label>
                        <input type="text" name="link_name3" class="form-control" placeholder="Link Name 3" value="<?= $data["link_name3"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link#3</label>
                        <input type="text" name="link3" class="form-control" placeholder="Link 3" value="<?= $data["link3"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link Name#4</label>
                        <input type="text" name="link_name4" class="form-control" placeholder="Link Name 4" value="<?= $data["link_name4"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Link#4</label>
                        <input type="text" name="link4" class="form-control" placeholder="Link 4" value="<?= $data["link4"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $data["email"];?>">
                      </div>
                    </div>
                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="number" name="no_hp" class="form-control" placeholder="Phone Number" value="<?= $data["no_hp"];?>">
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
              </div>
            </div>
        <!--  -->
        
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Edit Visi Misi Point <hr></h3>
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
                <h5 class="title">Edit Visi Misi</h5>
              </div>
              <div class="card-body">
              <?php
                $id = $_GET['id'];
                $data = mysqli_query(
                    $conn,
                    "SELECT * FROM visimisi_point where id='$id'"
                );
                while ($edit = mysqli_fetch_array($data)) { ?>
                <form action="ganti_visimisi_point_act.php" method="POST">
                <input type="hidden" name="id" value="<?= $edit['id']; ?>">
                  <div class="row">

                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Visi</label>
                        <input type="text" name="visi_point" class="form-control" placeholder="Visi Point" value="<?= $edit["visi_point"];?>">
                      </div>
                    </div>

                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Misi</label>
                        <input type="text" name="misi_point" class="form-control" placeholder="Misi Point" value="<?= $edit["misi_point"];?>">
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-lg-12 pr-1">
                      <button type="submit" class="btn btn-primary">Ganti</button>
                    </div>
                  </div>
                </form>
                <?php }?>
        </div>
        </div>
              </div>
            </div>

            
        <!--  -->
        
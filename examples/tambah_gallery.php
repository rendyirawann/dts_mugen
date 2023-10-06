<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Tambah Gallery <hr></h3>
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
                <h5 class="title">Tambah Gallery</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'tambah') {
                  echo "<div class='alert alert-success'>Berhasil Menambah Satu Gallery</div>";
              } elseif ($_GET['pesan'] == 'edit') {
                echo "<div class='alert alert-info'>Berhasil Mengedit Gallery</div>";
            } elseif ($_GET['pesan'] == 'hapus') {
                echo "<div class='alert alert-danger'>Berhasil Menghapus Gallery</div>";
            } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="tambah_gallery_act.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
<div class="col-lg-12">
                    <label>Gallery Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                    <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            
                    </div>


                  </div>
                  <div class="row">
                    <div class="col-lg-12 pr-1">
                      <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                  </div>
                </form>
        </div>
        </div>
              </div>
            </div>

            <div class="content">
  <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Gallery List</h5>
              </div>
              <div class="card-body">
              <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Gallery Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM gallery");
            $no = 1;
            while ($tampil = mysqli_fetch_array ($data))
            {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img style="height:50px;" width="120px" src="../assets/img/upload/<?php echo $tampil["img"];?>" alt=""></td>
                <td><a href="admin.php?p=ganti_gallery&id=<?= $tampil['id'];?>" type="button" class="btn btn-info"><i class="fas fa-pen-alt"> </i>Edit</a> | <a href="hapus_gallery.php?id=<?= $tampil['id']; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Hapus</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
        </div>
        </div>
              </div>
            </div>
            </div>
        <!--  -->
        
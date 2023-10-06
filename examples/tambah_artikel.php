<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Tambah Artikel <hr></h3>
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
                <h5 class="title">Tambah Artikel</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'tambah') {
                  echo "<div class='alert alert-success'>Berhasil Menambah Satu Artikel</div>";
              } elseif ($_GET['pesan'] == 'edit') {
                echo "<div class='alert alert-info'>Berhasil Mengedit Artikel</div>";
            } elseif ($_GET['pesan'] == 'hapus') {
                echo "<div class='alert alert-danger'>Berhasil Menghapus Artikel</div>";
            } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="tambah_artikel_act.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
<div class="col-lg-12">
                    <label>Artikel Image</label>
                    </div>
                    <div class="col-lg-12 pr-1">
                    <div class="input-group">
                    <input type="file" class="form-control" name="img" id="customFile">
                            </div>
                            
                    </div>
                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Artikel Title</label>
                        <input type="text" name="title_artikel" class="form-control" placeholder="Artikel Title">
                      </div>
                    </div>

                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Artikel Content</label>
                        <textarea id="myTextarea" name="content_artikel" maxlength="999"></textarea>
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
                <h5 class="title">Artikel List</h5>
              </div>
              <div class="card-body">
              <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Artikel Image</th>
                <th>Artikel Title</th>
                <th>Artikel Content</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM artikel");
            $no = 1;
            while ($tampil = mysqli_fetch_array ($data))
            {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img style="height:50px;" width="120px" src="../assets/img/upload/<?php echo $tampil["img"];?>" alt=""></td>
                <td><?= $tampil['title_artikel'];?></td>
                <td><?= $tampil['content_artikel'];?></td>
                <td><a href="admin.php?p=ganti_artikel&id=<?= $tampil['id'];?>" type="button" class="btn btn-info"><i class="fas fa-pen-alt"> </i>Edit</a> | <a href="hapus_artikel.php?id=<?= $tampil['id']; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Hapus</a></td>
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
        
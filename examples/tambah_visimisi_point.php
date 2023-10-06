<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <h2>Tambah Visi Misi Point <hr></h3>
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
                <h5 class="title">Tambah Visi Misi</h5>
              </div>
              <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'tambah') {
                  echo "<div class='alert alert-success'>Berhasil Menambah Visi Misi</div>";
              } elseif ($_GET['pesan'] == 'edit') {
                echo "<div class='alert alert-info'>Berhasil Mengedit Visi Misi</div>";
            } elseif ($_GET['pesan'] == 'hapus') {
                echo "<div class='alert alert-danger'>Berhasil Menghapus Visi Misi</div>";
            } elseif ($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Gagal Error</div>";
                }
            }
            ?> 
              <div class="card-body">
                <form action="tambah_visimisi_point_act.php" method="POST">
                  <div class="row">

                  <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Visi</label>
                        <input type="text" name="visi_point" class="form-control" placeholder="Visi Point">
                      </div>
                    </div>

                    <div class="col-lg-12 pr-1">
                      <div class="form-group">
                        <label>Misi</label>
                        <input type="text" name="misi_point" class="form-control" placeholder="Misi Point">
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
                <h5 class="title">VISI MISI</h5>
              </div>
              <div class="card-body">
              <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Visi Point</th>
                <th>Misi Point</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM visimisi_point");
            $no = 1;
            while ($tampil = mysqli_fetch_array ($data))
            {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $tampil['visi_point'];?></td>
                <td><?= $tampil['misi_point'];?></td>
                <td><a href="admin.php?p=ganti_visimisi_point&id=<?= $tampil['id'];?>" type="button" class="btn btn-info"><i class="fas fa-pen-alt"> </i>Edit</a> | <a href="hapus_visimisi_point.php?id=<?= $tampil['id']; ?>" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"> </i>Hapus</a></td>
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
        
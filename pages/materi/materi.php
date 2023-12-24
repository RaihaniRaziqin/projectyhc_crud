<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Materi Kursus</h4>
                  <p class="card-description">
                    <a href="?page=materi&aksi=tambahmateri" class="btn btn-primary">Tambah Materi</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Kursus</th>
                          <th>Judul Materi</th>
                          <th>Aksi</th>                       
                        </tr>
                      </thead>

                      <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from tb_materi");
                        while ($data = $sql->fetch_assoc()) {
                      ?>

                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['kode'] ?></td>
                          <td><?php echo $data['judul_materi'] ?></td>
                          <td>
                              <a href="?page=materi&aksi=editmateri&id_materi=<?php echo $data['id_materi'] ?>" data-toggle="tooltip" title="edit" class="btn btn-info btn-sm">Edit</a>
                              <a href="?page=materi&aksi=hapusmateri&id_materi=<?php echo $data['id_materi'] ?>" data-toggle="tooltip" title="hapus" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data ini?')" >Hapus</a>
                             <a href="?page=materi&aksi=detail&id_materi=<?php echo $data['id_materi'] ?>" data-toggle="tooltip" title="detail" class="btn btn-warning btn-sm">Detail</a>

                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
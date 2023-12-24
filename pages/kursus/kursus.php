<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Judul Kursus Online</h4>
                  <p class="card-description">
                    <a href="?page=kursus&aksi=tambahkursus" class="btn btn-primary">Tambah</a>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Kursus</th>
                          <th>Judul Kursus</th>
                          <th>Aksi</th>                       
                        </tr>
                      </thead>

                      <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from tb_kursus");
                        while ($data = $sql->fetch_assoc()) {
                      ?>

                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $data['kode_kursus'] ?></td>
                          <td><?php echo $data['judul_kursus'] ?></td>
                          <td>
                              <a href="?page=kursus&aksi=editkursus&id_kursus=<?php echo $data['id_kursus'] ?>" data-toggle="tooltip" title="edit" class="btn btn-info btn-sm">Edit</a>
                              <a href="?page=kursus&aksi=hapuskursus&id_kursus=<?php echo $data['id_kursus'] ?>" data-toggle="tooltip" title="hapus" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data ini?')" >Hapus</a>
                              <a href="?page=kursus&aksi=detail&id_kursus=<?php echo $data['id_kursus'] ?>&kode_kursus=<?php echo $data['kode_kursus'] ?>" data-toggle="tooltip" title="detail" class="btn btn-warning btn-sm">Detail</a>

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
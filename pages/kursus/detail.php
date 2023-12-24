<?php

    $id = $_GET['id_kursus'];
    $kode = $_GET['kode_kursus'];
    $sql = $koneksi->query("SELECT * FROM tb_kursus WHERE id_kursus = '$id'");
    $tampil = $sql->fetch_assoc();
    

?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DETAIL KURSUS</h4>
                
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <b><label>Kode Kursus</label></b>
                      <p><?php echo $tampil['kode_kursus']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Judul Kursus</label></b>
                      <p><?php echo $tampil['judul_kursus']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Deskripsi Kursus</label></b>
                      <p><?php echo $tampil['deskripsi_kursus']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Durasi Kursus</label></b>
                      <p><?php echo $tampil['durasi_kursus']; ?></p>
                    </div>  
        
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Materi <?php echo $tampil['judul_kursus'] ?></h4>
                  
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul Materi</th>
                          <th>Video Materi Pada <?php echo $tampil['judul_kursus'] ?></th>                       
                        </tr>
                      </thead>

                      <?php
                        $no = 1;
                        $sql1 = $koneksi->query("SELECT * FROM tb_materi WHERE kode='$kode'");
                        while ($materi = $sql1->fetch_assoc()) {

                      ?>

                      <tbody>
                        <tr class="table-info">
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $materi['judul_materi'] ?></td>
                          <td>
                            <?php 
                              $link = $materi['link'];
                              $convertVideo = str_replace("watch?v=", "embed/", $link);
                             ?>
                            <iframe width="200" height="100" src="<?php echo $convertVideo; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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

       

      
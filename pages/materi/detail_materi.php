<?php

    $id = $_GET['id_materi'];
    $sql = $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = '$id'");
    $tampil = $sql->fetch_assoc();
?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DETAIL MATERI</h4>
                
                  <form class="forms-sample" method="POST">
                    <div class="form-group">
                      <b><label>Kode Kursus</label></b>
                      <p><?php echo $tampil['kode']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Judul Materi</label></b>
                      <p><?php echo $tampil['judul_materi']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Deskripsi Materi</label></b>
                      <p><?php echo $tampil['deskripsi_materi']; ?></p>
                    </div>
                    <div class="form-group">
                      <b><label>Video Materi</label></b>
                      
                      <?php 
                        $link = $tampil['link'];
                        $convertVideo = str_replace("watch?v=", "embed/", $link);
                       ?>
                      <iframe width="560" height="315" src="<?php echo $convertVideo; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      
                    </div>           
                  </form>
                </div>
              </div>
            </div>

              
          </div>
        </div>

       

      
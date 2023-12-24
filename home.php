<?php

    $sql = $koneksi->query("SELECT * FROM tb_kursus");

    while ($tampil=$sql->fetch_assoc()) {
        $jumlah_kursus = $sql->num_rows;
    }

    $sql2 = $koneksi->query("SELECT * FROM tb_materi");

    while ($tampil2=$sql2->fetch_assoc()) {
      $jumlah_materi = $sql2->num_rows;
    }
    
?>


<div class="main-panel">        
        <div class="content-wrapper">
        	<h2>Hallo Admin, Selamat Datang</h2> <br>
          <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Jumlah Kursus</p>
                      <p class="fs-30 mb-2"><?php echo $jumlah_kursus; ?> Kasus</p>
                      <a href="?page=kursus"  class="btn btn-info btn-sm">Cek Data</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Jumlah Materi</p>
                      <p class="fs-30 mb-2"><?php echo $jumlah_materi; ?> Materi</p>
                      <a href="?page=materi"  class="btn btn-info btn-sm">Cek Data</a>
                    </div>
                  </div>
                </div>
              </div>
             
        </div>
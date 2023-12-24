<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TAMBAH MATERI KURSUS</h4>
                
                  <form class="forms-sample" method="POST">
                  	<div class="form-group">
                      <label for="exampleInputName1">Kode Kursus</label>
                      <select name="kode">
                        <option> Pilih Kode Kursus </option>
                        <?php 

                          $sql = $koneksi->query("SELECT * FROM tb_kursus");
                          while($data = mysqli_fetch_array($sql)){
                            echo "<option values=$data[kode]> $data[kode_kursus]</option>";
                          }

                         ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Judul Materi</label>
                      <input type="text" class="form-control" name="judul_materi" placeholder="Masukkan Judul Materi" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi Materi</label>
                      <textarea class="form-control" rows="4" name="deskripsi_materi" placeholder="Masukkan Deskripsi Materi" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Link Materi</label>
                      <input type="text" class="form-control" name="link" placeholder="Masukkan Link Materi" required>
                    </div>

					          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    <a href="?page=materi&aksi=tambahmateri" class="btn btn-warning" type="reset">Reset</a>
                    <a href="?page=materi" class="btn btn-danger" type="cancel">Cancel</a>

                   
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>


<?php

	if (isset($_POST['simpan'])) {
		$kode = $_POST['kode'];
		$judul = $_POST['judul_materi'];
		$deskripsi = $_POST['deskripsi_materi'];
		$link = $_POST['link'];

		$sql = $koneksi->query("INSERT INTO tb_materi (kode, judul_materi, deskripsi_materi, link)VALUES('$kode','$judul','$deskripsi','$link')");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil Disimpan");
					window.location.href ="?page=materi";	
				</script>

			<?php
		}
	}

?>
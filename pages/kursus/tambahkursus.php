<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TAMBAH KELAS KURSUS</h4>
                
                  <form class="forms-sample" method="POST">
                  	<div class="form-group">
                      <label for="exampleInputName1">Kode Kursus</label>
                      <input type="text" class="form-control" name="kode_kursus" placeholder="Masukkan Kode Kursus" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Judul Kursus</label>
                      <input type="text" class="form-control" name="judul_kursus" placeholder="Masukkan Judul Kursus" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi Kursus</label>
                      <textarea class="form-control" rows="4" name="deskripsi_kursus" placeholder="Masukkan Deskripsi Kursus" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Durasi Kursus</label>
                      <input type="text" class="form-control" name="durasi_kursus" placeholder="Masukkan Durasi Kursus" required>
                    </div>

				          	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    <a href="?page=kursus&aksi=tambahkursus" class="btn btn-warning" type="reset">Reset</a>
                    <a href="?page=kursus" class="btn btn-danger" type="cancel">Cancel</a>

                   
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>


<?php

	if (isset($_POST['simpan'])) {
		$kode = $_POST['kode_kursus'];
		$judul = $_POST['judul_kursus'];
		$deskripsi = $_POST['deskripsi_kursus'];
		$durasi = $_POST['durasi_kursus'];

		$sql = $koneksi->query("INSERT INTO tb_kursus (kode_kursus, judul_kursus, deskripsi_kursus, durasi_kursus)VALUES('$kode','$judul','$deskripsi','$durasi')");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil Disimpan");
					window.location.href ="?page=kursus";	
				</script>

			<?php
		}
	}

?>
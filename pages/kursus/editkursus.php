<?php

    $id_kursus_baru = $_GET['id_kursus'];
    $sql = $koneksi->query("SELECT * FROM tb_kursus WHERE id_kursus = '$id_kursus_baru'");
    $tampil = $sql->fetch_assoc();
    
?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">EDIT KELAS KURSUS</h4>
                
                  <form class="forms-sample" method="POST">
                  	<div class="form-group">
                      <label for="exampleInputName1">Kode Kursus</label>
                      <input type="text" class="form-control" name="kode_kursus" value="<?php echo $tampil['kode_kursus'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Kursus</label>
                      <input type="text" class="form-control" name="judul_kursus" value="<?php echo $tampil['judul_kursus'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi Kursus</label>
                      <p><?php echo $tampil['deskripsi_kursus']; ?></p><br>
                      <p>Masukkan Deskripsi Yang Diedit</p>
                      <textarea class="form-control" rows="4" name="deskripsi_kursus" value="<?php echo $tampil['deskripsi_kursus'] ?>" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Durasi Kursus</label>
                      <input type="text" class="form-control" name="durasi_kursus" value="<?php echo $tampil['durasi_kursus'] ?>">
                    </div>

					<input type="submit" name="edit" value="Edit" class="btn btn-primary">
                   
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>


<?php

	if (isset($_POST['edit'])) {
		
		$judul = $_POST['judul_kursus'];
		$deskripsi = $_POST['deskripsi_kursus'];
		$durasi = $_POST['durasi_kursus'];

		$sql = $koneksi->query("UPDATE tb_kursus SET judul_kursus='$judul', deskripsi_kursus='$deskripsi', durasi_kursus='$durasi' WHERE id_kursus='$id_kursus_baru'");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil Diedit");
					window.location.href ="?page=kursus";	
				</script>

			<?php
		}
	}

?>

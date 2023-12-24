<?php

    $id_materi_baru = $_GET['id_materi'];
    $sql = $koneksi->query("SELECT * FROM tb_materi WHERE id_materi = '$id_materi_baru'");
    $tampil = $sql->fetch_assoc();
    
?>

<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">EDIT MATERI KURSUS</h4>
                
                  <form class="forms-sample" method="POST">
                  	<div class="form-group">
                      <label for="exampleInputName1">Kode Kursus</label>
                      <input type="text" class="form-control" name="kode" value="<?php echo $tampil['kode'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Materi</label>
                      <input type="text" class="form-control" name="judul_materi" value="<?php echo $tampil['judul_materi'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi Materi</label>
                      <p><?php echo $tampil['deskripsi_materi']; ?></p><br>
                      <p>Masukkan Deskripsi Yang Diedit</p>
                      <textarea class="form-control" rows="4" name="deskripsi_materi" value="<?php echo $tampil['deskripsi_materi'] ?>" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Link Video Materi</label>
                      <input type="text" class="form-control" name="link" value="<?php echo $tampil['link'] ?>">
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
		
		$judul = $_POST['judul_materi'];
		$deskripsi = $_POST['deskripsi_materi'];
		$link = $_POST['link'];

		$sql = $koneksi->query("UPDATE tb_materi SET judul_materi='$judul', deskripsi_materi='$deskripsi', link='$link' WHERE id_materi='$id_materi_baru'");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil Diedit");
					window.location.href ="?page=materi";	
				</script>

			<?php
		}
	}

?>

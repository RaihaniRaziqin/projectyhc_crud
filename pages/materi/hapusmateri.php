<?php

	$id = $_GET['id_materi'];
    $sql = $koneksi->query("DELETE FROM tb_materi WHERE id_materi = '$id'");


  if ($sql){
 
?>

	<script type="text/javascript">
		alert("Data Berhasil Dihapus");
		window.location.href = "?page=materi";	
	</script>


<?php

}

?>
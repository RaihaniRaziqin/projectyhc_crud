<?php

	$id = $_GET['id_kursus'];
    $sql = $koneksi->query("DELETE FROM tb_kursus WHERE id_kursus = '$id'");


  if ($sql){
 
?>

	<script type="text/javascript">
		alert("Data Berhasil Dihapus");
		window.location.href = "?page=kursus";	
	</script>


<?php

}

?>
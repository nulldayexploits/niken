<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
	  $id = $_GET['id'];

    $delete = mysqli_query($mysqli, "DELETE FROM tb_jenis_pelanggaran WHERE id = '$id' ");

	if($delete){		 
     echo '<script language="javascript"> alert("Berhasil Hapus Jenis Pelanggaran!"); window.location.href = "'.$base_url_back.'/view_jenis_pelanggaran.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>

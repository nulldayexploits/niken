<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
	  $id = $_GET['id'];

    $delete = mysqli_query($mysqli, "UPDATE tb_laporan set status = 'SEDANG DIPROSES' WHERE id = '$id' ");

	if($delete){		 
     echo '<script language="javascript"> alert("Berhasil Dipindahkan Ke Tahap Proses!"); window.location.href = "'.$base_url_back.'/view_proses_laporan.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>

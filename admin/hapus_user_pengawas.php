<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
	  $id = $_GET['id'];

    $delete = mysqli_query($mysqli, "DELETE FROM tb_user WHERE id = '$id' ");

	if($delete){		 
     echo '<script language="javascript"> alert("Berhasil Hapus User Pengawas!");  window.location.href = "'.$base_url_back.'/view_user_pengawas.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>

<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
    $id = $_GET['id'];
	  $q  = $_GET['q'];

    $delete = mysqli_query($mysqli, "UPDATE tb_laporan set status = '$q' WHERE id = '$id' ");

	if($delete){		 
     echo '<script language="javascript"> alert("Berhasil Mengubah Proses!"); window.location.href = "'.$base_url_back.'/'.$_GET['redto'].'.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>

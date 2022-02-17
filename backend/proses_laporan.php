<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

  include('config/connect-db.php');
  include('config/base-url.php');  

	 
    $id = $_GET['id'];
	  $q  = $_GET['q'];
    $redto = $_GET['redto'];

    $delete = mysqli_query($mysqli, "UPDATE tb_laporan set status = '$q' WHERE id = '$id' ");
 

 if($result){ 
       
       $res[] = [
            "code" => 200,
            "msg" => "Status Laporan Berhasil Diubah!",
            "redirect_to" => $redto
        ];

  }else{

       $res[] = [
            "code" => 500,
            "msg" => "Status Laporan Gagal Diubah!",
            "redirect_to" => $redto
        ];
  
  }

  echo json_encode($res);

?>

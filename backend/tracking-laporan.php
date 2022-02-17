<?php
 
 header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../admin/config/connect-db.php';
include '../admin/config/base-url.php';

  $no = 1;
  $nomor_identitas  = $_POST['nomor_identitas'];
  $result = mysqli_query($mysqli, "SELECT * FROM tb_laporan WHERE nomor_identitas = '$nomor_identitas'");
 
   while($data = mysqli_fetch_array($result)) { 

     $dt[]=[
            "no"=>$no,
            "peristiwa"=>$data["peristiwa"],
            "hari_tgl"=>$data["hari_tgl"].' Jam '.$data['waktu'],
            "identitas"=>$data['nama'].' <br>No Identitas: '.$data['nomor_identitas'],
            "status"=>$data["status"]
          ];
  
   $no++;

   //$data[] = ['data'=>$dt];

   echo json_encode($dt); 
  
  } 

?>  



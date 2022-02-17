<?php
  $no = 1;
  $result = mysqli_query($mysqli, "SELECT * FROM tb_laporan WHERE status = 'BELUM DIPROSES'");
  while($data = mysqli_fetch_array($result)) {

    $dt[]=[
        "no"=>$no,
        "peristiwa"=>$data["peristiwa"],
        "hari_tgl"=>$data["hari_tgl"].' Jam '.$data['waktu'],
        "identitas"=>$data['nama'].' <br>No Identitas: '.$data['nomor_identitas'],
        "jenis_laporan"=>$data["jenis_laporan"],
        "status"=>$data["status"]
      ];
  
   $no++;

   echo json_encode($dt); 
  
  } 

?>  
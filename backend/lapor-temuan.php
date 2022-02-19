<?php 

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../admin/config/connect-db.php';
include '../admin/config/base-url.php';

  $nama                 = $_POST['nama'];
  $nomor_identitas      = $_POST['nomor_identitas'];
  $tempat_tgl_lahir     = $_POST['tempat_tgl_lahir'];
  $jenis_kelamin        = $_POST['jenis_kelamin'];
  $pekerjaan_or_jabatan = $_POST['pekerjaan_or_jabatan'];
  $kewarganegaraan      = $_POST['kewarganegaraan'];
  $alamat               = $_POST['alamat'];

  $peristiwa            = $_POST['peristiwa'];
  $tempat_kejadian      = $_POST['tempat_kejadian'];
  $waktu                = $_POST['waktu'];
  $hari_tgl             = $_POST['hari_tgl'];
  $terlapor             = $_POST['terlapor'];
  $alamat_terlapor      = $_POST['alamat_terlapor'];

  $saksi_1_nama         = $_POST['saksi_1_nama'];
  $saksi_1_no_telp      = $_POST['saksi_1_no_telp'];
  $saksi_2_nama         = $_POST['saksi_2_nama'];
  $saksi_2_no_telp      = $_POST['saksi_2_no_telp'];

  $asal_laporan_prov    = $_POST['asal_laporan_prov'];
  $asal_laporan_kabkota = $_POST['asal_laporan_kabkota'];
  $asal_laporan_kec     = $_POST['asal_laporan_kec'];
  $asal_laporan_desa    = $_POST['asal_laporan_desa'];

  $berkas1              = $_FILES['bukti']['name'];
  $tmp_berkas1          = $_FILES['bukti']['tmp_name'];
  $bukti                = "admin/berkas/".$berkas1;
  
  if (move_uploaded_file($tmp_berkas1, $bukti)) {
    $bukti = $bukti;
  } else {
    $bukti = '';
  }

  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "INSERT INTO tb_laporan 
                                  (id, nama, nomor_identitas, tempat_tgl_lahir, jenis_kelamin, pekerjaan_or_jabatan, kewarganegaraan, alamat, peristiwa, tempat_kejadian, waktu, hari_tgl, terlapor, alamat_terlapor, saksi_1_nama, saksi_1_no_telp, saksi_2_nama, saksi_2_no_telp, bukti, status, jenis_laporan, asal_laporan_prov, asal_laporan_kabkota, asal_laporan_kec, asal_laporan_desa) 
                               VALUES(null, '$nama', '$nomor_identitas', '$tempat_tgl_lahir', '$jenis_kelamin', '$pekerjaan_or_jabatan', '$kewarganegaraan', '$alamat', '$peristiwa', '$tempat_kejadian', '$waktu', '$hari_tgl', '$terlapor', '$alamat_terlapor', '$saksi_1_nama', '$saksi_1_no_telp', '$saksi_2_nama', '$saksi_2_no_telp', '$bukti', 'BELUM DIPROSES', 'TEMUAN (B.2)', '$asal_laporan_prov', '$asal_laporan_kabkota', '$asal_laporan_kec', '$asal_laporan_desa')");
  

  if($result){ 
       
       $res[] = [
            "code" => 200,
            "msg" => "Laporan Berhasil Dimasukkan!"
        ];

  }else{

       $res[] = [
            "code" => 500,
            "msg" => "Laporan Gagal Dimasukkan! "
        ];
  
  }

  echo json_encode($res);



?>
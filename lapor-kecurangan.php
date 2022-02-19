<?php include "template/top.php"; ?>
<?php include "profile.php"; ?>

<form action="" method="POST" enctype="multipart/form-data">
    
    <!-- Content -->
    <main>
      <div class="container">
        <div class="form"> 
          <h5 id="lap-kec" class="mt-4 mb-3"><u>Penerimaan Laporan <br>(Formulir B.1)</u></h5>
          
          Data Asal Kejadian
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Provinsi" value="<?php echo $profile; ?>" readonly>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="asal_laporan_kabkota" placeholder="Kabupaten/Kota">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="asal_laporan_kec" placeholder="Kecamatan">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="asal_laporan_desa" placeholder="Desa/Kelurahan">
          </div>
          
          <br> 

          Data Pelapor
          <div class="mb-3">
            <input type="text" class="form-control" name="nama" placeholder="Nama Pelapor">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="nomor_identitas" placeholder="Nomor Identitas">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="tempat_tgl_lahir" placeholder="Tempat Tanggal Lahir">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="pekerjaan_or_jabatan" placeholder="Pekerjaan">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>

          <br>

          Peristiwa Yang Dilaporkan
          <div class="mb-3">
            <textarea class="form-control" name="peristiwa" rows="3" placeholder="Peristiwa"></textarea>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="tempat_kejadian" placeholder="Tempat Kejadian">
          </div>
          <div class="mb-3">
            <input type="time" class="form-control" name="waktu" placeholder="Waktu">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="hari_tgl" placeholder="Hari Dan Tanggal">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="terlapor" placeholder="Terlapor">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="alamat_terlapor" placeholder="Alamat Terlapor">
          </div>

          <br>

          Saksi-saksi
          <div class="mb-3">
            <input type="text" class="form-control" name="saksi_1_nama" placeholder="Saksi 1 - Nama Lengkap">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="saksi_1_no_telp" placeholder="Saksi 1 - No Telp">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="saksi_2_nama" placeholder="Saksi 2 - Nama Lengkap">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="saksi_2_no_telp" placeholder="Saksi 1 - No Telp">
          </div>

          <br>

          Bukti-bukti (Upload Berkas Berupa Foto Dan Dokumen)
          <div class="mb-3">
            <input type="file" class="form-control" name="bukti" placeholder="bukti">
          </div>



          <button type="submit" name="Submit" class="btn btn-danger login">KIRIM</button>
          <!-- <button type="button" class="btn btn-danger" id="btn-clear-cache">clear chace</button> -->
        </div>
      </div>

      
    </main>
  </div>

</form>


<?php include "template/bottom.php"; ?>



<?php

  if(isset($_GET['sts'])){

    echo '<script language="javascript"> alert("Berhasil Input Lapor Kecurangan!"); </script>';

   }

?>



<?php 

include 'admin/config/connect-db.php';
include 'admin/config/base-url.php';

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Submit'])) {

  // Memasukkan Data Inputan ke Varibael
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

  $berkas1              = $_FILES['bukti']['name'];
  $tmp_berkas1          = $_FILES['bukti']['tmp_name'];
  $bukti                = "admin/berkas/".$berkas1;

  $asal_laporan_kabkota = $_POST['asal_laporan_kabkota'];
  $asal_laporan_kec     = $_POST['asal_laporan_kec'];
  $asal_laporan_desa    = $_POST['asal_laporan_desa'];
  
  if (move_uploaded_file($tmp_berkas1, $bukti)) {
    $bukti = $bukti;
  } else {
    $bukti = '';
  }

  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "INSERT INTO tb_laporan 
                                  (id, nama, nomor_identitas, tempat_tgl_lahir, jenis_kelamin, pekerjaan_or_jabatan, kewarganegaraan, alamat, peristiwa, tempat_kejadian, waktu, hari_tgl, terlapor, alamat_terlapor, saksi_1_nama, saksi_1_no_telp, saksi_2_nama, saksi_2_no_telp, bukti, status, jenis_laporan, asal_laporan_prov, asal_laporan_kabkota, asal_laporan_kec, asal_laporan_desa) 
                               VALUES(null, '$nama', '$nomor_identitas', '$tempat_tgl_lahir', '$jenis_kelamin', '$pekerjaan_or_jabatan', '$kewarganegaraan', '$alamat', '$peristiwa', '$tempat_kejadian', '$waktu', '$hari_tgl', '$terlapor', '$alamat_terlapor', '$saksi_1_nama', '$saksi_1_no_telp', '$saksi_2_nama', '$saksi_2_no_telp', '$bukti', 'BELUM DIPROSES', 'LAPORAN (B.1)', '$profile', '$asal_laporan_kabkota', '$asal_laporan_kec', '$asal_laporan_desa')");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> window.location.href = "'.$base_url_front.'/lapor-kecurangan.php?sts=true" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>
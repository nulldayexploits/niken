<?php include "template/top.php"; ?>


<?php
  
  $id = $_GET['id'];

?>
    <!-- Content -->
    
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Penetepan Jenis Pelanggaran</h5>
        </div>
        <br><br>
        <div class="form" style="width: 800px;">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <div class="mb-3">
              <select name="jenis_pelanggaran" class="form-control">
                <option>- Pilih -</option>
                <?php
                  $result = mysqli_query($mysqli, "SELECT * FROM tb_jenis_pelanggaran");
                  while($data = mysqli_fetch_array($result)) { 
                ?>
                <option value="<?php echo $data['jenis_pelanggaran']; ?>"><?php echo $data['jenis_pelanggaran']; ?></option>
                <?php } ?>
              </select>
            </div>

            <button type="submit" name="Submit" class="btn btn-danger login">SELESAI</button>
          </form>
        </div>
      </div>

    </main>



  </div>


<?php include "template/bottom.php"; ?>





<?php 

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Submit'])) {


  
  // Memasukkan Data Inputan ke Varibael
  $id                = $_POST['id'];
  $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "UPDATE tb_laporan 
                                    SET jenis_pelanggaran = '$jenis_pelanggaran',
                                        status     = 'SELESAI DITETAPKAN SEBAGAI PELANGGARAN $jenis_pelanggaran'
                                    WHERE  id = '$id'");
  
 
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Laporan Selesai Di Tindak Lanjuti!"); window.location.href = "'.$base_url_back.'/view_kumpulan_laporan.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>

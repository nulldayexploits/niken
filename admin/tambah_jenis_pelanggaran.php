<?php include "template/top.php"; ?>

    <!-- Content -->
    
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Tambah Jenis Pelanggaran</h5>
        </div>
        <br><br>
        <div class="form" style="width: 800px;">
          <form action="" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" name="jenis_pelanggaran" placeholder="Masukkan Jenis Pelaggaran...">
            </div>
            <button type="submit" name="Submit" class="btn btn-danger login">SIMPAN</button>
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
  $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "INSERT INTO tb_jenis_pelanggaran (id, jenis_pelanggaran) 
                               VALUES(null, '$jenis_pelanggaran')");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Berhasil Tambah Jenis Pelanggaran!"); window.location.href = "'.$base_url_back.'/view_jenis_pelanggaran.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>

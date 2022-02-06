<?php include "template/top.php"; ?>

    <!-- Content -->
    
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Tambah User Pengawas</h5>
        </div>
        <br><br>
        <div class="form" style="width: 800px;">
          <form action="" method="post">
            <div class="mb-3">
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap...">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="username" placeholder="Masukkan Username...">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password...">
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
  $nama_lengkap = $_POST['nama_lengkap'];
  $username     = $_POST['username'];
  $password     = MD5($_POST['password']);
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "INSERT INTO tb_user (id, nama_lengkap, hak_akses, username, password) 
                               VALUES(null, '$nama_lengkap', 'PENGAWAS', '$username', '$password')");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Berhasil Tambah User Pengawas!"); window.location.href = "'.$base_url_back.'/view_user_pengawas.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>

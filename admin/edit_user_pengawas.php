<?php include "template/top.php"; ?>


<?php
  
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "SELECT * FROM tb_user where id = $id");
  $data = mysqli_fetch_array($result);

?>
    <!-- Content -->
    
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Edit User Pengawas</h5>
        </div>
        <br><br>
        <div class="form" style="width: 800px;">
          <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <div class="mb-3">
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap..." value="<?php echo $data['nama_lengkap']; ?>">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="username" placeholder="Masukkan Username..." value="<?php echo $data['username']; ?>">
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


  if($_POST['password']<>""){
  
  // Memasukkan Data Inputan ke Varibael
  $id           = $_POST['id'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $username     = $_POST['username'];
  $password     = MD5($_POST['password']);
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "UPDATE tb_user 
                                    SET nama_lengkap = '$nama_lengkap',
                                        username     = '$username',
                                        password     = '$password'
                                    WHERE  id = '$id'");
  
  }else{
  
  // Memasukkan Data Inputan ke Varibael
  $id           = $_POST['id'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $username     = $_POST['username'];
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "UPDATE tb_user 
                                    SET nama_lengkap = '$nama_lengkap',
                                        username     = '$username'
                                    WHERE  id = '$id'");
  

  }


  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Berhasil Edit User Pengawas!"); window.location.href = "'.$base_url_back.'/view_user_pengawas.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>

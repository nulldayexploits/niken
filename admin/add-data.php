<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Data</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- PWA Manifest -->
  <link rel="manifest" href="pwa/manifest.json"></link>
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h6 text-white my-2 title-sidenav">
        <div class="img mb-3">
          <img src="img/logo-ba.png" class="logo-sidebar">
        </div>
        <h5>Admin</h5>
        <h5>. . . . . . . . . . . . . . . .</h5>
      </a>
      <a href="">
        <li href="#" class="nav-link text-white active">
          <i class="bx bxs-dashboard"></i>
          <span class="mx-2">Dashboard</span>
        </li>
      </a>
      <a href="">
        <li href="#" class="nav-link text-white">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Kelola User Pengawas</span>
        </li>
      </a>
      <a href="">
        <li href="#" class="nav-link text-white">
          <i class="bx bx-conversation"></i>
          <span class="mx-2">Jenis Pelanggaran</span>
        </li>
      </a>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5">
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      <a class="btn border-0" id="title"><h5>Sistem Pelaporan Kecurangan Pemilu</h5></a>
      <div class="info">
        <i class='bx bxs-info-circle'></i>
      </div>
    </nav>
    <!--End Top Nav -->
    
    <!-- Content -->
    <main>
      <div class="container">
        <div class="form">
          <img src="img/Bawaslu-login.png" class="logo-login mb-3">
          <div class="mb-3">
            <input type="text" class="form-control" id="nama_pelapor" placeholder="Nama Pelapor">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="no_hp" placeholder="No HP">
          </div>
          <div class="mb-3">
            <input type="date" class="form-control" id="tgl_kejadian" placeholder="Tanggal Kejadian">
          </div>
          <div class="mb-5">
            <textarea class="form-control" id="uraian" rows="3" placeholder="Uraian Laporan"></textarea>
          </div>
          <button type="button" class="btn btn-danger login">KIRIM</button>
          <!-- <button type="button" class="btn btn-danger" id="btn-clear-cache">clear chace</button> -->
        </div>
      </div>

    </main>

  </div>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- JFA PWA Toolkit -->
  <script type="text/javascript" src="pwa/config.js"></script>
  <script type="text/javascript" src="pwa/pwa.js"></script>
  <!-- My Script -->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
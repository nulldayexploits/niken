<?php session_start(); ?>
<?php include 'config/connect-db.php'; ?>
<?php include 'config/auth.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lapor!</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- PWA Manifest -->
  <link rel="manifest" href="pwa/manifest.json"></link>
  <!-- data tables -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
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
        <h5><?php echo $_SESSION['hak_akses']; ?></h5>
        <h5>. . . . . . . . . . . . . . . .</h5>
      </a>
      
      
      <a href="">
        <li href="#" class="nav-link text-white">
          <i class="bx bxs-dashboard"></i>
          <span class="mx-2">Dashboard</span>
        </li>
      </a>

      <?php if($_SESSION['hak_akses'] == "ADMIN"){ ?>

      <a href="view_user_pengawas.php">
        <li href="view_user_pengawas.php" class="nav-link text-white">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Kelola User Pengawas</span>
        </li>
      </a>
      
      <a href="view_jenis_pelanggaran.php">
        <li href="view_jenis_pelanggaran.php" class="nav-link text-white">
          <i class="bx bx-conversation"></i>
          <span class="mx-2">Jenis Pelanggaran</span>
        </li>
      </a>

    <?php }else{ ?>


      <a href="view_kumpulan_laporan.php">
        <li href="view_kumpulan_laporan.php" class="nav-link text-white">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Kumpulan Laporan</span>
        </li>
      </a>
      
      <a href="view_proses_laporan.php">
        <li href="view_proses_laporan.php" class="nav-link text-white">
          <i class="bx bx-conversation"></i>
          <span class="mx-2">Proses Laporan</span>
        </li>
      </a>


    <?php } ?>


    </ul>

  </div>

  <!-- Main Wrapper -->
  <div class="my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      <a class="btn border-0" id="title"><h5>Sistem Pelaporan Kecurangan Pemilu</h5></a>
      <div class="info-admin">
        <a href="config/logout.php" class="btn btn-warning df">LOGOUT</a>
      </div>
    </nav>
    <!--End Top Nav -->

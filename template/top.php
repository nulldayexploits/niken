<?php include '../profile.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lapor!</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!-- data tables -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <!-- PWA Manifest -->
  <link rel="manifest" href="admin/pwa/manifest.json"></link>
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="admin/css/style.css" />
</head>


<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h6 text-white my-2 title-sidenav">
        
        <h5>Menu</h5>
      </a>
      
      

      <a href="lapor-kecurangan.php">
        <li href="lapor-kecurangan.php" class="nav-link text-white">
          <span class="mx-2">Lapor Kecurangan (B1)</span>
        </li>
      </a>
      
      <a href="lapor-temuan.php">
        <li href="lapor-temuan.php" class="nav-link text-white">
          <span class="mx-2">Lapor Temuan (B2)</span>
        </li>
      </a>

      <a href="tracking-laporan.php">
        <li href="tracking-laporan.php" class="nav-link text-white">
          <span class="mx-2">Tracking Laporan</span>
        </li>
      </a>

      <a href="index.php">
        <li href="index.php" class="nav-link text-white">
          <span class="mx-2">Login</span>
        </li>
      </a>


    </ul>

  </div>

  <!-- Main Wrapper -->
  <div class="my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      <a class="btn border-0" id="title"><h5>Layanan Pelaporan Kecurangan Pemilu</h5></a>
    </nav>
    <!--End Top Nav -->

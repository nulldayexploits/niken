<?php include "template/top.php"; ?>

    <!-- Content -->
    <main>
      <div class="container mt-4">
        <div class="head-dt pb-2">
          <h5>Kumpulan Laporan</h5>
        </div>
        <div class="datatable">
          <table id="example" class="table table-striped" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Peristiwa</th>
                <th>Tanggal Dan Waktu</th>
                <th>Pelapor</th>
                <th>Asal Laporan</th>
                <th>Status</th>
                <th>Action</th> 
              </tr>
            </thead>
            <tbody>
              
              <?php
                $no = 1;
                $result = mysqli_query($mysqli, "SELECT * FROM tb_laporan WHERE status != 'BELUM DIPROSES'");
                while($data = mysqli_fetch_array($result)) { 
              ?>
              <tr>
                <td><center><?php echo $no; ?>.</td>
                <td><?php echo $data['peristiwa']; ?></td>
                <td><?php echo $data['hari_tgl']; ?> Jam <?php echo $data['waktu']; ?></td>
                <td><?php echo $data['nama']; ?><br>No Identitas: <?php echo $data['nomor_identitas']; ?></td>
                <td>
                    <b>Prov:</b> <?php echo $data['asal_laporan_prov']; ?><br>
                    <b>Kab/Kota:</b> <?php echo $data['asal_laporan_kabkota']; ?><br>
                    <b>Kec:</b> <?php echo $data['asal_laporan_kec']; ?><br>
                    <b>Desa/Kelurahan:</b> <?php echo $data['asal_laporan_desa']; ?><br>
                </td>
                <td><?php echo $data['status']; ?></td>
                <td>
                  <a href="../<?php echo $data['bukti']; ?>" target="_blank" class="btn btn-success mb-1">Lihat Bukti</a>
                  <?php if($data['status'] == "SEDANG DIPROSES"){ ?>
                  <a href="proses_laporan.php?id=<?php echo $data['id']; ?>&q=DISIDANGKAN&redto=view_kumpulan_laporan" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin Menetapkan Untuk Disidangkan?');">Disidangkan</a>
                  <?php } ?>
                  <?php if($data['status'] == "DISIDANGKAN"){ ?>
                  <a href="selesai_laporan.php?id=<?php echo $data['id']; ?>&q=DISIDANGKAN&redto=view_kumpulan_laporan" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin Menetapkan Pelanggaran Ini?');">Penetapan Pelanggaran</a>
                  <?php } ?>
                </td>
              </tr>
              <?php $no++; } ?>

            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Peristiwa</th>
                <th>Tanggal Dan Waktu</th>
                <th>Pelapor</th>
                <th>Asal Laporan</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>

    </main>
  </div>


<?php include "template/bottom.php"; ?>
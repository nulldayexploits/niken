<?php include "template/top.php"; ?>


    <!-- Content -->
    <main>
      <div class="container">
        <div class="form">
          <h5 id="lap-kec" class="mt-4 mb-3">Login</h5>
          <form action="proses-login.php" method="post">
          <div class="mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>

          <?php if(isset($_GET['sts'])){ ?>
          <span style="font-weight:bold;color:red;">Username atau password anda salah!</span><br><br>
          <?php } ?>
          
          <button type="submit" class="btn btn-danger login">Login</button>
          </form>
          <!-- <button type="button" class="btn btn-danger" id="btn-clear-cache">clear chace</button> -->
        </div>
      </div>

    </main>
  </div>


<?php include "template/bottom.php"; ?>
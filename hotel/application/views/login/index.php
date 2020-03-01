
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- <script src="/js/3.2.1/jquery.min.js"></script> -->
  </head>
  <!--body style="<background-image: url(img/background.jpg);"-->
  <body background="assets\img\bg.jpg">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <div id="formHeader">
          <!--img src="img/icon.png" width="39%" alt="User Icon" /-->
          <p href="#">Selamat Datang</p>
        </div>
        <br>
        <?php if($this->session->flashdata('flash-data')):?>
          <div class="row mt-12">
              <div class="col-md-12">
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      Harap isi <?= $this->session->flashdata('flash-data');?>
                  </div>
              </div>
          </div>
          <?php endif;?>
        <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" autocomplete="off">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password"><br>
            <button type="submit" name="login" class="fadeIn fourth ">Login</button>
          </form>
          <div id="formFooter">
            <p class="underlineHover" href="#">Copyright @ Ikia Hotel</p>
          </div>
        </div>
      </div>
    </body>
  </html>
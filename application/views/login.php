<!DOCTYPE html>
<html>
<head>
  <title>Login | Aplikasi Penggajian</title>
  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class="login-content">
      <form class="user" method="POST" action="<?php echo base_url('login') ?>">
        <img src="<?php echo base_url(); ?>assets/img/avatar.svg">
        <h3 class="title"><font size="5">Silahkan login terlebih dahulu</font></h3>
        <?php echo $this->session->flashdata('pesan')?>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username <?php echo form_error('username', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="text" class="input" name="username">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password <?php echo form_error('password', '<div class="text-small text-danger"> </div>')?></h5>
                    <input type="password" class="input" name="password">
                 </div>
              </div>
              <br>
              <br>
              <button type="submit" class="group">
      <span class="ease absolute">
      </span>
      <span class="ease absolute flex"><svg class="h-2 w-2" fill="none" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path strokeLinecap="round" strokeLinejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
</svg>
</span>
      <span class="invisible relative">Login</span>
    </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>

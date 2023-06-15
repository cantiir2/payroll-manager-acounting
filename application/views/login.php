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
      <form method="POST" action="<?php echo base_url('login') ?>">
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
              <button class="group  relative inline-flex items-center justify-center overflow-hidden rounded-lg bg-black  px-8 py-3 text-base font-medium  text-white transition duration-300 ease-out hover:scale-105 hover:shadow-orange-600 active:translate-y-1">
      <span class="absolute inset-0 bg-gradient-to-r from-orange-400 via-pink-500 to-purple-500 opacity-0 transition duration-300 ease-out group-hover:opacity-100 group-active:opacity-90"></span>
      <span class="relative group-hover:text-white">Login</span>
    </button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
   </head>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Membuat Header/Navbar section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
            <div class="container">
               <a class="navbar-brand" href="#">Gaji Karyawan</a>
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav"> 
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Informasi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2><b><i>PT. Barokah TBK</i></b></h2>
                        </div>
                        <p>Selamat datang di informasi penggajian pegawai <br></p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/dasboard_image.svg'); background-size: 80%; margin-right: -10%;"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2><b>Informasi</b></h2>
               <p></p>
               <p></p>
               <div class="subHeading">
                  Berikut informasi lebih lengkap tentang website <br>informasi penggajian karyawan PT. Barokah TBK</div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
               background-color: #00BFD8;
               border: solid 1px #c3c3c3;
               border-radius: 10px 10px 10px 10px;
             }

             #panel1 {
               padding: 10px;
               display: none;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/tentang.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Tentang Website</font></b></i></div>
                           <div id="flip1"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel1">Aplikasi ini digunakkan untuk membantu HRD untuk koleksi data penggajian pegawai/karyawan</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/administrator.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Halaman Admin</font></b></i></div>
                           <div id="flip2"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel2">Administrator dapat mengelola data pada website, halaman administrator terdapat informasi singkat mengenai data, terdapat data pegawai untuk pengelolaan pegawai, terdapat data jabatan untuk pengelolaan jabatan, terdapat data transaksi berupa sub menu data gaji, terdapat data laporan yang memiliki sub menu laporan gaji, cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/karyawan.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Halaman Karyawan</font></b></i></div>
                           <div id="flip3"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel3">Halaman karyawan terdapat informasi tentang absensi kehadiran dan cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #c3c3c3;
                     border-radius: 10px 10px 10px 10px;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                  }
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <div class="title"><font size="4"><b><i>Fitur Lainnya</font></b></i></div>
                           <div id="flip4"><font color="white">Baca Selengkapnya</font></div>
                           <div id="panel4">Cetak slip gaji, lupa password, login karyawan</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="Footer" id="Footer">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  Copyright &copy; Mochamad Alifian Hedardi Kadarusman | Penggajian 2023 - All Rights Reserved
               </div>
            </div>
         </div>
      </div>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
   </body>
</html>
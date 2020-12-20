<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
<?php
include ("login/koneksi/koneksi.php");
?>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Kopian Malang</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/favico_kopianmalang.jpg" type="image/x-icon" />
   <link rel="apple-touch-icon" href="#" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- Pogo Slider CSS -->
   <link rel="stylesheet" href="css/pogo-slider.min.css" />
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css" />
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style>
      input[type="text"]::placeholder {

         /* Firefox, Chrome, Opera */
         text-align: center ;
      }

      input[type="email"]::placeholder {

         /* Internet Explorer 10-11 */
         text-align: center;
      }

      textarea[type="text"]::placeholder {

         /* Microsoft Edge */
         text-align: center;
      }
   </style>
   <script>
      $(document).ready(function () {
         // Add smooth scrolling to all links
         $("a").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
               // Prevent default anchor click behavior
               event.preventDefault();
               // Store hash
               var hash = this.hash;
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                  scrollTop: $(hash).offset().top
               }, 800, function () {
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
               });
            } // End if
         });
      });
   </script>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
   <!-- LOADER -->
   <div id="preloader">
      <div class="loader">
         <img src="images/loader.gif" alt="#" />
      </div>
   </div>
   <!-- END LOADER -->
   <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="kedai/kedai.php">Halaman Kedai</a></li>
               <li><a href="login/login.php">Login</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="index.php"><img src="images/main_logo.png" /></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img
                           src="images/menu_icon.png"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->
         <!-- Start Banner -->
         <div class="ulockd-home-slider">
            <div class="container-fluid">
               <div class="row">
                  <div class="pogoSlider" id="js-main-slider">
                     <div class="pogoSlider-slide" style="background-image:url(images/slider1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div id="section1" class="main slide_text">
                                    <h3>KOPIAN</h3>
                                    <h4>MALANG</h4>
                                    <h6>Yuk cari tempat ngopi terbaik di kota Malang</h6>
                                    <br>
                                    <a class="readmore_bt" href="#section2"></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider2.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div id="section1" class="main slide_text">
                                    <h3>KOPIAN</h3>
                                    <h4>MALANG</h4>
                                    <h6>Yuk cari tempat ngopi terbaik di kota Malang</h6>
                                    <br>
                                    <a class="readmore_bt" href="#section2"></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(images/slider3.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div id="section1" class="main slide_text">
                                    <h3>KOPIAN</h3>
                                    <h4>MALANG</h4>
                                    <h6>Yuk cari tempat ngopi terbaik di kota Malang</h6>
                                    <br>
                                    <a class="readmore_bt" href="#section2"></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .pogoSlider -->
               </div>
            </div>
         </div>
         <!-- End Banner -->
         <!-- section -->
         <div id="section2" class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div id="#down" class="heading_main text_align_center">
                           <h2>Fitur Website</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                        <div class="full icon">
                           <img class="default-block" src="images/icon_1.png" alt="#" />
                           <img class="default-none" src="images/icon_1w.png" alt="#" />
                        </div>
                        <div class="full">
                           <h4>Menu dan Harga</h4>
                        </div>
                        <div class="full">
                           <p>Merekomendasikan Kedai Kopi berdasarkan daftar menu yang beraneka ragam beserta harganya
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                        <div class="full icon">
                           <img class="default-block" src="images/icon_2.png" alt="#" />
                           <img class="default-none" src="images/icon_2w.png" alt="#" />
                        </div>
                        <div class="full">
                           <h4>Fasilitas</h4>
                        </div>
                        <div class="full">
                           <p>Merekomendasikan Kedai Kopi dengan semua fasilitas yang ada seperti Wifi, Colokan, Ac, dll
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                        <div class="full icon">
                           <img class="default-block" src="images/icon_3.png" alt="#" />
                           <img class="default-none" src="images/icon_3w.png" alt="#" />
                        </div>
                        <div class="full">
                           <h4>Keindahan</h4>
                        </div>
                        <div class="full">
                           <p>Merekomendasikan Kedai Kopi dengan kebersihan dan keindahan yang diinginkan</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                        <div class="full icon">
                           <img class="default-block" src="images/icon_4.png" alt="#" />
                           <img class="default-none" src="images/icon_4w.png" alt="#" />
                        </div>
                        <div class="full">
                           <h4>Popularitas</h4>
                        </div>
                        <div class="full">
                           <p>Mencari kedai kopi dengan Rating terbaik berdasarkan ulasan Google</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->

         </br></br></br></br></br></br></br>
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full center">
                        <a class="morebawah" href="kedai/sorting.php"></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <form method="POST" class="contact_form_inner contact_section" action="">
                        <div class="heading_small center">
                           <h4>Tentang Kami</h4>
                        </div>
                        <fieldset>
                           <center><div class="field" style="width: 90%;">
                           Politeknik Negeri Malang (Polinema) awalnya bernama Program Pendidikan Diploma Bidang Teknik, 
                           Universitas Brawijaya. Polinema dibuka berdasarkan Surat Keputusan Dirjen DIKTI, MENDIKBUD No.03/DJ/Kep/1979 yang 
                           didirikan oleh Pemerintah Indonesia melalui dana Bank Dunia. Pada tahun 1982, Polinema hanya membuka empat jurusan 
                           yakni Teknik Elektronika, Teknik Listrik, Teknik Mesin, dan Teknik Sipil.Saat ini, sudah lebih dari 50 program studi 
                           yang dibagi menjadi dua jenjang pendidikan, yaitu program Diploma (D3) dan juga Sarjana Sain Terapan (SST). 
                           Bahkan, program studi Teknik Elektro juga menyediakan program pendidikan Magister Terapan yang setara dengan program 
                           Magister (S2) dengan masa pendidikan 2 tahun atau 4 semester.Politeknik Negeri Malang (Polinema) awalnya bernama 
                           Program Pendidikan Diploma Bidang Teknik, Universitas Brawijaya. Politeknik Negeri Malang.
                           </div></center></br>
                        </fieldset>
                     </form>
                  </div>
                  <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6" style="height: 100%;">
                     <form method="POST" class="contact_form_inner contact_section" action="">
                        <div class="heading_small center">
                           <h4>Kritik & Saran</h4>
                        </div>
                        <fieldset>
                           <center><div class="field" style="width: 90%;">
                              <input class="form-control" type="text" name="nama" placeholder="Nama" />
                           </div>
                           <div class="field" style="width: 90%;">
                              <input class="form-control" type="email" name="email" placeholder="Email" />
                           </div>
                           <div class="field" style="width: 90%;">
                              <textarea class="form-control" type="text" name="pesan" placeholder="Pesan"></textarea>
                           </div>
                           <div class="field center" style="width: 90%;">
                              <button type="submit" name="simpan" value="Kirim" class="margin-top_30">Kirim</button></br>
                           </div></center></br>
                        </fieldset>
                     </form>
                  </div>

                  <?php
if(isset($_POST['simpan'])){
	$s=mysqli_query($conn, "insert into kritiksaran (nama_kritiksaran,email_kritiksaran,pesan_kritiksaran) values('$_POST[nama]','$_POST[email]','$_POST[pesan]')");
	if($s){
      echo "<script>alert('Kritik Saran Terkirim'); window.open('index.php','_self');</script>";
	}
}
?>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box">
            <div class="container">

               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Kontak</h2>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                        <p>Address<br><small>Jl. Soekarno Hatta No.9,<br>Jatimulyo, Kec. Lowokwaru,<br>Kota Malang, Jawa
                              Timur, <br>Kode Pos 65141</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+62 383 3722 987<br>+62 823 3547 7259<br>+62 821 4045 3418<br>08:00 am -
                              05:00 pm</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                        <p>Email<br><small>ilyproject@gmail.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                        <p>Social media</p>
                        <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2020 design by ILY Project</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
               $('#sidebar, #content').toggleClass('active');
               $('.collapse.in').toggleClass('in');
               $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
         });
      </script>
</body>

</html>
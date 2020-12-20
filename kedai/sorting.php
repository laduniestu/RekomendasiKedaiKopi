<?php
   $conn = new mysqli("localhost", "root", "", "spk_kedaikopi");
   if (isset($_POST['update'])) {
      foreach($_POST['bobots'] as $bobot) {
         $index = $bobot[0];
         $newbobot = $bobot[1];
         $conn->query("UPDATE kriteria SET bobot = '$newbobot' WHERE id_kriteria='$index'");
      }
      exit('success');
   }
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
   <?php
include ("../login/koneksi/koneksi.php");
?>
   <script
      src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB1ZLvGpp-airz-0ufnyyWZdDBPaW24A50&signed_in=true&libraries=places">
   </script>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Kopian Malang</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="../images/favico_kopianmalang.jpg" type="image/x-icon" />
   <link rel="apple-touch-icon" href="#" />
   <!-- Bootstrap CSS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- Pogo Slider CSS -->
   <link rel="stylesheet" href="css/pogo-slider.min.css" />
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script>
      $(document).ready(function () {
         $('[data-toggle="popover"]').popover();
      });
   </script>
   <style>
      input[type="text"]::placeholder {
         /* Firefox, Chrome, Opera */
         text-align: center;
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
               <li><a href="../index.php">Home</a></li>
               <li><a href="../kedai/kedai.php">Halaman Kedai</a></li>
               <li><a href="../login/login.php">Login</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- section -->
         <div class="output">
            <div id="section2" class="section about_section layout_padding dash_bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full"></br></br></br>
                           <div id="#down" class="heading_main text_align_center">
                              <h2>Pilih urutan </h2>
                           </div>
                           <table class="table table-stripped table-hover table-bordered">
                              <tbody>
                                 <?php
                                    $sql = $conn->query("SELECT id_kriteria, nama_kriteria, bobot FROM kriteria ORDER BY bobot");
                                    while($data = $sql->fetch_array()) {
                                       $result = preg_replace("/[^a-zA-Z]/", " ", $data['nama_kriteria']);
                                       echo '
                                          <tr data-index="'.$data['id_kriteria'].'" data-bobot="'.$data['bobot'].'">
                                             <td align="center">
                                             <strong style="font-size: 25px;">'.$result.'</strong><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                             </td>
                                          </tr>
                                       ';}
                                 ?>
                              </tbody>
                           </table>
                           <center>
                              <h6>NB : Seret urutan sesuai dengan kebutuhan anda </h6></center><center>
                           <div class="">
                              <a href="hasil.php"  class="margin-top_30" 
                                          style="background: #6B6B6B;
                                          color: #fff;
                                          font-size: 24px;
                                          font-weight: 400;" height= "60px";
                                          width="300px">
                                          Lihat Hasil</a>
                           </div></center>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div></br></br></br></br></br></br></br>
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
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="../index.php"><img src="images/main_logo.png" /></a>
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
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
         function detailKedai(objToProccess) {
            var id = $(objToProccess).attr('id');
            $('.output').load('detailskedai.php?id=' + id);
         }
      </script>
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
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
         integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
         integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
      <script type="text/javascript">
         $(document).ready(function () {
            $('table tbody').sortable({
               update: function (event, ui) {
                  $(this).children().each(function (index) {
                     if ($(this).attr('data-bobot') != (index + 1)) {
                        $(this).attr('data-bobot', (index + 1)).addClass('updated');
                     }
                  });
                  saveNewbobots();
               }
            });
         });
         function saveNewbobots() {
            var bobots = [];
            $('.updated').each(function () {
               bobots.push([$(this).attr('data-index'), $(this).attr('data-bobot')]);
               $(this).removeClass('updated');
            });
            $.ajax({
               url: 'sorting.php',
               method: 'POST',
               dataType: 'text',
               data: {
                  update: 1,
                  bobots: bobots
               },
               success: function (response) {
                  console.log(response);
               }
            });
         }
      </script>
</body>
</html>
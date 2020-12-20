<?php
   include ("../login/koneksi/koneksi.php");
   $id=$_GET['id'];
   $q = "select * from alternatif where id_alternatif='$id'";
   $query = mysqli_query($conn,$q)or die(mysql_error);
   $data = mysqli_fetch_assoc($query);
?>

<script src="google-places.js"></script>
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
<script>
   jQuery(document).ready(function() {
      $("#google-reviews").googlePlaces({
         placeId: 'ChIJXdEs0qkp1i0R-ap9maeaxFU',
         render: ['reviews'],
         min_rating: 5,
         max_rows: 0
      });
   });
</script>

<div class="ulockd-home-slider">
   <div class="container-fluid"
      style="background-image:url(foto_kedai/<?= $data["foto_kedai1"]; ?>); background-size:1920px 1080px">
      <div class="row">
         <div class="pogoSlider" id="js-main-slider">
            <div class="">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="section1" class="main slide_text">
                           <h3><?= $data["nm_alternatif"]; ?></h3>
                           <h6><?= $data["alamat_kedai"]; ?></h6>
                           <br>
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
         <?php
            if($data["fasilitas_colokan_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/colokan_hitam.png" alt="#" />
                        <img class="default-none" src="images/colokan_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Colokan Listrik</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["fasilitas_wifi_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/wifi_hitam.png" alt="#" />
                        <img class="default-none" src="images/wifi_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Wifi</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["fasilitas_toilet_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/toilet_hitam.png" alt="#" />
                        <img class="default-none" src="images/toilet_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Toilet</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["fasilitas_kipas_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/ac_hitam.png" alt="#" />
                        <img class="default-none" src="images/ac_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Kipas Angin / AC</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["fasilitas_permainan_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/permainan_hitam.png" alt="#" />
                        <img class="default-none" src="images/permainan_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Permainan</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["fasilitas_parkir_kedai"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/parkir_hitam.png" alt="#" />
                        <img class="default-none" src="images/parkir_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Parkir</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["kebersihan_tempatmerokok"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/rokok_hitam.png" alt="#" />
                        <img class="default-none" src="images/rokok_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>Tempat Merokok</h4>
                     </div>
                  </div>
               </div>
               ';
            }
            if($data["keindahan_pemandangan"]==1){
               echo'
               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                  <div class="full feature_box">
                     <div class="full icon">
                        <img class="default-block" src="images/outdoor_hitam.png" alt="#" />
                        <img class="default-none" src="images/outdoor_hitam.png" alt="#" />
                     </div>
                     <div class="full">
                        <h4>View Outdoor</h4>
                     </div>
                  </div>
               </div>
               ';
            }
         ?>
      </div>
   </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section about_section layout_padding padding_top_0">
   <div class="container">
      <div class="row">
         <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form method="POST" class="contact_form_inner contact_section" action=""></br>
               <a target="_blank" rel="noopener noreferrer" href="<?php echo $data["url_lokasi"]?>"><img class="center_menu" src="images/maps.png" width="30%" height="30%"></a>
               <div class="center"><?php $jambuka= date($data["jambuka"]);$jamtutup= date($data["jamtutup"]); ?>
                  <h4>Buka <?php echo $jambuka ?> - <?php echo $jamtutup ?></h4>
               </div>
               <img class="center_menu" src="foto_menu/<?= $data["foto_menu_kedai"]; ?>" width="95%" height="95%"></br>
            </form>
         </div>
         <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <?php echo $data["url_instagram"] ?>
         </div>
      </div>
   </div>
</div>
<script src="js/custom.js"></script>
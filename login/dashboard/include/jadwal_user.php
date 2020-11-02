<style>
	h5{
		margin-left: 30px;
	}
</style>

<h1>Pengumuman</h1>

<?php  
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> ".$_SESSION['message']."
    </div>";
}
?>



<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Pengumuman Hasil Tes</h4>

                
            <?php include 'db_con.php';
            $sql="SELECT no, nisn, 
                        round(pow(nilai_tes, 0.5),4) as Sij1, 
                        round(pow(gaji, 0.3),4) as Sij2, 
                        round(pow(jarak, 0.2),4) as Sij3,
                        pow(nilai_tes,0.5)*pow(gaji,0.3)*pow(jarak, 0.2) as totalkaliS 


                        FROM kriteria";
                       
           
                ?>
   
      <div class="container">
        <table border="2" width='30%'>
            <thead>
            <tr>
                <th>&nbsp No  </th>
                <th>&nbsp   NISN   </th>
            </tr>
            </thead>
            <tbody>
            <?php include 'db_con.php';
                
                        $sql="SELECT A1.no, A1.nisn, 
                        round(pow(A1.nilai_tes, 0.5),3) as Sij1, 
                        round(pow(A1.gaji, 0.3),3) as Sij2, 
                        round(pow(A1.jarak, 0.2),3) as Sij3, 
                        pow(A1.nilai_tes,0.5)*pow(A1.gaji,0.3)*pow(A1.jarak, 0.2) as totalkaliS, sum(pow(A2.nilai_tes,0.5)*pow(A2.gaji,0.3)*pow(A2.jarak,0.2)) as sigmaS FROM kriteria as A1 inner join kriteria as A2 group by A1.no order by totalkaliS desc limit 5";
                         $no=1;

                         
                        if (!$result=  mysqli_query($conn, $sql)){
                        die('Error:'.mysqli_error($conn));
                        }  else {
                        if (mysqli_num_rows($result)> 0){
                        while ($row=  mysqli_fetch_assoc($result)){
                          $row1=$row["Sij1"];
                          $row2=$row["Sij2"];
                          $row3=$row["Sij3"];
                          $S=round($row["totalkaliS"],4);
                          $sigma_S=$row["sigmaS"];
                          $vektor_V=round($S/$sigma_S,4);
                          ?>

                        <tr>
                            <td>&nbsp&nbsp<?php echo $no;?></td>
                            <td>&nbsp&nbsp<?php echo $row['nisn'];?></td>
                        </tr> 
                          <?php 
                          $no++;                      
                              }
                          }  else {
                          echo 'error_log(Hasil atau Query yang anda masukkan error!)';    
                          }
                          }?>
            </tbody>
        </table>

            </div>
            <div class="card-content">
                  
                 

            	
        </div>
    </div>
</div>

<a href="include/cetak_jadwal_user.php?id=<?php echo $id ?>" class="btn btn-warning btn-md pull-right"><i class="fa fa-print"></i> Cetak Pengumuman</a>


</div>

<?php  

unset($_SESSION['message']);

?>
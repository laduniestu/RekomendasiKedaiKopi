<?php
include 'login/koneksi/koneksi.php';
session_start();
    ?>
    <html lang="en">
    <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

        <title>Admin</title>
	<link href="font/font.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/navbar-static-top.css" rel="stylesheet">
        <link href="assets/css/animate.min.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="assets/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="assets/Responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
        <style type="text/css">
            .l{
                max-width: 360px;
            }
        </style>
    </head>

    <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><img src="assets/img/4.png" width="84px"></a>

            </div>				 			<div style="font-family:font"><font size=+4 color="green"> Politeknik Negeri Jakarta</font></div>



               <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                   <li><a href="tb_csb.php"><font face="Lucida Bright" size="+1" color="green"><b>Calon Siswa</b></font></a></li>
                   <li><a href="kriteria.php"><font face="Lucida Bright" size="+1" color="green"><b>Kriteria</b></font></a></li>
                    <li ><a href="bobot.php"><font face="Lucida Bright" size="+1" color="green"><b>Bobot</b></font></a></li>
                    <li class="active"><a href="hasil.php"><font face="Lucida Bright" size="+1" color="green"><b>Hasil</b></font></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">        
                <li style="padding-left:10px;"><a href="#"><i class="fa fa-user"></i><font face="Lucida Bright" size="+0" color="green"> <?php echo $_SESSION['nama_admin']; ?></font></span></a></li>
                <li><a href="login/logout.php"><i class="fa fa-sign-out"></i><font face="Lucida Bright" size="+0" color="green"> Sign-Out</font></a></li>
                </li>
			</ul>
        </div>
    </div>
    </nav>

<br>
    <div class="container">
        <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nilai Tes</th>
                <th>Gaji Orang Tua</th>
                <th>Jarak Lokasi</th>
            </tr>
            </thead>
            <tbody>
            <?php include 'proses/kriteria/tb_kriteria.php';
            while($d = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $d['no']; ?></td>
                    <td><?php echo $d['nisn']; ?></td>
                    <td><?php echo $d['nilai_tes']; ?></td>
                    <td><?php echo $d['gaji']; ?></td>
                    <td><?php echo $d['jarak']; ?></td>
                  
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <br><br>
      <div class="container">
        <table id="myTable1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>ID Bobot</th>
                <th>Nama Kriteria</th>
                <th>Tipe</th>
                <th>Bobot (%)</th>
            </tr>
            </thead>
            <tbody>
            <?php include 'proses/bobot/tb_bobot.php';
            while($d = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?php echo $d['id_bobot']; ?></td>
                    <td><?php echo $d['nama_kriteria']; ?></td>
                    <td><?php echo $d['tipe']; ?></td>
                    <td><?php echo $d['bobot']; ?></td>
                  
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<br><br>
<div class="container">
    <table id="myTable1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <td align="center">
            <a href="hitung.php" class="btn btn-success modal_edit" id="<?php echo $d['id_bobot']; ?>"><i class="fa fa-calculator"></i> Hitung</a>
        </td>
    </table>
</div>



        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-1.9.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>
        <!-- Style Datatable from Buttons -->
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/Buttons/js/buttons.flash.min.js"></script>
        <script src="assets/Buttons/js/jszip.min.js"></script>
        <script src="assets/Buttons/js/pdfmake.min.js"></script>
        <script src="assets/Buttons/js/vfs_fonts.min.js"></script>
        <script src="assets/Buttons/js/buttons.html5.min.js"></script>
        <script src="assets/Buttons/js/buttons.print.min.js"></script>
        <script src="assets/Buttons/js/buttons.colVis.min.js"></script>
        <!-- Style Datatable from Responsive -->
        <script src="assets/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/Responsive/js/responsive.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#myTable').dataTable({
                    dom: 'Bfrtip',
                    buttons: [  { extend: 'excel', exportOptions: {columns: ':visible'} },
                        { extend: 'pdf', exportOptions: {columns: ':visible'} },
                        { extend: 'print', exportOptions: {columns: ':visible'} }
                    ],
                    /*columnDefs: [ {
                     targets: -1,
                     visible: false
                     }
                     ]*/
                });
            });
            $(document).ready(function () {
                $('#myTable1').dataTable({
                    dom: 'Bfrtip',
                    buttons: [  { extend: 'excel', exportOptions: {columns: ':visible'} },
                        { extend: 'pdf', exportOptions: {columns: ':visible'} },
                        { extend: 'print', exportOptions: {columns: ':visible'} }
                    ],
                    /*columnDefs: [ {
                     targets: -1,
                     visible: false
                     }
                     ]*/
                });
            });
            //Edit Data
            $(".modal_edit").click(function(){
                $('.modal-title').text(" Edit Data");
                $('#btnS').text("Update");
                var m = $(this).attr("id");
                $.ajax({
                    url: "proses/kriteria/edit.php",
                    type: "get",
                    data: {id: m,},
                    datatype: "json",
                    success: function(data){
                        var json = jQuery.parseJSON(data);
                        console.log(json);
                        $('#no').val(json[0]);
                        $('#nisn').val(json[1]);
                        $('#nilai_tes').val(json[2]);
                        $('#gaji_ortu').val(json[3]);
                        $('#jarak_lokasi').val(json[4]);
                        $('#Mymodal').modal('show');
                        $('#formModal').attr({action: "proses/kriteria/edit_proses.php"});
                    }
                });
            })
            //Delete Data
            $(".modal_delete").click(function(){
                var m = $(this).attr("id");
                var r = confirm("Yakin Ingin Menghapus Data ?");
                if(r == true){
                    $.ajax({
                        url: "proses/kriteria/delete.php",
                        type: "get",
                        data: {id: m,},
                        datatype: "json",
                        success: function(data){
                            window.location.reload();
                        }
                    });
                }else{
                    window.location.assign("kriteria.php");
                }
            });
        </script>
    </body>
    </html>

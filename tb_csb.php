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
                <li class="active"><a href="tb_csb.php"><font face="Lucida Bright" size="+1" color="green"><b>Calon Siswa</b></font></a></li>
                <li><a href="kriteria.php"><font face="Lucida Bright" size="+1" color="green"><b>Kriteria</b></font></a></li>
                <li><a href="bobot.php"><font face="Lucida Bright" size="+1" color="green"><b>Bobot</b></font></a></li>
			    <li><a href="hasil.php"><font face="Lucida Bright" size="+1" color="green"><b>Hasil</b></font></a></li>
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
            <th>NISN</th>
            <th>Nama</th>
            <th>TTL</th>
            <th>L / P</th>
            <th>Alamat</th>
            <th>Jarak (KM)</th>
            <th>Gaji Orang Tua</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php include 'proses/csb/tb_datacsb.php';
            while($d = mysqli_fetch_array($sql)){
                $gaji=number_format($d['gaji'],0,",",".");
                ?>
            <tr>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['tempat_lahir']; echo ", "; echo $d['tanggal_lahir']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jarak']; ?></td>
                <td><?php echo "Rp. "; echo $gaji; ?></td>
                <td align="center">
                    <a href="#" class="btn btn-success modal_send" id="<?php echo $d['Id']; ?>">
                        <i class="fa fa-send"></i> Send</a></td>
                   <td> <a href="#" class="btn btn-danger modal_delete" id="<?php echo $d['Id']; ?>">
                        <i class="fa fa-trash"></i> Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div> <!-- /container -->
<!-- My Modal -->
<div class="modal fade" id="Mymodal" role="dialog">
    <div class="modal-dialog l">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <form id="formModal" action="" method="post">
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nilai Tes</label>
                        <input type="text" class="form-control" id="nilai_tes" name="nilai_tes" required>
                    </div>
                    <div class="form-group">
                        <label>Jarak Ke Sekolah</label>
                        <input type="text" class="form-control" id="jarak" name="jarak" required>
                    </div>
                    <div class="form-group">
                        <label>Gaji Orang Tua</label>
                        <input type="text" class="form-control" id="gaji" name="gaji" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btnS">Simpan</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
            </div>
            </form>
        </div>
    </div>
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
      
        });
    });
    //Edit Data
    $(".modal_edit").click(function(){
        $('.modal-title').text(" Edit Data");
        $('#btnS').text("Update");
        var m = $(this).attr("id");
        $.ajax({
            url: "proses/csb/edit.php",
            type: "get",
            data: {Id: m,},
            datatype: "json",
            success: function(data){
                var json = jQuery.parseJSON(data);
                console.log(json);
                $('#Id').val(json[0]);
                $('#nama').val(json[1]);
                $('#nisn').val(json[2]);
                $('#tempat_lahir').val(json[3]);
                $('#tanggal_lahir').val(json[4]);
                $('#jenis_kelamin').val(json[5]);
                $('#alamat').val(json[6]);
                $('#jarak').val(json[7]);
                $('#gaji').val(json[8]);
                $('#Mymodal').modal('show');
                $('#formModal').attr({action: "proses/csb/edit_proses.php"});
            }
        });
    })
    // Send Data
   
    $(".modal_send").click(function(){
        $('.modal-title').text("Send Data");
        $('#btnSend').text("Send");
        var m = $(this).attr("id");
        $.ajax({
            url: "proses/csb/send.php",
            type: "get",
            data: {Id: m,},
            datatype: "json",
            success: function(data){
                var json = jQuery.parseJSON(data);
                console.log(json);
                $('#Id').val(json[0]);
                $('#nisn').val(json[2]);
                $('#jarak').val(json[7]);
                $('#gaji').val(json[8]);;
                $('#Mymodal').modal('show');
                $('#formModal').attr({action: "proses/csb/send_kriteria.php"});
            }
        });
    })
    //Delete Data
    $(".modal_delete").click(function(){
        var m = $(this).attr("Id");
        var r = confirm("Yakin Ingin Menghapus Data ?");
        if(r == true){
            $.ajax({
                url: "proses/csb/delete.php",
                type: "get",
                data: {Id: m,},
                datatype: "json",
                success: function(data){
                    window.location.reload();
                }
            });
        }else{
            window.location.assign("tb_csb.php");
        }
    });
</script>
</body>
</html>

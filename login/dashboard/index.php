<?php
include '../auth.php';
include '../koneksi/koneksi.php';
$role = "";
$id 	= $_SESSION['auth'];
if ($_SESSION['role_user'] == 0) {
	$role = "Admin";
    $query      = "SELECT * FROM akun WHERE id = $id";
    $exec       = mysqli_query($conn, $query);
    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key=>$val) {
                ${$key} = $val;
            }
        }
    }
}else{
	$role = "User";
    $query      = "SELECT a.*,b.* FROM pendaftaran a, akun b WHERE a.id = $id AND b.id_user=$id";
    $exec       = mysqli_query($conn, $query);
    if ($exec) {
        while ($user = mysqli_fetch_array($exec)) {
            foreach ($user as $key=>$val) {
                ${$key} = $val;
            }
        }
    }
}
$getPage = $_GET['page'];
switch ($getPage) {
	case 1:
		$page 				= "include/home.php";
		$_SESSION['active']	= "1";
		break;
	case 2:
		$page 				= "include/profile.php";
		$_SESSION['active']	= "2";
		break;
    case 24:
        $page               = "include/jadwal_user.php";
        $_SESSION['active'] = "12";
        break;
	default:
		$page 	= "include/home.php";
		$_SESSION['active']	= "1";
		break;
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Dashboard <?php echo $role; ?></title>
    <?php
        include "include/libs.php";
    ?>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
                Tip 2: you can also add an image using data-image tag
            -->
            <div class="logo">
                <a href="" class="simple-text">
                    Selamat datang <?php $role == "Admin" ? print($nama_admin) : print($nama_panggilan); ?>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?php $_SESSION['active'] == 1 ? print("active") : print("") ?>">
                        <a href="index.php?page=1">
                            <i class="material-icons"></i>
                            <p>Home</p>
                        </a>
                    </li>
					<?php
					if ($role == "User") {
					?>
					<li class="<?php $_SESSION['active'] == 2 ? print("active") : print("") ?>">
                        <a href="index.php?page=2">
                            <i class="material-icons"></i>
                            <p>User Profile </p>
                        </a>
                    </li>
					<?php
					}
					?>
                    <?php
					if ($role == "Admin") {
				echo'<script> window.location="../../tb_csb.php"; </script> ';
					}
					?>
                    <?php
                    if ($role == "User") {
                    ?>
                    <li class="<?php $_SESSION['active'] == 12 ? print("active") : print("") ?>">
                        <a href="index.php?page=24">
                            <i class="material-icons"></i>
                            <p>Pengumuman</p>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                    <li>
                        <a href="../logout.php">
                            <i class="material-icons text-gray"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <?php
                    include $page;
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script>
    $(document).ready(function(){
        $("#cetak").click(function(){
            window.print();
        });
    });
</script>
</html>
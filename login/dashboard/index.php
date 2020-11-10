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
		$page 				= "include/kriteria_tambah.php";
		$_SESSION['active']	= "1";
		break;
	case 2:
		$page 				= "include/kriteria_list.php";
		$_SESSION['active']	= "2";
		break;
    case 3:
        $page               = "include/kedai_tambah.php";
        $_SESSION['active'] = "3";
        break;
    case 4:
        $page               = "include/kedai_list.php";
        $_SESSION['active'] = "4";
        break;
    case 5:
        $page               = "include/nilai_tambah.php";
        $_SESSION['active'] = "5";
        break;
    case 6:
        $page               = "include/nilai_list.php";
        $_SESSION['active'] = "6";
        break;
    case 7:
        $page               = "include/nilai_perbaikan_bobot.php";
        $_SESSION['active'] = "7";
        break;
    case 8:
        $page               = "include/nilai_vektor_s.php";
        $_SESSION['active'] = "8";
        break;
    case 9:
        $page               = "include/nilai_prefensi_alternatif.php";
        $_SESSION['active'] = "9";
        break;
    case 10:
        $page               = "include/kritik_saran.php";
        $_SESSION['active'] = "10";
        break;
	default:
		$page 	= "include/default.php";
		$_SESSION['active']	= "0";
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
                    Selamat Datang
                </a>
            </div>
            <div class="sidebar-wrapper">
                <?php if($role == "Admin"){
                    echo '
                        <ul class="nav">
                            <li class="">
                                <a href="index.php?page=1">
                                    <i class="material-icons"></i>
                                    <p>Tambah Kriteria </p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=2">
                                    <i class="material-icons"></i>
                                    <p>Daftar Kriteria</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=3">
                                    <i class="material-icons"></i>
                                    <p>Tambah Kedai Kopi</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=4">
                                    <i class="material-icons"></i>
                                    <p>Daftar Kedai Kopi</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=5">
                                    <i class="material-icons"></i>
                                    <p>Tambah Nilai</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=6">
                                    <i class="material-icons"></i>
                                    <p>Daftar Nilai</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=7">
                                    <i class="material-icons"></i>
                                    <p>Nilai Perbaikan Bobot</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=8">
                                    <i class="material-icons"></i>
                                    <p>Nilai Vektor S</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=9">
                                    <i class="material-icons"></i>
                                    <p>Ranking</p>
                                </a>
                            </li>
                            <li class="">
                                <a href="index.php?page=10">
                                    <i class="material-icons"></i>
                                    <p>Kritik & Saran</p>
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php">
                                    <i class="material-icons text-gray"></i>
                                    <p>Keluar</p>
                                </a>
                            </li>
                        </ul>
                    ';
                }
                else{
                    echo '
                        <ul class="nav">
                            <li class="">
                                <a href="index.php?page=9">
                                    <i class="material-icons"></i>
                                    <p>Ranking</p>
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php">
                                    <i class="material-icons text-gray"></i>
                                    <p>Keluar</p>
                                </a>
                            </li>
                        </ul>
                    ';
                }?>

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
    $(document).ready(function () {
        $("#cetak").click(function () {
            window.print();
        });
    });
</script>

</html>
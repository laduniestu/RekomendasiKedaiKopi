<?php
$b = $_POST['nisn'];
$c = $_POST['nilai_tes'];
$d = $_POST['gaji'];
$e = $_POST['jarak'];
		
		$nilai = $c;

		if ($nilai < "40") {
		    $nilaites = "1";
		}
		elseif ($nilai >= "40" && $nilai < "60") {
		    $nilaites = "2";
		}
		elseif ($nilai >= "60" && $nilai < "80") {
		    $nilaites = "3";
		}
		elseif ($nilai >= "80" && $nilai < "100") {
		    $nilaites = "4";
		}
		elseif ($nilai = "100") {
		    $nilaites = "5";
		}

		$gajikr = $d;

		if ($gajikr < "3000000") {
		    $gajikriteria = "1";
		}
		elseif ($gajikr >= "3000000" && $gajikr < "4500000") {
		    $gajikriteria = "2";
		}
		elseif ($gajikr >= "4500000" && $gajikr < "6000000") {
		    $gajikriteria = "3";
		}
		elseif ($gajikr >= "6000000" && $gajikr < "8000000") {
		    $gajikriteria = "4";
		}
		elseif ($gajikr >= "8000000") {
		    $gajikriteria = "5";
		}

		$jarakr = $e;

		if ($jarakr >= "15") {
		    $jarakriteria = "1";
		}
		elseif ($jarakr < "15" && $jarakr >= "11") {
		    $jarakriteria = "2";
		}
		elseif ($jarakr < "11" && $jarakr >= "7") {
		    $jarakriteria = "3";
		}
		elseif ($jarakr < "7" && $jarakr >= "4") {
		    $jarakriteria = "4";
		}
		elseif ($jarakr < "4") {
		    $jarakriteria = "5";
		}

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "INSERT INTO kriteria  VALUES ('', '$b','$nilaites','$jarakriteria','$gajikriteria')");

if ($sql){
    echo "<script>alert('Berhasil Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}else{
    echo "<script>alert('Error Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}
?>
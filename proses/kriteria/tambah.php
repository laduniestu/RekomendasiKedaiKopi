<?php
$a = $_POST['no'];
$b = $_POST['nisn'];
$c = $_POST['nilai_tes'];
$d = $_POST['gaji_ortu'];
$e = $_POST['jarak_lokasi'];

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "INSERT INTO kriteria VALUES ('$a','$b','$c','$d','$e')");

if ($sql){
    echo "<script>alert('Berhasil Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}else{
    echo "<script>alert('Error Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}
?>
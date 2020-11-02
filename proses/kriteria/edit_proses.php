<?php
$a = $_POST['no'];
$b = $_POST['nisn'];
$c = $_POST['nilai_tes'];
$d = $_POST['gaji'];
$e = $_POST['jarak'];

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "UPDATE `kriteria` SET `nisn`='$b',`nilai_tes`='$c',`gaji`='$d',`jarak`='$e' WHERE `no`='$a'"); 
if ($sql){
    echo "<script>alert('Berhasil Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}else{
    echo "<script>alert('Error Menambah Data Kriteria');location.href='../../kriteria.php';</script>";
}
?>
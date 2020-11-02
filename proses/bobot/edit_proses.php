<?php
$a=$_POST['id_bobot'];
$b=$_POST['nama_kriteria'];
$c=$_POST['tipe'];
$d=$_POST['bobot'];

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "UPDATE `bobot` SET `nama_kriteria`= '$b',`tipe`= '$c',`bobot`= '$d' WHERE `id_bobot`= '$a'");
if ($sql){
    echo "<script>alert('Success Update Nilai Bobot');location.href='../../bobot.php';</script>";
}else{
    echo "<script>alert('Error Update Nilai Bobot');location.href='../../bobot.php';</script>";
}
?>

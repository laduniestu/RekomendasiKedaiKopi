<?php
$a = $_POST['id_bobot'];
$b = $_POST['nama_kriteria'];
$c = $_POST['tipe'];
$d = $_POST['bobot'];

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "INSERT INTO bobot VALUES ('$a','$b','$c','$d')");

if ($sql){
    echo "<script>alert('Berhasil Menambah Bobot');location.href='../../bobot.php';</script>";
}else{
    echo "<script>alert('Error Menambah Bobot');location.href='../../bobot.php';</script>";
}
?>
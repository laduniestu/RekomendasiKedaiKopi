<?php
$a = $_POST['id_pegawai'];
$b = $_POST['nama_pegawai'];
$c = $_POST['alamat'];
$d = $_POST['ttl'];
$e = $_POST['telp'];
$f = $_POST['jabatan'];
$g = $_POST['gaji'];

$conn = mysqli_connect('localhost','root','','web');
$sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, alamat, ttl, telp, jabatan, gaji) VALUES ('$a','$b','$c','$d','$e','$f','$g')";

if ($query = mysqli_query($conn, $sql)){
    echo "<script>alert('Berhasil Menambah Pegawai');location.href='../../pegawai.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pegawai');</script>";
    // location.href='../../pegawai.php';
    
    echo "$query";
}
?>
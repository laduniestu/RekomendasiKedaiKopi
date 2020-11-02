<?php
$a = $_POST['id_pegawai'];
$b = $_POST['nama_pegawai'];
$c = $_POST['alamat'];
$d = $_POST['ttl'];
$e = $_POST['telp'];
$f = $_POST['jabatan'];
$g = $_POST['gaji'];

$conn = mysqli_connect('localhost','root','','web');
$sql = mysqli_query($conn, "UPDATE `pegawai` SET `nama_pegawai`='$b',`alamat`='$c',`ttl`='$d',`telp`='$e',`jabatan`='$f',`gaji`='$g' WHERE `id_pegawai`='$a'"); 
if ($sql){
    echo "<script>alert('Berhasil Menambah Pegawai');location.href='../../pegawai.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pegawai');location.href='../../pegawai.php';</script>";
}
?>
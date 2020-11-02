<?php
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$jarak=$_POST['jarak'];
$gaji=$_POST['gaji'];

$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "UPDATE `pendaftaran` SET  `nama`= '$nama',`tempat_lahir`= '$tempat_lahir',`tanggal_lahir`= '$tanggal_lahir',`jenis_kelamin`= '$jenis_kelamin',`alamat`= '$alamat',`jarak`= '$jarak',`gaji`= '$gaji' WHERE `nisn`= '$nisn'");
if ($sql){
    echo "<script>alert('Berhasil Update Calon Siswa');location.href='../../tb_csb.php';</script>";
}else{
    echo "<script>alert('Error Update Calon Siswa')";
}
?>

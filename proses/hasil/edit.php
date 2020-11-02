<?php
$id = $_GET['id_pegawai'];
$conn =  mysqli_connect('localhost','root','','web');
$sql = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai='$id'");
$a = mysqli_fetch_row($sql);
echo json_encode($a);
?>
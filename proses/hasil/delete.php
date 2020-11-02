<?php
$conn = mysqli_connect('localhost','root','','web');

$id = $_GET['id_pegawai'];
$sql = mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai='$id'");
$a = mysqli_fetch_row($sql);
echo json_encode($A);
?>
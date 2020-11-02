<?php
$conn = mysqli_connect('localhost','root','','web');
$sql = mysqli_query($conn, "SELECT * FROM pegawai");
?>
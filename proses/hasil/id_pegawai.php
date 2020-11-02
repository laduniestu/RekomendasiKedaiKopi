<?php
$conn = mysqli_connect('localhost','root','','web');
$sql = mysqli_query($conn, "SELECT id_pegawai from pegawai ORDER  BY id_pegawai desc limit 1");
$got = mysqli_fetch_array($sql);	
$newID = $got['id_pegawai'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "P".sprintf("%02s",$ID);
echo $fin;
?>
<?php
$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT NIM from bobot ORDER  BY id_bobot desc limit 1");
$got = mysqli_fetch_array($sql);
$newID = $got['id_bobot'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "B".sprintf("%02s",$ID);
echo $fin;
?>
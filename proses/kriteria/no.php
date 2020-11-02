<?php
$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT no from kriteria ORDER  BY no desc limit 1");
$got = mysqli_fetch_array($sql);
$newID = $got['no'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "TIK".sprintf("%02s",$ID);
echo $fin;
?>
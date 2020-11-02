<?php
$conn = mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT Id from pendaftaran ORDER  BY Id desc limit 1");
$got = mysqli_fetch_array($sql);
$newID = $got['Id'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "D".sprintf("%02s",$ID);
echo $fin;
?>
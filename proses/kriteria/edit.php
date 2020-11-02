<?php
$no = $_GET['no'];
$conn =  mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT * FROM kriteria WHERE no='$no'");
$a = mysqli_fetch_row($sql);
echo json_encode($a);
?>
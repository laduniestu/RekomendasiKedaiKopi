<?php
$id = $_GET['id_bobot'];
$conn =  mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT * FROM bobot WHERE id_bobot='$id'");
$a = mysqli_fetch_row($sql);
echo json_encode($a);
?>
<?php
$Id = $_GET['Id'];
$conn=mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "DELETE FROM pendaftaran WHERE Id='$Id'");
$a = mysqli_fetch_row($sql);
echo json_encode($a);
?>
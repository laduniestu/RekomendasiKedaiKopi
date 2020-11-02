
<?php
$Id = $_GET['Id'];
$conn =  mysqli_connect('localhost','root','','csb');
$sql = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE Id='$Id'");
$a = mysqli_fetch_row($sql);
echo json_encode($a);
?>
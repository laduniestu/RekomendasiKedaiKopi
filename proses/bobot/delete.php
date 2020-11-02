<?php
$id = $_GET['id_bobot'];
$sql = mysql_query("DELETE FROM bobot WHERE id_bobot='$id'");
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>
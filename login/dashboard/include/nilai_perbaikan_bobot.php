<?php
include ("../koneksi/koneksi.php");
$s=mysqli_query($conn, "select * from kriteria");
$h=mysqli_num_rows($s);
?>
<div class="box-header">
	<h3 class="box-title ">Nilai Perbaikan Bobot</h3>
</div>
<table class="table table-stripped table-hover table-bordered">
	<thead>
		<tr>
			<th rowspan="2">Nama Kriteria</th>
			<th rowspan="2">Bobot Awal</th>
			<th rowspan="2">Perbaikan Bobot</th>
		</tr>
	</thead>
	<tbody>
		<?php
$i=0;
$a=mysqli_query($conn, "select * from kriteria");
while($da=mysqli_fetch_assoc($a)){
	echo "<tr>
		<td>$da[nama_kriteria]</td>
		<td>$da[bobot]</td>";
		$id=$da['id_kriteria'];
		//mencari perbaikan bobot
			$arBB=array();
			$n=mysqli_query($conn, "select sum(bobot) as sum from kriteria");
			$quB = mysqli_fetch_array($n);
			$jml_bobot = $quB['sum'];
			$w = $da['bobot'] / $jml_bobot;
			echo "<td align='center'>".($w)."</td>";
		echo "</tr>\n";
}
?>
	</tbody>
</table>
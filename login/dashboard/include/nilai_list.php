<?php
include ("../koneksi/koneksi.php");
$s=mysqli_query($conn, "select * from kriteria");
$h=mysqli_num_rows($s);
?>
<div class="box-header">
	<h3 class="box-title ">Nilai Kedai Kopi</h3>
</div>
<div class="table table-bordered table-responsive">
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Nama Kedai Kopi</th>
				<th colspan="<?php echo $h; ?>">Kriteria</th>
			</tr>
			<tr>
				<?php
for($n=1;$n<=$h;$n++){
	echo"<th>C{$n}</th>";
}
?>
			</tr>
		</thead>
		<tbody>
			<?php
$i=0;
$a=mysqli_query($conn, "select * from alternatif");
while($da=mysqli_fetch_assoc($a)){
	echo "<tr>
		<td>".(++$i)."</td>
		<td>$da[nm_alternatif]</td>";
		$idalt=$da['id_alternatif'];
		//ambil nilai
			$n=mysqli_query($conn, "select * from nilai where id_alternatif='$idalt'");
		while($dn=mysqli_fetch_assoc($n)){
			echo "<td align='center'>$dn[nilai]</td>";
		}
		echo "</tr>\n";
}
?>
		</tbody>
	</table>
</div>
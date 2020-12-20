<link rel="stylesheet" type="text/css" href="bootstrap.css">
<?php
require 'uploadgambar.php';
include ("../koneksi/koneksi.php");
$query = "SELECT max(id_alternatif) as idMaks FROM alternatif";
$hasil = mysqli_query($conn, $query);
$data  = mysqli_fetch_array($hasil);
$nim = $data['idMaks'];
//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;
//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "al";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);
?>
<div class="box-header">
	<h3 class="box-title">Tambah Kedai Kopi</h3>
</div>
<div class="box-body pad">
	<form action="" method="POST" enctype="multipart/form-data">
		<table align="left">
			<tr>
				<td width="200">
					<h4>Nama Kedai</h4>
				</td>
				<td width="200">
					<input type="text" name="nama_alternatif" class="form-control">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Alamat Kedai</h4>
				</td>
				<td width="200">
					<input type="text" name="alamat_alternatif" class="form-control">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Url Google Maps</h4>
				</td>
				<td width="200">
					<input type="text" name="url_lokasi" class="form-control">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Url Instagram</h4>
				</td>
				<td width="200">
					<input type="text" name="url_instagram" class="form-control">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Jam Buka</h4>
				</td>
				<td width="200">
					<input type="time" name="jambuka" class="form-control" value="07:00" placeholder=""/>
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Jam Tutup</h4>
				</td>
				<td width="200">
					<input type="time" name="jamtutup" class="form-control"value="22:00" placeholder=""/>
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Gambar Kedai</h4>
				</td>
				<td width="200">
					<input type="file" name="gambarkedai" id="gambarkedai">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Gambar Menu</h4>
				</td>
				<td width="200">
					<input type="file" name="gambarmenu" id="gambarmenu">
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Harga Minuman</h4>
				</td>
				<td width="200">
					<select name="Harga_Minuman" id="Harga_Minuman">
						<option disabled selected> Pilih </option>
						<option value="5"> 0-10ribu </option>
						<option value="4"> 10-15 Ribu </option>
						<option value="3"> 15-20 Ribu </option>
						<option value="2"> 20-25 Ribu </option>
						<option value="1"> >25 Ribu </option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Harga Makanan Berat</h4>
				</td>
				<td width="200">
					<select name="Harga_Makanan_Berat" id="Harga_Makanan_Berat">
						<option disabled selected> Pilih </option>
						<option value="5"> 0-15 Ribu </option>
						<option value="3"> 15-20 Ribu </option>
						<option value="1"> >20 Ribu </option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200">
					<h4>Harga Makanan Ringan</h4>
				</td>
				<td width="200">
					<select name="Harga_Makanan_Ringan" id="Harga_Makanan_Ringan">
						<option disabled selected> Pilih </option>
						<option value="5"> 0-10ribu </option>
						<option value="3"> 10-15 Ribu </option>
						<option value="1"> >15 Ribu </option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200">
					<h4>Popularitas</h4>
				</td>
				<td width="200">
					<select name="Popularitas" id="Popularitas">
						<option disabled selected> Pilih </option>
						<option value="10"> Tinggi / pelanggan berminat > 30% </option>
						<option value="5"> Sedang / pelanggan berminat 20% - 30% </option>
						<option value="1"> Rendah / pelanggan berminat < 20% </option>
					</select>
				</td>
			</tr>
        </div>
		</table><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<h4>Fasilitas</h4>
		<table align="left">
			<tr>
				<td width="200">
					<input type="checkbox" name="Colokan" value="1">
					<label for="Colokan">Colokan</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Wifi" value="1">
					<label for="Wifi">Wifi</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Toilet" value="1">
					<label for="Toilet">Toilet</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="KipasatauAC" value="1">
					<label for="KipasatauAC">Kipas/AC</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Permainan" value="1">
					<label for="Permainan">Permainan</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Parkir" value="1">
					<label for="Parkir">Parkir</label>
				</td>
			</tr>
		</table></br></br></br><br/><br/>
		<h4>Kebersihan</h4>
		<table align="left">
			<tr>
				<td width="200">
					<input type="checkbox" name="HalamanDepan" value="1">
					<label for="HalamanDepan">Halaman Depan</label>
				</td>
				<td width="200">
					<input type="checkbox" name="KacadanJendela" value="1">
					<label for="KacadanJendela">Kaca dan Jendela</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Lantai" value="1">
					<label for="Lantai">Lantai</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="Dinding" value="1">
					<label for="Dinding"> Dinding</label>
				</td>
				<td width="200">
					<input type="checkbox" name="MejadanKursi" value="1">
					<label for="MejadanKursi"> Meja dan Kursi</label>
				</td>
				<td width="200">
					<input type="checkbox" name="TempatSampah" value="1">
					<label for="TempatSampah"> Tempat Sampah</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="SuhuRuangan" value="1">
					<label for="SuhuRuangan"> Suhu Ruangan</label>
				</td>
				<td width="200">
					<input type="checkbox" name="SirkulasiUdara" value="1">
					<label for="SirkulasiUdara"> Sirkulasi Udara</label>
				</td>
				<td width="200">
					<input type="checkbox" name="TempatMerokok" value="1">
					<label for="TempatMerokok"> Tempat Merokok</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="BauRuangan" value="1">
					<label for="BauRuangan"> Bau Ruangan</label>
				</td>
			</tr>
		</table></br></br></br></br></br><br/><br/><br/>
		<h4>Keindahan</h4>
		<table align="left">
			<tr>
				<td width="200">
					<input type="checkbox" name="Penataanruangan" value="1">
					<label for="Penataanruangan"> Penataan ruangan</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Keserasianwarna" value="1">
					<label for="Keserasianwarna"> Keserasian warna</label>
				</td>
				<td width="200">
					<input type="checkbox" name="KerapianInterior" value="1">
					<label for="KerapianInterior"> Kerapian Interior</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="Kerapiankabel" value="1">
					<label for="Kerapiankabel"> Kerapian kabel</label>
				</td>
				<td width="200">
					<input type="checkbox" name="Penataandekorasi" value="1">
					<label for="Penataandekorasi"> Penataan dekorasi </label>
				</td>
				<td width="200">
					<input type="checkbox" name="Kecukupancahaya" value="1">
					<label for="Kecukupancahaya"> Kecukupan cahaya</label>
				</td>
			</tr>
			<tr>
				<td width="200">
					<input type="checkbox" name="Pemandanganoutdoor" value="1">
					<label for="Pemandanganoutdoor"> Pemandangan outdoor</label>
				</td>
			</tr>
		</table></br></br>
		<br>
		<input type="hidden" name="id_alternatif" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" center>
		<br/>
	</form>
</div>
<?php
if(isset($_POST['simpan'])){
	$gambarkedai = htmlspecialchars($_POST['gambarkedai']);
	$gambarkedai = uploadgambarkedai();
        if(!$gambarkedai){
            return false;
		}
	$gambarmenu = htmlspecialchars($_POST['gambarmenu']);
	$gambarmenu = uploadgambarmenu();
        if(!$gambarmenu){
            return false;
        }
	$s=mysqli_query($conn, "
		insert into alternatif (id_alternatif,nm_alternatif,alamat_kedai,fasilitas_colokan_kedai,fasilitas_toilet_kedai,kebersihan_lantai,kebersihan_dinding,kebersihan_mejadankursi,
		fasilitas_wifi_kedai,fasilitas_kipas_kedai,fasilitas_permainan_kedai,fasilitas_parkir_kedai,kebersihan_halaman,kebersihan_kacadanjendela,url_lokasi,url_instagram,
		kebersihan_tempatsampah,kebersihan_suhuruangan,kebersihan_sirkulasiudara,kebersihan_tempatmerokok,kebersihan_bauruangan,keindahan_penataanruangan,
		keindahan_keserasianwarna,keindahan_kerapihaninterior,keindahan_kerapihankabel,keindahan_penataandekorasi,keindahan_tingkatcahaya,keindahan_pemandangan,foto_kedai1,
		foto_menu_kedai,jambuka,jamtutup
		)
		values(
			'$_POST[id_alternatif]','$_POST[nama_alternatif]','$_POST[alamat_alternatif]','$_POST[Colokan]',
			'$_POST[Toilet]','$_POST[Lantai]','$_POST[Dinding]','$_POST[MejadanKursi]',
			'$_POST[Wifi]','$_POST[KipasatauAC]','$_POST[Permainan]',
			'$_POST[Parkir]','$_POST[HalamanDepan]','$_POST[KacadanJendela]','$_POST[url_lokasi]','$_POST[url_instagram]',
			'$_POST[TempatSampah]','$_POST[SuhuRuangan]','$_POST[SirkulasiUdara]',
			'$_POST[TempatMerokok]','$_POST[BauRuangan]','$_POST[Penataanruangan]',
			'$_POST[Keserasianwarna]','$_POST[KerapianInterior]','$_POST[Kerapiankabel]',
			'$_POST[Penataandekorasi]','$_POST[Kecukupancahaya]','$_POST[Pemandanganoutdoor]',
			'$gambarkedai','$gambarmenu','$_POST[jambuka]','$_POST[jamtutup]'
			)
	");
	if($s){
		$fasilitas= $_POST['Colokan']+$_POST['Wifi']+$_POST['Toilet']+$_POST['KipasatauAC']+$_POST['Permainan']+$_POST['Parkir'];
		$kebersihan= $_POST['HalamanDepan']+$_POST['KacadanJendela']+$_POST['Lantai']+$_POST['Dinding']+$_POST['MejadanKursi']+
			$_POST['TempatSampah']+$_POST['SuhuRuangan']+$_POST['SirkulasiUdara']+$_POST['TempatMerokok']+$_POST['BauRuangan'];
		$keindahan= $_POST['Penataanruangan']+$_POST['Keserasianwarna']+$_POST['KerapianInterior']+
			$_POST['Kerapiankabel']+$_POST['Penataandekorasi']+$_POST['Kecukupancahaya']+$_POST['Pemandanganoutdoor'];
		$t=mysqli_query($conn, "
		insert into nilai (id_alternatif, id_kriteria, nilai) values
		('$_POST[id_alternatif]','kr001','$_POST[Harga_Minuman]'),
		('$_POST[id_alternatif]','kr002','$_POST[Harga_Makanan_Berat]'),
		('$_POST[id_alternatif]','kr003','$_POST[Harga_Makanan_Ringan]'),
		('$_POST[id_alternatif]','kr004','$fasilitas'),
		('$_POST[id_alternatif]','kr005','$kebersihan'),
		('$_POST[id_alternatif]','kr006','$keindahan'),
		('$_POST[id_alternatif]','kr007','$_POST[Popularitas]')
		");
		if($t){
			echo "<script>alert('Disimpan'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
		}
	}
}
?>
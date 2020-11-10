<div class="box-header">
    <h3 class="box-title">Daftar Kritik Saran</h3>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID Kritik Saran</th>
                <th>Nama Pengirim</th>
                <th>Email Pengirim</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
include ("../koneksi/koneksi.php");
$s=mysqli_query($conn, "select * from kritiksaran order by id_kritiksaran ASC");
while($d=mysqli_fetch_assoc($s)){
?>
            <tr>
                <td><?php echo $d['id_kritiksaran']; ?></td>
                <td><?php echo $d['nama_kritiksaran']; ?></td>
                <td><?php echo $d['email_kritiksaran']; ?></td>
                <td><?php echo $d['pesan_kritiksaran']; ?></td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
</div>
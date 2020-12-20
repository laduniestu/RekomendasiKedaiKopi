<?php
    function uploadgambarkedai() {
        $nama_file   = $_FILES["gambarkedai"]["name"];
        $ukuran_file = $_FILES["gambarkedai"]["size"];
        $error       = $_FILES["gambarkedai"]["error"];
        $tmpfile     = $_FILES["gambarkedai"]["tmp_name"];
        if($error===4){
            //pastikan pada inputan gambar tidak terdapat atribut required
            echo "
                <script>
                    alert('Tidak ada gambar diupload');
                </script>
            ";
            return false;
        }
        $jenis_gambar = ['jpg', 'jpeg', 'png'];
        $pecah_gambar = explode('.', $nama_file);
        $pecah_gambar = strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar, $jenis_gambar)){
            echo "
                <script>
                    alert('File gambar harus ber format jpg/jpeg/png');
                </script>
            ";
            return false;
        }
        //cek kapasitass gambar dalam byte, kalau 1000000 byte = 1mb
        if($ukuran_file > 5000000){
            echo "
                <script>
                    alert('Ukuran file maksimal adalah 5mb');
                </script>
            ";
            return false;
        }
        //generate id untuk penamaan gambar dengan function uniqid()
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $pecah_gambar;
        move_uploaded_file($tmpfile, './../../kedai/foto_kedai/'. $namafilebaru);
        //kita return nama filenya agar dapat masuk ke $Gambar=$upload() pada function tambah
        return $namafilebaru;
    }
    function uploadgambarmenu() {
        $nama_file   = $_FILES["gambarmenu"]["name"];
        $ukuran_file = $_FILES["gambarmenu"]["size"];
        $error       = $_FILES["gambarmenu"]["error"];
        $tmpfile     = $_FILES["gambarmenu"]["tmp_name"];
        if($error===4){
            //pastikan pada inputan gambar tidak terdapat atribut required
            echo "
                <script>
                    alert('Tidak ada gambar diupload');
                </script>
            ";
            return false;
        }
        $jenis_gambar = ['jpg', 'jpeg', 'png'];
        $pecah_gambar = explode('.', $nama_file);
        $pecah_gambar = strtolower(end($pecah_gambar));
        if(!in_array($pecah_gambar, $jenis_gambar)){
            echo "
                <script>
                    alert('File gambar harus ber format jpg/jpeg/png');
                </script>
            ";
            return false;
        }
        //cek kapasitass gambar dalam byte, kalau 1000000 byte = 1mb
        if($ukuran_file > 5000000){
            echo "
                <script>
                    alert('Ukuran file maksimal adalah 5mb');
                </script>
            ";
            return false;
        }
        //generate id untuk penamaan gambar dengan function uniqid()
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $pecah_gambar;
        move_uploaded_file($tmpfile, './../../kedai/foto_menu/'. $namafilebaru);
        //kita return nama filenya agar dapat masuk ke $Gambar=$upload() pada function tambah
        return $namafilebaru;
    }
?>


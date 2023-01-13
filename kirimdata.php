<?php 
        // buat koneksi ke data base
        $konek = mysqli_connect('localhost', 'root', '', 'dbmultisensor');

        // baca data yang dikrim dari esp32
        $suhu = $_GET["suhu"];
        $kelembaban = $_GET["kelembaban"];
        $ldr = $_GET["ldr"];

        // buat auto increment auto 1
        mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

        // simpan ke tb_sensor
        $simpan = mysqli_query($konek, "insert into tb_sensor(suhu, kelembaban, ldr)values('$suhu', '$kelembaban', '$ldr' )");

        //uji simpan untuk memberikan respon
        if($simpan)
            echo "Berhasil dikirim";
        else 
            echo "Gagal Terkirim";
?>
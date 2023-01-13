<?php 
    // buat koneksi ke data base
    $konek = mysqli_connect('localhost', 'root', '', 'dbmultisensor');
    
    // baca data dari tb_sensor
    $sql = mysqli_query($konek, 'select * from tb_sensor order by id desc'); //data terahir akan berada diatas

    // baca data paling atas
    $data = mysqli_fetch_array($sql);

    // ambil nilai suhu
    $kelembaban = $data['kelembaban'];

    //uji, apabila nilai kelembaban belum ada, anggap kelembaban  = 0
    if($kelembaban == '') $kelembaban  = 0;

    // cetak niali kelembaban 
    echo $kelembaban ;
?>
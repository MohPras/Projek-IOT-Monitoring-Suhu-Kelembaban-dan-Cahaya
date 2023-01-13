<?php 
    // buat koneksi ke data base
    $konek = mysqli_connect('localhost', 'root', '', 'dbmultisensor');
    
    // baca data dari tb_sensor
    $sql = mysqli_query($konek, 'select * from tb_sensor order by id desc'); //data terahir akan berada diatas

    // baca data paling atas
    $data = mysqli_fetch_array($sql);

    // ambil nilai suhu
    $ldr = $data['ldr'];

    //uji, apabila nilai kelembaban belum ada, anggap kelembaban  = 0
    if($ldr == '') $ldr = 0;

    // cetak niali kelembaban 
    echo $ldr ;
?>
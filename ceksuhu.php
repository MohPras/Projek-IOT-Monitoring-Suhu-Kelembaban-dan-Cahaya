<?php 
    // buat koneksi ke data base
    $konek = mysqli_connect('localhost', 'root', '', 'dbmultisensor');
    
    // baca tabel dari tb_sensor
    $sql = mysqli_query($konek, 'select * from tb_sensor order by id desc'); //data terahir akan berada diatas

    // baca data paling atas
    $data = mysqli_fetch_array($sql);
    $suhu = $data['suhu'];

    //uji, apabila nilai suhu belum ada, anggap suhu = 0
    if($suhu == '') $suhu = 0;

    // cetak nilai suhu
    echo $suhu;
?>
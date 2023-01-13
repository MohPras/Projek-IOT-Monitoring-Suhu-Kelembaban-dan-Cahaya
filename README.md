# Projek-IOT-Monitoring-Suhu-Kelembaban-dan-Cahaya
Internet Of Think

Pada Projek ini saya membuat Alat Monitoring Suhu, Kelembaban dan Cahaya berbasis IOT menggunakan website, untuk alat yang digunakan yaitu ESP32, DHT11, Resistor 1k dan LDR. Cara kerja dari alat ini pertama alat monitoring yaitu sensor akan membaca lingkunganya lalu dari hasil pembacaan tersebut data dikirim ke Database dan dari database data akan ditampilkan ke website secara riltime. 

Berikut ini adalah foto alat monitoring suhu, Kelembaban dan Cahaya.
![image](https://user-images.githubusercontent.com/108654517/212224557-8c7e0974-7566-49b9-9165-d42f66d1892c.png)

Cara agar data bisa riltime ke website, Pertama saya menggunakan library HTTPClient di arduino uno lalu untuk pengiriman data dari ESP32 ke database saya menggunakan metode GET. Metode GET ini akan mengambil data-data yang ada di variabel yang kita definisakn tadi yaitu suhu, kelembaban dan ldr(cahaya) lalu data tersebut akan dikirim ke tabel database kita yaitu tb_sensor, Lalu dari tb_sensor data akan dipanggil untuk ditampilkan ke website menggunakan perintah $sql = mysqli_query($konek, 'select * from tb_sensor order by id desc'); selanjutnya data akan masuk ke nama id dari tempat data akan tertampil untuk kasus ini id yang saya gunakan ada #suhu, #kelembaban dan #ldr.

Berikut ini adalah link Website bisa dikunjungi,(Gunakan Laptop).
( https://monsuhkelecah.000webhostapp.com/# )

Berikut ini adalah link untuk design UX/UI Website ini (figma.com/@mohammadprastya)

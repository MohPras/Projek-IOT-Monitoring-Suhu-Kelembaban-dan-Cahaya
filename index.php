<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MonSuhKeleCah</title>
    <!-- Botsrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;900&display=swap" rel="stylesheet">

    <!--Logo Title Bar-->
    <link rel="icon" href="Asets/Hero/Logo.png" type="image/x-icon" />

    <!-- jquery -->
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <!-- load otomatis -->
        <script type="text/javascript">
            $(document).ready(function() {
                setInterval(function() {
                    $("#ceksuhu").load("ceksuhu.php");
                    $("#cekkelembaban").load("cekkelembaban.php");
                    $("#cekldr").load("cekldr.php");
                }, 3000);
            });
        </script>

  </head>
  <body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="Asets/Hero/Logo.png" alt="" width="100" class="d-inline-block align-text-top me-3" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item mx-3">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="#About-Us">About Us</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="#Device">Device</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="#features">Features</a>
                  </li>
                  <li class="nav-item mx-3">
                    <a class="nav-link" href="#footer">Contact</a>
                  </li>
                </ul>
                <button class="btn-navbar">
                    Get
                    <br>
                    Started
                </button>
              </div>
            </div>
          </nav>
    </header>
    <!-- end Header -->

    <!-- main -->
    <main>
        <!-- Hero section -->
        <section class="hero" id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 hero-tagline">
                        <h1 class="tagline-hero">
                            Stay informed, stay in control Monitor temperature, humidity, and light with ease
                        </h1>
                        <button class="btn-hero">Get Started</button>
                    </div>
                </div>
                <img src="Asets/Hero/Icon web.png" alt="" class="position-absolute end-0 bottom-0 img-hiro" />
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- About Us -->
        <section class="About-Us" id="About-Us">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 offset-md-8">
                        <h1 class="tagline-aboutus">About Us</h1>
                    </div>
                    <div class="col-md-4">
                        <img class="img-aboutus" src="Asets/About us/Icon About Us.png" alt="">
                    </div>
                    <div class="col-md-6 offset-2">
                        <h2 class="konten-Aboutus mt-5">
                            Website ini adalah website monitoring suhu, kelembaban dan cahaya, didirikan pada tahun 2022 oleh saya Mohammad Nurdin Prastya Hermansah yang saya dedikasikan untuk membantu dalam mengoptimalkan kondisi lingkungan dengan menyediakan solusi monitoring suhu, kelembaban, dan cahaya yang andal. Visi saya adalah “Be ease” dalam solusi monitoring lingkungan dan misi saya adalah untuk memberikan layanan dan produk yang berkualitas tinggi dan bermanfaat bagi anda. Saya menyediakan layanan monitoring suhu, kelembaban, dan cahaya yang mudah digunakan. Fitur utama website ini adalah alert real-time yang terintegrasi dengan perangkat IoT. Website ini membantu anda dalam mengoptimalkan kondisi lingkungan.
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Device -->
        <section class="Device" id="Device">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="tagline-device">Device</h1>
                    </div>
                </div>
                <!-- Card ESP -->
                <div class="row ESP32 row-cols-1 row-cols-md-2 g-4">
                  <div class="col">
                      <img class="img-device" src="Asets/Device/ESP32 1.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col">
                    <div class="card card-esp">
                      <div class="card-body">
                        <h5 class="card-title">ESP32</h5>
                        <p class="card-text">ESP32 adalah module microcontroller yang dikembangkan oleh Espressif Systems yang menggabungkan fitur WiFi dan Bluetooth dalam satu chip. ESP32 dapat digunakan untuk berbagai aplikasi yang memerlukan konektivitas wireless seperti Internet of Things (IoT) : ESP32  digunakan sebagai perangkat yang terhubung ke internet dan dapat digunakan untuk mengontrol perangkat lainnya atau menerima data dari perangkat lain.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END Esp -->

                <!-- Card DHT11 -->
                <div class="row DHT11 row-cols-1 row-cols-md-2 g-4 mt-5">
                  <div class="col">
                      <img class="img-device" src="Asets/Device/DHT11 2.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col">
                    <div class="card card-dht">
                      <div class="card-body">
                        <h5 class="card-title">Sensor DHT11</h5>
                        <p class="card-text">DHT (Digital Humidity and Temperature) sensors adalah jenis sensor yang digunakan untuk mengukur suhu dan kelembaban relatif dalam suatu lingkungan. DHT sensors biasanya terdiri dari dua bagian: sebuah resistor yang berubah nilai sesuai dengan perubahan kelembaban relatif dan sebuah termistor yang berubah nilai sesuai dengan perubahan suhu.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END Dht -->

                <!-- Card LDR -->
                <div class="row LDR row-cols-1 row-cols-md-2 g-4 mt-5">
                  <div class="col">
                      <img class="img-device" src="Asets/Device/LDR.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col">
                    <div class="card card-ldr">
                      <div class="card-body">
                        <h5 class="card-title">Sensor LDR</h5>
                        <p class="card-text">LDR (Light Dependent Resistor) adalah jenis sensor yang digunakan untuk mendeteksi dan mengukur tingkat cahaya yang masuk dalam suatu lingkungan. LDR adalah sebuah resistor yang memiliki resistansi yang berkurang saat terkena cahaya, dan akan meningkat saat cahaya yang diterimanya berkurang. Fungsi LDR secara singkat: Mendeteksi cahaya: LDR digunakan untuk mendeteksi tingkat cahaya yang ada di sekitar perangkat dan mengirimkan sinyal yang sesuai ke mikrokontroler.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END Ldr -->
                <div class="row mt-5 Rangkaian">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card card-rangkaian">
                      <img src="Asets/Device/Rangkaian.png" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card card-rangkaian">
                      <img src="Asets/Device/Rangkaian.png" alt="">
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- end Device -->

        <!-- Features -->
        <section class="features" id="features">
          <div class="container">
            <!-- Header-->
            <h2 class="h1-features">
              Smart IOT Monitoring Suhu, 
              Kelembaban Dan Cahaya 
              <br>
              Secara  Riltime
            </h2>
            <!-- End Header -->
            <div class="card_content" style="display: flex;">
                <!-- Monitoring Suhu -->
                <div class="card features-text bg-danger me-2 text-center" style="width: 33.3%">
                    <div class="card-header">
                        <h1>Suhu</h1>
                    </div>
                    <div class="card-body">
                        <h2>
                            <span id="ceksuhu">0</span>
                        </h2>
                    </div>
                </div>
                <!-- End Monitoring Suhu -->
                <!-- Monitoring Kelembapan-->
                <div class="card features-text bg-info me-2 text-center" style="width: 33.3%">
                        <div class="card-header">
                            <h1>Kelembapan</h1>
                        </div>
                        <div class="card-body">
                        <h2>
                            <span id="cekkelembaban">0</span>
                        </h2>
                        </div>
                    </div>
                <!-- End Monitoring Kelembapan -->
                <!-- Monitoring LDR-->
                <div class="card features-text bg-warning text-center" style="width: 33.3%">
                        <div class="card-header">
                            <h1>LDR</h1>
                        </div>
                        <div class="card-body">
                        <h2>
                            <span id="cekldr">0</span>
                        </h2>
                        </div>
                    </div>
                <!-- End Monitoring LDR-->        
            </div>
        </div>
        </section>
        <!-- End Features -->
    </main>
    <!-- End Main -->

    <!-- Fotter -->
    <footer class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img class="logo-footer" src="Asets/Footer/Logo.png" alt="">
          </div>
          <div class="col-md-9">
            <ul class="fotter-text">
              <li><a href="#hero">Home</a></li>
              <li><a href="#About-Us">About Us</a></li>
              <li><a href="#features">Features</a></li>
              <li><a href="#footer">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <br>
          <hr class="garis">
        </div>
        <div class="row">
        <div class="credit col-md-12 text-center">
          <p>© Designed by Mohammad Nurdin Prastya Hermansah</p>
        </div>
        </div>
      </div>
    </footer>
    
    <!-- End Fotter -->
    



    <!--  Popper and our JS Botsstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
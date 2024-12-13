<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK AK NUSA BANGSA</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" type="x-icon" href="img/logoaknb.png">
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="img/logoaknb.png" class="putih" /></a>
          <a href=""><img src="img/logoaknb.png" class="hitam" /></a>
</div>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;


}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.dropdown-content {
  display: none;
  position: absolute;

  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: red;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="background-color:white;">

<div class="navbar">
<a href="login.php">Login</a>
    <div class="dropdown">
    <button class="dropbtn">Jurusan 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ak.php">Analis Kimia</a>
      <a href="farmasi.php">Farmasi Klinis</a>
      <a href="pplg.php">Pengembangan Perangkat Lunak dan Gim</a>
    </div>
  </div> 
  <a href="galeri.php">Galeri</a>
  <div class="dropdown">
    <button class="dropbtn">Profil 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profil.php">Profil Sekolah</a>
      <a href="profilkepsek.php">Profil Kepala Sekolah</a>
    </div>
  </div> 
  <a href="index.php">Home</a>
</div>
      </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop width=100%>
          <source src="video/profilsmk.mp4" type="video/mp4" />
        </video>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>Profil</h3>
            <p class="ringkasan">
            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .circle-background {
            width: 200px;
            height: 300px;
            background-color: #f0f0f0;
            border-radius: 50%;
            display: flex;
            justify-content: left;
            align-items: left;
            overflow: hidden;
            /* float:left; */
            
        }

        .circle-background img {
            width: 98%;
            height: 100%;
        }
        p{ 
          text-align: justify;
                  }
    </style>
</head>
<body>

<?php
// Menyimpan URL gambar dalam variabel
$image_url = "img/kepalasekolahremove.png" // Ganti dengan URL gambar yang kamu inginkan
?>

<div class="circle-background">
    <!-- Menampilkan gambar menggunakan PHP -->
    <img src="<?php echo $image_url; ?>" alt="Foto">
</div>
            </p>
            <div class="konten-isi">

Assalamualaikum Warahmatullahi Wabarakaatuh.<br>

<p>
Selamat Datang

di website SMK AK Nusa Bangsa

Selamat berjumpa di SMK AK Nusa Bangsa melalui media website yang baru kembali diaktifkan.<br> Semoga melalui media ini kebutuhan informasi dan layanan komunikasi dapat memenuhi harapan masyarakan dan pihak-pihak yang berkepentingan. 

Sebagai Nahkoda baru, secara naluriah berkeinginan untuk memberikan kontribusi terbaik melalui perbaikan dan penyempurnaan terhadap semua program dan layanan yang selama ini sudah dilakukan. Upaya tersebut dalam kerangka memenuhi haraPan masyarakat dan turut serta berperan dalam meningkatkan mutu pendidikan dan pembangunan nasional. 

Dalam sejarahnya yang panjang, SMK AK Nusa Bangsa telah memberikan layanan terbaik bagi masyarakat sehingga memperoleh kepercayaan dan dukungan sehingga keberhasilannya telah mengukir prestasi yang gemilang. Meski secara fisik terlihat kecil, tetapi secara non fisik memiliki semangat, keyakinan, dan keberhasilan yang besar. Menghhasilkan lulusan berprestasi hingga tingkat internasional. Oleh karenanya sangat pantas jika sekolah ini dijuluki small but smart. 

Website ini diharapkan terus berkembang dan diperluas perannya hingga mendukung layanan pembelajaran, penilaian, dan partisipasi konstruktif masyarakat dalam memajukan pendidikan dan pembangunan nasional.

Semoga peluncuran website ini dapat memenuhi harapan masyarakat dan pihak-pihak yang berkepentingan serta berkontribusi memajukan pendidikan dan pembangunan nasional. 

Wassalamualaikum Warahmatullahi Wabarakaatuh
</p>
      
        </section>
        <section class="abuabu" id="support">
          <div class="layar-dalam support">
            <div>
              <img src="img/ak.jpg" width="50px"/>
              <h6>ANALIS KIMIA</h6>
              <p>
              Jurusan ini fokus pada analisis dan pengujian bahan kimia di laboratorium. Lulusan Analis Kimia 
              dilatih untuk bekerja dengan berbagai teknik laboratorium, mengidentifikasi kandungan kimia dalam bahan, 
              dan memastikan kualitas serta keamanan produk, terutama di industri farmasi, makanan, dan lingkungan
              </p>
            </div>
            <div>
              <img src="img/farmasii.png" width="50px"/>
              <h6>FARMASI</h6>
              <p>
              Jurusan Farmasi mempelajari ilmu obat-obatan, termasuk cara pembuatan, pengujian, 
              dan distribusi obat yang aman dan efektif. Lulusan Farmasi dapat bekerja di apotek, 
              rumah sakit, industri farmasi, atau penelitian,dan memiliki peran penting dalam meracik
               obat serta memberikan informasi tentang penggunaan obat yang tepat.
              </p>
            </div>
            <div>
              <img src="img/pplgg-removebg.png" width="50px"/>
              <h6>PENGEMBANGAN PERANGKAT LUNAK DAN GIM</h6>
              <p>
              jurusan yang mempelajari tentang perkembangan perangkat lunak meliputi pembuatan, 
              manajemen organisasi pengembangan perangkat lunak, pemeliharaan dan manajemen kualitas.
              Selain itu, jurusan PPLG juga berhubungan dengan software komputer seperti pembuatan aplikasi,
               website, game dan semua yang berhubungan dengan pemrograman. Singkatnya, jurusan PPLG erat kaitannya
                dengan coding, desain, dan algoritma.
              </p>
            </div>
          </div>
        </section>
        <section id="gallery">
          <div><img src="img/farmasi.jpg" /></div>
          <div><img src="img/rpl.jpeg" /></div>
          <div><img src="img/analis.jpg" /></div>
          <div><img src="img/p4.jpeg" /></div>
          <div><img src="img/p5.jpeg" /></div>
          <div><img src="img/p6.jpeg" /></div>
          <div><img src="img/p7.jpeg" /></div>
        </section>
     
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Berita Terkini</h3>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('img/p1.jpeg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="dashboard.php">JUARA 1 LOMBA POSTER DIGITAL</a></h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Placeat, est omnis? Quas reprehenderit rem nesciunt.
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('img/p3.jpeg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="dashboard.php">JUARA 2 LOMBA EXPOKIMIA</a></h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Placeat, est omnis? Quas reprehenderit rem nesciunt.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Hubungi Kami</h5>
            <dl class="row">
							<dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-phone"></span> Telepon</dt>
							<dd class="col-lg-8 col-md-8 col-sm-12">(0251) 7536316</dd>
							<dt class="col-lg-4 col-md-4 col-sm-12"><span class="fa fa-envelope"></span> Email</dt>
							<dd class="col-lg-8 col-md-8 col-sm-12">smkaknusabangsa@gmail.com</dd>
						</dl>
          </div>
          <div>
            <h5>Alamat</h5>
            <div class="menu">
            <hr>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7462930581905!2d106.77231537362643!3d-6.553680293439384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c386205f18f9%3A0xaf869d94c5b9c42a!2sSMK%20Analis%20Kimia%20Nusa%20Bangsa!5e0!3m2!1sid!2sid!4v1733892932210!5m2!1sid!2sid"width=”600″ height=”450″ frameborder=”0″ style=”border:0″ allowfullscreen></iframe>
            </div>
          </div>
          <div>
            <h5>Ikuti Kami</h5>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 5px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 2px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
</head>
<body>

<!-- Add font awesome icons -->
<a href="https://www.facebook.com/smkaknusabangsa"class="fa fa-facebook"></a>
<a href="https://www.facebook.com/smkaknusabangsa" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/channel/UC6MkY0eGk-jf1THZZP-rpWA" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/smkaknusabangsa/?hl=id" class="fa fa-instagram"></a>

          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; Copyright © 2019 - 2024 SMK AK NUSA BANGSA All rights reserved.</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>

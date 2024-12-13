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

.navbar {
  overflow: hidden;

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
      <a href="profilsekolah.php">Profil Sekolah</a>
      <a href="profilkepsek.php">Profil Kepala Sekolah</a>
    </div>
  </div> 
  <a href="index.php">Home</a>
</div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
<body>
        <style>
 body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

header {
    width: 100%;
	 min-height: 100vh;
	 background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/gedung.jpg);
	 background-position: center;
	 background-size: 1500px;
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 font-family: 'Poppins', sans-serif;
	 color: white;
}

header .logo {
    width: 300px;
    display: block;
    margin: 0 auto 10px;
}

h1 {
    margin: 0;
    font-size: 2.5em;
}

main {
    padding: 20px;
    background: #fff;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #0047ab;
}

footer {
    text-align: center;
    padding: 10px 0;

    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memindahkan Tabel</title>
    <style>
        .container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color:rgba(145, 52, 52, 0.37);
            float:center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <!-- Kontainer sumber -->
    <div id="sourceContainer" class="container">
        <table id="schoolTable" border="3" width="568">
            <tbody>
                <tr>
                    <td width="198"><p>Nama Kepala Sekolah</p></td>
                    <td width="340"><p>&nbsp;Rini Damayanti, S.Si</p></td>
                </tr>
                <tr>
                    <td width="198"><p>NUPTK</p></td>
                    <td width="340"><p>&nbsp;9546754655300022</p></td>
                </tr>
            </tbody>
        </table>
    </div>




    <script>
        // JavaScript untuk memindahkan tabel
        document.getElementById("moveTableButton").addEventListener("click", function() {
            const table = document.getElementById("schoolTable"); // Referensi tabel
            const destination = document.getElementById("destinationContainer"); // Kontainer tujuan
            
            // Memindahkan tabel ke kontainer tujuan
            destination.appendChild(table);
        });
    </script>
</body>
</html>

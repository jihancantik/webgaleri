<?php
    error_reporting(0);
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB Galeri Sekolah</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
    header{
        background-color:#e3afbc;
    }
</style>
<body>
    <!-- header -->
    
    <header>
    <h1><P>SMK AK NUSA BANGSA</P></h1>    
    <div class="logo">
        <img src="img/logoaknb.png" alt="Logo" width=4% float=right style="margin-left:830px"/>
      </div>  
    </header>
    
    <!-- search -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:	#e3afbc;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
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
  float: left;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: 	#e3afbc;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 90px;
  border: 3px solid #73AD21;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  float:left;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #e3afbc;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<header>
<body style="background-color:white;">
    <style>
.icon-bar a {
  display: block;
  text-align: right;
  padding: 9px;
  transition: all 0.3s ease;
  color: white;
  font-size: 35px;
}
    </style>

<div class="icon-bar">
  <a class="active" href="index.php"><i class="fa fa-home"></i></a>
</div>
</header>
    <!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="img/b1.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="img/b2.jpg" style="width:100%">
  </div>  

</div>

</body>
</html>
    <!-- footer -->
     <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Web Galeri Foto.</small>
        </div>
    </footer>
</body>
</html>
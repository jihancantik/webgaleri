<?php
    error_reporting(0);
    include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
	$a = mysqli_fetch_object($kontak);
	
	$produk = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
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
        <img src="img/logoaknb.png" alt="Logo" width=4% float=right style="margin-left:840px"/>
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
@charset "utf-8";
/* CSS Document */
* {
	padding:0;
	margin:0;
	font-family:'Quicksand', sans-serif;
	color: #333;
}
body {
	background-color:#f8f8f8;
}
a {
	color: black;
	text-decoration:none;
}
#bg-login {
	display: flex;
	height: 100vh;
	justify-content: center;
	align-items: center;
}
.box-login {
	width: 300px;
	min-height: 200px;
	border:1px solid #ccc;
	background-color: #fff;
	padding:15px;
	box-sizing:border-box;
}
.box-login h2 {
	text-align:center;
	margin-bottom:15px;
}
.input-control {
	width:100%;
	padding:10px;
	margin-bottom:15px;
	box-sizing:border-box;
}
.btn {
	padding:8px 15px;
	background-color: #e3afbc;
	color: #fff;
	border:none;
	cursor: pointer;
}
header {
	background-color: #C70039;
	color: #141313;
}
header h1 {
	float:left;
	padding:10px 0;
}
header ul {
	float:right;
}
header ul li {
	display:inline-block;
}
header ul li a {
	padding:20px 0 20px 15px;
	display: inline-block;
}
footer {
	padding:25px 0;
}
.container {
	width: 80%;
	margin: 0 auto;
}
.container:after {
	content:'';
	display: block;
	clear:both;
}
.section {
	padding:25px 0;
}
.box {
	background-color: #fff;
	border:2px solid #ccc;
	padding:30px;
	box-sizing: border-box;
	margin:10px 0 25px 0;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
.table {
	width: 100%;
	border-collapse: collapse;
}
.table tr {
	height: 30px;
}
.table  tr td {
	padding:5px 10px;
}
.search {
	padding:15px 0;
	background-color: #fff;
	border:1px solid #ccc;
	text-align: center;
}
.search input[type=text] {
	width: 60%;
	padding:10px;
}
.search input[type=submit] {
	padding:12px 15px;
	background-color: #e3afbc;
	color: #fff;
	border:none;
	cursor:pointer;
}
.col-5 {
	width:20%;
	height:100px;
	text-align: center;
	float: left;
	padding:10px;
	box-sizing: border-box;
}
.col-4 {
	width:10%;
	height: 100px;
	border:1px solid #ccc;
	float: absolute;
	padding:10px;
	box-sizing: border-box;
	margin-bottom: 28px;
}
.col-4:hover {
	box-shadow: 0 0 3px #999;
}
.col-4 img {
	width: 100%;
}
.col-4 .nama {
	font-weight: bold;
	color: #666;
	margin-bottom: 5px;
}
.col-4 .admin {
	font-weight: bold;
	color: #FC3F81;
}
.footer {
	padding:25px 0;
	background-color: #333;
	color: #fff;
	text-align: center;
}
.footer p {
	margin-bottom: 10px;
}
.footer small {
	margin-top: 25px;
	display: inline-block;
}
.col-2 {
	width: 50%;
	min-height: 200px;
	padding:10px;
	box-sizing: border-box;
	float: left;
}
.col-2 img {
	border:1px solid #f9f9f9;
	padding:5px;
	box-sizing: border-box;
}
.col-2 h3 {
	margin-bottom: 10px;
}
.col-2 h4 {
	color: #C70039;
}
.col-2 p {
	margin:15px 0;
	text-align: justify;
	line-height: 25px;
	font-size: 14px;
}
@media screen and (max-width: 768px) {
	.container {
		width: 90%;
		}
	.col-5 {
		width:50%;
		margin-bottom: 10px;
	}
	.col-4 {
		width:50%;
		height: 300px;
	}
	.col-2 {
		width:100%;
	}
}
    </style>

<div class="icon-bar">
  <a class="active" href="index.php"><i class="fa fa-home"></i></a>
</div>
</header>
    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="galeri.php">
                <input type="text" name="search" placeholder="Cari Foto" value="<?php echo $_GET['search'] ?>" />
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>" />
                <input type="submit" name="cari" value="Cari Foto" />
            </form>
        </div>
    </div>
    
    <!-- product detail -->
    <div class="section">
        <div class="container">
             <h3>Detail Foto</h3>
            <div class="box">
                <div class="col-2">
                   <img src="foto/<?php echo $p->image ?>" width="100%" /> 
                </div>
                <div class="col-2">
                   <h3><?php echo $p->image_name ?><br />Kategori : <?php echo $p->category_name  ?></h3>
                   <h4>Nama User : <?php echo $p->admin_name ?><br />
                   Upload Pada Tanggal : <?php echo $p->date_created  ?></h4>
                   <p>Deskripsi :<br />
                        <?php echo $p->image_description ?>
                   </p>
                   
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Web Galeri Foto.</small>
        </div>
    </footer>
</body>
</html>
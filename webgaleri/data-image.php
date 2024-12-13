<?php
    session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
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
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">SMK AK NUSA BANGSA</a></h1>
        <ul>
           <li><a href="dashboard.php">Dashboard</a></li>
           <li><a href="profil.php">Profil</a></li>
           <li><a href="category.php">Kategori</a></li>
           <li><a href="data-image.php">Data Foto</a></li>
           <li><a href="Keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
        
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Data Galeri Foto</h3>
            <div class="box">
            
            <div><button class="btn"><a href="tambah-image.php">Tambah Foto</a></buton></div>
            
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                           <th width="60px">No</th>
                           <th>Kategori</th>
                           <th>Nama User</th>
                           <th>Nama Foto</th>
                           <th>Deskripsi</th>
                           <th>Gambar</th>
                           <th>Status</th>
                           <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						    $no = 1;
							$user = $_SESSION['a_global']->admin_id;
                            $foto = mysqli_query($conn, "SELECT * FROM tb_image WHERE admin_id = '$user' ");
							if(mysqli_num_rows($foto) >0 ){
							while($row = mysqli_fetch_array($foto)){
						?>
                        <tr>
                           <td><?php echo $no++ ?></td>
                           <td><?php echo $row['category_name'] ?></td>
                           <td><?php echo $row['admin_name'] ?></td>
                           <td><?php echo $row['image_name'] ?></td>
                           <td><?php echo $row['image_description']?></td>
                           <td><a href="foto/<?php echo $row['image']?>" target="_blank"><img src="foto/<?php echo $row['image']?>" width="50px"></a></td>
                           <td><?php echo ($row['image_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
                           <td>
                              <a href="edit-image.php?id=<?php echo $row['image_id'] ?>">Edit</a> || 
                              <a href="proses-hapus.php?idp=<?php echo $row['image_id'] ?>" onclick="return confirm('Yakin Ingin Hapus ?')">Hapus</a>
                           </td>
                        </tr>
                        <?php }}else{ ?>
                             <tr>
                                <td colspan="8">Tidak ada data</td>
                             </tr>
                        <?php } ?>
                    </tbody>
                </table>
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
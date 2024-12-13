<?php
    session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="category.php"</script>';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB Galeri Sekolah</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" type="x-icon" href="nubas.png">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container1">
        </div>
        <div class="container">
        <h1><a href="dashboard.php">SMK AK NUSA BANGSA</a></h1>
        <ul>
           <li><a href="dashboard.php">Dashboard</a></li>
           <li><a href="profil1.php">Profil</a></li>
           <li><a href="category.php">Kategori</a></li>
           <li><a href="data-image.php">Data Foto</a></li>
           <li><a href="Keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
    
   

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Tambah Kategori</h3>
            <div class="box">
             
               <form action="tambah-category.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="category_id" class="input-control" placeholder="id kategori" required>
                <input type="text" name="category_name" class="input-control" placeholder="nama kategori" required>
                   <input type="submit" value="Submit" class="btn">
               </form>
               
        </div>
        </div>
    </div>
    <script>
            CKEDITOR.replace( 'deskripsi' );
    </script>
    <script type="text/javascript"><?php echo $jsArray; ?></script>
</body>
</html>

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
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Data Kategori</h3>
            <div class="box">
                <!-- <p><a href="tambah-image.php">Tambah Data</a></p> -->
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                           <th width="60px">No</th>
                           <th>Id Kategori</th>
                           <th>Nama Kategori</th>
                           <th width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						    $no = 1;
							$user = $_SESSION['a_global']->admin_id;
                            $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id order by category_id desc");
							if(mysqli_num_rows($kategori) >0 ){
							while($row = mysqli_fetch_array($kategori)){
						?>


                        <tr>
                           <td><center><?php echo $no++ ?></center></td>
                           <td><center><?php echo $row['category_id'] ?></center></td>
                           <td><?php echo $row['category_name'] ?></td>
                           <td>
                              <a href="editcategory.php?kode=<?php echo $row['category_id'] ?>">Edit</a> || 
                              <a href="?kode=<?php echo $row['category_id'] ?>" onclick="return confirm('Yakin Ingin Hapus ?')">Hapus</a>
                           </td>
                        </tr>
                        <?php }}else{ ?>
                             <tr>
                                <td colspan="8">Tidak ada data</td>
                             </tr>
                        <?php } ?>




                        <?php
                                if (isset($_GET['kode'])){
                                    mysqli_query($conn,"delete from tb_category where category_id='$_GET[kode]'");

                                    echo "<script>alert('Data baru telah dihapus');window.location='category.php';</script>";
                
                                }
                            
                                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
<!-- footer -->
     <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Web Galeri Foto.</small>
        </div>
    </footer>
    
</html>
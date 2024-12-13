<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 30%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 80%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 10px;
  margin: 1px;
  border: 2px;
}

#myMenu li a {
  padding: 35px;
  text-decoration: none;
  color: black;
  display: block;
}

#myMenu li a:hover {
  background-color: #eee;
}

</style>
</head>
<body>

<div class="row">
  <div class="left" style="background-color:#e3afbc;">
    <h2>SMK AK NUSA BANGSA</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
    <ul id="myMenu">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="profil1.php">Profil</a></li>
      <li><a href="data-image.php">Data Foto</a></li>
      <li><a href="category.php">Kategori</a></li>
      <li><a href="login.php">Keluar</a></li>
    </ul>
  </div>
  
  <div class="right" style="background-color:#e3e2df;">
    <h2>Selamat datang! </h2>
    <h3>Temukan informasi yang kamu butuhkan di website ini.</h3>
<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>

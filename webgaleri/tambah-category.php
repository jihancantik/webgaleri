<?php
include "db.php";

// if(isset($_POST['proses'])) {
    mysqli_query($conn,"insert into tb_category set
    category_id = '$_POST[category_id]',
    category_name = '$_POST[category_name]'");
    

    echo "<script>alert('Data baru telah disimpan');window.location='category.php';</script>";
 
// }
?>
delete kategori 
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM menu_kategori WHERE mk_id = '".$_GET['res_del']."'");
header("location:allkategori.php");  

?>
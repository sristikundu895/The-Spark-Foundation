<?php 

$server="sql113.epizy.com";
$username="epiz_29118713";
$password="p290V7whEUP";
$db="epiz_29118713_basic_bank_system_database";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>

<?php
//get data from db
$connect = new mysqli("localhost","root", "gamenight01","khalil");

$sql = "SELECT `TarifB1` FROM `tarifs1` WHERE 1";

// insert in database 
$rs = mysqli_query($connect, $sql);
$ok=mysqli_fetch_array($rs);
print_r($ok['0']);

?>
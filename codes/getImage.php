<?php
require "DBManager.php";
$tpic=$_GET["tpic"];
 $conn=mysqli_connect("localhost","root","","redstore");
 $query="select tpic from addt_shirts ";
 $x=mysqli_query($conn,$query);
 $row=mysqli_fetch_assoc($x);
 mysql_close($conn);
 header("Content-type:image/jpeg");
 echo $row["tpic"];
?>
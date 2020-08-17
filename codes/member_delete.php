<?php
require "DBManager.php";
$d=$_GET["x"];
$query = "delete from member where mob=$d";

$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Record deleted!!!');window.location.href='../Admin/My Pages/membermgmt.php'</script>";	
}
else
{
echo"<script>alert('Record not deleted!!!');window.location.href='../Admin/My Pages/membermgmt.php'</script>";		
}
?>
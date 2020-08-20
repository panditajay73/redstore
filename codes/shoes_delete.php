<?php
require "DBManager.php";
$d=$_GET["x"];
$query = "delete from  add_shoes where scat=$d";

$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Record deleted!!!');window.location.href='../Admin/My Pages/shoesmgmt.html'</script>";	
}
else
{
echo"<script>alert('Record not deleted!!!');window.location.href='../Admin/My Pages/shoesmgmt.html'</script>";		
}
?>
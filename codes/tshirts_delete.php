<?php
require "DBManager.php";
$d=$_GET["x"];
$query = "delete from  addt_shirts where tname=$d";

$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Record deleted!!!');window.location.href='../Admin/My Pages/tshirtsmgmt.html'</script>";	
}
else
{
echo"<script>alert('Record not deleted!!!');window.location.href='../Admin/My Pages/tshirtsmgmt.html'</script>";		
}
?>

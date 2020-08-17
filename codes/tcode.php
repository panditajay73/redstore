<?php
require "DBManager.php";
$uploaddir="C:/wamp/www/flower_Aura/tshirts/";
$uploadfile=$uploaddir.basename($_FILES["tpic"]["name"]);
$tname=$_POST["tname"];
$tpic=$_FILES["tpic"]["name"];
$ttype=$_POST["ttype"];

$query="insert into addt_shirts values('$tname','$tpic','$ttype')";
$db=new DBManager();
$x=$db->insertUpdateOrDelete($query);
if($x==false)
{
if(move_uploaded_file($_FILES["tpic"]["tmp_name"],$uploadfile))
{
	echo "<script>alert('Record saved!!');window.location.href='../Admin/My Pages/addtshirts.php'</script>";
}	
}
else
{
echo "<script>alert('Record not saved!!');window.location.href='../Admin/My Pages/addtshirts.php'</script>";	
}

?>
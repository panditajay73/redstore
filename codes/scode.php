<?php
require "DBManager.php";
$uploaddir="C:/wamp/www/flower_Aura/shoes/";
$uploadfile=$uploaddir.basename($_FILES["spic"]["name"]);
$sname=$_POST["sname"];
$spic=$_FILES["spic"]["name"];
$scat=$_POST["scat"];
$sdt= Date('d/m/Y');

$query="insert into  add_shoes values('$sname','$spic','$scat','$sdt')";
$db=new DBManager();
$x=$db->insertUpdateOrDelete($query);
if($x==false)
{
if(move_uploaded_file($_FILES["spic"]["tmp_name"],$uploadfile))
{
	echo "<script>alert('Record saved!!');window.location.href='../Admin/My Pages/addshoes.php'</script>";
}	
}
else
{
echo "<script>alert('Record not saved!!');window.location.href='../Admin/My Pages/addshoes.php'</script>";	
}

?>
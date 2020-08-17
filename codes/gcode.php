<?php
require "DBManager.php";
$uploaddir="C:/wamp/www/flower_Aura/gadgets/";
$uploadfile=$uploaddir.basename($_FILES["gpic"]["name"]);
$gpic=$_FILES["gpic"]["name"];
$gcat=$_POST["gcat"];
$gdt= Date('d/m/Y');
$query="insert into add_gadgets values('$gpic','$gcat','$gdt')";
$db=new DBManager();
$x=$db->insertUpdateOrDelete($query);
if($x==false)
{
if(move_uploaded_file($_FILES["gpic"]["tmp_name"],$uploadfile))
{
	echo "<script>alert('Record saved!!');window.location.href='../Admin/My Pages/addgadgets.php'</script>";
}	
}
else
{
echo "<script>alert('Record not saved!!');window.location.href='../Admin/My Pages/addgadgets.php'</script>";	
}

?>
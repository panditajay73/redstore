<?php
session_start();
require "DBManager.php";
$opass=$_POST["opass"];
$npass=$_POST["npass"];
$cpass=$_POST["cpass"];
if($npass==$cpass)
{
	$userid=$_SESSION["userid"];
	$query="update login set passwd='$npass' where userid='$userid'";
	$db=new DBManager();
$x=$db->insertUpdateOrDelete($query);
if($x==false)
{
echo "<script>alert('Password changed!!');window.location.href='/eCommerce/account.html'</script>";
}
else
{
	echo "<script>alert('Password not changed!!');window.location.href='../Admin/My Pages/changepassword.html'</script>";
}
}
else
{
echo "<script>alert('Plz confirm password!!');window.location.href='../Admin/My Pages/changepassword.html'</script>";	
}
?>
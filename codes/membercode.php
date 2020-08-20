<?php

require "DBManager.php";
$name= $_POST["name"];
$mob= $_POST["mobile"];
$email= $_POST["email"];
$msg= $_POST["msg"];
$rdt= Date('d/m/Y');

$query="insert into member values ('$name','$mob','$email','$msg','$rdt')";
$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Thanks for become a member');window.location.href='/eCommerce/account.html'</script>";
}
else
{
echo"<script>alert('Sorry!!');window.location.href='/eCommerce/account.html'</script>";
}
?>

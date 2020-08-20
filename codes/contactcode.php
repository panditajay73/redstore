<?php

require "DBManager.php";
$name= $_POST["name"];
$email= $_POST["email"];
$mob= $_POST["mob"];
$msg= $_POST["msg"];
$cdt= Date('d/m/Y');

$query="insert into contacts values ('$name','$email','$mob','$msg','$cdt')";
$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Thanks for contact us');window.location.href='/eCommerce/contact.html'</script>";
}
else
{
echo"<script>alert('Sorry!!');window.location.href='/eCommerce/contact.html'</script>";
}
?>

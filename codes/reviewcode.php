<?php

require "DBManager.php";
$name= $_POST["name"];
$rstar= $_POST["star"];
$comments= $_POST["msg"];
$rdt= Date('d/m/Y');

$query="insert into reviews values ('$name','$rstar','$comments','$rdt')";
$db=new DBManager();
$x=$db->insertUpdateorDelete($query);
if($x==false)
{
echo"<script>alert('Thanks for Rating us');window.location.href='/flower_Aura/review.php'</script>";
}
else
{
echo"<script>alert('Sorry!!');window.location.href='/flower_Aura/review.php'</script>";
}
?>

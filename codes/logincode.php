<?php
session_start();
$userid=$_POST["userid"];
$passwd=$_POST["pass"];
$conn = mysqli_connect("localhost","root","","redstore");
if($conn==false)
{
die("Connection is not establish ".mysqli_connect_error());
}
 $query="select * from login ";
  $x=mysqli_query($conn,$query);
			if(mysqli_num_rows($x))
			   {
			   while($row=mysqli_fetch_assoc($x))
			   {
				$userid= $row["userid"]; 
				$password= $row["passwd"];
if($userid==$userid && $password==$passwd)
{
	$_SESSION["userid"]=$userid;
	echo"<script>alert('Welcome to Admin zone');window.location.href='../Admin/My Pages/dashboard.php'</script>";  
}	
else
{
	 echo"<script>alert('Invalid userid or password');window.location.href='../account.php'</script>";  
}
			   }
			   }
			   else
			   {
				 echo"<script>alert('Invalid userid or password');window.location.href='../account.php'</script>";  
			   }
?>
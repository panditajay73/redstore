<?php
class DBManager
{

 
//create a function 
function insertUpdateOrDelete($query)
{
       
 $conn = mysqli_connect("localhost","root","","redstore");
if($conn==false)
{
die("Connection is not establish ".mysqli_connect_error());
}
    
echo mysqli_query($conn,$query);
}
}
?>





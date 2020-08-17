<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Category - E-Commerce Website</title>
    <link rel="stylesheet" href="style.css">
	<link href="css/css/hover-min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
	$(document).ready(function() {
  $('.image-link').magnificPopup({type:'image'});
});
	</script>
	<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=919f8ea7-4a83-4df4-ae3d-5b2811d491fa"> </script>
<!-- End of  Zendesk Widget script -->
	</head>
    <body>
    <div class="header">
    <div  class="container">
        <div class="navbar" >
        <div class="logo">
          <a href="index.php"> <img src="images/logo.png" width="125px"></a> 
            </div>
            <nav>
            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="account.php">Register</a></li>
                <li><a href="review.php">Reviews</a></li>
                </ul>
            </nav>
             <a href="cart.php">  <img src="images/cart.png" width="30px" height="30px" title="Add to Cart / CART"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        <!----------offer---------->
       <div class="offer" style="background:none">
        
        <div class="small-container">
            <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
                </div>
            <div class="col-2">
                 <p>Exclusively Available on RedStore</p>
                <h1>Smart Band 4</h1>
                <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can as be. </small><br>
                <a href="" class="btn">Buy Now&#8594;</a>
                </div>
            </div> 
            </div>
        </div>
        </div>

     
        
        </div>
        <!------------------ featured categories--------------->
        <div class="small-container">
			<h2 class="title">Latest T-Shirt's</h2>
		<div class="row" style="border:1px solid black;border-radius:50px; box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);" >
<div class="col-sm-12"><center>
			<?php
			   $conn=mysqli_connect("localhost","root","","redstore");
			   if($conn==false)
			   {
				die("connection failed".mysqli_connect_error());   
			   }
			   $query="select * from addt_shirts";
			   $x=mysqli_query($conn,$query);
			   if(mysqli_num_rows($x))
			   {
					while($row=mysqli_fetch_assoc($x))
					{
					echo "<a class='image-link' href='tshirts/".$row["tpic"]."'><img class='img img-thumbnail hvr hvr-pop' src='tshirts/".$row["tpic"]."' style='height:175px;width:175px;margin:40px;border-radius:100px;border:1px solid #8a8a86; box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);'/></a>";
					}
			   }
			   else
			   {
				   echo "<center>Image not found.....</center>";
			   }
			  ?>

</center>
            
            </div>
            </div>
		<h2 class="title">Old T-Shirt's</h2>
            <div class="row">
            <div class="col-4">
            <a href="product-details.php">    <img src="images/product-1.jpg"></a>
                <h4> T-Shirt's Brand No.1 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-6.jpg">
                <h4>T-Shirt's Brand No.2 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/gallery-3.jpg" style="height:320px;width:240px">
                <h4>T-Shirt's Brand No.3 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-4.jpg">
                <h4>T-Shirt's Brand No.4 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
            </div>
			
			<h2 class="title">Latest Shoes</h2>
		<div class="row" style="border:1px solid black;border-radius:50px; box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);" >
		
<div class="col-sm-12" ><center>
			<?php
			   $conn=mysqli_connect("localhost","root","","redstore");
			   if($conn==false)
			   {
				die("connection failed".mysqli_connect_error());   
			   }
			   $query="select * from  add_shoes";
			   $x=mysqli_query($conn,$query);
			   if(mysqli_num_rows($x))
			   {
					while($row=mysqli_fetch_assoc($x))
					{
					echo "<a class='image-link' href='shoes/".$row["spic"]."'><img class='img img-thumbnail hvr hvr-pop' src='shoes/".$row["spic"]."' style='height:175px;width:175px;margin:40px;border-radius:100px;border:1px solid #8a8a86; box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);'/></a>";
					}
			   }
			   else
			   {
				   echo "<center>Image not found.....</center>";
			   }
			  ?>

</center></div></div>
			
             <h2 class="title">Old Shoes</h2>
              <div class="row">
            <div class="col-4">
                <img src="images/product-5.jpg">
                <h4>Shoes Brand No.1 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-2.jpg">
                <h4>Shoes Brand No.2 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Shoes Brand No.3 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-11.jpg">
                <h4>Shoes Brand No.4 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                   </div>
				   
				   <h2 class="title">Latest Gadgets</h2>
		<div class="row" style="border:1px solid black;border-radius:50px; box-shadow: 0 0 20px 0px rgba(0,0,0,0.9);" >
<div class="col-sm-12"><center>
			<?php
			   $conn=mysqli_connect("localhost","root","","redstore");
			   if($conn==false)
			   {
				die("connection failed".mysqli_connect_error());   
			   }
			   $query="select * from  add_gadgets";
			   $x=mysqli_query($conn,$query);
			   if(mysqli_num_rows($x))
			   {
					while($row=mysqli_fetch_assoc($x))
					{
					echo "<a class='image-link' href='gadgets/".$row["gpic"]."'><img class='img img-thumbnail hvr hvr-pop' src='gadgets/".$row["gpic"]."' style='height:175px;width:175px;margin:40px;border-radius:100px;border:1px solid #8a8a86; box-shadow: 0 0 20px 0px rgba(0,0,0,0.5);'/></a>";
					}
			   }
			   else
			   {
				   echo "<center>Image not found.....</center>";
			   }
			  ?>

</center></div></div>
				   
            <h2 class="title">Old Gadgets</h2>
                    <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg">
                <h4>Gadgets Brand No.1 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-10.jpg">
                <h4>Gadgets Brand No.2</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-8.jpg">
                <h4>Gadgets Brand No.3 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$50.00</p>
                </div>
                 <div class="col-4">
                <img src="images/product-12.jpg">
                <h4>Gadgets Brand No.4 </h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
                </div>
            </div>
           
        </div>
       
   
        
  <!------------testimonial----->
        <div class="testimonial">
        <div class="small-container">
            <div class="row">
            <div class="col-3">
                 <i class="fa fa-quote-left"></i>
            <p>Lorem Ipsum is simply dumy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-1.png">
                <h3>Sean Parker</h3>
            </div>
                 <div class="col-3">
                 <i class="fa fa-quote-left"></i>
            <p>Lorem Ipsum is simply dumy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-2.png">
                <h3>Mike Smith</h3>
            </div>
                 <div class="col-3">
                 <i class="fa fa-quote-left"></i>
            <p>Lorem Ipsum is simply dumy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                <div class="rating">
                <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user-3.png">
                <h3>Mabel Joe</h3>
            </div>
            </div>
        </div>
        </div>
       <!----------brands----------->
        <div class="brands">
        <div class="small-container">
            <div class="row">
           <div class="col-5">
              <a href="https://www.godrejinterio.com/">  <img src="images/logo-godrej.png"></a>
                </div>
                <div class="col-5">
               <a href="https://www.oppo.com/in/"> <img src="images/logo-oppo.png"></a>
                </div>
                <div class="col-5">
              <a href="https://www.coca-colacompany.com/">  <img src="images/logo-coca-cola.png"></a>
                </div>
                <div class="col-5">
              <a href="https://www.paypal.com/">  <img src="images/logo-paypal.png"></a>
                </div>
                <div class="col-5">
              <a href="https://www.philips.co.in/">  <img src="images/logo-philips.png"></a>
                </div>
            </div>
            </div>
        </div>
        <!----------footer------------>
        <div class="footer">
        <div class="container">
            <div class="row">
        <div class="footer-col-1">
                <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
            <a href="https://play.google.com/store?hl=en_IN"><img src="images/play-store.png"></a>
                <a href="https://www.apple.com/ios/app-store/"> <img src="images/app-store.png"></a>
            </div>
                </div>  
                 <div class="footer-col-2">
                <img src="images/logo-white.png">
            <p>Our Purpose Is To Substainably Make the Pleasure and Benefits of Sports Accessible to the many.</p>
                </div> 
                 <div class="footer-col-3">
                <h3>Useful Links</h3>
            <ul><li>Coupons</li>
                <li>Blog Post </li>
                <li>Return Policy</li>
                <li>Join Affiliate</li>
                     </ul>
                </div> 
                <div class="footer-col-4">
                <h3>Follow Us</h3>
           <ul> <a href="https://www.facebook.com/profile.php?id=100021983162182"><li  style="cursor: pointer;color: #8a8a8a;">Facebook</li></a>
                            <a href="https://twitter.com/ajaypandey91700?fbclid=IwAR1lBCs4An9hEfE8uzmOzyXfN7ZhqBBczPNxflMguzf9vfy7h4kHS0mG0LM">   <li  style="cursor: pointer;color: #8a8a8a;">Twitter </li></a>
              <a href="https://www.instagram.com/_ajaypandey__/?fbclid=IwAR1YP_kjtCURmJRqMYLpbmEwfP42ESBceHqayVLAePOnHEOfQag4phtfMME">  <li  style="cursor: pointer;color: #8a8a8a;">Instagram</li></a>
              <a href="https://www.youtube.com/channel/UCry_nlZqmjm7A8XcbilLFiQ?view_as=subscriber">  <li style="cursor: pointer;color: #8a8a8a;">YouTube</li></a>
                     </ul>
                </div> 
            </div>
            <hr>
            <p class="copyright">Copyrights 2020 - Ajay Pandey | M.M.I.T Siddharth Nagar</p>
            </div>
        </div>
        <!------js for toggle------->
        <script>
        var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "300px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </body>
</html>



















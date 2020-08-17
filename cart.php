<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=919f8ea7-4a83-4df4-ae3d-5b2811d491fa"> </script>
<!-- End of  Zendesk Widget script -->   
   </head>
    <body>
       
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
        </div>
 <!-------------cart item detai;s------------>
        <div class="small-container cart-page">
        <table>
            <tr>
            <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
            <td>
                <div class=" cart-info">
               <a href="product-details.php">    <img src="images/product-1.jpg"></a>
                    <div>
                    <p>Red Printed T-Shirt</p>
                        <small>Price: $50.00</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
                <tr>
            <td>
                <div class=" cart-info">
                <img src="images/buy-2.jpg">
                    <div>
                    <p>Red Printed T-Shirt</p>
                        <small>Price: $75.00</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
                <tr>
            <td>
                <div class=" cart-info">
                <img src="images/buy-3.jpg">
                    <div>
                    <p>Red Printed T-Shirt</p>
                        <small>Price: $100.00</small><br>
                        <a href="">Remove</a>
                    </div>
                </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$100.00</td>
            </tr>
            </table>
            
            <div class="total-price">
            <table>
                <tr>
                <td>Subtotal</td>
                <td>$225.00</td>
                </tr>
                <tr>
                <td>Tax</td>
                <td>$25.00</td>
                </tr>
                <tr>
                <td>Total</td>
                <td>$250.00</td>
                </tr>
                </table>
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



















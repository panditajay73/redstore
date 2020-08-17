<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RedStore</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="contact.css">
    <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=919f8ea7-4a83-4df4-ae3d-5b2811d491fa"> </script>
<!-- End of  Zendesk Widget script -->
    <script>
    function myfun(){
        var a = document.getElementById("mobilenumber").value;
        if(a==""){
           
           document.getElementById("message").innerHTML="** please fill mobile number";
            return false;
           }
        if(isNaN(a)){
            document.getElementById("message").innerHTML="** enter only numeric value!!";
            return false;
           }
        if(a.length<10){
            document.getElementById("message").innerHTML="** mobile number must be 10 digits!!";
            return false;
        }
        if(a.length>10){
            document.getElementById("message").innerHTML="** mobile number must be 10 digits!!";
            return false;
        }
        if((a.charAt(0)!=9) && (a.charAt(0)!=8) && (a.charAt(0)!=7) && (a.charAt(0)!=6)){
            document.getElementById("message").innerHTML="** please enter valid indian number!!";
            return false;
        }
    }
    </script>
    </head>
    <body>
   
 <!-------------contact us form details------------><div class="container">
       <a href="index.php"><img src="images/logo.png" style="height: 30px;width: 100px;margin: 20px 20px;cursor: pointer"></a> 
       <div class="contact-us">
        <div class="title">
           <h1>Contact Us</h1>
           </div>
           <form action="codes/contactcode.php" method="post" onsubmit="return myfun()">
           <div class="form">
           <div class="form-items">
               <input type="text" name="name" class="input" placeholder="Username"> <i class="fa fa-user"></i>
               </div>
                <div class="form-items">
               <input type="email" class="input" placeholder="E-Mail" name="email">
                     <i class="fa fa-envelope"></i>
               </div>
               <div class="form-items">
               <input id="mobilenumber" type="text" class="input" placeholder="Phone Number"  name="mob" value="" maxlength="10">
                     <i class="fa fa-phone-square"></i>
                   <span id="message" style="color:red;font-size:13px;"></span>
               </div>
                <div class="form-items">
              <textarea class="input message" cols="30" rows="10" placeholder="Message......." name="msg"></textarea>
               </div> 
           </div>
               
           <button  type="submit" class="btn btn-success" style="width:100%;outline:none;border:none;" > 
           Submit
               <i class="fa fa-arrow-right"></i>
           </button>
               </form>
         <div class="social-icons">
           <div class="facebook">
               <a href="https://www.facebook.com/profile.php?id=100021983162182"> <i class="fa fa-facebook-f"></i></a>
               </div>
               <div class="twitter">
             <a href="https://twitter.com/ajaypandey91700?fbclid=IwAR1bLMSoH8pd8UR0ldJmySbLolS0Sxia7PMRnAcOaH-a7OS4ImvI0AI9c7k">    <i class="fa fa-twitter"></i></a>
               </div>
               <div class="google">
              <a href="https://www.google.com/">  <i class="fa fa-google-plus"></i></a>
               </div>
           </div>
        </div>
       <hr>
          <p class="copyright">Copyrights 2020 - Ajay Pandey | M.M.I.T Siddharth Nagar</p>
     </div>
    </body>
</html>



















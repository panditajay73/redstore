<html>
<head>
<link href="css/bootstrap.min.css"rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet" />
<title>Review Us - RedStore</title>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=919f8ea7-4a83-4df4-ae3d-5b2811d491fa"> </script>
<!-- End of  Zendesk Widget script -->
<style>
#n2{
width:200px;
border:2px solid red;
margin-left:90px;
margin-top:-3px;
}
#n1{
width:200px;
border:2px solid red;

margin-top:-2px;
}



   

    html {
      font-size: 16px;
    }

    h5 {
      font-family: 'Lato', sans-serif;
      font-size: 20px;
      font-weight: 700;
      color: #444;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin: 55px 0 35px;
    }

    a {
      color: #ddd;
      text-transform: capitalize;
      font-size: 20px;
      &:hover {
        color: #ccc;
        text-decoration:none;
      }
    }

    .carousel-inner { margin: auto; width: 90%; }
    .carousel-control            { width:  4%; }
    .carousel-control.left,
    .carousel-control.right {
      background-image:none;
    }

    .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right {
      margin-top:-10px;
      margin-left: -10px;
      color: #444;
    }

    .carousel-inner {
      a {
        display:table-cell;
        height: 180px;
        width: 200px;
        vertical-align: middle;
      }
      img {
        max-height: 150px;
        margin: auto auto;
        max-width: 100%;
      }
    }

    @media (max-width: 767px) {
      .carousel-inner > .item.next,
      .carousel-inner > .item.active.right {
          left: 0;
          -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0);
      }
      .carousel-inner > .item.prev,
      .carousel-inner > .item.active.left {
          left: 0;
          -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
      }

    }
    @media (min-width: 767px) and (max-width: 992px ) {
      .carousel-inner > .item.next,
      .carousel-inner > .item.active.right {
          left: 0;
          -webkit-transform: translate3d(50%, 0, 0);
          transform: translate3d(50%, 0, 0);
      }
      .carousel-inner > .item.prev,
      .carousel-inner > .item.active.left {
          left: 0;
          -webkit-transform: translate3d(-50%, 0, 0);
          transform: translate3d(-50%, 0, 0);
      }
    }
    @media (min-width: 992px ) {

      .carousel-inner > .item.next,
      .carousel-inner > .item.active.right {
          left: 0;
          -webkit-transform: translate3d(16.7%, 0, 0);
          transform: translate3d(16.7%, 0, 0);
      }
      .carousel-inner > .item.prev,
      .carousel-inner > .item.active.left {
          left: 0;
          -webkit-transform: translate3d(-16.7%, 0, 0);
          transform: translate3d(-16.7%, 0, 0);
      }

    }
	form textarea{
    height: 150px;
    width: 100%;
    overflow: hidden;
	outline: none; 
    background: #222;
    padding: 10px;
    font-size: 20px;
    resize: none;
}
.btn{
    background: #ff523b;
    color: #fff;
    text-align: center;
    padding: 12px;
  cursor: pointer;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover{
    background: #563434;
}
.btn .fa{
    margin-left: 5px;
    font-size: 13px;
}
.footer2 hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
</style>


<script>
//for span 
$(document).ready(function(){
$(".sp").click(function(){
var n=parseInt($(this).attr("data"))
$("#star").val(n);
for(var i=1;i<=5;i++)
{
if(i<=n)
{
$("#ss"+i).css("color","yellow")
}
else
{
$("#ss"+i).css("color","red")
}
}
})
})
</script>
</head>
<body>
<div class="container-fluid" style="background:radial-gradient(#fff,#ffd6d6)">
<a href="index.php"><img src="images/logo.png" style="height: 30px;width: 100px;margin: 20px 20px;cursor: pointer"></a>
<div class="row" >

<div class="col-sm-4"></div>
<div class="col-sm-4" style="width:400px;;min-height:400px;;margin-top:20px;background:#47484b;padding:30px;border-radius:30px;border:2px solid #808080;box-shadow: 0 0 30px 0px rgba(0,0,0,0.9);">
<center><form action="codes/reviewcode.php" method="post">

<span id="ss1" data="1" class="fa fa-star sp" style="font-size:50px;color:red;margin-left:0px;cursor:pointer" title="1-Star"></span>
<span id="ss2" data="2" class="fa fa-star sp" style="font-size:50px;color:red;margin-left:10px;cursor:pointer" title="2-Star"></span>
<span id="ss3" data="3" class="fa fa-star sp" style="font-size:50px;color:red;margin-left:10px;cursor:pointer" title="3-Star"></span>
<span id="ss4" data="4" class="fa fa-star sp" style="font-size:50px;color:red;margin-left:10px;cursor:pointer" title="4-Star"></span>
<span id="ss5" data="5" class="fa fa-star sp" style="font-size:50px;color:red;margin-left:10px;cursor:pointer" title="5-Star"></span>
<input type="hidden" name="star" id="star">
<br><br>
<input type="text" required class="form-control" placeholder="Username" name="name"style="border-radius:15px;background:#f5fffa;height:45px;"/><br>

<textarea placeholder="Describe your experience..." class="form-control"  name="msg" style="border-radius:15px;background:#f5fffa;height:100px;"></textarea><br><br>
      
           <button  type="submit" class="btn btn-success" style="width:100%;outline:none;border:none;" > 
           Post
               <i class="fa fa-arrow-right"></i>
           </button>
</form></center>
</div>
<div class="col-sm-4"></div>
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
<div class="footer2">
       <hr style="width:100%;color:black">
          <p class="copyright">Copyrights 2020 - Ajay Pandey | M.M.I.T Siddharth Nagar</p></div>
</div>
</body>
</html>
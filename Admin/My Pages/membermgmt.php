<!DOCTYPE html>
<html lang="en">
<?php session_start()?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/jpg" sizes="16x16" href="ajay.jpg" >
    <title>RedStore | Admin Zone</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap" rel="stylesheet">
    <style>
    body{
    font-family: 'Poppins', sans-serif;
}
    </style>
     <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=919f8ea7-4a83-4df4-ae3d-5b2811d491fa"> </script>
<!-- End of  Zendesk Widget script -->
</head>

<body class="fix-header">
      <?php
	  session_start();
	  if(isset($_SESSION["userid"]))
	  {
		  
	  }
	  else
	  {
		echo"<script>alert('First login and then go to next page!!');window.location.href='/flower_Aura/account.php'</script>";  
	  }
	  ?>
   
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
   
    <div id="wrapper">
     
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="logo.png" alt="home" class="dark-logo" style="height:80px;width:80px" />
                            <!--This is light logo icon-->
                            <img src="logo.png" alt="home" class="light-logo" style="height:40px;width:100px" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                           
                           
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                  
                    <li>
                        <a class="profile-pic" href="#"> <img src="ajay.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Ajay Pandey</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Admin Menus</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="membermgmt.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Member Mgmt</a>
                    </li>
                    <li>
                        <a href="contactmgmt.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Contact Mgmt</a>
                    </li>
                    <li>
                        <a href="reviewmgmt.php" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Review Mgmt</a>
                    </li>
                    <li>
                        <a href="addtshirts.php" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Add T-Shirts</a>
                    </li>
                    <li>
                        <a href="addshoes.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Add Shoes</a>
                    </li>
					 <li>
                        <a href="addgadgets.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Add Gadgets</a>
                    </li>
					 <li>
                        <a href="changepassword.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Change Password</a>
                    </li>
                    <li>
                        <a href=" logout.php" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Logout</a>
                    </li>

                </ul>
               
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
              <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="dashboard.php">
                        <h4 class="page-title" style="font-size:25px;cursor:pointer">Dashboard</h4></a> </div>
                     <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                        </div>
                   <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12" style=" font-weight:500;">
                      <div class="col-md-4" ><a href="tshirtsmgmt.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>T-Shirt's mgmt</a></div>
                        
                    
                  <div class="col-md-4"><a href="shoesmgmt.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Shoes mgmt</a></div>
                        
                    
                    <div class="col-md-4"><a href="gadgetsmgmt.php" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Gadgets mgmt</a></div>
                        
                 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				<div class="row">
				<center><h3 style="font-size:20px;font-weight:bold">Member Management</h3></center>
               <div class="col-md-12">
			   <table class="table table-responsive" style="padding:20px;background:#fff;">
			   <tr style="font-weight:bold">
			   <th>Sr.no</th>
			   <th>Name</th>
			   <th>Mobile</th>
			   <th>Email</th>
			   <th>Address</th>
			   <th>Date</th>
			   <th>Delete</th>
			   </tr>
			   <?php
			   $conn=mysqli_connect("localhost","root","","redstore");
			   if($conn==false)
			   {
				die("connection failed".mysqli_connect_error());   
			   }
			   $query="select * from member";
			   $x=mysqli_query($conn,$query);
			   if(mysqli_num_rows($x))
			   {
				$i=0;
					while($row=mysqli_fetch_assoc($x))
					{
					$i++;
						echo "<tr style='font-weight:500'>
						 <td>$i.</td>
						 <td>".$row["name"]."</td>
						 <td>".$row["mob"]."</td>
						 <td>".$row["email"]."</td>
						 <td>".$row["msg"]."</td>
						 <td>".$row["rdt"]."</td>
						 <td><a href='../../codes/member_delete.php?x=".$row["mob"]."'>
						 <span class='fa fa-trash' style='font-size:20px;color:red'></span></a></td>
						</tr>";
					}
			   }
			   else
			   {
				   echo "<tr><td colspan='7'><center>Data not found.....</center></td></tr>";
			   }
			   ?>
			   </table>
			   </div>
               </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center" style="font-weight:bold;"> 2020 &copy; Ajay Pandey | M.M.I.T Siddharth Nagar </footer>
        </div>
       
    </div>
   
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>

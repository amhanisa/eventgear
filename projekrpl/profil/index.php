<?php 
    session_start();
    include("../koneksi.php");
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
        $sql = "select * from users where username='$username';";
        $result = mysqli_query($conn, $sql);
        $rowcount = mysqli_num_rows($result);
        if($rowcount==0){
            exit("Not found.");
        }
    } else {
        exit("Forbidden.");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="../css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  <style>
      img {
          object-fit: cover;
          width:500px;
          height:300px;
      }
      /* The side navigation menu */
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0; /* Stay at the top */
    right: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
  </style>
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="../">Event Gear</a>
              </div>
              
              <div class="navicon">
              
                <div class="menu-container">
                  <div class="circle dark inline">
                    <i class="icon ion-navicon" onclick="openNav()"></i>
                    
                  </div>
                  <!-- <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="about/">About</a></li>
                        <li><a href="contact/">Contact</a></li>
                      </ul>
                    </div>
                  </div> -->
                </div>
                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>



<!-- Single Project section
================================================== -->
<section id="single-project">
   <div class="container">
      <div class="row">
          <?php
            $nama;
            if($rowcount>0){
                while($row = mysqli_fetch_assoc($result)){
                    $nama = $row['nama_user'];
                    $user = $row['username'];
                    $password  = $row['password'];
                    
                    echo '
                    
                    <form action="update.php" method="post">
                    <div class="col-md-4 col-sm-4"></div><center>
                      <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                          <div class="project-info">
                              <h4>Nama</h4>
                              <input type="text" name="nama" required value="'.$nama.'">
                          </div>
                          <div class="project-info">
                              <h4>Username</h4>
                              <input type="text" name="username" required value="'.$user.'">
                          </div>
                          <div class="project-info">
                              <h4>Password</h4>
                              <input type="password" name="password" required value="'.$password.'">
                          </div>
                          <div class="project-info col-md-3 col-sm-3"></div>
                          <div class="project-info col-md-6 col-sm-6">
                              <input class="btn btn-secondary btn-lg btn-block" name="submit" type="submit" value="Update">
                          </div>
                          <div class="project-info col-md-3 col-sm-3"></div>
                          
                              
                      </div></center>
                     
                      <div class="col-md-4 col-sm-4"></div>
                </form>
                
                ';
                }
            }
          ?>
        

		

      </div>
   </div>
</section>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
      if(isset($_SESSION["username"])){
        echo '
		<a href="../profil/">'.$_SESSION["username"].'</a>
        <a href="../about/">About</a>
        <a href="../contact/">Contact Us</a>
        <a href="../logout/">Logout</a>
        ';
      } else {
        echo '
        <a href="../login/">Login</a>
        <a href="../about/">About</a>
		<a href="../contact/">Contact Us</a>
        ';
      }
      
    // }
  ?>
  
</div>

<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">PROJEK RPL EVENTGEAR - Designed by Kelompok 5</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<title>Edit Profile</title>

<!-- Javascript 
================================================== -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>
<script>
    /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
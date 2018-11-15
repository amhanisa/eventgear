<?php
    include('../koneksi.php');
    session_start();
    if(isset($_SESSION["username"])){
        header('Location: ../');
    } else {
        echo '
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
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300" rel="stylesheet" type="text/css">
        
        </head>
        <body>
        
        
        <!-- Preloader section
        ================================================== -->
        <div class="preloader">
        
            <div class="sk-spinner sk-spinner-pulse"></div>
        
        </div>
        
        
        <!-- Navigation section
        ================================================== -->
        <div class="nav-container">
           <nav class="nav-inner transparent">
        
              <div class="navbar">
                 <div class="container">
                    <div class="row">
        
                      <div class="brand">
                        <a href="../">Event Gear</a>
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
                  
              <form action="login.php" method="post">
                  <div class="col-md-4 col-sm-4"></div><center>
                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                        <div class="project-info">
                            <h4>Username</h4>
                            <input type="text" name="username" placeholder="Enter username..." required>
                        </div>
                        <div class="project-info">
                            <h4>Password</h4>
                            <input type="password" name="password" placeholder="Enter password..." required>
                        </div>
                        
                        <div class="project-info col-md-3 col-sm-3"></div>
                        <div class="project-info col-md-6 col-sm-6">
                            <input class="btn btn-secondary btn-lg btn-block" type="submit" name="submit" value="Login">
                        </div>
                        <div class="project-info col-md-3 col-sm-3"></div>
                        
                            
                    </div></center>
                   
                    <div class="col-md-4 col-sm-4"></div>
              </form>
        
           </div>
           <center><a class="wow fadeInUp" data-wow-delay="1.3s" style="color: lightblue;" href="../register/">Dont have an account? Register Now!</a></center>
        </section>
          
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
        
        <title>Login</title>
        
        <!-- Javascript 
        ================================================== -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/custom.js"></script>
        
        </body>
        </html>
        ';
    }

?>

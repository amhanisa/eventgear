<?php 
    include("../koneksi.php");
    session_cache_limiter('private');session_cache_expire(0);
    session_start();
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]!="admin"){
            exit("Forbidden.");
        }
    } else {
        exit("Forbidden.");
    }
    // if(isset($_GET['q'])){
    //     $q = $_GET['q'];
    //     $sql = "select * from tools where id='$q'";
    //     $result = mysqli_query($conn, $sql);
    //     $rowcount = mysqli_num_rows($result);
    //     if($rowcount==0){
    //         exit("Not found.");
    //     }
    // } else {
    //     exit("Forbidden.");
    // }
    $nama;
    $desc;
    $kat;
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
<body onload="FAuto()">


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
          <form id="add" action="tambah.php" method="POST" enctype="multipart/form-data">
            <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="1.3s">
                <div class="project-info">
                    <h4>ID</h4>
                    <input name="id" value="" required>
                </div>
                <div class="project-info">
                    <h4>Nama</h4>
                    <input name="nama" value="" required>
                </div>
                <div class="project-info">
                    <h4>Stok Barang</h4>
                    <input name="stock" value="" required>
                </div>
                <div class="project-info">
                    <div class="form-group">
                        <label for="kat">Kategori</label>
                        <select class="form-control" id="kat" name="sellist1">
                            <option>Proyektor</option>
                            <option>Screen</option>
                            <option>Sound System</option>
                            <option>LED</option>
                            <option>TV</option>
                            <option>Lampu</option>
                            <option>Tenda</option>
                        </select>
                    </div>
                </div>
                <div class="project-info">
                    <input class="btn btn-primary" type="submit" name="submit" value="Add">
                </div>
                                
            </div>
            <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="1.6s">
                <h4>Deskripsi</h4>
                <textarea rows="4" cols="63" id="desc" name="desc"></textarea>
                <h4>Gambar</h4>
                <input type="file" name="fileToUpload" id="fileToUpload" required>
                <img id="gambarr" src="#" class="img-responsive" alt="">
            </div>
                
                        
          </form>
          
        

		

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

<title>Add Item</title>

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
<script src="../js/jquery-3.3.1.min.js"></script>
    <script>
    //   $(function () {
        function readURL(input) {

            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambarr').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        $("#fileToUpload").change(function() {
            readURL(this);
        });

        // $("#add").on('submit', function (e) {
            

        //     e.preventDefault();

        //     $.ajax({
        //         type: 'post',
        //         url: 'tambah.php',
        //         data: $('#update').serialize(),
        //         success: function () {
        //            alert("MASUK");
        //         }
        //     });
            
        // });

            

            
            
        
        // function change(){
        //     $button = '<button class="btn btn-info" name="edit" onclick="myF()">Edit</button>';
        //     $('input[name=id]').replaceWith($('<p name="id">' + $('input[name=id]').val() + '</p>'));
        //     $('input[name=nama]').replaceWith($('<p name="nama">' + $('input[name=nama]').val() + '</p>'));
        //     $('input[name=stock]').replaceWith($('<p name="stock">' + $('input[name=stock]').val() + '</p>'));
        //     $('input[name=kategori]').replaceWith($('<p name="kategori">' + $('input[name=kategori]').val() + '</p>'));
        //     var ta = encode4HTML($('textarea[name=desc]').val());
        //     $('textarea[name=desc]').replaceWith('<p id="desc" name="desc">'+ta+'</p>');
        //     // document.getElementByName("desc").innerHTML =  encode4HTML(ta);
        //     $('input[name=submit]').replaceWith($button);
        // }

        // function myF(){
        //     $('p[name=id]').replaceWith($('<input name="id" value="'+$('p[name=id]').text()+'">'));
        //     $('p[name=nama]').replaceWith($('<input name="nama" value="'+$('p[name=nama]').text()+'">'));
        //     $('p[name=stock]').replaceWith($('<input name="stock" value="'+$('p[name=stock]').text()+'">'));
        //     $('p[name=kategori]').replaceWith($('<input name="kategori" value="'+$('p[name=kategori]').text()+'">'));
        //     str = document.getElementById("desc").innerHTML;
        //     str = str.replace(/<br *\/?>/gi,'\n');
        //     $('p[name=desc]').replaceWith($('<textarea rows="4" cols="63" id="desc" name="desc">'+str+'</textarea>'));
        //     $('button[name=edit]').replaceWith($('<input class="btn btn-info" name="submit" type="submit" value="Update">'));
        //     FAuto();
        // }
        
        // function encode4HTML(str) {
        //     return str
        //     .replace(/\r\n?/g,'\n')
        //     // normalize newlines - I'm not sure how these
        //     // are parsed in PC's. In Mac's they're \n's
        //     .replace(/(^((?!\n)\s)+|((?!\n)\s)+$)/gm,'')
        //     // trim each line
        //     .replace(/(?!\n)\s+/g,' ')
        //     // reduce multiple spaces to 2 (like in "a    b")
        //     .replace(/^\n+|\n+$/g,'')
        //     // trim the whole string
        //     .replace(/[<>&"']/g,function(a) {
        //     // replace these signs with encoded versions
        //         switch (a) {
        //             case '<'    : return '&lt;';
        //             case '>'    : return '&gt;';
        //             case '&'    : return '&amp;';
        //             case '"'    : return '&quot;';
        //             case '\''   : return '&apos;';
        //         }
        //     })
        //     // .replace(/\n{2,}/g,'</p><p>')
        //     // replace 2 or more consecutive empty lines with these
        //     .replace(/\n/g,'<br />');
        //     // replace single newline symbols with the <br /> entity
        //     // .replace(/^(.+?)$/,'<p>$1</p>');
        //     // wrap all the string into <p> tags
        //     // if there's at least 1 non-empty character
        // }

        function FAuto() {
            var textarea = document.querySelector('textarea');

            textarea.addEventListener('keydown', autosize);
                        
            function autosize(){
                var el = this;
                setTimeout(function(){
                    el.style.cssText = 'height:auto; padding:0';
                    // for box-sizing other than "content-box" use:
                    // el.style.cssText = '-moz-box-sizing:content-box';
                    el.style.cssText = 'height:' + el.scrollHeight + 'px';
                },0);
            }
        }

    // });
    </script>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User login</title>
<meta charset="utf-8">
  <title>Reveal Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
 <script language="javascript">
function demo()
{
var nm,pass;

 nm=document.getElementById("field1").focus;
 pass=document.getElementById("field2").focus;
 
 if(nm=="")
 {
 alert("please enter your name");
 document.getElementById("field1").focus;
 return false;
 }
 if(pass=="")
 {
 alert("please enter your password");
 document.getElementById("field2").focus;
 return false;
 }
 return true;
 }
 
</script>

 
</head>

<body>
<?php
if(isset($_POST["idd"])=="loginfail")
{
  echo"<script>alert('Login unsuccessfull')</script>";
  }
?>
<body id="body">


  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-right">
      <a href="registration1.php"><button type="button" class="btn btn-primary"><font color="#000000" size="+1">New Registraion</font></a>
      </div>
      <div class="social-links float-right">
        
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><font size="+3">Accura Placement Consultancy</font></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          
          <li><a href="feedback.php">feedback</a></li>
          
          <li><a href="contact.php">Contact</a></li>
          <li class="menu-has-children"><a href="">Login</a>
            <ul>
              <li><a href="login.php">Admin Login</a></li>
              <li><a href="userlogin.php">User Login</a></li>
             
            </ul>
			          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  
  <br /><div class="bg">
 
</div>
    <!--==========================
      About Section
    ============================-->
    
    
	<div align="center" class="log">
    <section id="about">
      <div class="container">
        <div class="row">
          <!--<div class="col-lg-6 about-img">-->
            <!--<img src="img/service4a.jpg" alt="">-->
          </div>
           <div class="bg" style="border:2px solid #CCC; height:300px; width:700px;">
          <div align="center">
		  <h1 style="padding-bottom:20px;"><font color="#000000">user-Login</font></h1>
		  <center>
            <form method="post" action="userquery.php" style="padding-left:50px;">
			
			
<ul class="form-style-1" type="none">
   <label><font size="+1" color="#000000"><b>UserName</b></font><span class="required">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="text" name="field1" style="height:30px; width:300px; margin-bottom:15px;" class="field-long
    about-us" placeholder="" id="field1" /> <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />--></li>
    <li><label><font size="+1" color="#000000"><b>Password</b></font><span class="required">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="password" name="field2"  id="field2" style="height:30px; width:300px;" class="field-long"  maxlength="10"/></li>
       
		<table style="margin-top:40px;" align="center">
		<tr>
        
	<th colspan="2"><input type="submit" value="Submit" name="Submit" class="btn btn-primary" Onclick="return demo();"/>&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="submit" value="Cancel" class="btn btn-primary" hspace="100px" /></th>
		
	</table>	
	
    </li>
	
	</ul>
	</font>
	<!-- <a href="password.php"><font size="+2" color="#0000CC"><u>Change Password</u></font></a> -->
	</form>
    
	</center>
</div>

          </div>
        </div>

      </div>
	  </div>
      <center>
      
    
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>

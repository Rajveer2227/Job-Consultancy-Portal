<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function demo()
{
var nm,cn;
nm=document.getElementById("field1").value;
cn=document.getElementById("field2").value;
if(nm=="")
{
alert("enter your name");
document.getElementById("field1").focus;
return false;
}
else if(!isNaN(nm))
{
alert("enetr characters only");
return false;
}
if(cn=="")
{
alert("Enter your contact no");
document.getElementByID("field2").focus;
}
else if(isNaN(cn))
{
alert("Enter numbers only");
return false;
}
return true;
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>feedback</title>
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

  
 <style>
 </style>
</head>

<body>
<?php
include("conn.php");
if(isset($_GET["mode"])=="save")
{
echo"<script>alert('Record inseterd successfully')</script>";
}
?>
<body id="body">

 
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body"><font size="+3">Accura Placement Consultancy</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          
          
          <li><a href="feedback.php">Feedback</a></li>
        
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

 

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/feedbacknew.avif" alt="">
          </div>

          <div class="col-lg-6 content">
		  <font size="+1">
            <table align="center">
			<h1><center><u>Feedback</u></center></h1>
			<!--<form method="post" action="feedquery.php">-->
      <form method="post" action="feedquery.php">

			
<ul class="form-style-1">
<tr>
    <th><br />Full Name </th>
	<td><input type="text" name="field1" class="field-long
    about-us" placeholder="" id="field1" style="height:30px; width:300px;" /></td> <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />--></li>
 </tr>
 <tr>  
        <th><br />Mobile Number</th>
        <td><input type="text" name="field2"  id="field2"class="field-long"  maxlength="10" style="height:30px; width:300px;" /></td>
		</tr>
		<tr>
        <th><br />Email</th>
        <td><input type="email" name="field3"  id="field3"class="field-long" style="height:30px; width:300px;" /></td>
		</tr>
		
   <tr>
        <th><br />Your Message</th>
        <td><textarea name="field5" id="field5" class="field-long field-textarea" style="height:30px; width:300px;"></textarea></td>
		</tr>

    

    <tr>
        
	<td ><br /><input type="submit" value="Submit" name="Submit" class="btn btn-primary"Onclick="return demo();"/></td>
	<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
		<td><br /><input type="reset" value="Cancel" class="btn btn-primary" hspace="100px" /></td>
    </tr>
	
	</ul>
	
	</form>
	
	</table>
	</font>		

          </div>
        </div>

      </div>
    </section><!-- #about -->

    

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

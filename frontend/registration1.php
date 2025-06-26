<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function demo()
{
var cnm,cn,email,user,pass;
cnm=document.getElementById("field1").value;
cn=document.getElementById("field2").value;
email=document.getElementById("field3").value;
user=document.getElementById("field4").value;
pass=document.getElementById("field5").value;


if(cnm=="")
{
alert("Enter name");
document.getElementById("field1").focus;
return false;
}
  else if(!isNaN(cnm))
{
alert("Enter characters only");
return false;
}


if(cn=="")
{
alert("Enter mobile no");
document.getElementById("field2").focus;
return false;
}
  else if(isNaN(cn))
{
alert("Enter numbers only");
return false;
}

if(email=="")
{
alert("Enter email address");
document.getElementById("field3").focus;
return false;
}
if(user=="")
{
alert("Enter user name");
document.getElementById("field4").focus;
return false;
}
if(pass=="")
{
alert("Enter password");
document.getElementById("field5").focus;
return false;
}

 

return true;
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
 .box
 {
	 border: 2px solid #000;
	 height:500px;
	 width:500px;
 }
 </style>
</head>

<body>
<?php
include "conn.php";

if(isset($_GET["mode"])=="save")
{
echo"<script>alert('Record inseterd successfully')</script>";
}
?>
<body id="body">

 
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><font size="+3">Accura Placement Consultancy</span></font></a></h1>
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="userlogin.php">Back</a></li>
          </ul>
        
     </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  

  <main id="main">

    
    <section id="about">
      <div class="container">
        <div class="row">
        
         <div class="col-lg-6 ">
            <img src="img/registernew.jpeg"  />
          </div>
          <div class="box"> 
          <div class="col-lg-6 content ">
                
		   <font size="+1">
        <div>
            <table style="align:center;">
              <h1>
                <center>
                  <b>Registration</b>
                </center>
              </h1>
  
              <form method="post" action="regquery.php">
                <ul class="form-style-1">
                  <tr>
                    <th><br />
                      Name</th>
                    <td><br><input type="text" name="field1" class="field-long
    about-us" placeholder="" id="field1" style="height:30px; width:350px" /></td></tr>
                    <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />-->
                  <tr>
                  
                    <th><br />
                      Contact</th>
                    <td><br /><input type="text" name="field2"  id="field2"class="field-long" style="height:30px; width:350px"></td>
                  </tr>
                                    <tr>
                    <th><br />
                      Email</th>
                    <td><br /><input type="email" name="field3" id="field3" class="field-long" style="height:30px; width:350px" /></td>
                    </tr>
                    <tr>
                    <th><br />User Name</th>
                    <td><br /><input type="text" name="field4" id="field4" style="height:30px; width:250px" /></td>
                    </tr>
                    <tr>
                    <th><br />Password</th>
                    <td><br /><input type="text" name="field5" id="field5" style="height:30px; width:250px" /></td>
                    </tr>
                  
                    </table>
                   &nbsp;&nbsp;&nbsp;&nbsp;<table align="center" border="2px">               
                  <tr>
                    <td><input type="submit" value="Submit" name="Submit" class="btn btn-primary" onclick="return demo();"/></td> &nbsp &nbsp
                   <!-- ������������������-->

                    <td><input name="submit" type="reset" value="Cancel" class="btn btn-primary"  hspace="100px" /></td>
                  </tr>
                  
                
</ul>
              </form>
              </table>
              </div>
        
           
          </font>
		  </div> </div>
        </div>
        </div>

      </div>
    </section><!-- #about -->

  
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

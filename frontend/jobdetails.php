<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function demo()
{
var cnm,req,vacancy,sal;
cnm=document.getElementById("field1").value;
req=document.getElementById("field2").value;
sal=document.getElementById("field3").value;
vacancy=document.getElementById("field4").value;

if(cnm=="")
{
alert("Enter company name");
document.getElementById("field1").focus;
return false;
}
  else if(!isNaN(cnm))
{
alert("Enter characters only");
return false;
}


if(req=="")
{
alert("Enter job requirements");
document.getElementById("field2").focus;
return false;
}
if(vacancy=="")
{
alert("Enter no of vacancies");
document.getElementById("field4").focus;
return false; 
}
  
if(sal=="")
{
alert("Enter salary");
document.getElementById("field3").focus;
return false;
}
return true;
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>job details</title>
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
 .bg
 {
	 background-image:url(img/DefaultPageImage_1.jpg)>
 }
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
        <h1><a href="#body" class="scrollto"><font size="+3">Accura placement Consultancy</span></font></a></h1>
       
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="home.php">Back</a></li>
          
     </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 

  <main id="main">

   
    <div class="bg">
    <section id="about">
      <div class="container" style="padding-left:300px">
        <div class="row">
        
        
<!--        
        
-->                
		   <font size="+1">
            <table align="center">
              <h1>
                <center>
                  <u>Job Details</u>
                </center>
              </h1>
              <form method="post" action="jobquery.php">
                <ul class="form-style-1">
                  <tr>
                    <th><br />
                       Company Name</th>
                    <td><br><input type="text" name="field1" class="field-long
    about-us" placeholder="" id="field1" style="height:30px; width:350px" /></td></tr>
                    <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />-->
                  <tr>
                  
                    <th><br />
                      Requirements</th>
                    <td><br /><input type="text" name="field2"  id="field2"class="field-long" style="height:30px; width:350px"></td>
                  </tr>
                  
                  <tr>
                  
                    <th><br />
                      No of Vacancy</th>
                    <td><br /><input type="text" name="field4"  id="field4"class="field-long" style="height:30px; width:350px"></td>
                  </tr>
                  
                                    <tr>
                    <th><br />
                      Salary</th>
                    <td><br /><input type="text" name="field3" id="field3" class="field-long" style="height:30px; width:350px" /></td>
                    </tr>

                   <!-- <th><br />
                      Dates</th>
                    <td><br /><input type="date" name="field5"  id="field5"class="field-long" style="height:30px; width:350px"></td>
                  </tr>-->

                                        </table>
                   &nbsp;&nbsp;&nbsp;&nbsp;<table align="center" border="2px">               
                  <tr>
                    <td><input type="submit" value="Submit" name="Submit" class="btn btn-primary" onclick="return demo();"/></td>

                    <td><input name="submit" type="reset" value="Cancel" class="btn btn-primary"  hspace="100px" /></td>
                  </tr>
                  
                </ul>
                </table>
              </form>
           
          </font>
		  </div> </div>
        </div>
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

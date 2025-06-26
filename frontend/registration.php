<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function demo()
{
var cnm,person,cn,tel,email,add,type,skill;
cnm=document.getElementById("field1").value;
person=document.getElementById("field2").value;
cn=document.getElementById("field3").value;
tel=document.getElementById("field4").value;
email=document.getElementById("field5").value;
add=document.getElementById("field6").value;
type=document.getElementById("select").value;
skill=document.getElementById("field8").value;


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

if(person=="")
{
alert("Enter person name");
document.getElementById("field2").focus;
return false;
}
  else if(!isNaN(person))
{
alert("Enter characters only");
return false;
}

if(cn=="")
{
alert("Enter mobile no");
document.getElementById("field3").focus;
return false;
}
  else if(isNaN(cn))
{
alert("Enter numbers only");
return false;
}

if(tel=="")
{
alert("Enter telephone no");
document.getElementById("field4").focus;
return false;
}
 

if(email=="")
{
	alert("Enter Email address");
	document.getElementById("field5");
	return false;
}

if(add=="")
{
	alert("Enter Your Address");
	document.getElementById("field6");
	return false;
}
if(type=="")
{
alert("Select type of company");
document.getElementById("select").focus;
return false;
}

if(skill=="")
{
alert("Select type of company");
document.getElementById("field8").focus;
return false;
}

return true;
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>company reg</title>
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
 .border
 {
	 border:20px solid #000;
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
        <h1><a href="#body" class="scrollto"><font size="+3">Accura Placement Consultancy</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="home.php">Back</a></li>
        
     </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    		  <div class="border">

   
          <div class="mg">
		   <font size="+1">
            <table align="center">
              <h1>
                <center>
                 <b> Registraion</b>
                </center>
              </h1>
              <form method="post" action="registarionquery.php">
                <ul class="form-style-1">
                  <tr>
                    <th><br />
                      Company Name </th>
                    <td><input type="text" name="field1" class="field-long
    about-us" placeholder="" id="field1" style="height:30px; width:250px;" /></td>
                    <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />-->
                  
                                      <th>
                      &nbsp;&nbsp;&nbsp;Contact Person</th>
                    <td><input type="text" name="field2"  id="field2"class="field-long" style="height:30px; width:250px;" /></td>
                  </tr>
                  <tr>
                    <th><br />
                      Mobile No</th>
                    <td><input type="text" name="field3"  id="field3" maxlength="10"class="field-long" style="height:30px; width:250px;" /></td>
                  
                  
                    <th>
                      &nbsp;&nbsp;&nbsp;Telephone No</th>
                    <td><input type="text" name="field4" id="field4" class="field-long field-textarea" style="height:30px; width:250px;" /></td>
                  </tr>
                  <tr>
                    <th><br />
                      Email</th>
                    <td><input type="email" name="field5" id="field5" class="field-long" style="height:30px; width:250px;" /></td>
                                      <th>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</th>
                    <td><textarea name="field6" id="field6" class="field-long field-textarea" style="width:250px ; height:70px;"></textarea></td>
                  </tr>
                  <tr>
                    <th>
                      Type of Comapny</th>
                    <td><select name="select" id="select" style="height:30px; width:250px;" >
					<option value="select">select</option>
					<option value="Software development">Software development</option>
					<option value="Hardware Manufacturers">Hardware Manufacturers</option>
					<option value="IT Service providers">IT Service providers</option>
          <option value="E-commerce companies">E-commerce companies</option>

                    <option value="Web Development">Web Development</option>
					</select></td>
                  
                   
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skill Required</th>
                    <td><input type="text" name="field8" id="field8" class="field-long field-textarea" style="height:30px; width:250px;" /></td>
                  </tr>
                  </table>
				  <table border="2px" align="center" >
                  <tr>
                    <td><input type="submit" value="Submit" name="Submit" class="btn btn-primary" onclick="return demo();"/></td> &nbsp &nbsp

                    <td><input name="submit" type="reset" value="Cancel" class="btn btn-primary"  hspace="100px" /></td>
                  </tr>
                </ul>
              </form>
            </table>
          </font>
		  </div>
           </div>        </div>

      </div>
      </div>
      </div>
    </section>
    
   

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

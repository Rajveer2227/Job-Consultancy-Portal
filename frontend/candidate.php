<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
function demo()
{
var nm,add,cn,email,quali,extra,ex,sal;
nm=document.getElementById("field1").value;
add=document.getElementById("field3").value;
cn=document.getElementById("field2").value;
email=document.getElementById("field4").value;
quali=document.getElementById("sel").value;
extra=document.getElementById("field6").value;
ex=document.getElementById("select").value;
sal=document.getElementById("field8").value;


if(nm=="")
{
alert("Enter your name");
document.getElementById("field1").focus;
return false;
}
  else if(!isNaN(nm))
{
alert("Enter characters only");
return false;
}

if(add=="")
{
alert("Enter your Address");
document.getElementById("field3").focus;
return false;
}
  else if(!isNaN(add))
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
alert("Enter Your Email Address");
document.getElementById("field4").focus;
return false;
}
 

if(quali=="")
{
alert("Select your qualification");
document.getElementByID("sel").focus;
return false;
}

if(extra=="")
{
alert("enter your extra activites");
document.getElementByID("field6").focus;
return false;
}

if(ex=="")
{
alert("enter your expireance");
document.getElementByID("select").focus;
return false;
}

if(sal=="")
{
alert("enter your sallary expectations");
document.getElementByID("field8").focus;
return false;
}

return true;
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>admin canreg</title>
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

  
 
</head>

<body>
<?php

?>

<body id="body">

  
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><font size="+3">Accura Placement Consultancy</font></a></h1>
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


    
		  <div class="bg">
		   <font size="+1">
            <table align="center">
              <h1>
                <center>
                  <b> Candidate Registraion</b>
                </center>
              </h1>
            
              <form method="post" action="candidate.php" enctype="multipart/form-data">
                <ul class="form-style-1">
                  <tr>
                    <th>
                      <u>Name :</u> </th>
                    <td><input type="text" name="field1" class="field-long
    about-us" placeholder="" id="field1" style="height:30px; width:300px;" /></td>
                    <!--<input type="text" name="field2" class="field-divided" placeholder="Last" />-->
                  
                  
                    <th><br />
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Contact No :</u></th>
                    <td><br><input type="text" name="field2" placeholder=""  id="field2"class="field-long" maxlength="10" style="height:30px; width:300px;"></td>
                  </tr>
                  <tr>
                    <th><br />
                      <u>Address :</u></th>
                    <td><textarea name="field3" placeholder=""  id="field3"  class="field-long"/></textarea></td>
                  
                  
                    <th><br />
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Email :</u></th>
                  <td><input type="text" name="field4" placeholder="" id="field4" style="height:30px; width:300px; class="field-long field-textarea" tyle="height:30px; width:300px;" /></td>
                  </tr>
                  <tr>
                    <th>
                      <u>Qualification :</u></th>
                    <td><select name="sel" id="sel" style="height:30px; width:300px;>
					<option value="select">Select</option>
                    <option value="BE">BE</option>
					<option value="MBA">MBA</option>
					<option value="MCA">MCA</option>
					<option value="MBA">MBA</option>
                    <option value="M.tech">M.tech</option>
                    <option value="B.tech">B.tech</option>
					</select></td>
   
                 
                  
                    <th><br />
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Extra Qualification :</u></th>
                    <td><textarea name="field6" placeholder="" id="field6" style="height:30px; width:300px;" class="field-long field-textarea"></textarea></td>
                  </tr>
                  <tr>
                    <th>
                      <u>Experiance :</u></th>
                    <td><select name="select" id="select" style="height:30px; width:250px;>
					<option value="select">Select</option>
					<option value="none">none</option>
					<option value="1 year">1 year</option>
					<option value="2 year">2 year</option>
                    <option value="above 2 year">above 2 year</option>
                    
					</select></td>
                                    
                    <th><br />
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Salary Expectation :</u></th>
                    <td><input type="text" name="field8" placeholder="" id="field8" style="height:30px; width:300px; class="field-long field-textarea" /></td>
                  </tr>
				  </table>
                  <table align="center" border="2px">
                  &nbsp; &nbsp; &nbsp; &nbsp;<tr>
                    <td><input type="submit" name="Submit" value="Submit" class="btn btn-primary"  hspace="100px" onclick="return demo();" /></td>
                    
                    <td><input type="reset" name="reset" value="Cancel" class="btn btn-primary"  hspace="100px" /></td>
                    
                 <td><a href="upresume.php"><u><font color="#000000"><input type="button" name="up" value="Upload your resume here" class="btn btn-primary" /></font></u></a>
                  </tr>
                </ul>
              </form>
            </table>
                      </font>
          
          
          <?php
		  include("conn.php");


     

if(isset($_POST['Submit'])=="Submit")
{

            $nm=$_POST["field1"];
            $address=$_POST["field3"];
            $cn=$_POST["field2"];
            $eml=$_POST["field4"];

            $quali=$_POST["sel"];
            $extra=$_POST["field6"];
            $exp=$_POST["select"];
            $sal=$_POST["field8"];




    $q1= "INSERT INTO canreg (name,Address,qualification,exp,mob,email,extra_qualify,salary) VALUES ('$nm','$address','$quali','$exp','$cn','$eml','$extra','$sal')";

      if($conn -> query($q1) === TRUE)
      {
      

      echo "<script>alert('Record inserted')</script>";

    
      }
      else
    {
        echo " Error inserting record: " . $conn -> error;
    }
}
?>

		  </div> 
      </div>
    </section>

   
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 
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

 
  <script src="contactform/contactform.js"></script>

  
  <script src="js/main.js"></script>


</body>
</html>

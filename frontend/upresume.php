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
ex=document.getElementById("select").focus;
sal=document.getElementById("field8").focus;


if(nm=="")
{
alert("Enter your name");
document.getElementById("field1").focus;
return false;
}
  else if(!isNaN(cnm))
{
alert("Enter characters only");
return false;
}

if(add=="")
{
alert("Enter your name");
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
alert("Enter telephone no");
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

  
 
</head>


<body id="body">

<?php
session_start();
?>

 
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Excel Consultancy</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
      

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="candidate.php">Back</a></li>
        
     </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

 

  <main id="main">

    <!--==========================
   
          <!--<div class="col-lg-6 content">-->
		  <div class="bg">
		   <font size="+1">
            <table align="center">
              <h1>
                <center>
                  <u> Candidate Registraion</u>
                </center>
              </h1>
              <form method="post" action="upresume.php" enctype="multipart/form-data">
              <table align="center">
              <th>Enter Your Name</th>
              <td><input type="text" name="txtnm" id="txtnm"  style="height:30px; width:300px;"/></td>
              <tr>
              <th>Upload Resume</th>
              <td><input type="file" name="file" class="btn btn-primary" /></td> 
              
              <td><input type="submit" name="upload" value="upload" class="btn btn-primary" /></td>
                    </tr>
                    </table>

                    
              </form> 

           <?php
		   
		  include("conn.php");

/*if(isset($_POST['upload'])=="uploadresume")*/
if(isset ($_POST["upload"])== "upload")
{
	$nm=$_POST["txtnm"];

  //file name with a random number so that similar donot get repalce
      $pname = rand(1000,1000). "-" . $_FILES["file"]["name"];
  
  //temporary file name to store file
      $tname = $_FILES["file"]["tmp_name"];

  //upload directory path
      $upload_dir = "upload/";

//To move the uploaded file to specific loaction
    move_uploaded_file($tname,$upload_dir.'/'.$pname);



    /*$q1="insert into resume (name,filestore) values('$nm','$file_store')";*/
    $q1= "INSERT INTO resume(name,upload) VALUES ('$nm', '$pname')";

    if($conn -> query($q1) === TRUE)
    {
    /*mysql_query($q1,$link)or die('failed to insert');*/
    /*echo "<script>alert('Record inserted')</script>";*/
    echo "File Upload successfully!!!!";
    /*header("Location:candidate.php");
    exit();*/
    }
    else
    {
      echo "Error";
    }

}
?>

		  </div> <!--</div>-->
<!--        </div>
-->
      </div>
    </section><!-- #about -->

   

  
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      <strong></strong>
      </div>
      
      <div class="credits">
       
       <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer>
  </div><!-- #footer -->

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

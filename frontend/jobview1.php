<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

/* tr:nth-child(even){background-color:#33CCFF} */

th {
    background-color:#339966;
    color: white;
}
</style>
</head>

<body>
<body id="body">

 
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><font size="+3">Accura Placement Consultancy</font></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
      
          <li><a href="userhome.php">back</a></li>
      
            </ul>
          </li>
          <!--<li><a href="#contact">Contact</a></li>-->
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
          
		  <font size="3">
            <table align="center">
			<h1 style="padding-bottom:30px;"><center><b>Job Details</b></center></h1>
			<?php
			
			include("conn.php");
		  

    $q="select * from job ";
    $rs = $conn -> query($q);


			/*$res=mysql_query($q);*/
			
			if($rs -> num_rows > 0)
			{
			echo"<br/>";
			echo"<form method='post'>";
			echo"<table border='2'>";
			echo"<tr>
			<th align='center'
			style='width:240px;height:40px;font size:18px;font-weight:bold'>Date</th>
			
			
			<th align='center'
			style='width:240px;height:40px;font size:18px;font-weight:bold'>Name</th>
			
			<th align='center'
			style='width:240px;height:40px;font size:18px;font-weight:bold'>Requirements</th>
			
			<th align='center'
			style='width:240px;height:40px;font size:18px;font-weight:bold'>No of Vacancies</th>
			
			<th align='center'
			style='width:240px;height:40px;font size:18px;font-weight:bold'>Salary</th>
			
			
			
		</tr>";
		while($row = $rs -> fetch_assoc())
		{
		echo"<tr>";
		echo"<td align='center'
		style='sheight:20px;font-size:14px;'>".$row['dates']."</td>";
		echo"<td align='center'
		style='height:20px;font-size:14px;'>".$row['job_name']."</td>";
		echo"<td align='center'
		style='height:20px;font-size:14px;'>".$row['job_req']."</td>";
		echo"<td align='center'
		style='height:20px;font-size:14px;'>".$row['job_vac']."</td>";
		echo"<td align='center'
		style='height:20px;font-size:14px;'>".$row['salary']."</td>";
		
				
		echo"</tr>";
		}
		echo"</table>";
		echo"</form>";
		}
		else
		{
		echo"<br/>";
		echo"<form method='post'>";
		echo"<table border='1' align='cenetr'>";
		echo"there is no Record";
		
		echo"</tr>";
		echo"</table>";
		echo"</form>";
		echo"</font>";	
	} 
	  
			?>
			
			
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

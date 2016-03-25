<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Courses - HTML</title>
	<meta charset="utf-8">
    <link href="../style/base.css" rel="stylesheet" type="text/css">
	<link href="../style/style_courses.css" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--CSS for registeration form-->
    <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Registeration form validation -->
    <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
</head>
	
<body>
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">

<?php
    include ("../header.php");
?>

        <!-- main content section -->
	    <div id="main-content">	
	        <div class="leftmaincontent">
		
		        <div class="title">
			        <h1>HTML</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="../images/face_1.png" alt="Profile1" height="125" width="125">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Eric Lin</h3><br>
			        <p>Educational Background:<br><br>DIPOLMA BCIT CST PROGRAM</p><br>
			        <p>Experience:<br><br>Eric has spent the past 3 years as a free-lance web-developer since graduating from BCIT's CST program. He constantly stays up-to-date on all the latest technology trends, and is able to impart useful and relevant knowledge onto his students.</p><br>
			        <p>Motivation:<br><br>Eric's passion is web technologies. He's always ahead of the curve when it comes to technological innovations and trends. </p>
				
			        <button type="button">Review button</button>
		        </div>
			
		        <div class="review">
			        <p>Review</p>
		        </div>
	        </div>

		
	        <div id="rightmaincontent">
		        <div class="coursedescriptitle">
			        <h3>Course Description</h3>
		        </div>
			
		        <div class="coursedescrip">
			        <p>Using HTML and CSS, students are able to learn the basics of web development in a fun and interactive format. In only a short period of time, they are able to make fully-functioning websites using the most up-to-date web standards.</p>
		        </div>
			
		        <button type="button" onclick="location.href='table_computer_science.html'">Book now</button>
	        </div>
        </div>

<?php
    include ("../footer.php");
?>
	</div>
</body>
</html>
		
		
		
		
		
		
		

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courses - Report</title>
	<meta charset="utf-8">
    <link href="style/base.css" rel="stylesheet" type="text/css">
	<link href="style/style_courses.css" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--CSS for registeration form-->
    <link href="style/style_registration.css" rel="stylesheet" type="text/css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Registeration form validation -->
    <script type="text/javascript" src="js/registeration_Form_script.js"></script>
</head>
	
<body>
    <!-- main wrapper wraps the whole page -->
    <div id="main-wrapper">

        <?php
            include ("header.php");
        ?>

        <!-- main content section -->
        <div id="main-content">

            <!-- left column -->
		    <div class="leftmaincontent">
		        <div class="title">
			        <h1>Professional Reports</h1>
		        </div>
			
		        <div class="imageandrating">
			        <img src="Image1.jpeg" alt="Profile1" height="125" width="125">
		        </div>
			
		        <div class="tutordescrip">
			        <h3>Luke Lee</h3>
			        <p>Educational Background:<br>BoC, University of British Columbia</p><br>
			        <p>Experience:<br>Senior Coordinator TD</p><br>
			        <p>Motivation:<br>Genius is one percent inspiration, ninety-nine percent perspiration.<br>~Thomas Edison</p>
				
		            <button type="button">Review button</button>
		        </div>
			
			    <div class="review">
			        <p>Review</p>
			    </div>
			
			    <div class="imageandrating">
			        <img src="Image2.jpeg" alt="Profile2" height="125" width="125">
			    </div>
			
			    <div class="tutordescrip">
			        <h3>Description of the tutor</h3>
			        <p>Educational Background</p>
			        <p>Experience</p>
			        <p>Motivation</p>
				
			        <button type="button">Review button</button>
			    </div>
			
			    <div class="review">
			        <p>Review</p>
			    </div>
		    </div>
			
            <!-- right column -->	
		    <div id="rightmaincontent">
			    <div class="coursedescriptitle">
			        <h3>Learning Outcomes</h3>
			    </div>
			
			    <div class="coursedescrip">
			        <p>Professional report is one of the most effective and common ways to communicate important information in workplaces or academic studies.
                        This course provides you with an overview of how to create professional reports and documents:</p>
                    <ol>
                        <li>Identify purpose</li>
                        <li>Identify audience</li>
                        <li>Know your topic well</li>
                        <li>Layout and design structure</li>
                        <li>Write, edit, proof read and finish</li>
                    </ol>
                    <!-- reference from http://www.makeuseof.com/tag/writing-professional-reports-documents/ -->
			    </div>
			
			    <button type="button" onclick="location.href='table_professional_writing.html'">Book now</button>
		    </div>
	    </div>

        <!-- Main Footer -->
        <div id="main-footer">
		    <p>Copyright&copy;  |  Aplus .Co &nbsp;|&nbsp;  BCIT &nbsp;|&nbsp;  123-456-6789 &nbsp;|  Contact Us</p>
	    </div>
	</div>
</body>
</html>
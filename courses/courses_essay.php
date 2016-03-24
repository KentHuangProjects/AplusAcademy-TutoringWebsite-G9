<!DOCTYPE html>
<html lang="en">
<head>
	<title>Courses - Essay</title>
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
			        <h1>Essay Writing</h1>
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
			        <p>Throughout your academic career, you will likely be asked to write an essay at some point. This course offers an overview of the 
                       steps on writing an effective essay:</p>
                    <ol>
                        <li>Research the topic</li>
                        <li>Analyze well-written essays</li>
                        <li>Brainstorm your own ideas</li>
                        <li>Pick your thesis statement</li>
                        <li>Plan your essay</li>
                        <li>Write the body of your essay</li>
                        <li>Come up with a compiling title and introduction</li>
                        <li>Conclude your essay</li>
                    </ol>
                    <!-- reference from https://cstudies.ubc.ca/study-topic/professional-writing -->
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
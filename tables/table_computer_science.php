<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="../style/base.css" rel="stylesheet" type="text/css">
        <link href="../style/style_appointment_table_b.css" rel="stylesheet" type="text/css">
        <link href="../style/style_subject.css" rel="stylesheet" type="text/css">
        <!--CSS for registeration form-->
        <link href="../style/style_registration.css" rel="stylesheet" type="text/css"/>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Registeration form validation -->
        <script type="text/javascript" src="../js/registeration_Form_script.js"></script>
<title>Computer Science</title>
<meta charset="utf-8">


</head>

<body>
    <div id="main-wrapper">
        
        <!-- Main Header -->
        <?php
            include ("../header.php");
        ?>

        <!-- Main content section -->
        <br><br><br><br>
        <hr>
        <br><br><br>
			<div id ="tale3">
				<table> 
					 <caption id ="caption3">Computer Science</caption>
					    <tr>
						    <th>Tutors</th>
						    <th colspan="7">Times</th>
					    </tr>
					    <tr>
						    <td> </td>
						    <td>Monday</td>
						    <td>Tuesday</td>
						    <td>Wednesday </td>
						    <td>Thursday </td>
						    <td>Friday </td>
						    <td>Saturday </td>
						    <td>Sunday </td>
					    </tr>
					    <tr>
						    <td>Kabir Cahill</td>
						    <td><a href="registration_successful.html">Java <br>6pm-8pm</a></td>
						    <td><a href="registration_successful.html">Java <br>6pm-8pm</a> </td>
						    <td> </td>
						    <td> </td>
						    <td> </td>
						    <td><a href="registration_successful.html">C++ <br>10am-12pm</a>  </td>
						    <td><a href="registration_successful.html">C++ <br>10am-12pm</a></td>
					    </tr>
					    <tr>
						    <td>Eric Lin </td>
						    <td> </td>
						    <td> </td>
						    <td><a href="registration_successful.html">HTML <br>6pm-8pm</a></td>
						    <td><a href="registration_successful.html">HTML <br>6pm-8pm </a></td>
						    <td> </td>
						    <td> </td>
						    <td> </td>
					    </tr>
			    </table>
		    </div>
		    <hr id="aline">

		   	<!-- Main Footer -->
            <?php
                include("../footer.php");
            ?>
	</div>
</body>
</html>

<!-- Main Header -->
        <div id="main-header">

		    <!-- wrapper class which wraps the content inside specified width -->
		    <div class="wrapper">
		        <img src="/images/logo.jpg" height="50" width="50" alt="A+ Logo">
			
		        <div id="title">
		            <p>A PLUS Academy <br id="title2"> Plan Learn Utilize Succeed</p>
		        </div>
			
			    <div id="signin">
			        <form action="http://webdevfoundations.net/scripts/formdemo.asp" method="post">
			        <fieldset><legend>Sign-in</legend>
			            <input type="text" name="email-address" placeholder="Email Address" required><span><a href="#">&nbsp;I want to deregister myself&nbsp;</a></span><br>
			            <input type="password" name="password" placeholder="Password" required><span><a href="#">&nbsp;Forgot password</a></span><br>
			            <input type="submit" class="btn btn-success">&nbsp;<span><a href="#" data-toggle="modal" data-target="#myModal">Not a member? Register here</a></span>
                    </fieldset>
			        </form>
			    </div>	
		    </div>
	    </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registration Form</h4>
                  </div>
                  <div class="modal-dialog modal-vertical-centered">
                  <div class="modal-body">
                          <!--Regsisteration form-->
                          <div class="reg_pop">
                              <form name="regForm" action="http://webdevfoundations.net/scripts/formdemo.asp" method="post" id="regForm" >
                                  <fieldset>
                                      <input type="text" name="firstName" placeholder="Your First Name*" id="firstName"/>
                                      <input type="text" name="lastName" placeholder="Your Last Name*" id="lastName"><span id="hintNameValid"></span><br>
                                      <input type="radio" name="gender" value="male" id="genderMale" >Male
                                      <input type="radio" name="gender" value="female" id="genderFemale">Female<span id="hintGenderValid"></span><br>
                                      <input type="email" name="email" placeholder="Your Email Address*" id="email" ><span id="hintEmailValid"></span><br>
                                      <input type="password" name="password" placeholder="Your Password*" id="password_0"><span class="hintPasswordValid">Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.</span><br>
                                      <input type="password" name="password" placeholder="Confirm Password*" id="password_1" ><span class="hintPasswordValid">Must contain at least 7 characters; at least 1 lowercase, 1 uppercase and 1 number.</span><br>
                                      <br>               
                                      (Optional)<br>
                                      <input type="text" name="school" placeholder="School"><br>
                                      <input type="text" name="major" placeholder="Major of Study"><br>
                                      <label>Grade:
                                          <select name="grades">
                                              <option value="Select Your Grade">--Select Your Grade--</option>
                                              <optgroup label="High School">
                                                  <option value="Grade 8">Gr8</option>
                                                  <option value="Grade 9">Gr9</option>
                                                  <option value="Grade 10">Gr10</option>
                                                  <option value="Grade 11">Gr11</option>
                                                  <option value="Grade 12">Gr12</option>
                                              </optgroup>
                                              <optgroup label="Post Secondary School">
                                                  <option value="1st Year Post Secondary">Yr1</option>
                                                  <option value="2nd Year Post Secondary">Yr2</option>
                                                  <option value="3rd Year Post Secondary">Yr3</option>
                                                  <option value="4th Year Post Secondary">Yr4</option>
                                              </optgroup>
                                              <option value="Other">Other</option>
                                          </select>
                                      </label>
                                      <br>

                                      <br>
                                      <input type="submit" id="submit">
                                      <button type="reset">Reset</button>
                                  </fieldset>
                              </form>
                          </div>

                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        </div>

	    <!-- navigation -->
	    <div class="wrapper">
	        <ul id="navbar">
		        <li>
		            <a href="/index.php">Home Page</a>
		        </li>
		        <li><a href="#">Subjects</a>
			        <ul>
				        <li class="subject"><a href="/subjects/subject_economy.html">Economics</a>
                            <ul>
					            <li><a href="/courses/courses_macroeconomics.html">Macro</a></li>
							    <li><a href="/courses/courses_microeconomics.html">Micro</a></li>
							    <li><a href="/courses/courses_entrepreneurship.html">Entrepreneurship</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="/subjects/subject_writing.php">Professional Writing</a>
					        <ul>
						        <li><a href="/courses/courses_essay.php">Essay</a></li>
						        <li><a href="/courses/courses_report.php">Report</a></li>
						        <li><a href="/courses/courses_thesis.php">Thesis</a></li>
					        </ul>
					    </li>

					    <li class="subject"><a href="/subjects/subject_computer_science.php">Computer Science</a>
                            <ul>
						        <li><a href="/courses/courses_html.php">HTML</a></li>
							    <li><a href="/courses/courses_cplusplus.php">C++</a></li>
							    <li><a href="/courses/courses_java.php">Java</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="/subjects/subject_math.html">Math</a>
                            <ul>
						        <li><a href="/courses/courses_calculus.html">Calculus</a></li>
						        <li><a href="/courses/courses_matrix.html">Matrix</a></li>
						        <li><a href="/courses/courses_algebra.html">Algebra</a></li>
						    </ul>
					    </li>

					    <li class="subject"><a href="/subjects/subject_fitness.html">Fitness</a>
                            <ul>
						        <li><a href="/courses/courses_sports.html">Sports</a></li>
						        <li><a href="/courses/courses_weight_training.html">Weight training</a></li>
						        <li><a href="/courses/courses_dance.html">Dance</a></li>
						    </ul>
					    </li>
				    </ul>
		        </li>

		        <li><a href="/career.html">Careers</a></li>
		        <li><a href="/about.html">About Us</a></li>
		        <li><a href="/contact_us.html">Contact Us</a></li>
            </ul>
        </div>

<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	session_start();

	if (isset($_POST['submit'])) {
		$coursename = $_POST['coursename'];
		$ptest = $_POST['ptest'];
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$birthdate = $_POST['birthdate'];
		$gender = $_POST['gender'];
		$nationality = $_POST['nationality'];
		$religion = $_POST['religion'];
		$nationalid = $_POST['nationalid'];
		$maritial = $_POST['maritial'];
		$careof = $_POST['careof'];
		$village = $_POST['village'];
		$divi = $_POST['divi'];
		$dist = $_POST['dist'];
		$thana = $_POST['thana'];
		$posto = $_POST['posto'];
		$postc = $_POST['postc'];
		$pcareof = $_POST['pcareof'];
		$pvillage = $_POST['pvillage'];
		$pdivi = $_POST['pdivi'];
		$pdist = $_POST['pdist'];
		$pthana = $_POST['pthana'];
		$pposto = $_POST['pposto'];
		$ppostc = $_POST['ppostc'];
		$mobile = $_POST['mobile'];
		$pmobile = $_POST['pmobile'];
		$email = $_POST['email'];
		$sscexam = $_POST['sscexam'];
		$sscboard = $_POST['sscboard'];
		$sscroll = $_POST['sscroll'];
		$sscresult = $_POST['sscresult'];
		$sscgroup = $_POST['sscgroup'];
		$sscyear = $_POST['sscyear'];
		$hscexam = $_POST['hscexam'];
		$hscboard = $_POST['hscboard'];
		$hscroll = $_POST['hscroll'];
		$hscresult = $_POST['hscresult'];
		$hscgroup = $_POST['hscgroup'];
		$hscyear = $_POST['hscyear'];
		$gexam = $_POST['gexam'];
		$gsub = $_POST['gsub'];
		$ginstitute = $_POST['ginstitute'];
		$gresult = $_POST['gresult'];
		$gyear = $_POST['gyear'];
		$gduration = $_POST['gduration'];
		$mexam = $_POST['mexam'];
		$msub = $_POST['msub'];
		$minstitute = $_POST['minstitute'];
		$mresult = $_POST['mresult'];
		$myear = $_POST['myear'];
		$mduration = $_POST['mduration'];

		session_start();
		$_SESSION['coursename'] = $coursename;
		$_SESSION['ptest'] = $ptest;
		$_SESSION['name'] = $name;
		$_SESSION['fname'] = $fname;
		$_SESSION['mname'] = $mname;
		$_SESSION['birthdate'] = $birthdate;
		$_SESSION['gender'] = $gender;
		$_SESSION['nationality'] = $nationality;
		$_SESSION['religion'] = $religion;
		$_SESSION['nationalid'] = $nationalid;
		$_SESSION['maritial'] = $maritial;
		$_SESSION['careof'] = $careof;
		$_SESSION['village'] = $village;
		$_SESSION['divi'] = $divi;
		$_SESSION['dist'] = $dist;
		$_SESSION['thana'] = $thana;
		$_SESSION['posto'] = $posto;
		$_SESSION['postc'] = $postc;
		$_SESSION['pcareof'] = $pcareof;
		$_SESSION['pvillage'] = $pvillage;
		$_SESSION['pdivi'] = $pdivi;
		$_SESSION['pdist'] = $pdist;
		$_SESSION['pthana'] = $pthana;
		$_SESSION['pposto'] = $pposto;
		$_SESSION['ppostc'] = $ppostc;
		$_SESSION['mobile'] = $mobile;
		$_SESSION['pmobile'] = $pmobile;
		$_SESSION['email'] = $email;
		$_SESSION['sscexam'] = $sscexam;
		$_SESSION['sscboard'] = $sscboard;
		$_SESSION['sscroll'] = $sscroll;
		$_SESSION['sscresult'] = $sscresult;
		$_SESSION['sscgroup'] = $sscgroup;
		$_SESSION['sscyear'] = $sscyear;
		$_SESSION['hscexam'] = $hscexam;
		$_SESSION['hscboard'] = $hscboard;
		$_SESSION['hscroll'] = $hscroll;
		$_SESSION['hscresult'] = $hscresult;
		$_SESSION['hscgroup'] = $hscgroup;
		$_SESSION['hscyear'] = $hscyear;
		$_SESSION['gexam'] = $gexam;
		$_SESSION['gsub'] = $gsub;
		$_SESSION['ginstitute'] = $ginstitute;
		$_SESSION['gresult'] = $gresult;
		$_SESSION['gyear'] = $gyear;
		$_SESSION['gduration'] = $gduration;
		$_SESSION['mexam'] = $mexam;
		$_SESSION['msub'] = $msub;
		$_SESSION['minstitute'] = $minstitute;
		$_SESSION['mresult'] = $mresult;
		$_SESSION['myear'] = $myear;
		$_SESSION['mduration'] = $mduration;

		if (isset($_SESSION['name'])) {
			header('location:apppreview.php');
		}

	}
 ?>

			<div class="main-content">
				<div class="p-3">
				<form action="appform.php" method="POST">
					<div class="table-content">
						<table class="table table-striped table-sm">
							<tr class="bg-custom">
								<td>Name of the Course</td>
								<td>:</td>
								<td><input type="hidden" name="coursename" value="<?php echo $_SESSION['course_name']; ?>"><?php echo $_SESSION['course_name']; ?></td>
							</tr>
							<tr>
								<td>Subject for Preliminary Test</td>
								<td>:</td>
								<td><input type="hidden" name="ptest" value="<?php echo $_SESSION['course_content']; ?>"><?php echo $_SESSION['course_content']; ?></td>
							</tr>
							<tr>
								<td>Applicant's Name</td>
								<td>:</td>
								<td><input class="form-control" type="text"  name="name" required=""></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td>:</td>
								<td><input class="form-control" type="text"  name="fname" required=""></td>
							</tr>
							<tr>
								<td>Mother's Name</td>
								<td>:</td>
								<td><input class="form-control" type="text"  name="mname" required=""></td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td><input class="form-control" type="date" name="birthdate" required=""></td>
							</tr>
						</table>
					</div>
					<div class="card" style="border: none;">
					<div class="table-content">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>Gender</td>
											<td>:</td>
											<td><input type="radio" name="gender" value="Male"> Male <input class="ml-3" type="radio" name="gender" value="Female" required=""> Female</td>
										</tr>
										<tr>
											<td>Maritial Status</td>
											<td>:</td>
											<td><input type="radio" name="maritial" value="Married"> Married <input class="ml-3" type="radio" name="maritial" value="Single" required=""> Single</td>
										</tr>
										<tr>
											<td>Religion</td>
											<td>:</td>
											<td>
												<select class="form-control" style="height: 30px;width: 250px;" name="religion" required="">
													<option value="">Select one</option>
													<option>Islam</option>
													<option>Hindu</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Nationality</td>
											<td>:</td>
											<td>
												<select class="form-control" style="height: 30px;width: 250px;" name="nationality" required="">
													<option value="">Select one</option>
													<option>Bangladeshi</option>
													<option>Foreign</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>National ID</td>
											<td>:</td>
											<td><input type="text" name="nationalid" class="form-control" placeholder="if you have..."></td>
										</tr>
										<tr>
											<td>Mobile Number</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="mobile" placeholder="please, mention a mobile number from any operator." required=""></td>
										</tr>
										<tr>
											<td>Parent's Number</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="pmobile" placeholder="retype your mobile number." required=""></td>
										</tr>
										<tr>
											<td>Email</td>
											<td>:</td>
											<td><input class="form-control" type="email" name="email" placeholder="enter a email address"></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="alert-content">
						<span class="text-danger">Please, Select Homedistrict & Upazilla/Thana Carefully.</span>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">Mailing/Present Address</div>
								<div class="card-body">
									<table class="table table-sm table-striped">
										<tr>
											<td>Care of</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="careof"></td>
										</tr>
										<tr>
											<td>Village/Town/Road/House/Flat</td>
											<td>:</td>
											<td><textarea class="form-control" name="village"></textarea></td>
										</tr>
										<tr>
											<td>Division</td>
											<td>:</td>
											<td>
												<select class="form-control" name="divi" id="divisiondd" onChange="change_predivision()">
													<option value="">Select Division</option>
													<?php 
														
														$run = mysqli_query($con,"SELECT * FROM divisions");
														while($row = mysqli_fetch_array($run)){
													?>
													<option value="<?php echo $row['call_name']; ?>"><?php echo $row['div_name']; ?></option>
													<?php
														}

													?>
												</select>
											</td>
										</tr>
										<tr>
											<td>District</td>
											<td>:</td>
											<td>
												<div id="city">
													<select name="dist"  id="" class="form-control">
														<option value="">Select District</option>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Upazilla/Thana</td>
											<td>:</td>
											<td>
												<div id="upzila">
													<select name="thana" id=""  class="form-control">
														<option value="">Select PS/Upzila</option>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Post Office</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="posto"></td>
										</tr>
										<tr>
											<td>Post Code</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="postc"></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">Parmanent Address</div>
								<div class="card-body">
									<table class="table table-sm table-striped">
										<tr>
											<td>Care of</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="pcareof"></td>
										</tr>
										<tr>
											<td>Village/Town/Road/House/Flat</td>
											<td>:</td>
											<td><textarea class="form-control" name="pvillage"></textarea></td>
										</tr>
										<tr>
											<td>Division</td>
											<td>:</td>
											<td>
												<select class="form-control" name="pdivi" id="perdivisiondd" onChange="change_perdivision()">
													<option value="">Select Division</option>
													<?php 
														
														$run = mysqli_query($con,"SELECT * FROM divisions");
														while($row = mysqli_fetch_array($run)){
													?>
													<option value="<?php echo $row['call_name']; ?>"><?php echo $row['div_name']; ?></option>
													<?php
														}

													?>
												</select>
											</td>
										</tr>
										<tr>
											<td>Destrict</td>
											<td>:</td>
											<td>
												<div id="city">
													<select name="pdist"  id="per_city" class="form-control" onchange="change_percity()">
														<option value="">Select District</option>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Upazilla/Thana</td>
											<td>:</td>
											<td>
												<div id="upzila">
													<select name="pthana" id="per_upzila"  class="form-control">
														<option value="">Select PS/Upzila</option>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Post Office</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="pposto"></td>
										</tr>
										<tr>
											<td>Post Code</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="ppostc"></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="alert-content">
						<span class="font-weight-bold">Education Qualification:</span>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">SSC or Equivalent Level</div>
								<div class="card-body">
									<table class="table table-sm table-striped">
										<tr>
											<td>Examination</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscexam">
													<option value="">Select One</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Board</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscboard">
													<option value="">Select One</option>
													<option>Sylhet</option>
													<option>Dhaka</option>
													<option>Technical</option>
													<option>Madrasah</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Roll</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="sscroll"></td>
										</tr>
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscresult">
													<option value="">Select One</option>
													<option>out of 5</option>
													<option>out of 4</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Group</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscgroup"> 
													<option value="">Select One</option>
													<option>Science</option>
													<option>Humanities</option>
													<option>Commerce</option>
													<option>Others</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscyear">
													<option value="">Select One</option>
													<option>2014</option>
													<option>2015</option>
													<option>2016</option>
													<option>2017</option>
													<option>2018</option>
													<option>2019</option>
													<option>2020</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="card">
								<div class="card-header">HSC or Equivalent Level</div>
								<div class="card-body">
									<table class="table table-sm table-striped">
										<tr>
											<td>Examination</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscexam">
													<option value="">Select One</option>
													<option>HSC</option>
													<option>HSC Dakhil</option>
													<option>HSC Vocational</option>
													<option>HSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Board</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscboard">
													<option value="">Select One</option>
													<option>Sylhet</option>
													<option>Dhaka</option>
													<option>Technical</option>
													<option>Madrasah</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Roll</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="hscroll"></td>
										</tr>
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscresult">
													<option value="">Select One</option>
													<option>Out of 5</option>
													<option>Out of 4</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Group</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscgroup">
													<option value="">Select One</option>
													<option>Science</option>
													<option>Humanities</option>
													<option>Commerce</option>
													<option>Others</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscyear">
													<option value="">Select One</option>
													<option>2014</option>
													<option>2015</option>
													<option>2016</option>
													<option>2017</option>
													<option>2018</option>
													<option>2019</option>
													<option>2020</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card mt-2">
						<div class="card-header">Graduation Level</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>Examination</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="gexam" />
											</td>
										</tr>
										<tr>
											<td>Subject/Degree</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="gsub" />
											</td>
										</tr>
										<tr>
											<td>University/Institute</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="ginstitute" />
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="gresult" />
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="gyear" />
											</td>
										</tr>
										<tr>
											<td>Course Duration</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="gduration" />
											</td>
										</tr>
									</table>
								</div>	
							</div>
						</div>
					</div>
					<div class="card mt-2">
						<div class="card-header">Masters Degree <input class="ml-2" type="checkbox" name=""> <small>if applicable</small></div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>Examination</td>
											<td>:</td>
											<td>
												<select class="form-control" name="mexam">
													<option value="">Select One</option>
													<option value="Masters Degree">Masters Degree</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Subject/Degree</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="msub" />
											</td>
										</tr>
										<tr>
											<td>University/Institute</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="minstitute" />
											</td>
										</tr>
									</table>
								</div>
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<select class="form-control" name="mresult">
													<option value="">Select One</option>
													<option>Out of 5</option>
													<option>Out of 4</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="myear" />
											</td>
										</tr>
										<tr>
											<td>Course Duration</td>
											<td>:</td>
											<td>
												<input type="text" class="form-control" name="mduration" />
											</td>
										</tr>
									</table>
								</div>	
							</div>
						</div>
					</div>

					<div class="confirm-apply">
						<input type="checkbox" name="" onchange="document.getElementById('sendNewSms').disabled = !this.checked;"> <small>The avobe information is correct and I would like to go to next page.</small>
						<br>
						<button class="mt-2" id="sendNewSms" name="submit">Next</button>
					</div>
				</form>
				</div>
			</div>
			<div class="footer mb-3">
				<div class="footer-header">
					<p class="p-1 text-center text-white">for any inconvenince, please mail binary@gmail.com</p>
				</div>
				<div class="footer-copyright">
					<div class="row">
						<div class="col-md-8">
							<span class="pl-2">&copy;2020 Copyright Binary Technical Institude. All Rights Reseved</span>
						</div>
						<div class="col-md-4 right">
							<span>Powered By</span><img class="pr-1" src="img/binarylogo.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	function change_predivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","include/ajax.php?predivision=" +document.getElementById("divisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("city").innerHTML=xmlhttp.responseText;
	}
	function change_precity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","include/ajax.php?preupzila=" +document.getElementById("citydd").value,false);
		xmlhttp.send(null);
		document.getElementById("upzila").innerHTML=xmlhttp.responseText;
	}
	
	function change_perdivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","include/ajax.php?perdivision=" +document.getElementById("perdivisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("per_city").innerHTML=xmlhttp.responseText;
	}
	function change_percity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","include/ajax.php?perupzila=" +document.getElementById("per_city").value,false);
		xmlhttp.send(null);
		document.getElementById("per_upzila").innerHTML=xmlhttp.responseText;
	}
</script>

</body>
</html>
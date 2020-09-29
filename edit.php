<?php 
	include 'include/header.php';
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
		$dist = $_POST['dist'];
		$thana = $_POST['thana'];
		$posto = $_POST['posto'];
		$postc = $_POST['postc'];
		$pcareof = $_POST['pcareof'];
		$pvillage = $_POST['pvillage'];
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
		$_SESSION['dist'] = $dist;
		$_SESSION['thana'] = $thana;
		$_SESSION['posto'] = $posto;
		$_SESSION['postc'] = $postc;
		$_SESSION['pcareof'] = $pcareof;
		$_SESSION['pvillage'] = $pvillage;
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
								<td><input class="form-control" type="text"  name="name" required="" value="<?php echo $_SESSION['name']; ?>"></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td>:</td>
								<td><input class="form-control" type="text"  name="fname" required="" value="<?php echo $_SESSION['fname']; ?>"></td>
							</tr>
							<tr>
								<td>Mother's Name</td>
								<td>:</td>
								<td><input class="form-control" type="text"  name="mname" required="" value="<?php echo $_SESSION['mname']; ?>"></td>
							</tr>
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td><input class="form-control" type="date" name="birthdate" required="" value="<?php echo $_SESSION['birthdate']; ?>"></td>
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
											<td><input type="radio" name="gender" value="<?php echo $_SESSION['maritial']; ?>" required=""> Male <input class="ml-3" type="radio" name="gender" required="" value="<?php echo $_SESSION['gender']; ?>"> Female</td>
										</tr>
										<tr>
											<td>Maritial Status</td>
											<td>:</td>
											<td><input type="radio" name="maritial" value="<?php echo $_SESSION['maritial']; ?>"> Married <input class="ml-3" type="radio" name="maritial" required="" value="<?php echo $_SESSION['maritial']; ?>"> Single</td>
										</tr>
										<tr>
											<td>Religion</td>
											<td>:</td>
											<td>
												<select class="form-control" style="height: 30px;width: 250px;" name="religion" required="" value="<?php echo $_SESSION['religion']; ?>">
													<option>select one</option>
													<option>Islam</option>
													<option>Hindu</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Nationality</td>
											<td>:</td>
											<td>
												<select class="form-control" style="height: 30px;width: 250px;" name="nationality" required="" value="<?php echo $_SESSION['Nationality']; ?>">
													<option disabled="">select one</option>
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
											<td><input type="text" name="nationalid" class="form-control" placeholder="if you have..." value="<?php echo $_SESSION['nationalid']; ?>"></td>
										</tr>
										<tr>
											<td>Mobile Number</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="mobile" placeholder="please, mention a mobile number from any operator." required="" value="<?php echo $_SESSION['mobile']; ?>"></td>
										</tr>
										<tr>
											<td>Parent's Number</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="pmobile" placeholder="retype your mobile number." required="" value="<?php echo $_SESSION['pmobile']; ?>"></td>
										</tr>
										<tr>
											<td>Email</td>
											<td>:</td>
											<td><input class="form-control" type="email" name="email" placeholder="enter a email address" value="<?php echo $_SESSION['email']; ?>"></td>
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
											<td><input class="form-control" type="text" name="careof" value="<?php echo $_SESSION['careof']; ?>"></td>
										</tr>
										<tr>
											<td>Village/Town/Road/House/Flat</td>
											<td>:</td>
											<td><textarea class="form-control" name="village" value="<?php echo $_SESSION['village']; ?>"></textarea></td>
										</tr>
										<tr>
											<td>Destrict</td>
											<td>:</td>
											<td>
												<select class="form-control" name="dist" value="<?php echo $_SESSION['dist']; ?>">
													<option>select a district</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Upazilla/Thana</td>
											<td>:</td>
											<td>
												<select class="form-control" name="thana" value="<?php echo $_SESSION['thana']; ?>">
													<option>select a upazilla/thana</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Post Office</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="posto" value="<?php echo $_SESSION['posto']; ?>"></td>
										</tr>
										<tr>
											<td>Post Code</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="postc" value="<?php echo $_SESSION['postc']; ?>"></td>
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
											<td><input class="form-control" type="text" name="pcareof" value="<?php echo $_SESSION['pcareof']; ?>"></td>
										</tr>
										<tr>
											<td>Village/Town/Road/House/Flat</td>
											<td>:</td>
											<td><textarea class="form-control" name="pvillage" value="<?php echo $_SESSION['pvillage']; ?>"></textarea></td>
										</tr>
										<tr>
											<td>Destrict</td>
											<td>:</td>
											<td>
												<select class="form-control" name="pdist" value="<?php echo $_SESSION['pdist']; ?>">
													<option>select a district</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Upazilla/Thana</td>
											<td>:</td>
											<td>
												<select class="form-control" name="pthana" value="<?php echo $_SESSION['pthana']; ?>">
													<option>select a upazilla/thana</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Post Office</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="pposto" value="<?php echo $_SESSION['pposto']; ?>"></td>
										</tr>
										<tr>
											<td>Post Code</td>
											<td>:</td>
											<td><input class="form-control" type="text" name="ppostc" value="<?php echo $_SESSION['ppostc']; ?>"></td>
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
												<select class="form-control" name="sscexam" value="<?php echo $_SESSION['sscexam']; ?>">
													<option>select one</option>
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
												<select class="form-control" name="sscboard" value="<?php echo $_SESSION['sscboard']; ?>">
													<option>select one</option>
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
											<td><input class="form-control" type="text" name="sscroll" value="<?php echo $_SESSION['sscroll']; ?>"></td>
										</tr>
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscresult" value="<?php echo $_SESSION['sscresult']; ?>">
													<option>select one</option>
													<option>out of 5</option>
													<option>out of 4</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Group</td>
											<td>:</td>
											<td>
												<select class="form-control" name="sscgroup" value="<?php echo $_SESSION['sscgroup']; ?>"> 
													<option>select one</option>
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
												<select class="form-control" name="sscyear" value="<?php echo $_SESSION['sscyear']; ?>">
													<option>select one</option>
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
												<select class="form-control" name="hscexam" value="<?php echo $_SESSION['hscexam']; ?>">
													<option>select one</option>
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
												<select class="form-control" name="hscboard" value="<?php echo $_SESSION['hscboard']; ?>">
													<option>select one</option>
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
											<td><input class="form-control" type="text" name="hscroll" value="<?php echo $_SESSION['hscroll']; ?>"></td>
										</tr>
										<tr>
											<td>Result</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscresult" value="<?php echo $_SESSION['hscresult']; ?>">
													<option>select one</option>
													<option>out of 5</option>
													<option>out of 4</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Group</td>
											<td>:</td>
											<td>
												<select class="form-control" name="hscgroup" value="<?php echo $_SESSION['hscgroup']; ?>">
													<option>select one</option>
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
												<select class="form-control" name="hscyear" value="<?php echo $_SESSION['hscyear']; ?>">
													<option>select one</option>
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
												<select class="form-control" name="gexam" value="<?php echo $_SESSION['gexam']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Subject/Degree</td>
											<td>:</td>
											<td>
												<select class="form-control" name="gsub" value="<?php echo $_SESSION['gsub']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>University/Institute</td>
											<td>:</td>
											<td>
												<select class="form-control" name="ginstitute" value="<?php echo $_SESSION['ginstitute']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
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
												<select class="form-control" name="gresult" value="<?php echo $_SESSION['gresult']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<select class="form-control" name="gyear" value="<?php echo $_SESSION['gyear']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Course Duration</td>
											<td>:</td>
											<td>
												<select class="form-control" name="gduration" value="<?php echo $_SESSION['gduration']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
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
												<select class="form-control" name="mexam" value="<?php echo $_SESSION['mexam']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Subject/Degree</td>
											<td>:</td>
											<td>
												<select class="form-control" name="msub" value="<?php echo $_SESSION['msub']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>University/Institute</td>
											<td>:</td>
											<td>
												<select class="form-control" name="minstitute" value="<?php echo $_SESSION['minstitute']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
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
												<select class="form-control" name="mresult" value="<?php echo $_SESSION['mresult']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Passing Year</td>
											<td>:</td>
											<td>
												<select class="form-control" name="myear" value="<?php echo $_SESSION['myear']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Course Duration</td>
											<td>:</td>
											<td>
												<select class="form-control" name="mduration" value="<?php echo $_SESSION['mduration']; ?>">
													<option>select one</option>
													<option>SSC</option>
													<option>Dakhil</option>
													<option>SSC Vocational</option>
													<option>SSC Equivalent</option>
												</select>
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

</body>
</html>
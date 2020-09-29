<?php 
	include 'include/dbcon.php';
	session_start();
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM applicantsinfo WHERE id = '$id'";
	$run = mysqli_query($con,$sql);
	$result = mysqli_fetch_assoc($run);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Binary Technical Institute Student's Registration &amp; Certificatuion Authority (BTISRCA)</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="row">
<div class="col-lg-8 col-md-12 col-sm-12  mt-3 offset-lg-2">
<div class="main-content bg-white">
		<div class="p-3">
			<div class="row">
				<div class="col-lg-9">
					<table class="table table-sm">
						<tr>
							<td>Applicant's Name</td>
							<td>:</td>
							<td><?php echo $result['name']; ?></td>
						</tr>
						<tr>
							<td>Father's Name</td>
							<td>:</td>
							<td><?php echo $result['fname']; ?></td>
						</tr>
						<tr>
							<td>Mother's Name</td>
							<td>:</td>
							<td><input type="hidden" name="mname" value="<?php echo $result['mname']; ?>"><?php echo $result['mname']; ?></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td>:</td>
							<td><input type="hidden" name="birthdate" value="<?php echo $result['birthdate']; ?>"><?php echo $result['birthdate']; ?></td>
						</tr>
						<tr>
							<td>Name of the Course</td>
							<td>:</td>
							<td><input type="hidden" name="coursename" value="<?php echo $result['coursename']; ?>"><?php echo $result['coursename']; ?></td>
						</tr>
						<tr>
							<td>Subject for Preliminary Test</td>
							<td>:</td>
							<td><input type="hidden" name="ptest" value="<?php echo $result['ptest']; ?>"><?php echo $result['ptest']; ?></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-3">
					<img class="img-fluid" src="img/aimage/<?php echo $result['aimage']; ?>">
				</div>
			</div>
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body bg-white">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><input type="hidden" name="gender" value="<?php echo $result['gender']; ?>"><?php echo $result['gender']; ?></td>
							</tr>
							<tr>
								<td>Maritial Status</td>
								<td>:</td>
								<td><input type="hidden" name="maritial" value="<?php echo $result['maritial']; ?>"><?php echo $result['maritial']; ?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td>:</td>
								<td><input type="hidden" name="religion" value="<?php echo $result['religion']; ?>"><?php echo $result['religion']; ?></td>
							</tr>
							<tr>
								<td>Nationality</td>
								<td>:</td>
								<td><input type="hidden" name="nationality" value="<?php echo $result['nationality']; ?>"><?php echo $result['nationality']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>National ID</td>
								<td>:</td>
								<td><input type="hidden" name="nationalid" value="<?php echo $result['nationalid']; ?>"><?php echo $result['nationalid']; ?></td>
							</tr>
							<tr>
								<td>Mobile Number</td>
								<td>:</td>
								<td><input type="hidden" name="mobile" value="<?php echo $result['mobile']; ?>"><?php echo $result['mobile']; ?></td>
							</tr>
							<tr>
								<td>Parent's Number</td>
								<td>:</td>
								<td><input type="hidden" name="pmobile" value="<?php echo $result['pmobile']; ?>"><?php echo $result['pmobile']; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="hidden" name="email" value="<?php echo $result['email']; ?>"><?php echo $result['email']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">Mailing/Present Address</div>
					<div class="card-body bg-white">
						<table class="table table-sm">
							<tr>
								<td>Care of</td>
								<td>:</td>
								<td><input type="hidden" name="careof" value="<?php echo $result['careof']; ?>"><?php echo $result['careof']; ?></td>
							</tr>
							<tr>
								<td>Village/Town/Road/House/Flat</td>
								<td>:</td>
								<td><input type="hidden" name="village" value="<?php echo $result['village']; ?>"><?php echo $result['village']; ?></td>
							</tr>
							<tr>
								<td>Division</td>
								<td>:</td>
								<td><input type="hidden" name="divi" value="<?php echo $result['divi']; ?>"><?php echo $result['divi']; ?>
								</td>
							</tr>
							<tr>
								<td>Destrict</td>
								<td>:</td>
								<td><input type="hidden" name="dist" value="<?php echo $result['dist']; ?>"><?php echo $result['dist']; ?>
								</td>
							</tr>
							<tr>
								<td>Upazilla/Thana</td>
								<td>:</td>
								<td><input type="hidden" name="thana" value="<?php echo $result['thana']; ?>"><?php echo $result['thana']; ?>
								</td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td>:</td>
								<td><input type="hidden" name="posto" value="<?php echo $result['posto']; ?>"><?php echo $result['posto']; ?></td>
							</tr>
							<tr>
								<td>Post Code</td>
								<td>:</td>
								<td><input type="hidden" name="postc" value="<?php echo $result['postc']; ?>"><?php echo $result['postc']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">Parmanent Address</div>
					<div class="card-body bg-white">
						<table class="table table-sm">
							<tr>
								<td>Care of</td>
								<td>:</td>
								<td><input type="hidden" name="pcareof" value="<?php echo $result['pcareof']; ?>"><?php echo $result['pcareof']; ?></td>
							</tr>
							<tr>
								<td>Village/Town/Road/House/Flat</td>
								<td>:</td>
								<td><input type="hidden" name="pvillage" value="<?php echo $result['pvillage']; ?>"><?php echo $result['pvillage']; ?></td>
							</tr>
							<tr>
								<td>Division</td>
								<td>:</td>
								<td><input type="hidden" name="pdivi" value="<?php echo $result['pdivi']; ?>"><?php echo $result['pdivi']; ?>
								</td>
							</tr>
							<tr>
								<td>Destrict</td>
								<td>:</td>
								<td><input type="hidden" name="pdist" value="<?php echo $result['pdist']; ?>"><?php echo $result['pdist']; ?>
								</td>
							</tr>
							<tr>
								<td>Upazilla/Thana</td>
								<td>:</td>
								<td><input type="hidden" name="pthana" value="<?php echo $result['pthana']; ?>"><?php echo $result['pthana']; ?>
								</td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td>:</td>
								<td><input type="hidden" name="pposto" value="<?php echo $result['pposto']; ?>"><?php echo $result['pposto']; ?></td>
							</tr>
							<tr>
								<td>Post Code</td>
								<td>:</td>
								<td><input type="hidden" name="ppostc" value="<?php echo $result['ppostc']; ?>"><?php echo $result['ppostc']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="alert-content">
			<span class="font-weight-bold">Education Qualification:</span>
		</div>
		<div class="card">
			<div class="card-header">SSC or Equivalent Level</div>
				<div class="card-body bg-white">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<table class="table table-sm">
								<tr>
									<td>Examination</td>
									<td>:</td>
									<td><input type="hidden" name="sscexam" value="<?php echo $result['sscexam']; ?>"><?php echo $result['sscexam']; ?></td>
								</tr>
								<tr>
									<td>Board</td>
									<td>:</td>
									<td><input type="hidden" name="sscboard" value="<?php echo $result['sscboard']; ?>"><?php echo $result['sscboard']; ?></td>
								</tr>
								<tr>
									<td>Roll</td>
									<td>:</td>
									<td><input type="hidden" name="sscroll" value="<?php echo $result['sscroll']; ?>"><?php echo $result['sscroll']; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-6 col-md-6">
							<table  class="table table-sm">
								<tr>
									<td>Result</td>
									<td>:</td>
									<td><input type="hidden" name="sscresult" value="<?php echo $result['sscresult']; ?>"><?php echo $result['sscresult']; ?></td>
								</tr>
								<tr>
									<td>Group</td>
									<td>:</td>
									<td><input type="hidden" name="sscgroup" value="<?php echo $result['sscgroup']; ?>"><?php echo $result['sscgroup']; ?></td>
								</tr>
								<tr>
									<td>Passing Year</td>
									<td>:</td>
									<td><input type="hidden" name="sscyear" value="<?php echo $result['sscyear']; ?>"><?php echo $result['sscyear']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header">HSC or Equivalent Level</div>
				<div class="card-body bg-white">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<table class="table table-sm">
								<tr>
									<td>Examination</td>
									<td>:</td>
									<td><input type="hidden" name="hscexam" value="<?php echo $result['hscexam']; ?>"><?php echo $result['hscexam']; ?></td>
								</tr>
								<tr>
									<td>Board</td>
									<td>:</td>
									<td><input type="hidden" name="hscboard" value="<?php echo $result['hscboard']; ?>"><?php echo $result['hscboard']; ?></td>
								</tr>
								<tr>
									<td>Roll</td>
									<td>:</td>
									<td><input type="hidden" name="hscroll" value="<?php echo $result['hscroll']; ?>"><?php echo $result['hscroll']; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-lg-6 col-md-6">
							<table class="table table-sm">
								<tr>
									<td>Result</td>
									<td>:</td>
									<td><input type="hidden" name="hscresult" value="<?php echo $result['hscresult']; ?>"><?php echo $result['hscresult']; ?></td>
								</tr>
								<tr>
									<td>Group</td>
									<td>:</td>
									<td><input type="hidden" name="hscgroup" value="<?php echo $result['hscgroup']; ?>"><?php echo $result['hscgroup']; ?></td>
								</tr>
								<tr>
									<td>Passing Year</td>
									<td>:</td>
									<td><input type="hidden" name="hscyear" value="<?php echo $result['hscyear']; ?>"><?php echo $result['hscyear']; ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		<div class="card mt-2">
			<div class="card-header">Graduation Level</div>
			<div class="card-body bg-white">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>Examination</td>
								<td>:</td>
								<td><input type="hidden" name="gexam" value="<?php echo $result['gexam']; ?>"><?php echo $result['gexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><input type="hidden" name="gsub" value="<?php echo $result['gsub']; ?>"><?php echo $result['gsub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><input type="hidden" name="ginstitute" value="<?php echo $result['ginstitute']; ?>"><?php echo $result['ginstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="gresult" value="<?php echo $result['gresult']; ?>"><?php echo $result['gresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="gyear" value="<?php echo $result['gyear']; ?>"><?php echo $result['gyear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><input type="hidden" name="gduration" value="<?php echo $result['gduration']; ?>"><?php echo $result['gduration']; ?></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<div class="card mt-2">
			<div class="card-body bg-white">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>Examination</td>
								<td>:</td>
								<td><input type="hidden" name="mexam" value="<?php echo $result['mexam']; ?>"><?php echo $result['mexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><input type="hidden" name="msub" value="<?php echo $result['msub']; ?>"><?php echo $result['msub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><input type="hidden" name="minstitute" value="<?php echo $result['minstitute']; ?>"><?php echo $result['minstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="mresult" value="<?php echo $result['mresult']; ?>"><?php echo $result['mresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="myear" value="<?php echo $result['myear']; ?>"><?php echo $result['myear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><input type="hidden" name="mduration" value="<?php echo $result['mduration']; ?>"><?php echo $result['mduration']; ?></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<div class="row mt-2">
			<div class="col-md-6">
				<img class="img-fluid" src="img/simage/<?php echo $result['simage']; ?>"><br>
				<hr>
				<p align="center">Signature Photo</p>
			</div>
			<div class="col-md-6">
				<a href="testpdf.php?id=<?php echo $result ['id'];?> ">Download PDF</a>
			</div>
		</div>
</div>
</div>
</div>

</body>
</html>
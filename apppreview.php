<?php 
 	include 'include/dbcon.php';
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
		//---Image Applier---//
		$image = $_FILES['aimage']['name'];
		$image_name = $_FILES['aimage']['tmp_name'];
		$upload_path = 'img/aimage/';
		$upload_check = move_uploaded_file($image_name,$upload_path.$image);
		//---Image Signature---//
		$simage = $_FILES['simage']['name'];
		$simage_name = $_FILES['simage']['tmp_name'];
		$supload_path = 'img/simage/';
		$supload_url = $supload_path;
		$supload_check = move_uploaded_file($simage_name,$supload_path.$simage);

		if($upload_check && $supload_check){
			$sql = "INSERT INTO applicantsinfo (coursename,ptest,name,fname,mname,birthdate,gender,nationality,religion,nationalid,maritial,careof,village,divi,dist,thana,posto,postc,pcareof,pvillage,pdivi,pdist,pthana,pposto,ppostc,mobile,pmobile,email,sscexam,sscboard,sscroll,sscresult,sscgroup,sscyear,hscexam,hscboard,hscroll,hscresult,hscgroup,hscyear,gexam,gsub,ginstitute,gresult,gyear,gduration,mexam,msub,minstitute,mresult,myear,mduration,aimage,simage) VALUES ('$coursename','$ptest','$name','$fname','$mname','$birthdate','$gender','$nationality','$religion','$nationalid','$maritial','$careof','$village','$divi','$dist','$thana','$posto','$postc','$pcareof','$pvillage','$pdivi','$pdist','$pthana','$pposto','$ppostc','$mobile','$pmobile','$email','$sscexam','$sscboard','$sscroll','$sscresult','$sscgroup','$sscyear','$hscexam','$hscboard','$hscroll','$hscresult','$hscgroup','$hscyear','$gexam','$gsub','$ginstitute','$gresult','$gyear','$gduration','$mexam','$msub','$minstitute','$mresult','$myear','$mduration','$image','$simage')";
			$run = mysqli_query($con,$sql);
			$last_id = mysqli_insert_id($con);
			if($run){
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
				$_SESSION['image'] = $image;
				$_SESSION['simage'] = $simage;
				$_SESSION['id'] = $last_id;
				if (isset($_SESSION['id'])) {
					header('location:pdfview.php');
				}else{
					echo "
						<script>alert('Something Went Wrong!');</script>
					";
				}
			}
		}else{
			echo "
				<script>alert('Please, Upload Your Image First!');</script>
			";
		}
	}
	if (isset($_POST['back'])) {
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
			header('location:edit.php');
		}
	}
 ?>

<div class="main-content">
	<div class="p-3">
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="table-content">
			<table class="table table-striped table-sm">
				<tr class="bg-custom">
					<td>Name of the Course</td>
					<td>:</td>
					<td><input type="hidden" name="coursename" value="<?php echo $_SESSION['coursename']; ?>"><?php echo $_SESSION['coursename']; ?></td>
				</tr>
				<tr>
					<td>Subject for Preliminary Test</td>
					<td>:</td>
					<td><input type="hidden" name="ptest" value="<?php echo $_SESSION['ptest']; ?>"><?php echo $_SESSION['ptest']; ?></td>
				</tr>
				<tr>
					<td>Applicant's Name</td>
					<td>:</td>
					<td><input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>"><?php echo $_SESSION['name']; ?></td>
				</tr>
				<tr>
					<td>Father's Name</td>
					<td>:</td>
					<td><input type="hidden" name="fname" value="<?php echo $_SESSION['fname']; ?>"><?php echo $_SESSION['fname']; ?></td>
				</tr>
				<tr>
					<td>Mother's Name</td>
					<td>:</td>
					<td><input type="hidden" name="mname" value="<?php echo $_SESSION['mname']; ?>"><?php echo $_SESSION['mname']; ?></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td>:</td>
					<td><input type="hidden" name="birthdate" value="<?php echo $_SESSION['birthdate']; ?>"><?php echo $_SESSION['birthdate']; ?></td>
				</tr>
			</table>
		</div>
		<div class="card">
			<div class="card-header"></div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><input type="hidden" name="gender" value="<?php echo $_SESSION['gender']; ?>"><?php echo $_SESSION['gender']; ?></td>
							</tr>
							<tr>
								<td>Maritial Status</td>
								<td>:</td>
								<td><input type="hidden" name="maritial" value="<?php echo $_SESSION['maritial']; ?>"><?php echo $_SESSION['maritial']; ?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td>:</td>
								<td><input type="hidden" name="religion" value="<?php echo $_SESSION['religion']; ?>"><?php echo $_SESSION['religion']; ?></td>
							</tr>
							<tr>
								<td>Nationality</td>
								<td>:</td>
								<td><input type="hidden" name="nationality" value="<?php echo $_SESSION['nationality']; ?>"><?php echo $_SESSION['nationality']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>National ID</td>
								<td>:</td>
								<td><input type="hidden" name="nationalid" value="<?php echo $_SESSION['nationalid']; ?>"><?php echo $_SESSION['nationalid']; ?></td>
							</tr>
							<tr>
								<td>Mobile Number</td>
								<td>:</td>
								<td><input type="hidden" name="mobile" value="<?php echo $_SESSION['mobile']; ?>"><?php echo $_SESSION['mobile']; ?></td>
							</tr>
							<tr>
								<td>Parent's Number</td>
								<td>:</td>
								<td><input type="hidden" name="pmobile" value="<?php echo $_SESSION['pmobile']; ?>"><?php echo $_SESSION['pmobile']; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></td>
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
					<div class="card-body">
						<table class="table table-sm table-striped">
							<tr>
								<td>Care of</td>
								<td>:</td>
								<td><input type="hidden" name="careof" value="<?php echo $_SESSION['careof']; ?>"><?php echo $_SESSION['careof']; ?></td>
							</tr>
							<tr>
								<td>Village/Town/Road/House/Flat</td>
								<td>:</td>
								<td><input type="hidden" name="village" value="<?php echo $_SESSION['village']; ?>"><?php echo $_SESSION['village']; ?></td>
							</tr>
							<tr>
								<td>Divission</td>
								<td>:</td>
								<td><input type="hidden" name="divi" value="<?php echo $_SESSION['divi']; ?>"><?php echo $_SESSION['divi']; ?>
								</td>
							</tr>
							<tr>
								<td>Destrict</td>
								<td>:</td>
								<td><input type="hidden" name="dist" value="<?php echo $_SESSION['dist']; ?>"><?php echo $_SESSION['dist']; ?>
								</td>
							</tr>
							<tr>
								<td>Upazilla/Thana</td>
								<td>:</td>
								<td><input type="hidden" name="thana" value="<?php echo $_SESSION['thana']; ?>"><?php echo $_SESSION['thana']; ?>
								</td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td>:</td>
								<td><input type="hidden" name="posto" value="<?php echo $_SESSION['posto']; ?>"><?php echo $_SESSION['posto']; ?></td>
							</tr>
							<tr>
								<td>Post Code</td>
								<td>:</td>
								<td><input type="hidden" name="postc" value="<?php echo $_SESSION['postc']; ?>"><?php echo $_SESSION['postc']; ?></td>
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
								<td><input type="hidden" name="pcareof" value="<?php echo $_SESSION['pcareof']; ?>"><?php echo $_SESSION['pcareof']; ?></td>
							</tr>
							<tr>
								<td>Village/Town/Road/House/Flat</td>
								<td>:</td>
								<td><input type="hidden" name="pvillage" value="<?php echo $_SESSION['pvillage']; ?>"><?php echo $_SESSION['pvillage']; ?></td>
							</tr>
							<tr>
								<td>Divission</td>
								<td>:</td>
								<td><input type="hidden" name="pdivi" value="<?php echo $_SESSION['pdivi']; ?>"><?php echo $_SESSION['pdivi']; ?>
								</td>
							</tr>
							<tr>
								<td>Destrict</td>
								<td>:</td>
								<td><input type="hidden" name="pdist" value="<?php echo $_SESSION['pdist']; ?>"><?php echo $_SESSION['pdist']; ?>
								</td>
							</tr>
							<tr>
								<td>Upazilla/Thana</td>
								<td>:</td>
								<td><input type="hidden" name="pthana" value="<?php echo $_SESSION['pthana']; ?>"><?php echo $_SESSION['pthana']; ?>
								</td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td>:</td>
								<td><input type="hidden" name="pposto" value="<?php echo $_SESSION['pposto']; ?>"><?php echo $_SESSION['pposto']; ?></td>
							</tr>
							<tr>
								<td>Post Code</td>
								<td>:</td>
								<td><input type="hidden" name="ppostc" value="<?php echo $_SESSION['ppostc']; ?>"><?php echo $_SESSION['ppostc']; ?></td>
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
								<td><input type="hidden" name="sscexam" value="<?php echo $_SESSION['sscexam']; ?>"><?php echo $_SESSION['sscexam']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td>:</td>
								<td><input type="hidden" name="sscboard" value="<?php echo $_SESSION['sscboard']; ?>"><?php echo $_SESSION['sscboard']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td>:</td>
								<td><input type="hidden" name="sscroll" value="<?php echo $_SESSION['sscroll']; ?>"><?php echo $_SESSION['sscroll']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="sscresult" value="<?php echo $_SESSION['sscresult']; ?>"><?php echo $_SESSION['sscresult']; ?></td>
							</tr>
							<tr>
								<td>Group</td>
								<td>:</td>
								<td><input type="hidden" name="sscgroup" value="<?php echo $_SESSION['sscgroup']; ?>"><?php echo $_SESSION['sscgroup']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="sscyear" value="<?php echo $_SESSION['sscyear']; ?>"><?php echo $_SESSION['sscyear']; ?></td>
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
								<td><input type="hidden" name="hscexam" value="<?php echo $_SESSION['hscexam']; ?>"><?php echo $_SESSION['hscexam']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td>:</td>
								<td><input type="hidden" name="hscboard" value="<?php echo $_SESSION['hscboard']; ?>"><?php echo $_SESSION['hscboard']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td>:</td>
								<td><input type="hidden" name="hscroll" value="<?php echo $_SESSION['hscroll']; ?>"><?php echo $_SESSION['hscroll']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="hscresult" value="<?php echo $_SESSION['hscresult']; ?>"><?php echo $_SESSION['hscresult']; ?></td>
							</tr>
							<tr>
								<td>Group</td>
								<td>:</td>
								<td><input type="hidden" name="hscgroup" value="<?php echo $_SESSION['hscgroup']; ?>"><?php echo $_SESSION['hscgroup']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="hscyear" value="<?php echo $_SESSION['hscyear']; ?>"><?php echo $_SESSION['hscyear']; ?></td>
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
								<td><input type="hidden" name="gexam" value="<?php echo $_SESSION['gexam']; ?>"><?php echo $_SESSION['gexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><input type="hidden" name="gsub" value="<?php echo $_SESSION['gsub']; ?>"><?php echo $_SESSION['gsub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><input type="hidden" name="ginstitute" value="<?php echo $_SESSION['ginstitute']; ?>"><?php echo $_SESSION['ginstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="gresult" value="<?php echo $_SESSION['gresult']; ?>"><?php echo $_SESSION['gresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="gyear" value="<?php echo $_SESSION['gyear']; ?>"><?php echo $_SESSION['gyear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><input type="hidden" name="gduration" value="<?php echo $_SESSION['gduration']; ?>"><?php echo $_SESSION['gduration']; ?></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<div class="card mt-2">
			<div class="card-header">Masters Degree</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Examination</td>
								<td>:</td>
								<td><input type="hidden" name="mexam" value="<?php echo $_SESSION['mexam']; ?>"><?php echo $_SESSION['mexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><input type="hidden" name="msub" value="<?php echo $_SESSION['msub']; ?>"><?php echo $_SESSION['msub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><input type="hidden" name="minstitute" value="<?php echo $_SESSION['minstitute']; ?>"><?php echo $_SESSION['minstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><input type="hidden" name="mresult" value="<?php echo $_SESSION['mresult']; ?>"><?php echo $_SESSION['mresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><input type="hidden" name="myear" value="<?php echo $_SESSION['myear']; ?>"><?php echo $_SESSION['myear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><input type="hidden" name="mduration" value="<?php echo $_SESSION['mduration']; ?>"><?php echo $_SESSION['mduration']; ?></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>



		<div class="card mt-2">
			<div class="card-header">Image <input class="ml-2" type="checkbox" name=""> <small>if applicable</small></div>
			<div class="card-body">
				<div class="row mt-2">
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Applicant's Image</td>
							</tr>
							<tr>
								<td><input type="file" name="aimage" class="form-control" required=""></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm table-striped">
							<tr>
								<td>Signature Image</td>
							</tr>										
							<tr>
								<td><input type="file" name="simage" class="form-control" required=""></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>

		<div class="confirm-apply">
			<input type="checkbox" name="" onchange="document.getElementById('sendNewSms').disabled = !this.checked;"> <small>The avobe information is correct and I would like to go to next page.</small>
			<br>
			<button class="mt-2" name="back">Back</button>
			<button class="mt-2" id="sendNewSms" name="submit">Submit</button>
		</div>
	</form>
	</div>
</div>


<?php 
	include 'include/footer.php';
 ?>
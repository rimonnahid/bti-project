<?php
  include 'include/header.php';
  include 'include/dbcon.php';

  $id = $_GET['id'];
  $sql = "SELECT applicantsinfo.*,courses.course_name FROM applicantsinfo INNER JOIN courses ON courses.id = applicantsinfo.coursename WHERE applicantsinfo.id='$id'";
  $run = mysqli_query($con,$sql);
  $result = mysqli_fetch_assoc($run);
?>
<h2 class="text-center">Required Information of <span class="text-danger"><?php echo $result['name'];?></span></h2><hr>
<div class="main-content container-fluid">
	<div class="p-3">
		<div class="row">
			<div class="col-md-8">
				
				<table class="table table-sm">
					<tr class="bg-custom">
						<td>Name of the Course</td>
						<td>:</td>
						<td><?php echo $result['course_name'];?></td>
					</tr>
					<tr>
						<td>Subject for Preliminary Test</td>
						<td>:</td>
						<td><?php echo $result['ptest'];?></td>
					</tr>
					<tr>
						<td>Applicant's Name</td>
						<td>:</td>
						<td><?php echo $result['name'];?></td>
					</tr>
					<tr>
						<td>Father's Name</td>
						<td>:</td>
						<td><?php echo $result['fname']; ?></td>
					</tr>
					<tr>
						<td>Mother's Name</td>
						<td>:</td>
						<td><?php echo $result['mname']; ?></td>
					</tr>
					<tr>
						<td>Date of Birth</td>
						<td>:</td>
						<td><?php echo $result['birthdate']; ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-4 text-center">
				<img src="../img/aimage/<?php echo $result['aimage']; ?>" height="200px">
			</div>
		</div>
		<div class="row">
					<div class="col-md-6">
						<table class="table table-sm ">
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><?php echo $result['gender']; ?></td>
							</tr>
							<tr>
								<td>Maritial Status</td>
								<td>:</td>
								<td><?php echo $result['maritial']; ?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td>:</td>
								<td><?php echo $result['religion']; ?></td>
							</tr>
							<tr>
								<td>Nationality</td>
								<td>:</td>
								<td><?php echo $result['nationality']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td width="50%">National ID</td>
								<td>:</td>
								<td><?php echo $result['nationalid']; ?></td>
							</tr>
							<tr>
								<td>Mobile Number</td>
								<td>:</td>
								<td><?php echo $result['mobile']; ?></td>
							</tr>
							<tr>
								<td>Parent's Number</td>
								<td>:</td>
								<td><?php echo $result['pmobile']; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><?php echo $result['email']; ?></td>
							</tr>
						</table>
					</div>
				</div>
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">Mailing/Present Address</div>
					<div class="card-body">
					<table class="table table-sm">
						<tr>
							<td width="50%">Care of</td>
							<td>:</td>
							<td><?php echo $result['careof']; ?></td>
						</tr>
						<tr>
							<td>Village/Town/Road/House/Flat</td>
							<td>:</td>
							<td><?php echo $result['village']; ?></td>
						</tr>
						<tr>
							<td>Destrict</td>
							<td>:</td>
							<td><?php echo $result['dist']; ?></td>
						</tr>
						<tr>
							<td>Upazilla/Thana</td>
							<td>:</td>
							<td><?php echo $result['thana']; ?></td>
						</tr>
						<tr>
							<td>Post Office</td>
							<td>:</td>
							<td><?php echo $result['posto']; ?></td>
						</tr>
						<tr>
							<td>Post Code</td>
							<td>:</td>
							<td><?php echo $result['postc']; ?></td>
						</tr>
					</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">Parmanent Address</div>
					<div class="card-body">
						<table class="table table-sm">
							<tr>
								<td width="50%">Care of</td>
								<td>:</td>
								<td><?php echo $result['pcareof']; ?></td>
							</tr>
							<tr>
								<td>Village/Town/Road/House/Flat</td>
								<td>:</td>
								<td><?php echo $result['pvillage']; ?></td>
							</tr>
							<tr>
								<td>Destrict</td>
								<td>:</td>
								<td><?php echo $result['pdist']; ?></td>
							</tr>
							<tr>
								<td>Upazilla/Thana</td>
								<td>:</td>
								<td><?php echo $result['pthana']; ?></td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td>:</td>
								<td><?php echo $result['pposto']; ?></td>
							</tr>
							<tr>
								<td>Post Code</td>
								<td>:</td>
								<td><?php echo $result['ppostc']; ?></td>
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
						<table class="table table-sm">
							<tr>
								<td width="50%">Examination</td>
								<td>:</td>
								<td><?php echo $result['sscexam']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td>:</td>
								<td><?php echo $result['sscboard']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td>:</td>
								<td><?php echo $result['sscroll']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><?php echo $result['sscresult']; ?></td>
							</tr>
							<tr>
								<td>Group</td>
								<td>:</td>
								<td><?php echo $result['sscgroup']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><?php echo $result['sscyear']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="card">
					<div class="card-header">HSC or Equivalent Level</div>
					<div class="card-body">
						<table class="table table-sm">
							<tr>
								<td>Examination</td>
								<td>:</td>
								<td><?php echo $result['hscexam']; ?></td>
							</tr>
							<tr>
								<td>Board</td>
								<td>:</td>
								<td><?php echo $result['hscboard']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td>:</td>
								<td><?php echo $result['hscroll']; ?></td>
							</tr>
							<tr>
								<td>Result</td>
								<td>:</td>
								<td><?php echo $result['hscresult']; ?></td>
							</tr>
							<tr>
								<td>Group</td>
								<td>:</td>
								<td><?php echo $result['hscgroup']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><?php echo $result['hscyear']; ?></td>
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
						<table class="table table-sm">
							<tr>
								<td width="50%">Examination</td>
								<td>:</td>
								<td><?php echo $result['gexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><?php echo $result['gsub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><?php echo $result['ginstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td width="50%">Result</td>
								<td>:</td>
								<td><?php echo $result['gresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><?php echo $result['gyear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><?php echo $result['gduration']; ?></td>
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
						<table class="table table-sm">
							<tr>
								<td width="50%">Examination</td>
								<td>:</td>
								<td><?php echo $result['mexam']; ?></td>
							</tr>
							<tr>
								<td>Subject/Degree</td>
								<td>:</td>
								<td><?php echo $result['msub']; ?></td>
							</tr>
							<tr>
								<td>University/Institute</td>
								<td>:</td>
								<td><?php echo $result['minstitute']; ?></td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-sm">
							<tr>
								<td width="50%">Result</td>
								<td>:</td>
								<td><?php echo $result['mresult']; ?></td>
							</tr>
							<tr>
								<td>Passing Year</td>
								<td>:</td>
								<td><?php echo $result['myear']; ?></td>
							</tr>
							<tr>
								<td>Course Duration</td>
								<td>:</td>
								<td><?php echo $result['mduration']; ?></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</div>
		<?php if($result['status'] == 0){?>
			<div class="card mt-2">
				<div class="card-header">Confirm Student</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="row">
							<div class="col-md-4">
				                <?php 
				                $course = $result['coursename'];
				                $sql1 = "SELECT * FROM batch WHERE course_id = '$course'";
				                  $query = mysqli_query($con,$sql1);
				                ?>
				                <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			                    <select class="form-control" name="batch" required="">
			                    	<option selected="" disabled="">Select Batch</option>
				                    <?php while($res = mysqli_fetch_assoc($query)) {?>
				                    <option><?php echo $res['batch_number'];?></option>
				                  	<?php }?>
			                  	</select>
							</div>
							<div class="col-md-4">
								<input type="text" name="roll" class="form-control" required="">
							</div>	
							<div class="col-md-4">
								<button type="submit" name="submit" class="btn btn-block btn-success">Approve</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		<?php }?>
	</div>
</div>
<?php 
if (isset($_POST['submit'])) {
    $batch = $_POST['batch'];
    $roll = $_POST['roll'];
    $sid = $_POST['id'];
    $que = mysqli_query($con,"UPDATE applicantsinfo SET batch_id='$batch', roll_num='$roll' ,status = '1' WHERE id='$sid'");
    if($que) {
        echo "
			<script>alert('Confirm Applicants Successfully');
			window.open('confirmlist.php','_self');
			</script>
		";
    }else{
        $msg = array('Failed To Approve','error');
    }
}
?>

<?php 
  include 'include/footer.php';
 ?>
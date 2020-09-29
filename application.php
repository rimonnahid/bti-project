<?php 
	include 'include/header.php';
	include 'include/dbcon.php';
	session_start();
	$sql = "SELECT * FROM courses";
	$run = mysqli_query($con,$sql);
 ?>
<div class="title-header">
	<span>Appliyer's Information Form (AIF)</span>
</div>
<div class="main-content">
	<div class="p-3">
		<div class="table-content">
			<table class="table table-striped table-sm">
				<tr class="bg-custom">
					<th class="pl-4">Name of Course</th>
					<th>Type of Content</th>
				</tr>

			<form accept="" method="POST">
			<?php while($result = mysqli_fetch_assoc($run)) { ?>
				<tr>
					<td>
						<input class="ml-2 mr-3" type="radio" name="course_name" value="<?php echo $result['id']; ?>"> <?php echo $result['course_name']; ?>

				</td>
					<td><?php echo $result['content']; ?></td>
				</tr>
			
			<?php } ?>
				<tr class="bg-custom">
					<td></td>
					<td align="right"><a href="appform.php"><button class="tbl-button continue" disabled="" name="submit">Next</button></a></td>
				</tr>
			</form>
			</table>
		</div>
	</div>
</div>
<?php 

	if (isset($_POST['submit'])) {
		
		$c_name =  $_POST['course_name'];
		$sql = mysqli_query($con,"SELECT * FROM courses WHERE id = '$c_name'");
		$res = mysqli_fetch_assoc($sql);
		$course_content = $res['content'];

		session_start();
		$_SESSION['course_name'] = $c_name;
		$_SESSION['course_content'] = $course_content;
		if (isset($_SESSION['course_name'])) {
			header('location:appform.php');
		}
		
	}
 ?>

			
<?php 
	include 'include/footer.php';
 ?>
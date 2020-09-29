<?php 
	include 'include/header.php';
	if (isset($_POST['submit'])) {
 		$course_name = $_POST['course_name'];
 		$content = $_POST['content'];

 		include 'include/dbcon.php';

 		$sql = "INSERT INTO courses(course_name,content) VALUES ('$course_name','$content')";
 		$run = mysqli_query($con,$sql);
 		if ($run) {
        ?>      
        <script>
          swal('Success','New Course Added Successfull','success');
        </script>
        <?php
        }else{
          ?>      
        <script>
          swal('Error','Ups..Course not added','error');
        </script>
        <?php
        }
 	}
 ?>

<div class="container" >
	<div class="row "  style="background: lightgray;border-radius: 5px;">
		<div class="col-md-5">
		
		</div>

		<div class="col-md-7 " style="border-left: 1px solid gray;">
	        <h3 class="mt-3 text-dark font-weight-bold">New Course</h3>
	        <hr>
			<form action="cnew.php" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="course_name" class="form-control">
					
				</div>
				<div class="form-group">
					<label>Content</label>
					<input type="text" name="content" class="form-control">
				</div>

				<button class="btn btn-outline-success mb-3 float-right" name="submit">Submit</button>
			</form>
		</div>
	</div>
	
</div>


 <?php 
 	include 'include/footer.php';
?>
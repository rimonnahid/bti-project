<?php 
	include 'include/header.php';
	include 'include/dbcon.php';

 ?>

<div class="container" >
	<div class="row "  style="background: lightgray;border-radius: 5px;">
		<div class="col-md-5">
		
		</div>

		<div class="col-md-7 " style="border-left: 1px solid gray;">
	        <h3 class="mt-3 text-dark font-weight-bold">New Batch</h3>
	        <hr>
			<form action="" method="POST">
				<div class="form-group">
					<label>Course Name</label>
					<select type="text" name="course_id" class="form-control">
						<?php 
					 		$sql = "SELECT * FROM courses";
					 		$run = mysqli_query($con,$sql);
					 		while($result = mysqli_fetch_assoc($run)){
						 ?>
						 <option value="<?php echo $result['id'];?>"><?php echo $result['course_name'];?></option>
						<?php } ?>
					</select>
					
				</div>
				<div class="form-group">
					<label>Batch Number</label>
					<input type="text" name="batch_number" class="form-control">
				</div>
				<div class="form-group">
					<label>Duration</label>
					<input type="text" name="duration" class="form-control">
				</div>
				<div class="form-group">
					<label>Started</label>
					<input type="date" name="started" class="form-control">
				</div>
				<div class="form-group">
					<label>Ended</label>
					<input type="date" name="ended" class="form-control">
				</div>

				<button class="btn btn-outline-success mb-3 float-right" name="submit">Submit</button>
			</form>
		</div>
	</div>
	
</div>
<?php 
	if (isset($_POST['submit'])) {
 		$course_id = $_POST['course_id'];
 		$batch_number = $_POST['batch_number'];
 		$duration = $_POST['duration'];
 		$started = $_POST['started'];
 		$ended = $_POST['ended'];

 		$sql = "INSERT INTO batch(course_id,batch_number,duration,started,ended) VALUES ('$course_id','$batch_number','$duration','$started','$ended')";
 		$run = mysqli_query($con,$sql);
 		if ($run) {
        ?>      
        <script>
          swal('Success','New Batch Created Successfully','success');
        </script>
        <?php
        }else{
          ?>      
        <script>
          swal('Error','Ups..Bacth not added','error');
        </script>
        <?php
        }
 	}
 ?>


<?php
 	include 'include/footer.php';
?>
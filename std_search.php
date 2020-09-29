<?php include('include/header.php');
include('include/dbcon.php');

?>
<div class="main-content">
	<div class="fieldset">
		<fieldset class="p-2">
			<legend class="scheduler-border text-center">Search</legend>
				<div class="fieldset-content">
					<form action="" method="post">
						<input type="text" name="roll_no" placeholder="Enter your roll here.." class="form-control-sm" style="width:50%;">
						<button type="submit" class="btn btn-sm btn-info" name="search" style="border-radius: 0; margin-top: -5px;">Search</button>
					</form>
<table class="table table-bordered" class="">
<?php
    if(isset($_POST['search'])){
    $check = $_POST['roll_no'];
      $sql ="SELECT * FROM applicantsinfo WHERE  roll_num LIKE '%$check%'";
       $run =mysqli_query($con,$sql);
        $found = mysqli_num_rows($run);
        $count = 1;
    if($found > 0){
      
    while($res = mysqli_fetch_assoc($run))
    {
  ?>
    <tr>
      <td><?php echo $count++; ?></td>
      <td><img src="img/aimage/<?php echo $res['aimage'];?>" height="50px"></td>
      <td><?php echo $res ['name']; ?></td>
      <td><?php echo $res ['mobile']; ?></td>
      <td><?php echo $res ['email']; ?></td>
      <td><a href="std_search_res.php?id=<?php echo $res['id'];?>">view</a></td>

    </tr>
    <?php
    }
  }
  else{
    echo "No Result Found For $check";
  }
  }
  ?>
  </table>
				</div>
		</fieldset>
	</div>
</div>




<?php 
	include 'include/footer.php';	
?>
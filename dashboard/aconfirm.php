<?php
  include 'include/dbcon.php';
  $id = $_GET['id'];
  $query = mysqli_query($con,"SELECT status FROM applicantsinfo WHERE id= $id ");
  $run = mysqli_fetch_array($query);

  if($run['status'] == 0)
  {
  	mysqli_query($con,"UPDATE applicantsinfo SET status=1 WHERE id=$id ") or die(mysqli_error());
  	header("Location:confirmlist.php");
  }else{
  	mysqli_query($con,"UPDATE applicantsinfo SET status=2 WHERE id=$id ") or die(mysqli_error());
  	header("Location:addmissiondone.php");
  }


?>
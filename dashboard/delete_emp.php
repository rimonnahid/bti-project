<?php 
  include 'include/dbcon.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM employee WHERE emp_id='$id'";
  $run = mysqli_query($con,$sql);
    if($run) {
        header('location:all_employee.php');
    }else{
        $msg = array('Failed To Approve','error');
    }
?>
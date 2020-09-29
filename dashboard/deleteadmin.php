<?php 
  include 'include/dbcon.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM admin WHERE id='$id'";
  $run = mysqli_query($con,$sql);
    if($run) {
        header('location:alladmin.php');
    }else{
        $msg = array('Failed To Approve','error');
    }
?>
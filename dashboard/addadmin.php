<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql1 = "INSERT INTO admin(name,email,password) VALUES ('$name','$email','$password')";
    $run1 = mysqli_query($con,$sql1);
    if ($run1) {
    ?>      
    <script>
      swal('Success','Admin Added Successful','success');
    </script>
    <?php
    }else{
      ?>      
    <script>
      swal('Error','Ups..Admin not added','error');
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
          <h3 class="mt-3 text-dark font-weight-bold">Add new admin</h3>
          <hr>
      <form action="" method="POST">
        
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" class="form-control">
        </div>

        <button class="btn btn-outline-success mb-3 float-right" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php 
  include 'include/footer.php';
 ?>
      

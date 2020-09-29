<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
  $sql = "SELECT * FROM employee";
  $run = mysqli_query($con,$sql);
  $count = 1;
?>
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <span class="m-0 font-weight-bold text-primary pull-left">Courses List</span><a href="employee.php" style="float:right;" class="btn btn-info">Add New Employee</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Designation</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php while($result = mysqli_fetch_assoc($run)) { ?>
            <tr>
              <td><?php echo $count++ ?></td>
              <td><img src="../img/employee/<?php echo $result['photo']; ?>" height="50px"></td>
              <td><?php echo $result['name']; ?></td>
              <td><?php echo $result['email']; ?></td>
              <td><?php echo $result['mobile']; ?></td>
              <td><?php echo $result['designation']; ?></td>
              <td><a href="edit_employee.php?id=<?php echo $result['emp_id'] ?>" class="btn btn-sm btn-success">Edit</a>
                <a href="delete_emp.php?id=<?php echo $result['emp_id'];?>" class="btn btn-sm btn-danger" id="delete">Delete</a></td>
            </tr>
          <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>SL</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Designation</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php 
  include 'include/footer.php';
 ?>
      

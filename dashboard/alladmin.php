<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
  $sql = "SELECT * FROM admin";
  $run = mysqli_query($con,$sql);
  $count = 1;
?>

  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="addadmin.php" class="btn btn-primary pull-right">Add Admin</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while($result = mysqli_fetch_assoc($run)) { ?>
              <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['email']; ?></td>
                <td><a href="deleteadmin.php?id=<?php echo $result['id'];?>" class="btn btn-sm btn-primary" id="delete">Delete</a></td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
  </div>

</div>
<!-- End of Main Content -->
<?php 
  include 'include/footer.php';
 ?>
      

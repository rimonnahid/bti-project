<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
  $id = $_GET['id'];
  $sql = "SELECT courses.course_name,applicantsinfo.* FROM courses INNER JOIN applicantsinfo ON courses.id=applicantsinfo.coursename WHERE batch_id = '$id'";
  $run = mysqli_query($con,$sql);
  $count = 1;
?>
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Batch Student List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Name</th>
                <th>Course Name</th>
                <th>Mobile</th>
                <th>Roll</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php while($result = mysqli_fetch_assoc($run)) { ?>
              <tr>
                <td><?php echo $count++ ?></td>
                <td><img src="../img/aimage/<?php echo $result['aimage']; ?>" height="50px"></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['course_name']; ?></td>
                <td><?php echo $result['mobile']; ?></td>
                <td><?php echo $result['roll_num']; ?></td>
                <td><a href="viewapplicants.php?id=<?php echo $result['id'] ?>" class="btn btn-sm btn-primary">View</a></td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>SL</th>
                <th>Image</th>
                <th>Name</th>
                <th>Course Name</th>
                <th>Mobile</th>
                <th>Roll</th>
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
      

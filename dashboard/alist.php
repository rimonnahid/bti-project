<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
  $sql = "SELECT courses.course_name,applicantsinfo.* FROM courses INNER JOIN applicantsinfo ON courses.id=applicantsinfo.coursename WHERE status=0";
  $run = mysqli_query($con,$sql);
  $count = 1;
?>
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Courses List</h6>
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
              <th>View</th>
            </tr>
          </thead>
          <tbody>
          <?php while($result = mysqli_fetch_assoc($run)) { ?>
            <tr>
              <td><?php echo $count++ ?></td>
              <td><img src="../img/aimage/<?php echo $result['aimage']; ?>" height="50px"></td>
              <td><?php echo $result['name']; ?></td>
              <td><?php echo $result['course_name']; ?></td>
              <td><a href="viewapplicants.php?id=<?php echo $result['id'] ?>" class="btn btn-sm btn-success">View</a></td>
             <!--  <td><a href="aconfirm.php?id=<?php echo $result['id'] ?>" class="btn btn-primary">Confirm Admission</a></td> -->
            </tr>
          <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>SL</th>
              <th>Image</th>
              <th>Name</th>
              <th>Course Name</th>
              <th>View</th>
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
      

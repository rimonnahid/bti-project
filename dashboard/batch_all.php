<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
  $sql = "SELECT courses.course_name,batch.* FROM courses INNER JOIN batch ON courses.id=batch.course_id";
  $run = mysqli_query($con,$sql);
  $count = 1;
?>
  <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <span class="m-0 font-weight-bold text-primary pull-left">Batch List</span><a href="batch_create.php" style="float:right;" class="btn btn-info">Add New Batch</a>
      </div>
      <div class="card-body">

        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th width="15%">SL</th>
                <th>Course Name </th>
                <th>Duration</th>
                <th>Started </th>
                <th>Ended</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
           <?php while($result = mysqli_fetch_assoc($run)) { ?>
              <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $result['course_name']; ?></td>
                <td><?php echo $result['duration'];?></td>
                <td><?php echo $result['started'];?></td>
                <td><?php echo $result['ended'];?></td>
                <td><a href="batch_st.php?id=<?php echo $result['id'];?>" class="btn btn-sm btn-primary">Student's</a></td>
              </tr>
            <?php }?>
            </tbody>
            <tfoot>
            <tr>
                <th width="15%">SL</th>
                <th>Course Name </th>
                <th>Category</th>
                <th>Started </th>
                <th>Ended</th>
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
      

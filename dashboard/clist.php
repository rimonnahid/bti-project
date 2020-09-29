<?php 
  include 'include/header.php';
  include 'include/dbcon.php';

  $sql = "SELECT * FROM courses";
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
                <th>Name</th>
                <th>Contents</th>
              </tr>
            </thead>
            <tbody>
            <?php while($result = mysqli_fetch_assoc($run)) { ?>
              <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $result['course_name']; ?></td>
                <td><?php echo $result['content']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Contents</th>
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
      

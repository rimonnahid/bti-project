<?php 
  include 'include/header.php';
  include 'include/dbcon.php';


  $sql2 = "SELECT * FROM applicantsinfo";
  $run2 = mysqli_query($con,$sql2);
 ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Total Applicants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">New  Applicants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo WHERE status= 0";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Confirm Applicants</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo WHERE status= 1";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Admission Done</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo WHERE status= 2";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Male Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo WHERE gender= 'Male'";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Female Application</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM applicantsinfo WHERE gender='Female'";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Batch</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM batch";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                        $sql = "SELECT * FROM admin";
                        $run = mysqli_query($con,$sql);
                        $count = mysqli_num_rows($run);
                        echo $count;

                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php 
  include 'include/footer.php';
 ?>
      

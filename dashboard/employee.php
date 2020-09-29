<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
 
    if (isset($_POST['create'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $salary = $_POST['salary'];
        $join_date = $_POST['join_date'];
        $designation = $_POST['designation'];
        $edu = $_POST['edu'];
        if($_FILES['photo']){
            $photo = $_FILES['photo']['name'];
            $tmp_photo = $_FILES['photo']['tmp_name'];
            move_uploaded_file($tmp_photo, '../img/employee/'.$photo);
            $que = mysqli_query($con,"INSERT INTO employee (name,email,mobile,salary,join_date,designation,edu,photo) VALUES ('$name','$email','$mobile','$salary','$join_date','$designation','$edu','$photo')");
            if ($que) {
            ?>      
            <script>
              swal('Success','Employee Added Successful','success');
            </script>
            <?php
            }else{
              ?>      
            <script>
              swal('Error','Ups..Employee not added','error');
            </script>
            <?php
            }
        }
        
    }
?>


<div class="row animated fadeInUp">
    <div class="col-sm-12 col-lg-12">
        <!--STRIPE-->
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-content">
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal form-stripe" action="" method="POST" enctype="multipart/form-data">
                                <h6 class="mb-xlg text-center"><b>Create New Employee</b></h6>


                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2 col-form-label text-right">Name</label>
                                      <div class="col-sm-10"><input type="text" class="form-control" name="name">
                                      </div>
                                  </div>

                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2 col-form-label text-right">Email</label>
                                      <div class="col-sm-4"><input type="email" class="form-control" name="email">
                                      </div>
                                      <label class="col-sm-2 col-form-label text-right">Mobile</label>
                                      <div class="col-sm-4"><input type="number" class="form-control" name="mobile">
                                      </div>
                                  </div>


                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2  col-form-label text-right" >Designation</label>
                                      <div class="col-sm-10">
                                        <select class="form-control" name="designation">
                                          <option>Instructor</option>
                                          <option>Office Assistene</option>
                                          <option>Cleaner</option>
                                        </select>
                                      </div>
                                  </div>


                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2 col-form-label text-right">Salary</label>
                                      <div class="col-sm-4"><input type="text" class="form-control" name="salary">
                                      </div>
                                      <label class="col-sm-2 col-form-label text-right">Join Date</label>
                                      <div class="col-sm-4"><input type="date" class="form-control" name="join_date">
                                      </div>
                                  </div>

                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2 col-form-label text-right">Educational Qualification</label>
                                      <div class="col-sm-10"><input type="text" class="form-control" name="edu">
                                      </div>
                                  </div>

                                  <div class="form-group row mt-5">
                                      <label class="col-sm-2 col-form-label text-right">Photo</label>
                                      <div class="col-sm-10"><input type="file" class="form-control" name="photo">
                                      </div>
                                  </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label text-right"></label>
                                    <div class="col-sm-10 col-form-label">
                                        <button type="submit" name="create" class="btn btn-primary">Confirm to Add Employee </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- End of Main Content -->
<?php 
  include 'include/footer.php';
 ?>
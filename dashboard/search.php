<?php 
  include 'include/header.php';
  include 'include/dbcon.php';
?>
<table class="table table-bordered" class="">

    <tr class="text text-primary">
      <th>SL</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Email</th>
    
    </tr>
<?php
    if(isset($_POST['search'])){
    $check = $_POST['result'];
    $type = $_POST['type'];
    if($type == 'student'){
      $sql ="SELECT * FROM applicantsinfo WHERE  name LIKE '%$check%'";
       $run =mysqli_query($con,$sql);
        $found = mysqli_num_rows($run);
        $count = 1;
    }
    if($type == 'employee'){
        $sql ="SELECT * FROM employee WHERE  name LIKE '%$check%'";
        $run =mysqli_query($con,$sql);
        $found = mysqli_num_rows($run);
        $count = 1;
      }
    if($found > 0){
      
    while($res = mysqli_fetch_assoc($run))
    {
  ?>
    <tr>
      <td><?php echo $count++; ?></td>
      <td><?php echo $res ['name']; ?></td>
      <td><?php echo $res ['mobile']; ?></td>
      <td><?php echo $res ['email']; ?></td>

    </tr>
    <?php
    }
  }
  else{
    echo "No Result Found For $check";
  }
  }
  ?>
  </table>
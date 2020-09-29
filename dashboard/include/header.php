<?php 
  session_start();
  if (isset($_SESSION['email'])) {
  }else{
    header('location:login.php');
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BTI</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Toastr style -->
  <link href="css/toastr/toastr.min.css" rel="stylesheet">
  <!-- {{-- database table --}} -->
  <link href="css/dataTables/datatables.min.cs" rel="stylesheet">

  <!-- Sweet Alert -->
  <link href="css/sweetalert/sweetalert.css" rel="stylesheet">
  <script type="text/javascript" src="./js/sweetalert.min.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BTI</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Course</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="clist.php">Course List</a>
            <a class="collapse-item" href="cnew.php">New Course</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="alist.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Applicant's List</span></a>
      </li>
      <!-- Nav Item - Confirm applicants -->
      <li class="nav-item">
        <a class="nav-link" href="confirmlist.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Confirm Applicant's</span></a>
      </li>
      <!-- Nav Item - Admission done -->
      <li class="nav-item">
        <a class="nav-link" href="addmissiondone.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Addmission Done</span></a>
      </li>
      <!-- Nav Item - Admission done -->
      <li class="nav-item">
        <a class="nav-link" href="batch_all.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Batch</span></a>
      </li>
      <!-- Nav Item - Admission done -->
      <li class="nav-item">
        <a class="nav-link" href="all_employee.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Employee</span></a>
      </li>
      <!-- Nav Item - Admission done -->
      <li class="nav-item">
        <a class="nav-link" href="alladmin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Admin</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form action="search.php" method="post">
              <div class="input-group">
                <select name="type" class="form-control">
                  <option value="student">Student</option>
                  <option value="employee">Employee</option>
                </select>
                <input type="text" name="result" class="form-control" placeholder="Input Name" >
                <div class="input-group-append">
                <button type="submit" class="btn btn-primary" name="search">Submit</button>
                </div>
              </div>
          </form>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

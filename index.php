<?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    session_start();

    $koneksi = mysqli_connect("localhost","root","","db_kursus");
    
?>  


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ADMIN | Kursus Online</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/favicon.png" class="mr-2" alt="logo"/>Kursus Online</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/favicon.png" alt="logo"/></a>
      </div>


      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
        
          
       
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?page=kursus">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Daftar Kursus</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?page=materi">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Daftar Materi Kursus</span>
            </a>
          </li>


 
        </ul>
      </nav>
      <!-- partial -->
      
          
              
                 <?php 

                  $page = $_GET['page'];
                  $aksi = $_GET['aksi'];

                  if($page == "kursus"){
                    if($aksi==""){
                      include "pages/kursus/kursus.php";
                    }

                    if($aksi=="tambahkursus"){
                      include "pages/kursus/tambahkursus.php";
                    }

                    if($aksi=="editkursus"){
                      include "pages/kursus/editkursus.php";
                    }

                    if($aksi=="hapuskursus"){
                      include "pages/kursus/hapuskursus.php";
                    }


                    if($aksi=="detail"){
                      include "pages/kursus/detail.php";
                    }
                  }


                  if($page == "materi"){
                    if($aksi==""){
                      include "pages/materi/materi.php";
                    }

                    if($aksi=="tambahmateri"){
                      include "pages/materi/tambahmateri.php";
                    }

                    if($aksi=="editmateri"){
                      include "pages/materi/editmateri.php";
                    }

                    if($aksi=="hapusmateri"){
                      include "pages/materi/hapusmateri.php";
                    }

                    if($aksi=="detail"){
                      include "pages/materi/detail_materi.php";
                    }


                  }

                  if($page == ""){
                    include 'home.php';
                  }



                  ?>
              
           
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>



<?php

include "layouts/header.php";

if(isset($_POST['username'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];
    $ty = $_POST['type'];

    $statOfInsert = "insert into users (name , password , type) values ('$un' , '$pw' , '$ty')";
    $query = mysqli_query($connection, $statOfInsert);
    header('location:users.php');
}

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <form action="" method="post" enctype="multipart/form-data">

                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label">username</label>
                  <div class="col-sm-10">
                    <input name="username" class="form-control" type="text" placeholder="username"
                      id="example-text-input">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                  <div class="col-sm-10">
                    <input name="password" class="form-control" type="text" placeholder="password"
                      id="example-text-input">
                  </div>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="type" value="normal_user" id="formRadios1" checked>
                  <label class="form-check-label" for="formRadios1">
                    normal
                  </label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="radio" name="type" value="super_admin" id="formRadios1">
                  <label class="form-check-label" for="formRadios1">
                    admin
                  </label>
                </div>
                <button class='btn btn-info' type="submit" >add</button>
              </form>
            </div>
          </div>
        </div>
        <!-- end col -->

      </div>
      <!-- end row -->
    </div>

  </div>
  <!-- End Page-content -->

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>document.write(new Date().getFullYear())</script> © Upcube.
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block">
            Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
          </div>
        </div>
      </div>
    </div>
  </footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
  <div data-simplebar class="h-100">
    <div class="rightbar-title d-flex align-items-center px-3 py-4">

      <h5 class="m-0 me-2">Settings</h5>

      <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
        <i class="mdi mdi-close noti-icon"></i>
      </a>
    </div>

    <!-- Settings -->
    <hr class="mt-0" />
    <h6 class="text-center mb-0">Choose Layouts</h6>

    <div class="p-4">
      <div class="mb-2">
        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
      </div>

      <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
      </div>

      <div class="mb-2">
        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
      </div>
      <div class="form-check form-switch mb-3">
        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch"
          data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
      </div>

      <div class="mb-2">
        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
      </div>
      <div class="form-check form-switch mb-5">
        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch"
          data-appStyle="assets/css/app-rtl.min.css">
        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
      </div>


    </div>

  </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>


<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- jquery.vectormap map -->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>
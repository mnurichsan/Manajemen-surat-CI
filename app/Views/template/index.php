<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url() ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?= $this->include('template/topbar'); ?>
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?= $this->include('template/sidebar'); ?>
      
      <!-- partial -->
      <?= $this->renderSection('page-content'); ?>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url() ?>/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?= base_url() ?>/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url() ?>/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url() ?>/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url() ?>/js/dashboard.js"></script>
  <script src="<?= base_url() ?>/js/data-table.js"></script>
  <script src="<?= base_url() ?>/js/jquery.dataTables.js"></script>
  <script src="<?= base_url() ?>/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
  <script src="<?= base_url() ?>/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
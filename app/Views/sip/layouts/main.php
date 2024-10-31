<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Dashboard</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
  <link rel="stylesheet" href="<?= base_url('sip/css/style.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('sip/css/style.min.css.map') ?>">
  <link rel="stylesheet" href="<?= base_url('sip/css/style.css') ?>">

</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
  <?= $this->include('sip/layouts/sidebar') ?>

  <div class="main-wrapper">
    <!-- ! Main nav -->
    <?= $this->include('sip/layouts/navbar') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('sip/layouts/footer') ?>

  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
<script src="<?= base_url('sip/js/script.js') ?>"></script>
<script src="<?= base_url('sip/plugins/chart.min.js') ?>"></script>
<script src="<?= base_url('sip/plugins/feather.min.js') ?>"></script>
<script src="<?= base_url('sip/plugins/feather.min.js.map') ?>"></script>

</body>

</html>
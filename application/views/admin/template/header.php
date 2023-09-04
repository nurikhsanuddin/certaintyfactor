<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title_header ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/templates/backend') ?>/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/plugins') ?>/summernote/summernote-bs4.min.css">
    <script src="<?= base_url('assets/plugins') ?>/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/plugins') ?>/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable()
        });
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?php echo SITE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?php echo SITE_DESCRIPTION; ?>" name="description" />
    <meta content="<?php echo AUTHOR; ?>" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />



    

    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
<link href="/assets/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />

    <!--<link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="css/sweetalert2.min.css" type="text/css" />
    <!-- icons -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/border.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/custom.css?v=<?php echo microtime() ?>" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": false}'>
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php $this->load->view('shared/components/navbar'); ?>
        <?php $this->load->view('shared/components/horizontal_menu'); ?>

        <!-- end Topbar -->



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
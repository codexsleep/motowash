<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Dashboard - MotoWash Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


        <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

           
            <?php 
                require 'include/topbar.php';
                require 'include/sidebar.php';
            ?>

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-title">
                                    <h4 class="pull-left page-title">Dashboard</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li>MotoWash</li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Customers</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $total_customer;?></b></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Order Service</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $total_service_orders;?></b></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Order Product</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b><?= $total_product_orders;?></b></h3>
                                    </div>
                                </div>
                            </div>                      
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php
                    require 'include/footer.php';
                ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/js/modernizr.min.js"></script>
        <script src="<?= base_url();?>assets/js/detect.js"></script>
        <script src="<?= base_url();?>assets/js/fastclick.js"></script>
        <script src="<?= base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url();?>assets/js/jquery.blockUI.js"></script>
        <script src="<?= base_url();?>assets/js/waves.js"></script>
        <script src="<?= base_url();?>assets/js/wow.min.js"></script>
        <script src="<?= base_url();?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?= base_url();?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?= base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables-->
        <script src="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script src="<?= base_url();?>assets/pages/dashborad.js"></script>

        <script src="<?= base_url();?>assets/js/app.js"></script>

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Barcode - MotoWash Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">

        <link href="<?= base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?= base_url();?>assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

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
                                    <h4 class="pull-left page-title">Barcode</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="">Dashboard</a></li>
                                        <li class="active">Barcode</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row">
                                        <center>
                                        <form action="<?= base_url();?>admin/barcode/print" method="GET">
                                            <div class="col-xl-9">
                                            <img  alt="<?= $productcode['code'];?>" src="<?php echo site_url();?>/admin/barcode/generate/<?= $productcode['code'];?>" width="20%">
                                                <div class="row">
                                                    <div class="col-sm-9 col-8 chat-inputbar">
                                                        <input type="hidden" name="code" class="form-control chat-input" value="<?= $productcode['code'];?>">
                                                        <input type="number" name="t" class="form-control chat-input" placeholder="Masukkan jumlah barcode" required>
                                                    </div>
                                                <div class="col-sm-3 col-4 chat-send">
                                                    <button type="submit" class="btn btn-primary btn-block"><i class="mdi mdi-printer"></i> Print</button>
                                                </div>
                                            </div>
                                            </div>
                                        </form>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- container -->
                     </div> <!-- content -->
                <?php require 'include/footer.php'; ?>
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

        <!-- Plugins js -->
        <script src="<?= base_url();?>assets/plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="<?= base_url();?>assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

        <!-- Plugins Init js -->
        <script src="<?= base_url();?>assets/pages/form-advanced.js"></script>

        <script src="<?= base_url();?>assets/js/app.js"></script>
    </body>
</html>
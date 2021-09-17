<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Edit Layanan - MotoWash Management System</title>
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
                                    <h4 class="pull-left page-title">Edit Layanan</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="">Dashboard</a></li>
                                        <li class="active">Edit Layanan</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($_COOKIE["sucmesg"])){ ?>
                        <div class="alert alert-success alert-dismissible fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <b>Success!</b> <?php echo $_COOKIE["sucmesg"];?>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Edit Layanan</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-xs-12">
                                                <div class="m-t-20">
                                        <form method="POST" action="<?= base_url();?>admin/service/edit/<?= $services['service_id'];?>">
                                                       <input type="hidden" name="id" value="<?= $services['service_id'];?>"/>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" class="form-control" placeholder="Masukkan nama layanan" name="name" value="<?= $services['service_name'];?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Icon</label>
                                                            <input type="text" class="form-control" placeholder="Masukkan lokasi icon" name="icon" value="<?= $services['service_icon'];?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deskripsi</label>
                                                            <textarea class="form-control " placeholder="Masukkan deskripsi singkat layanan" name="deskripsi" required><?= $services['service_description'];?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Status</label>
                                                            <div class="radio">
                                                                <input type="radio" name="status" id="status1" value="Active" <?php if($services['service_status']=='Active'){ echo 'checked="checked"';}?>>
                                                                    <label for="status1">Active</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="status" id="status2" value="Deactive" <?php if($services['service_status']=='Deactive'){ echo 'checked="checked"';}?>>
                                                                    <label for="status2">Deactive</label>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="form-group m-b-0">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="simpan">
                                                                    Simpan
                                                                </button>
                                                                <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                    Batal
                                                                </button>
                                                            </div>
                                                        </div>
                                            </div>
                                                       
                                        </form>
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
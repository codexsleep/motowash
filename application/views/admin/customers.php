<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Customer - MotoWash Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?= base_url();?><?= base_url();?>assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url();?>assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="pull-left page-title">Data Customer</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="">Dashboard</a></li>
                                        <li class="active">Data Customer</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Customer</h3>
                                    </div>
                                    <div class="panel-body">

                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>No Telp</th>
                                                    <th>Gender</th>
                                                    <th>Alamat</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach($customers as $customer){
                                            ?>
                                                <tr>
                                                    <td><?= $customer['customer_id'];?></td>
                                                    <td><?= $customer['customer_name'];?></td>
                                                    <td><?= $customer['customer_telp'];?></td>
                                                    <td><?= $customer['customer_gender'];?></td>
                                                    <td><?= $customer['customer_address'];?></td>
                                                    <td><?= $customer['customer_status'];?></td>
                                                    <td>
                                                        <a href="#" onClick="confirm_modal('<?= base_url();?>admin/customers/hapus/<?= $customer['customer_id'];?>');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php
                    require 'include/footer.php';
                ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

 <!-- Modal Popup untuk delete-->
 <div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="text-align:center;">Anda yakin akan menghapus data ini.. ?</h4>
      </div>
                
      <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" id="delete_link"><button type="button" class="btn btn-danger waves-effect waves-light">Hapus</button></a>
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        <!-- Javascript untuk popup modal Delete-->
        <script type="text/javascript">
            function confirm_modal(delete_url){
                $('#modal_delete').modal('show', {backdrop: 'static'});
                document.getElementById('delete_link').setAttribute('href' , delete_url);
            }
        </script>   

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

        <!-- Datatables-->
        <script src="<?= base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?= base_url();?>assets/pages/datatables.init.js"></script>

        <script src="<?= base_url();?>assets/js/app.js"></script>

    </body>
</html>
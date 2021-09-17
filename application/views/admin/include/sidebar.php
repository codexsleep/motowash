
            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= base_url();?>admin/dashboard" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion-bag"></i><span> Produk </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url();?>admin/product/add">Tambah Produk</a></li>
                                    <li><a href="<?= base_url();?>admin/product">Data Produk</a></li>
                                    <li><a href="<?= base_url();?>admin/categories">Kategori Produk</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion-pricetags"></i><span> Layanan </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?= base_url();?>admin/service/add">Tambah Layanan</a></li>
                                    <li><a href="<?= base_url();?>admin/service">Data Layanan</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="<?= base_url();?>admin/customers" class="waves-effect"><i class="ion-android-user-menu"></i><span> Customer</span></a>
                            </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion-android-contacts "></i><span> Karyawan</span></a>
                            </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion-android-social"></i><span> Users</span></a>
                            </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion-settings"></i><span> Pengaturan</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
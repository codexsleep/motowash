<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url();?>assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url();?>assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url();?>assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url();?>assets/images/logo-light.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block">
                <div class="dropdown pt-3 d-inline-block">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create <i class="mdi mdi-chevron-down"></i>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search..." />
                    <span class="fa fa-search"></span>
                </div>
            </form>

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-md-block ml-2">
                <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="mr-2" src="<?= base_url();?>assets/images/flags/us_flag.jpg" alt="Header Language" height="16">
                    English <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="<?= base_url();?>assets/images/flags/germany_flag.jpg" alt="user-image" class="mr-1" height="12"> <span
                            class="align-middle"> German </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="<?= base_url();?>assets/images/flags/italy_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Italian </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="<?= base_url();?>assets/images/flags/french_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> French </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="<?= base_url();?>assets/images/flags/spain_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Spanish </span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="<?= base_url();?>assets/images/flags/russia_flag.jpg" alt="user-image" class="mr-1" height="12">
                        <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge badge-danger badge-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message-text-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-glass-cocktail"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It is a long established fact that a reader will</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="media">
                                <div class="avatar-xs mr-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-message-text-outline"></i>
                                    </span>
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread messages</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            View all
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url();?>assets/images/users/user-4.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My
                        Wallet</a>
                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i
                            class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock
                        screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i
                            class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-settings-outline"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="index.php" class="waves-effect">
                        <i class="ti-home"></i><span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.php" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.php">Inbox</a></li>
                        <li><a href="email-read.php">Email Read</a></li>
                        <li><a href="email-compose.php">Email Compose</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-package"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.php">Alerts</a></li>
                        <li><a href="ui-buttons.php">Buttons</a></li>
                        <li><a href="ui-cards.php">Cards</a></li>
                        <li><a href="ui-carousel.php">Carousel</a></li>
                        <li><a href="ui-dropdowns.php">Dropdowns</a></li>
                        <li><a href="ui-grid.php">Grid</a></li>
                        <li><a href="ui-images.php">Images</a></li>
                        <li><a href="ui-lightbox.php">Lightbox</a></li>
                        <li><a href="ui-modals.php">Modals</a></li>
                        <li><a href="ui-rangeslider.php">Range Slider</a></li>
                        <li><a href="ui-session-timeout.php">Session Timeout</a></li>
                        <li><a href="ui-progressbars.php">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert.php">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.php">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-typography.php">Typography</a></li>
                        <li><a href="ui-video.php">Video</a></li>
                        <li><a href="ui-general.php">General</a></li>
                        <li><a href="ui-colors.php">Colors</a></li>
                        <li><a href="ui-rating.php">Rating</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span class="badge badge-pill badge-success float-right">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.php">Form Elements</a></li>
                        <li><a href="form-validation.php">Form Validation</a></li>
                        <li><a href="form-advanced.php">Form Advanced</a></li>
                        <li><a href="form-editors.php">Form Editors</a></li>
                        <li><a href="form-uploads.php">Form File Upload</a></li>
                        <li><a href="form-xeditable.php">Form Xeditable</a></li>
                        <li><a href="form-repeater.php">Form Repeater</a></li>
                        <li><a href="form-wizard.php">Form Wizard</a></li>
                        <li><a href="form-mask.php">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-morris.php">Morris Chart</a></li>
                        <li><a href="charts-chartist.php">Chartist Chart</a></li>
                        <li><a href="charts-chartjs.php">Chartjs Chart</a></li>
                        <li><a href="charts-flot.php">Flot Chart</a></li>
                        <li><a href="charts-knob.php">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline.php">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-view-grid"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.php">Basic Tables</a></li>
                        <li><a href="tables-datatable.php">Data Table</a></li>
                        <li><a href="tables-responsive.php">Responsive Table</a></li>
                        <li><a href="tables-editable.php">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-face-smile"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-material.php">Material Design</a></li>
                        <li><a href="icons-fontawesome.php">Font Awesome</a></li>
                        <li><a href="icons-ion.php">Ion Icons</a></li>
                        <li><a href="icons-themify.php">Themify Icons</a></li>
                        <li><a href="icons-dripicons.php">Dripicons</a></li>
                        <li><a href="icons-typicons.php">Typicons Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-location-pin"></i>
                        <span class="badge badge-pill badge-danger float-right">2</span>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.php"> Google Map</a></li>
                        <li><a href="maps-vector.php"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="menu-title">Extras</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-layout"></i>
                        <span> Layouts </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.php">Horizontal</a></li>
                        <li><a href="layouts-compact-sidebar.php">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.php">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.php">Boxed Layout</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Authentication </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.php">Login 1</a></li>
                        <li><a href="pages-login-2.php">Login 2</a></li>
                        <li><a href="pages-register.php">Register 1</a></li>
                        <li><a href="pages-register-2.php">Register 2</a></li>
                        <li><a href="pages-recoverpw.php">Recover Password 1</a></li>
                        <li><a href="pages-recoverpw-2.php">Recover Password 2</a></li>
                        <li><a href="pages-lock-screen.php">Lock Screen 1</a></li>
                        <li><a href="pages-lock-screen-2.php">Lock Screen 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-support"></i>
                        <span> Extra Pages </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-timeline.php">Timeline</a></li>
                        <li><a href="pages-invoice.php">Invoice</a></li>
                        <li><a href="pages-directory.php">Directory</a></li>
                        <li><a href="pages-blank.php">Blank Page</a></li>
                        <li><a href="pages-404.php">Error 404</a></li>
                        <li><a href="pages-500.php">Error 500</a></li>
                        <li><a href="pages-pricing.php">Pricing</a></li>
                        <li><a href="pages-gallery.php">Gallery</a></li>
                        <li><a href="pages-maintenance.php">Maintenance</a></li>
                        <li><a href="pages-comingsoon.php">Coming Soon</a></li>
                        <li><a href="pages-faq.php">FAQs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span> Email Templates </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-template-basic.php">Basic Action Email</a></li>
                        <li><a href="email-template-Alert.php">Alert Email</a></li>
                        <li><a href="email-template-Billing.php">Billing Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-more"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
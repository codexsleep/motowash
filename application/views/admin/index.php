<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arion Admin Dashboard</title>
    <meta name="description" content="Arion — This is the best dashboard" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Arion — This is the best dashboard" />
    <meta name="apple-mobile-web-app-title" content="Arion Admin Dashboard" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="<?= base_url();?>assets/css/vendor.min.css" />
    <link rel="stylesheet" href="<?= base_url();?>assets/css/common.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url();?>assets/img/content/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url();?>assets/img/content/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url();?>assets/img/content/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url();?>assets/img/content/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url();?>assets/img/content/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url();?>assets/img/content/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url();?>assets/img/content/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url();?>assets/img/content/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url();?>assets/img/content/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url();?>assets/img/content/favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url();?>assets/img/content/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url();?>assets/img/content/favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>assets/img/content/favicons/favicon-16x16.png" />
    <!-- <link rel="manifest" href="<?= base_url();?>assets/img/content/favicons/manifest.json" />-->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="../../ms-icon-144x144.html" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body class="page-home">
    <?php require 'include/themestyle.php';?>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php 
            require 'include/header.php';
            require 'include/sidebar.php';
        ?>
        <main class="page-content">
            <div class="container">
                <div class="widgets">
                    <div class="widgets__row row gutter-bottom-xl">
                        <div class="col-12 col-md-6 col-xl-4 d-flex">
                            <div class="widget">
                                <div class="widget__wrapper">
                                    <div class="widget__row">
                                        <div class="widget__left">
                                            <h3 class="widget__title">Customers</h3>
                                            <div class="widget__status-title text-grey">Total customers</div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage">50000<small></small></div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="1" data-color="#22CCE2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4 d-flex">
                            <div class="widget">
                                <div class="widget__wrapper">
                                    <div class="widget__row">
                                        <div class="widget__left">
                                            <h3 class="widget__title">Services</h3>
                                            <div class="widget__status-title text-grey">Total service orders</div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage">50000<small></small></div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="1" data-color="#FDBF5E"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4 d-flex">
                            <div class="widget">
                                <div class="widget__wrapper">
                                    <div class="widget__row">
                                        <div class="widget__left">
                                            <h3 class="widget__title">Products</h3>
                                            <div class="widget__status-title text-grey">Total product orders</div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage">50000<small></small></div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="1" data-color="#FF3D57"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="<?= base_url();?>assets/js/gsap/gsap.min.js"></script>
    <script src="<?= base_url();?>assets/js/gsap/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url();?>assets/js/gsap/ScrollTrigger.min.js"></script>
    <script src="<?= base_url();?>assets/js/vendor.min.js"></script>
    <script src="<?= base_url();?>assets/js/common.js"></script>
</body>
</html>
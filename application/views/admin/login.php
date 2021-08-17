<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | MotoWash - Business Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/images/favicon.ico">
    <?php include 'layouts/headerStyle.php'; ?>
</head>
<body>
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <?php
                        if(isset($_COOKIE['error_login'])){
                            if($_COOKIE['error_login']==true or $_COOKIE['error_login']==null) {
                                ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        	<span aria-hidden="true">&times;</span>
                    	</button>
                        	<strong>Error!</strong> <?php if($_COOKIE['error_login']==true){ echo "Email atau kata sandi yang Anda masukkan salah";}elseif($_COOKIE['error_login']==null){ echo "Data tidak boleh kosong";}?>
                	</div>
                    <?php
                            }
                        }
                    ?>
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50">Sign in to continue to MotoWash.</p>
                                <a href="index.php" class="logo logo-admin">
                                    <img src="<?= base_url();?>assets/images/logo-sm.png" height="24" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="p-3">
                                <form class="form-horizontal mt-4" action="<?= base_url()?>admin/auth" method="POST">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            name="username" placeholder="Masukkan username" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            name="password" placeholder="Masukkan password" required>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12 text-right">
                                            <button class="btn btn-primary w-md waves-effect waves-light"
                                                type="submit" name="login">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p class="mb-0">© <script>
                            document.write(new Date().getFullYear())
                            </script> MotoWash. Crafted with <i class="mdi mdi-heart text-danger"></i> by Coneting Digital Network</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'layouts/footerScript.php'; ?>
    <?php include "layouts/content-end.php"; ?>
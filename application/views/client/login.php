<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<title>Motowash</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/vendor/swiper/swiper.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/custom.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet"> 
</head>
<body>
	
<div class="page page--login" data-page="login">

        <div class="login">
		<div class="login__content">	
			<h2 class="login__title">Selamat Datang</h2>
			<p class="login__text">Login ke akun anda</p>
				<div class="login-form">
					<form id="LoginForm" method="post" action="<?php echo base_url('home'); ?>">
						<div class="login-form__row">
							<label class="login-form__label">No Telpon</label>
							<input type="text" name="Username" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<label class="login-form__label">Password</label>
							<input type="password" name="password" value="" class="login-form__input required" />
						</div>
						<div class="login-form__row">
							<input type="submit" name="submit" class="login-form__submit button button--main button--full" id="submit" value="LOGIN" />
						</div>
					</form>
					<div class="login-form__bottom">
						<p>Tidak punya akun?</p>
						<a href="<?php echo base_url(
          'signup'
      ); ?>" class="button button--secondary button--full btn-daftar">DAFTAR</a>
					</div>
				</div>
		</div>
        </div>
			  


</div>
<!-- PAGE END -->
   
<script src="<?php echo base_url(); ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/jquery/jquery.validate.min.js" ></script>
<script src="<?php echo base_url(); ?>assets/client/vendor/swiper/swiper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/client/js/jquery.custom.js"></script>
</body>
</html>
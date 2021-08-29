<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui"
    />
    <title>Motowash</title>
    <link rel='icon' type='image/png' sizes='32x32' href='<?php echo base_url(); ?>assets/client/images/motowash.jpeg' />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/custom.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Overlay panel -->
    <div class="body-overlay"></div>

    <div class="page page--main" data-page="profile">
      <!-- PAGE CONTENT -->
        <header class="header header--fixed header--change">
          <div class="header__inner">
            <div class="header__icon">
              <a href="<?php echo base_url("profile") ?>">
                <img
                  src="<?php echo base_url() ?>assets/client/images/icons/black/arrow-back.svg"
                  alt=""
                  title=""
                />
              </a>
            </div>
          </div>
        </header>

        <div
        class="page__content page__content--with-header"
        id="profile"
      >
          <div class="user-profile__thumb">
            <img
              src="<?php echo base_url() ?>assets/client/images/photos/image-21.jpg"
              alt=""
              title=""
            />
          </div>
          <div class="user-profile__name"><?php echo $user->customer_name ?></div>
          <div class="login-form">
            <form id="LoginForm" method="post" action="<?php echo base_url("profile/changepassword") ?>">
              <?php
              //Notifikasi
              if ($this->session->flashdata('warning')) {
                echo '<div class="login-form__row setflex--center">';
                echo '<div class="alert button--cancel">';
                echo $this->session->flashdata('warning');
                echo '</div>';
                echo '</div>';
                $this->session->unset_userdata('warning');
              }
              ?>
              <div class="login-form__row">
                <label>Password Lama</label>
                <input
                  type="password"
                  name="pw_lama"
                  class="login-form__input"
                />
                <label class="error error--black"><?php echo form_error('pw_lama'); ?></label>
              </div>
              <div class="login-form__row">
                <label>Password Baru</label>
                <input
                  type="password"
                  name="pw_baru"
                  value=""
                  class="login-form__input"
                />
                <label class="error error--black"><?php echo form_error('pw_baru'); ?></label>
              </div>
              <div class="login-form__row">
                <input
                  type="submit"
                  name="submit"
                  class="login-form__submit button button--main button--full"
                  id="submit"
                  value="Submit"
                />
              </div>
            </form>
        </div>
    </div>
    <!-- PAGE END -->

    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/swiper-init.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/jquery.custom.js"></script>
  </body>
</html>

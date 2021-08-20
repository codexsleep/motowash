<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui"
    />
    <title>MobioKit - Premium Mobile Template</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Overlay panel -->
    <div class="body-overlay"></div>
    <!-- Left panel -->
    <div id="panel-left"></div>
    <!-- Right panel -->
    <div id="panel-right"></div>

    <div class="page page--main" data-page="profile">
      <!-- PAGE CONTENT -->
      <div class="page__content">
        <header class="header header--fixed header--change">
          <div class="header__inner">
            <div class="header__icon">
              <a href="main.html">
                <img
                  src="<?php echo base_url() ?>assets/client/images/icons/black/arrow-back.svg"
                  alt=""
                  title=""
                />
              </a>
            </div>
            <div class="header__icon header__icon--more">
              <a href="#" data-popup="social" class="open-popup">
                <img
                  src="<?php echo base_url() ?>assets/client/images/icons/black/more.svg"
                  alt=""
                  title=""
                />
              </a>
            </div>
          </div>
        </header>

        <div class="user-profile">
          <div class="user-profile__thumb">
            <img
              src="<?php echo base_url() ?>assets/client/images/photos/image-21.jpg"
              alt=""
              title=""
            />
          </div>
          <div class="user-profile__name">Alexandra Joy</div>
          <div class="login-form">
            <form id="LoginForm" method="post" action="main.html">
              <div class="login-form__row">
                <label>Password Lama</label>
                <input
                  type="text"
                  name="password_lama"
                  value=""
                  class="login-form__input required"
                />
              </div>
              <div class="login-form__row">
                <label>Password Baru</label>
                <input
                  type="string"
                  name="password_baru"
                  value=""
                  class="login-form__input required"
                />
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
      </div>
    </div>
    <!-- PAGE END -->

    <!-- Social Icons Popup -->
    <div id="popup-social"></div>

    <!-- Alert -->
    <div id="popup-alert"></div>

    <!-- Notifications -->
    <div id="popup-notifications"></div>

    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/swiper-init.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/jquery.custom.js"></script>
  </body>
</html>

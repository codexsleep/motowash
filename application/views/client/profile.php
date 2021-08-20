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

    <div class="page page--main" data-page="main">
      <!-- PAGE CONTENT -->
      <div
        class="page__content page__content--with-header page__content--with-bottom-nav"
      >
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

        <div class="user-profile mb-20">
          <div class="user-profile__thumb">
            <img
              src="<?php echo base_url() ?>assets/client/images/photos/image-21.jpg"
              alt=""
              title=""
            />
          </div>
          <div class="user-profile__name">Alexandra Joy</div>
        </div>

        <div class="page__title-bar">
          <h3>Your Account Details</h3>
        </div>
        <div class="fieldset">
          <ul class="custom-listing">
            <li class="user">
              <span>Nama:</span>
              Dimas Aditya Mukhsinin
            </li>
            <li class="phone">
              <span>No Telpon:</span>
              088888888888
            </li>
            <li class="gender">
              <span>Gender:</span>
              Laki-laki
            </li>
            <li class="address">
              <span>Alamat:</span>
              Jl.Purwodadi, Perumahan Primkopad, Blok C No.38
            </li>
          </ul>
        </div>

        <div class="buttons buttons--centered">
          <a href="forms.html" class="button button--main">EDIT</a>
          <a href="forms.html" class="button button--main">CHANGE PASSWORD</a>
          <a href="forms.html" class="button button--main">LOGOUT</a>
        </div>
      </div>
    </div>
    <!-- PAGE END -->

    <!-- Bottom navigation -->
    <div class="bottom-navigation">
        <div class="swiper-container-toolbar swiper-toolbar">
            <div class="bottom-navigation__pagination"></div>
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <ul class="bottom-navigation__icons">
                <li>
                    <a href="main.html">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/home.svg" alt="" title="" />
                    <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="pesanan.html">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/cart.svg" alt="" title="" />
                    <span>Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="user-profile.html">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/user.svg" alt="" title="" />
                    <span>Profile</span>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </div>

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

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
      <!-- HEADER -->
      <header class="header header--page header--fixed">
        <div class="header__inner">
          <div
            class="header__icon header__icon--menu open-panel"
            data-panel="left"
          >
            <img
              src="<?php echo base_url() ?>assets/client/images/icons/white/arrow-back.svg"
              alt=""
              title=""
            />
          </div>
          <div class="header__icon open-panel" data-panel="right">
            <!-- <img
              src="/assets/images/icons/white/notifications.svg"
              alt=""
              title=""
            /> -->
            <div>LOGO</div>
          </div>
        </div>
      </header>

      <!-- PAGE CONTENT -->
      <div
        class="page__content page__content--with-header page__content--with-bottom-nav"
      >
        <div class="cards cards--11">
          <div
            class="card card--style-inline card--style-inline-bg card--style-round-corners"
          >
            <div class="card__details">
              <!-- <h4 class="card__title">Smart Sliders</h4> -->
              <h4 class="card__title">
                Mohon tunggu, Driver akan segera menjemput pesanan anda
              </h4>
            </div>
            <div class="card__icon">
              <img src="<?php echo base_url() ?>assets/client/images/food.svg" alt="" title="" />
            </div>
          </div>
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
    <script src="<?php echo base_url() ?>assets/client/js/jquery.custom.js"></script>
  </body>
</html>

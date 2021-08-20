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
    <link
      rel="stylesheet"
      type="text/css"
      href="https://js.api.here.com/v3/3.1/mapsjs-ui.css"
    />
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"
    ></script>
    <script
      type="text/javascript"
      src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"
    ></script>
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
            <!-- <div class="header__logo header__logo--text"><a href="#">Mobio<strong>Kit</strong></a></div>	 -->
            <div
              class="header__icon header__icon--cart open-panel"
              data-panel="right"
            >
              <!-- <img
                src="/assets/images/icons/white/notifications.svg"
                alt=""
                title=""
              /> -->
              <div>LOGO</div>
            </div>
          </div>
        </header>

        <div class="user-profile" style="display: flex; height: 100%;">
          <div class="login-form mt--20">
            <form id="LoginForm" method="post" action="main.html">
              <div class="login-form__row">
                <div id="map" style="height: 250px;"></div>
                <!-- <div id="panel"></div> -->
              </div>
              <div class="login-form__row">
                <label>Alamat</label>
                <input
                  type="text"
                  name="alamat"
                  value=""
                  class="login-form__input required"
                  id="map-input"
                  onchange="getVal()"
                />
                <!-- <textarea
                  name="TextArea"
                  class="login-form__input required"
                  placeholder="Alamat"
                  onchange="getVal()"
                ></textarea> -->
              </div>
              <div class="login-form__row">
                <label>Jumlah Pesanan</label>
                <input
                  type="text"
                  name="jumlah_pesanan"
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
    <script src="<?php echo base_url() ?>assets/client/js/map.js"></script>
  </body>
</html>
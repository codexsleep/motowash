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
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/vendor/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/custom.css" />
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
      <div class="page page--pesan" data-page="main">
        <!-- HEADER -->
        <header class="header header--page header--fixed">
          <div class="header__inner">
            <a
              href="<?php echo base_url('home'); ?>"
              class="header__icon"
            >
              <img
                src="<?php echo base_url(); ?>assets/client/images/icons/white/arrow-back.svg"
                alt=""
                title=""
              />
            </a>
            <div
              class="header__icon"
            >
              <div>LOGO</div>
            </div>
          </div>
        </header>

        <!-- PAGE CONTENT -->
        <div class="page__content" style="display: flex; height: 100%;">
          <div class="login-form mt--20">
            <form id="LoginForm" method="post" action="<?php echo base_url("pesan/tambah/". $service->service_id); ?>">
              <div class="login-form__row">
                <div id="map" style="height: 250px; margin-top: 80px;"></div>
              </div>
              <div class="login-form__row">
                <label>Alamat</label>
                <textarea
                  name="alamat"
                  class="login-form__input"
                  id="map-input"
                  onchange="getVal()"
                ><?php echo set_value('alamat'); ?></textarea>
                <label class="error error--black"><?php echo form_error('alamat'); ?></label>
              </div>
              <div class="login-form__row">
                <label>Jumlah Pesanan</label>
                <input
                  type="number"
                  name="jumlah_pesanan"
                  value="<?php echo set_value('jumlah_pesanan'); ?>"
                  class="login-form__input required"
                />
                <label class="error error--black"><?php echo form_error('jumlah_pesanan'); ?></label>
              </div>
              <div class="login-form__row">
                <label>Keterangan</label>
                <textarea
                  name="keterangan"
                  class="login-form__input"
                ><?php echo set_value('keterangan'); ?></textarea>
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

    <script src="<?php echo base_url(); ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/client/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/client/vendor/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/client/js/jquery.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/client/js/map.js"></script>
  </body>
</html>
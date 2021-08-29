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
    <link rel='icon' type='image/png' sizes='32x32' href='<?php echo base_url(); ?>assets/client/images/motowash.jpeg' />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/client/css/custom.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Overlay panel -->
    <div class="body-overlay"></div>

    <div class="page page--main" data-page="main">
      <!-- HEADER -->
      <header class="header header--page header--fixed">
        <div class="header__inner">
          <a
            href="<?php echo base_url("home") ?>"
            class="header__icon"
          >
            <img
              src="<?php echo base_url() ?>assets/client/images/icons/white/arrow-back.svg"
              alt=""
              title=""
            />
          </a>
          <div class="header__icon">
            <div>Motowash</div>
          </div>
        </div>
      </header>

      <!-- PAGE CONTENT -->
      <div
        class="page__content page__content--with-header page__content--with-bottom-nav"
      >
        <div class="cards cards--11">
          <?php foreach($pesanan as $pesanan) { ?>
            <?php if($pesanan->order_status !== "Finished") {?>
              <div
                class="card card--style-inline card--style-inline-bg card--style-round-corners"
              >
                <div class="card__details">
                  <h4 class="card__title">
                    <?php if($pesanan->order_status === "Waiting") { ?>
                      Mohon tunggu, Kami akan segera menkonfirmasi pesanan anda
                    <?php }else if($pesanan->order_status === "Sucess") {?>
                      Sukses, Driver akan segera menjemput pesanan anda
                    <?php }else if($pesanan->order_status === "Processed") {?>
                      Pelanggan, Pesanan anda sedang dikerjakan
                    <?php }else if($pesanan->order_status === "Canceled") {?>
                      Mohon maaf pesanan anda ditolak
                    <?php } ?>
                  </h4>
                  <p class="card__text">
                    No Pesanan : <b>#<?php echo $pesanan->order_id ?></b>
                  </p>
                  <p class="card__text">
                    <?php echo date('Y-m-d H:i:s'); ?>
                  </p>
                </div>
                <div class="card__icon">
                  <img src="<?php echo base_url() ?>assets/client/images/food.svg" alt="" title="" />
                </div>
              </div>
            <?php } ?>
          <?php } ?>
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
                    <a href="<?php echo base_url("home") ?>">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/home.svg" alt="" title="" />
                    <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("pesanan") ?>">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/cart.svg" alt="" title="" />
                    <span>Pesanan</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("profile") ?>">
                    <img src="<?php echo base_url() ?>assets/client/images/icons/blue/user.svg" alt="" title="" />
                    <span>Profile</span>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/jquery.custom.js"></script>
  </body>
</html>

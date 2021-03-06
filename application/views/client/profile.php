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
      <!-- PAGE CONTENT -->
        <header class="header header--page header--fixed">
          <div class="header__inner">
            <div
              class="header__icon"
              data-panel="left"
            >
              <div>Motowash</div>
            </div>
            <a href="<?php echo base_url("notifications"); ?>" class="header__icon header__icon--cart">
              <img src="<?php echo base_url(); ?>assets/client/images/icons/white/notifications.svg" alt="" title=""/>
                <span class="cart-items-nr"><?php echo $notif_jumlah ?></span>
            </a>
          </div>
        </header>

        <div
        class="page__content page__content--with-header page__content--with-bottom-nav"
        id="profile"
      >
        <div class="mb-20">
          <div class="user-profile__thumb">
            <img
              src="<?php echo base_url() ?>assets/client/images/photos/image-21.jpg"
              alt=""
              title=""
            />
          </div>
          <div class="user-profile__name"><?php echo $user->customer_name ?></div>
        </div>

        <div class="page__title-bar">
          <h3>Detail Akun Kamu</h3>
        </div>
        <div class="fieldset">
          <ul class="custom-listing">
            <li class="user" style="background-image: url('<?php echo base_url() ?>assets/client/images/icons/blue/user.svg')">
              <span>Nama:</span>
              <?php echo $user->customer_name ?>
            </li>
            <li class="user" style="background-image: url('<?php echo base_url() ?>assets/client/images/icons/blue/mobile.svg')">
              <span>No Telpon:</span>
              <?php echo $user->customer_telp ?>
            </li>
            <li class="user" style="background-image: url('<?php echo base_url() ?>assets/client/images/icons/blue/sex.svg')">
              <span>Gender:</span>
              <?php echo $user->customer_gender ?>
            </li>
            <li class="user" style="background-image: url('<?php echo base_url() ?>assets/client/images/icons/blue/home.svg')">
              <span>Alamat:</span>
              <?php echo $user->customer_address ?>
            </li>
          </ul>
        </div>

        <div class="buttons buttons--centered" id="button-profile">
          <a href="<?php echo base_url("profile/edit"); ?>" class="button button--main">EDIT</a>
          <a href="<?php echo base_url("profile/changepassword"); ?>" class="button button--main">TUKAR PASSWORD</a>
          <a href="<?php echo base_url("logout"); ?>" class="button button--main">LOGOUT</a>
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

    <!-- Notifications -->
    <div id="popup-notifications"></div>

    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/jquery/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/vendor/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/swiper-init.js"></script>
    <script src="<?php echo base_url() ?>assets/client/js/jquery.custom.js"></script>
  </body>
</html>

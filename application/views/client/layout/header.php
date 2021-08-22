<div class="page page--main" data-page="main">
  <!-- HEADER -->
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
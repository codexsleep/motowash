<div
        class="page__content page__content--with-header page__content--with-bottom-nav"
      >
        <div class="cards cards--11">
          <?php foreach($pesanan as $pesanan) { ?>
            <div
              class="card card--style-inline card--style-inline-bg card--style-round-corners"
            >
              <div class="card__details">
                <h4 class="card__title">
                  <?php echo $pesanan->service_name ?>
                </h4>
                <p class="card__text">
                  No Pesanan :
                  <b>#<?php echo $pesanan->order_id ?></b>
                </p>
                <p class="card__text">
                  Jumlah Pesanan :
                  <b><?php echo $pesanan->order_number ?></b>
                </p>
                <p class="card__text">
                  Biaya :
                  <b>Rp. 35000</b>
                </p>
                <h4 class="card__title">
                  Status
                </h4>
                <?php if($pesanan->order_status === "Waiting") { ?>
                  <p class="alert button--waiting"><?php echo $pesanan->order_status ?></p>
                <?php }else if($pesanan->order_status === "Processed") { ?>
                  <p class="alert button--process"><?php echo $pesanan->order_status ?></p>
                <?php }else if($pesanan->order_status === "Success") { ?>
                  <p class="alert button--success"><?php echo $pesanan->order_status ?></p>
                <?php }else if($pesanan->order_status === "Canceled") { ?>
                  <p class="alert button--cancel"><?php echo $pesanan->order_status ?></p>
                <?php } ?>
              </div>
              <div class="card__icon">
                <img src="<?php echo base_url() ?>assets/client/images/food.svg" alt="<?php echo $pesanan->service_name ?>" />
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <!-- PAGE CONTENT -->
    <div
    class="page__content page__content--with-header page__content--with-bottom-nav"
    >
        <h2 class="page__title">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </h2>
        <p class="welcome">
            directly on your website or app using the Shop layout design.
        </p>
        <div class="cards cards--12">
            <?php foreach($service as $services) { ?>
                <a href="<?php echo base_url("pesan/tambah/". $services->service_id); ?>" class="card card--style-icon card--style-round-corners">
                    <div class="card__icon">
                        <img src="<?php echo $services->service_icon ?>" alt="<?php echo $services->service_name ?>" />
                </div>
                <h4 class="card__title title--fitur"><?php echo $services->service_name ?></h4>
                </a>
            <?php } ?>
        </div>
        <?php foreach($service as $services) { ?>
            <h2 class="page__title">
                Biaya <?php echo $services->service_name ?>
            </h2>
            <p class="welcome">
                <?php echo $services->service_description ?>
            </p>
        <?php } ?>
        <?php foreach($setting as $setting) { ?>
            <h2 class="page__title">
                Biaya ongkos antar jemput
            </h2>
            <p class="welcome">
                <?php echo $setting->distance_cost ?>
            </p>
        <?php } ?>
    </div>
</div>
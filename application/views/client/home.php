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
        <?php foreach($service as $service) { ?>
            <a href="<?php echo base_url("pesan/tambah/". $service->service_id); ?>" class="card card--style-icon card--style-round-corners">
                <div class="card__icon">
                    <img src="<?php echo $service->service_icon ?>" alt="<?php echo $service->service_name ?>" />
            </div>
            <h4 class="card__title title--fitur"><?php echo $service->service_name ?></h4>
            </a>
        <?php } ?>
    </div>
    </div>
</div>
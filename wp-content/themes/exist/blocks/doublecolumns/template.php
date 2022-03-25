<section id="block_doublecolumns">
    <div class="container double">
        <div class="row">
            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                <div class="double__background" id="<?php the_field('firstId') ?>">
                    <?php the_field('firstTitle') ?>
                    <?php the_field('firstText') ?>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="1500">
                <div class="double__background" id="<?php the_field('secondId') ?>">
                    <?php the_field('secondTitle') ?>
                    <?php the_field('secondText') ?>
                </div>
            </div>
        </div>
    </div>
</section>
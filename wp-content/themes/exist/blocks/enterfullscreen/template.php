<section class="block_enterfullscreen" id="<?php echo the_field('id')?>">
    <div class="container ">
        <div class="row">
            <div class="col-12 col-lg-6 text-left enterfullscreen__flex ">
                <?php the_field('header') ?>
                <?php the_field('text') ?>
                <div class="enterfullscreen__buttonBox">
                    <a class="enterfullscreen__button enterfullscreen__button--first"
                        href="<?php the_field('link1') ?>"><?php the_field('buttonText1') ?></a>
                    <a class="enterfullscreen__button enterfullscreen__button--second "
                        href="<?php the_field('link2') ?>">
                        <picture>
                            <source srcset="<?= get_template_directory_uri() . "/images/play.webp"; ?>"
                                type="image/webp">
                            <source srcset="<?= get_template_directory_uri() . "/images/play.png"; ?>" type="image/png">
                            <img class="" src="<?= get_template_directory_uri() . "/images/play.png"; ?>  "
                                alt="play icon">
                        </picture>
                        <?php the_field('buttonText2') ?>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <picture class="enterfullscreen__photo">
                    <source srcset="<?= get_template_directory_uri() . "/images/entry.webp"; ?>" type="image/webp">
                    <source srcset="<?= get_template_directory_uri() . "/images/entry.png"; ?>" type="image/png">
                    <img class="" src="<?= get_template_directory_uri() . "/images/entry.png"; ?>  " alt="icon">
                </picture>
            </div>
        </div>
    </div>
    <div class="test">
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
    </div>
</section>
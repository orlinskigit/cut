<section id="block_modulecenter">

    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <h2 class="modulecenter__title"><?php the_field('title') ?></h2>
                <p class="modulecenter__text"><?php the_field('text') ?></p>
                <a class="modulecenter__button enterfullscreen__button--first"
                    href="<?php the_field('buttonLink') ?>"><?php the_field('buttonText') ?></a>
            </div>

        </div>
    </div>

</section>
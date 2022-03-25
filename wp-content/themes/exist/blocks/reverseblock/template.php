<section id="block_reverseblock">


    <div class="container">

        <div class="row">

            <div
                class="col-12 <?= (get_field('reverse') ? 'col-md-6 order-2 order-md-2' : 'col-md-6 order-1 order-md-1') ?>">
                <img class="reverseblock__icon" src="<?php the_field('icon') ?>" alt="<?php the_field('title') ?>">
                <h2 class="reverseblock__title"><?php the_field('title') ?></h2>
                <p class="reverseblock__text"><?php the_field('text') ?></p>


                <?php

                    $accordion = get_field('accordion');
                    $pointList = get_field('pointList');
                        if (isset($pointList)) {
                            echo '<div class="reverseblock__line">
                            <ul>';
                             
                            if (have_rows('list')) :
        
                            while (have_rows('list')) : the_row();
        
                            $points = get_sub_field('points');
                                                      
                            echo '<li class="reverseblock__points">'.$points.'</li>';
                                                                  
                            endwhile; else :
                        endif; ?>
                </ul>

            </div>
            <a class="reverseblock__button" href="<?php the_field('buttonLink') ?>"><?php the_field('buttonText') ?></a>

            <?php
                        } elseif (isset($accordion)) {
                            echo '<div class="accordion">';
                            if (have_rows('elements')) :
                                 $ilosc = 0;
                            while (have_rows('elements')) : the_row();

                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer'); ?><div>
                <?php
                echo '<input type="radio" name="faq-accordion" id="section'.$ilosc.'" class="accordion__input">';
                            echo '<label for="section'.$ilosc.'" class="accordion__label">'.$question.'</label>';
                            echo '<div class="accordion__content">';
                            echo '<p> '.$answer.' </p>';
                            echo '</div>' ;
                            $ilosc++; ?>
            </div>

            <?php
                            endwhile; else :
                            endif;
                            echo'</div>';
                        }
                ?>
        </div>

        <div
            class="d-ms-none <?= (get_field('reverse') ? 'col-md-6 order-1 order-md-1' : 'col-md-6 order-2 order-md-2') ?>">
            
            <section class="multi-parallax <?php the_field('title') ?>" data-parallax id="">
                <div class="layer-1 layer" data-depth="-0.20" data-type="parallax">
                    <img id="<?= the_field('id_1') ?>" src="<?= the_field('parallaxImage_1') ?>" alt="">
                </div>
                <div class="layer-2 layer" data-depth="-0.40" data-type="parallax">
                    <img id="<?= the_field('id_2') ?>" src="<?= the_field('parallaxImage_2') ?>" alt="">
                </div>
            </section>
        </div>
    </div>

    <script>
    $(window).on('load scroll', function() {
        multiParallax();
    });
    </script>
</section>
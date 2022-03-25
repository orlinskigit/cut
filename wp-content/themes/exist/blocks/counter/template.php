<section id="block_counter">
    <div class="container">
        <div class="row">
            <div class="counter" id="stats-counter">
                <div class="stats-col col-12 col-lg-4">
                    <div class="counter__flex">
                        <h1 class="stats-counter-value" data-count="<?php the_field('firstTop') ?>">0</h1>
                        <p>M+</p>
                    </div>
                    <p><?php the_field('firstText') ?></p>
                </div>
                <div class="stats-col col-12 col-lg-4">
                    <div class="counter__flex">
                        <h1 class="stats-counter-value" data-count="<?php the_field('secondTop') ?>">0</h1>
                        <p>M+</p>
                    </div>
                    <p><?php the_field('secondText') ?></p>
                </div>
                <div class="stats-col col-12 col-lg-4">
                    <div class="counter__flex">
                        <h1 class="stats-counter-value" data-count="<?php the_field('thirdTop') ?>">0</h1>
                        <p></p>
                    </div>
                    <p><?php the_field('thirdText') ?></p>
                </div>
                <div class="stats-col col-12 col-lg-4">
                    <div class="counter__flex">
                        <h1 class="stats-counter-value" data-count="<?php the_field('fourthTop') ?>">0</h1>
                        <p>M+</p>
                    </div>
                    <p><?php the_field('fourthText') ?></p>
                </div>
            </div>
        </div>
    </div>

    <script>
    let x = 0;
    $(window).scroll(function() {

        let oTop = $('#stats-counter').offset().top - window.innerHeight;
        if (x == 0 && $(window).scrollTop() > oTop) {
            $('.stats-counter-value').each(function() {
                let $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
            x = 1;
        }
    });
    </script>

</section>
<section id="block_team">

    <div class="container" data-aos="fade-right" data-aos-duration="1500" >

        <div class="row">
            <?php
if (have_rows('personel')) :

    while (have_rows('personel')) : the_row();
        $name = get_sub_field('name');
        $id = get_sub_field('id');
        $position = get_sub_field('position');
        $img = get_sub_field('img');
        $text = get_sub_field('text');
?>
            <div class="col-12 col-lg-4 text-center">
                <div class="team">
                    <?php
                     echo '<img class="team__img" id="'.$position.'" src="' . $img . '" alt="'.$name.'"/>';
                     ?>
                    <div class="team__box">
                        <?php
                     echo '<h5 class="team__name" id="'.$id.'">'.$name.'</h5>';
                     echo $text;
?>
                    </div>

                </div>
                </a>
            </div>

            <?php
    endwhile;
else :
endif;
?>
        </div>
    </div>

</section>
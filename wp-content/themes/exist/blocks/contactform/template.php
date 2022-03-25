<section id="contactform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="javascript:"><img class="scroll"
                        src="<?= get_template_directory_uri() . "/images/scroll.png"; ?>" alt="Scroll up" /></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="<?= site_url(); ?>"><img class="contact__logo"
                            src="<?= get_template_directory_uri() . "/images/logo1.png"; ?>"
                            alt="Wygadani logo" /></a>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__phone">
                        <a href="tel:501575463"><img src="<?= get_template_directory_uri() . "/images/number.png"; ?>"
                                alt="Zadzwoń" /></a>
                        <a class="contact__number" href="tel:501575463">501 575 463</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__mail">
                        <a target="_blank" href="mailto:biurowygadani@gmail.com"><img
                                src="<?= get_template_directory_uri() . "/images/mail.png"; ?>"
                                alt="Napisz do nas mail" /></a>
                        <a class="footer__mail" target="_blank"
                            href="mailto:biurowygadani@gmail.com"><?php the_field('mail') ?>biurowygadani@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact__mail">
                        <a target="_blank" href="https://goo.gl/maps/JfyQP4qWxrPsUGms6"><img
                                src="<?= get_template_directory_uri() . "/images/location.png"; ?>"
                                alt="Tu jesteśmy" /></a>
                        <a class="footer__mail" target="_blank"
                            href="https://goo.gl/maps/JfyQP4qWxrPsUGms6"><?php the_field('mail') ?>Belgradzka 52 Warszawa</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
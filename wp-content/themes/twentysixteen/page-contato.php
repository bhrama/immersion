<?php get_header(); ?>

<section>
    <div class="container-fluid sua-inscricao">
        <div class="row ">
            <div class="container">
                <div class="col-md-5">
                    <div class="formulario">
                        <h2>ENTRE EM</h2>
                        <h1>CONTATO</h1>
                        <img src="<?php echo get_template_directory_uri() ?>/images/icon-pontos.png" alt="">
                    </div>
                </div>
                <div class="col-md-7" >
                    <div id="formPadrao">
                        <?php echo do_shortcode('[contact-form-7 id="19" title="Contato"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>

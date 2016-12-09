<?php get_header(); ?>


<section>
    <div class="container-fluid inscrição">
        <div class="row ">
            <div class="container">
                <div class="col-md-5">
                    <div class="formulario2">
                        <p style="font-size: 25px">FAÇA A SUA <b>PRÉ INSCRIÇÃO</b></p>

                        <p>Um professor da Immersion entrará em contato com você para avaliarmos seu nível de proficiência na língua inglesa.</p>

                    </div>

                </div>
                <div class="col-md-3 imagempontos">
                <img src="<?php echo get_template_directory_uri() ?>/images/icon-pontos.png" alt="">
                </div>
                <div class="col-md-7" >
                    <div id="formPadrao">
                        <?php echo do_shortcode('[contact-form-7 id="18" title="Inscricao"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>

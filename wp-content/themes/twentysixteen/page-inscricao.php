<?php get_header(); ?>
<section>
    <div class="sua-inscricao">
        <div class="col-md-5">
            <div class="formulario">
                <h2>FAÇA A SUA</h2>
                <h1>PRÉ INSCRIÇÃO</h1>
                <p>Um professor da Immersion entrará em contato com você para avaliarmos seu nível de proficiência na língua inglesa.</p>
                <img src="<?php echo get_template_directory_uri() ?>/images/icon-pontos.png" alt="">
            </div>
        </div>
        <div class="col-md-7" >
            <div id="formPadrao">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Inscricao"]');?>
            </div>
        </div>
        <div class="clearfix">

        </div>
    </div>
</section>

<?php get_footer(); ?>

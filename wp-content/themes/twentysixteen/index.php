<?php get_header(); ?>
<?php if( have_rows('home', 202) ): ?>
    <?php while( have_rows('home', 202) ): the_row();

        // vars
        $texto1 = get_sub_field('texto1');
        $imagem1 = get_sub_field('imagem1');
        $textotitulo = get_sub_field('textotitulo');
        $textobanner = get_sub_field('textobanner');
        $foto_1 = get_sub_field('foto_1');
        $foto_2 = get_sub_field('foto_2');
        $foto_3 = get_sub_field('foto_3');
        $foto_4 = get_sub_field('foto_4');
        $foto_5 = get_sub_field('foto_5:');
        $foto_6 = get_sub_field('foto_6');
        ?>
<div class="container marketing" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12">
        <div class="col-md-5 descricao">
            <?php echo $texto1; ?>
        </div>
    </div>

    <div class="container">
        <div class="subLogo">
            <img src="<?php echo $imagem1['url']; ?>" alt="<?php echo $imagem1['alt'] ?>"/><br>
            <strong><?php echo $textotitulo; ?></strong><br>
            <?php echo $textobanner; ?><br>
        </div><br><br><br>
        <div class="montagem">
            <div class="img1">
                <img src="<?php echo $foto_1['url']; ?>" alt="<?php echo $foto_1['alt'] ?>"/>
            </div>
            <div class="img2">
                <img src="<?php echo $foto_2['url']; ?>" alt="<?php echo $foto_2['alt'] ?>"/>
            </div>
            <div class="img3">
                <img src="<?php echo $foto_3['url']; ?>" alt="<?php echo $foto_3['alt'] ?>"/>
            </div>
            <div class="img4">
                <img src="<?php echo $foto_4['url']; ?>" alt="<?php echo $foto_4['alt'] ?>"/>
            </div>
            <div class="img5">
                <img src="<?php echo $foto_5['url']; ?>" alt="<?php echo $foto_5['alt'] ?>"/>
            </div>
            <div class="img6">
                <img src="<?php echo $foto_6['url']; ?>" alt="<?php echo $foto_6['alt'] ?>"/>
            </div>
        </div>
    </div>
</div>

    <?php endwhile; ?>


<?php endif; ?>

<?php if( have_rows('immersion_e_perfeita_pra_voce', 202) ): ?>
    <?php while( have_rows('immersion_e_perfeita_pra_voce', 202) ): the_row();
        // vars
        $titulo = get_sub_field('titulo');
        $banner = get_sub_field('banner');
        $texto = get_sub_field('texto');
        $texto2 = get_sub_field('texto2');
        $texto3 = get_sub_field('texto3');
        $texto4 = get_sub_field('texto4');
        $texto5 = get_sub_field('texto5');
        $texto6 = get_sub_field('texto6');
        $texto7 = get_sub_field('texto7');
        ?>


<section class="full immersion_perfeita">
    <img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt'] ?>"/>
    <div class="col-md-12 corpo_perfeita">
        <h1><?php echo $titulo; ?></h1>
        <div class="col-md-offset-2">
            <div class="col-md-1 itens">
                <?php echo $texto; ?>
            </div>
            <div class="col-md-1 itens">
                <?php echo $texto2; ?>
            </div>
            <div class="col-md-1 itens">
                <?php echo $texto3; ?>
            </div>
            <div class="col-md-1 itens" style="width: 11%;">
                <?php echo $texto4; ?>
            </div>
            <div class="col-md-1 itens" style="width: 11%;">
                <?php echo $texto5; ?>
            </div>
        </div>
        <div class="col-md-12 footer_perfeita">
            <h1><?php echo $texto6; ?></h1><br>
            <small><?php echo $texto7; ?></small>
        </div>
    </div>
</section>

    <?php endwhile; ?>


<?php endif; ?>


<section class="full entre_em_contato">
    <div class="container contato-index">
        <div class="col-md-3 descContato">ENTRE EM <br><strong>CONTATO</strong></div>
        <div class="col-md-9 form-contato">
            <?php echo do_shortcode('[contact-form-7 id="20" title="Contato Index"]');?>
        </div>
    </div>
</section>


<?php if( have_rows('pacote_completo_para_voce', 202) ): ?>
    <?php while( have_rows('pacote_completo_para_voce', 202) ): the_row();
        // vars
        $titulo_pacote = get_sub_field('titulo');
        $banner_pacote = get_sub_field('banner');
        $texto_pacote = get_sub_field('texto');
        ?>

    <?php endwhile; ?>


<?php endif; ?>
        <section class="full pacote_completo">
    <img src="<?php echo $banner_pacote['url']; ?>" alt="<?php echo $banner_pacote['alt'] ?>"/>
    <div class="col-md-12 corpo_pacote_completo">
        <div class="col-md-5 desc">
            <div class="subDesc" style="width: 60%;float: right;">
                <h1><?php echo $titulo_pacote; ?></h1>
                <small><?php echo $texto_pacote; ?></small>
            </div>
        </div>

        <div class="col-md-7 carousel">
            <!--#############################################################-->
            <nav id="menu-carrossel">
                <a href="#" class="prev" title="Anterior"> &nbsp;&nbsp;<&nbsp;&nbsp; </a>
                <a href="#" class="next" title="Próximo"> &nbsp;&nbsp;> </a>
            </nav>
            <div id="content">
                <div id="carrossel">
                <?php if( have_rows('icones_pacote_completo_para_voce', 202) ): ?>
                    <ul>
                            <?php while( have_rows('icones_pacote_completo_para_voce', 202) ): the_row();
                                // vars
                                $imagem_pacote = get_sub_field('imagem');
                                $titulo_pacote = get_sub_field('titulo');
                                ?>


                        <li>
                            <img src="<?php echo $imagem_pacote['url']; ?>" alt="<?php echo $imagem_pacote['alt'] ?>"/>
                            <h2><?php echo $titulo_pacote; ?></h2>
                        </li>
                            <?php endwhile; ?>

                    </ul>
                <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php if( have_rows('conheça_o_metodo_de_imersao', 202) ): ?>
    <?php while( have_rows('conheça_o_metodo_de_imersao', 202) ): the_row();
        // vars
        $titulo_conheca = get_sub_field('titulo_conheca');
        $texto_conheca = get_sub_field('texto_conheca');
        $link_conheca = get_sub_field('link_conheca');
        $banner_conheca = get_sub_field('banner_conheca');
        ?>



<section class="full conheca">
    <img src="<?php echo $banner_conheca['url']; ?>" alt="<?php echo $banner_conheca['alt'] ?>"/>
    <div class="conteudoConheca">
        <h1><?php echo $titulo_conheca; ?></h1>
        <small><?php echo $texto_conheca; ?></small>
        <div class="btnFooter">
            <a href="<?php echo $link_conheca; ?>" style="text-decoration: none">
            <img src="<?php echo get_template_directory_uri() ?>/images/icon-btn-06.png" alt="">
            <h1 style="font-size: 20px;margin-top: -29px; ">Clique Aquir</h1>
            </a>
        </div><br>

    </div>
</section>
    <?php endwhile; ?>


<?php endif; ?>
<?php get_footer(); ?>
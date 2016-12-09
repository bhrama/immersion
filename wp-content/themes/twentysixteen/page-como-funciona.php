<?php get_header(); ?>



<div class="container"><br><br>

<?php if( have_rows('quem_somos') ): ?>
    <?php while( have_rows('quem_somos') ): the_row();

        // vars
        $imagem = get_sub_field('imagem');
        $texto = get_sub_field('texto');
        $titulo = get_sub_field('titulo');
        ?>

        <section>
            <div>
                <div class="col-md-3 quem-somos fadeInLeft animated" >
                    <h1><?php echo $titulo; ?></h1>
                    <div style="text-align: justify;">
                        <?php echo $texto; ?>
                    </div>
                </div>
                <div><img class="img-responsive imagemcomofunciona fadeInLeft animated" style="min-height: 265px;"  src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt'] ?>" /></div>
            </div>
            <br>
        </section>



    <?php endwhile; ?>


<?php endif; ?>



<?php if( have_rows('programa_de_imersão') ): ?>
    <?php while( have_rows('programa_de_imersão') ): the_row();

        // vars
        $titulo = get_sub_field('titulo');
        $iconimagem = get_sub_field('icon-imagem');
        ?>
    <section>
        <div class="programa" data-aos="fade-right">
            <h1><?php echo $titulo; ?></h1>

    <?php endwhile; ?>
<?php endif; ?>
            <ul>
                <div style="text-align: justify;">
<?php if( have_rows('texto_programa_de_imersão') ): ?>
    <?php while( have_rows('texto_programa_de_imersão') ): the_row();

        // vars
        $texto = get_sub_field('texto');
        ?>


                <li>
                    <img src="<?php echo $iconimagem['url']; ?>" alt="<?php echo $iconimagem['alt'] ?>" />
                    <?php echo $texto; ?>
                </li>




    <?php endwhile; ?>


<?php endif; ?>
                </div>
            </ul>
        </div><br><br>
    </section>

<?php if( have_rows('nossa_metodologia') ): ?>
    <section>
    <?php while( have_rows('nossa_metodologia') ): the_row();

        // vars
        $imagem = get_sub_field('imagem');
        $texto = get_sub_field('texto');
        $titulo = get_sub_field('titulo');
        ?>


        <div>
            <div class="col-md-offset-7 col-md-3 metodologia" data-aos="fade-up-right">
                <h1><?php echo $titulo; ?></h1>
            <div style="text-align: justify;">
                    <?php echo $texto; ?>
                </div>
            </div>
            <img class="img-responsive imagemcomofunciona" data-aos="fade-up-right" style="min-height: 265px;" src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt'] ?>" />

        </div><br>

    <?php endwhile; ?>
 </section>

<?php endif; ?>


<?php if( have_rows('atividades') ): ?>
    <section>
    <?php while( have_rows('atividades') ): the_row();

        // vars
        $ati_imagem = get_sub_field('ati_imagem');
        $ati_texto = get_sub_field('ati_texto');
        $ati_titulo = get_sub_field('ati_titulo');
        ?>

        <div class="descAtividade" data-aos="flip-left">
            <h1><?php echo $ati_titulo; ?></h1>
            <img  class="img-responsive imagemcomofunciona" style="min-height: 265px;" src="<?php echo $ati_imagem['url']; ?>" alt="<?php echo $ati_imagem['alt'] ?>" />
            <div style="text-align: justify;"><br>
                <?php echo $ati_texto; ?>
            </div>
    <?php endwhile; ?>

    </section>
<?php endif; ?>

        <section>
            <div class="atividades" data-aos="flip-up">
                <ul>
<?php if( have_rows('adicione_atividades') ): ?>
    <?php while( have_rows('adicione_atividades') ): the_row();

        // vars
        $ati_imagemdesaque = get_sub_field('ati_imagemdesaque');
        $ati_titulo = get_sub_field('ati_titulo');
        ?>
                    <li>
                        <center><img class="img-responsive"  src="<?php echo $ati_imagemdesaque['url']; ?>" alt="<?php echo $ati_imagemdesaque['alt'] ?>" /></center>
                        <h3><?php echo $ati_titulo; ?></h3>
                    </li>
    <?php endwhile; ?>


<?php endif; ?>
                </ul>
            </div>



<?php if( have_rows('atividade_texto') ): ?>
    <?php while( have_rows('atividade_texto') ): the_row();

        // vars
        $ati_texto2 = get_sub_field('ati_texto2');
        ?>
            <div style="text-align: justify;" data-aos="flip-up">
                <?php echo $ati_texto2; ?>
            </div>
    <?php endwhile; ?>


<?php endif; ?>

        <br>

    </section>

    <section>
        <div>
            <div class="col-md-3 beneficio" data-aos="zoom-in">
<?php if( have_rows('beneficio_da_imersao_total_em_ingles') ): ?>
    <?php while( have_rows('beneficio_da_imersao_total_em_ingles') ): the_row();

        // vars
        $beneficio_imagem = get_sub_field('beneficio_imagem');
        $beneficio_imagem_icon = get_sub_field('beneficio_imagem_icon');
        $beneficio_titulo = get_sub_field('beneficio_titulo');
        ?>

        <h1><?php echo $beneficio_titulo; ?></h1>

    <?php endwhile; ?>


<?php endif; ?>

<?php if( have_rows('beneficio_texto') ): ?>
            <ul>
    <?php while( have_rows('beneficio_texto') ): the_row();

        // vars
        $beneficio_texto = get_sub_field('beneficio_texto');
        ?>
                <li>
                    <img src="<?php echo $beneficio_imagem_icon['url']; ?>" alt="<?php echo $beneficio_imagem_icon['alt'] ?>" />
                    <?php echo $beneficio_texto; ?>
                </li>

    <?php endwhile; ?>


<?php endif; ?>


            </ul>
        </div>
    <img class="img-responsive imagemcomofunciona" data-aos="zoom-in" style="min-height: 265px;" src="<?php echo $beneficio_imagem['url']; ?>" alt="<?php echo $beneficio_imagem['alt'] ?>" />
        </div><br><br>
    </section>



    <?php if( have_rows('banner_imagens') ): ?>

        <?php while( have_rows('banner_imagens') ): the_row();
            // vars
            $imagem_icone = get_sub_field('imagem_icone');
            $banner_imagem = get_sub_field('imagem');
        ?>

        <?php endwhile; ?>
    <?php endif; ?>

    <section>

<?php if( have_rows('banner_texto') ): ?>

    <ul>
    <div>
    <div class="col-md-offset-7 col-md-3 networking" data-aos="zoom-in-down">
    <?php while( have_rows('banner_texto') ): the_row();
    // vars
    $banner_texto = get_sub_field('banner_texto');
    ?>
                <li>
                    <img src="<?php echo $imagem_icone['url']; ?>" alt="<?php echo $imagem_icone['alt'] ?>" />
                    <?php echo $banner_texto; ?>
                </li>
    <?php endwhile; ?>

        </div>

        <img style="min-height: 265px;" data-aos="zoom-in-down" class="img-responsive imagemcomofunciona" src="<?php echo $banner_imagem['url']; ?>" alt="<?php echo $banner_imagem['alt'] ?>" />

        </div>
        </ul>

<?php endif; ?>
    </section>


<?php if( have_rows('imersão') ): ?>
    <section>
        <?php while( have_rows('imersão') ): the_row();
            // vars
            $titulo = get_sub_field('titulo');
            $imagem = get_sub_field('imagem');
            $texto = get_sub_field('texto');
        ?>


        <div class="imersao" data-aos="flip-left" data-aos-duration="3000">
            <h1><?php echo $titulo; ?></h1>
                    <img style="min-height: 265px;" class="img-responsive imagemcomofunciona" src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt'] ?>" />

            <div style="text-align: justify;"><br>
               <?php echo $texto; ?>
            </div>
        </div><br>

        <?php endwhile; ?>
    <?php endif; ?>
    </section>
</div>

<?php get_footer(); ?>
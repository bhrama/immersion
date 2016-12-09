<?php get_header(); ?>

<?php if( have_rows('home', 202) ): ?>
    <?php while( have_rows('home', 202) ): the_row();

        // vars
        $texto1 = get_sub_field('texto');
        $imagem1 = get_sub_field('imagem');
        $textotitulo = get_sub_field('titulo_da_imagem');
        $textobanner = get_sub_field('texto_da_imagem');

        ?>
<section>
    <div class="container-fluid">
        <div class="row ">
            <div class="container">



                <div class="col-md-12 ">
                    </br>
                    <div class="col-md-offset-3 col-md-6 descricao zoomIn animated">
                        <?php echo $texto1; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row ">
            <div class="container">
                <div class="subLogo rotateInUpRight animated">
                    <img src="<?php echo $imagem1['url']; ?>" alt="<?php echo $imagem1['alt'] ?>"/><br>
                    <strong><?php echo $textotitulo; ?></strong><br>
                    <?php echo $textobanner; ?><br>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; ?>
<?php endif; ?>


    </br>
<?php $i=0; if( have_rows('fotos', 202) ): ?>


<section>
    <div class="container-fluid">
        <div class="row ">
            <div class="container">
                <div class="col-md-12">

    <?php while( have_rows('fotos', 202) ): the_row();


        $foto = get_sub_field('foto');
        $titulo_foto = get_sub_field('titulo_foto');
        $texto_foto = get_sub_field('texto_foto');

        ?>
                <?php if($i==0): ?>
                    <div id="efeitofoto1" class="col-md-6 img1">
                        <div class="texto1">
                            <p class="titulo1"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem1"><?php echo $texto_foto; ?></p>
                        </div>
                        <img id="foto1" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>
                    </div>


                <?php elseif($i==1):?>

                    <div class="col-md-6 img2">
                        <div class="texto2 col-md-6">
                            <p class="titulo2"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem2"><?php echo $texto_foto; ?></p>
                        </div>

                        <img id="foto2" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>

                    </div>

                <?php elseif($i==2): ?>
                    <div class="imagem3">

                        <div class="texto3 col-md-3">
                            <p class="titulo3"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem3"><?php echo $texto_foto; ?></p>
                        </div>

                        <div class="col-md-6 img3">
                        <img id="foto3" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>
                        </div>


                    </div>

                <?php elseif($i==3): ?>

                    <div class="col-md-offset-2 col-md-9 img4">
                        <div class="texto4">
                            <p class="titulo4"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem4"><?php echo $texto_foto; ?></p>
                        </div>
                        <img id="foto4" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>

                    </div>
                <?php elseif($i==4): ?>
                    <div class="col-md-7 img5">
                        <div class="texto5">
                            <p class="titulo5"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem5"><?php echo $texto_foto; ?></p>
                        </div>
                        <img id="foto5" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>
                    </div>
                <?php elseif($i==5): ?>
                    <div class="col-md-offset-4 col-md-5 img6">
                        <div class="texto6">
                            <p class="titulo6"><?php echo $titulo_foto; ?></p>
                            <p class="textoimagem6"><?php echo $texto_foto; ?></p>
                        </div>
                        <img id="foto6" class="img-responsive" src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt'] ?>"/>

                    </div>

              <?php endif;?>
                    <?php $i++; ?>


    <?php endwhile; ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function (){
           sliderChangeImage();
        });

            //if(jQuery("#foto1").attr("src", "first.jpg"))



        function sliderChangeImage(){
            var imagens = {
                <?php $i=0;
                while (have_rows('fotos', 202)): the_row();

                    $foto = get_sub_field('foto');
                    $titulo_foto = get_sub_field('titulo_foto');
                    $texto_foto = get_sub_field('texto_foto');
                    echo "'Foto$i':['".$foto['url']."'], 'Titulo':['".$titulo_foto."'], 'Texto':['".$texto_foto."'],";
                $i++;
                endwhile;?>
            }



            setInterval( function() {
                    $("#foto1").fadeOut('500',function() {
                        $(this).attr("src",imagens['Foto6']).fadeIn('500');
                    });


//                jQuery("#foto1").attr("src", imagens['Foto6']);


                }, 8000 );
            setInterval( function() {
                    $("#foto1").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto0']).fadeIn(500);
                    });

//                jQuery("#foto1").attr("src", imagens['Foto0']);


                }, 16000 );

            setInterval( function() {
                    $("#foto2").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto7']).fadeIn(500);
                    });
//                jQuery("#foto2").attr("src", imagens['Foto7']);


                }, 14000 );
            setInterval( function() {
                    $("#foto2").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto1']).fadeIn(500);
                    });
//                jQuery("#foto2").attr("src", imagens['Foto1']);


                }, 22000 );

            setInterval( function() {
                    $("#foto3").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto8']).fadeIn(500);
                    });
//                jQuery("#foto3").attr("src", imagens['Foto8']);


                }, 10000 );
            setInterval( function() {
                    $("#foto3").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto2']).fadeIn(500);
                    });
//                jQuery("#foto3").attr("src", imagens['Foto2']);


                }, 17000 );

            setInterval( function() {
                    $("#foto4").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto9']).fadeIn(500);
                    });
//                jQuery("#foto4").attr("src", imagens['Foto9']);


                }, 11000 );
            setInterval( function() {
                    $("#foto4").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto3']).fadeIn(500);
                    });
//                jQuery("#foto4").attr("src", imagens['Foto3']);


                }, 15000 );

            setInterval( function() {
                    $("#foto5").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto10']).fadeIn(500);
                    });
//                jQuery("#foto5").attr("src", imagens['Foto10']);


                }, 10000 );
            setInterval( function() {
                    $("#foto5").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto4']).fadeIn(500);
                    });
//                jQuery("#foto5").attr("src", imagens['Foto4']);


                }, 15000 );

            setInterval( function() {
                    $("#foto6").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto11']).fadeIn(500);
                    });
//                jQuery("#foto6").attr("src", imagens['Foto11']);


                }, 15000 );
            setInterval( function() {
                    $("#foto6").fadeOut(500,function() {
                        $(this).attr("src",imagens['Foto5']).fadeIn(500);
                    });
//                jQuery("#foto6").attr("src", imagens['Foto5']);


                }, 18000 );

        }

    </script>

</section>




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
<section>
    <div class="container-fluid" style="background-image: url(<?php echo $banner['url']; ?>); background-size: cover; height: 680px; background-size: cover;background-position: center;background-attachment: fixed;">
        <div class="row ">
            <div class="container">
                <div class="col-md-12 corpo_perfeita" data-aos="fade-down">
                    <h1><?php echo $titulo; ?></h1>
                    <div class="col-md-offset-1">
                        <div class="col-md-2 itens">
                            <?php echo $texto; ?>
                        </div>
                        <div class="col-md-2 itens">
                            <?php echo $texto2; ?>
                        </div>
                        <div class="col-md-2 itens">
                            <?php echo $texto3; ?>
                        </div>
                        <div class="col-md-2 itens">
                            <?php echo $texto4; ?>
                        </div>
                        <div class="col-md-2 itens">
                            <?php echo $texto5; ?>
                        </div>
                    </div>
                    <div class="col-md-12 footer_perfeita">
                        <h1><?php echo $texto6; ?></h1><br>
                        <small><?php echo $texto7; ?></small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
        <?php endwhile; ?>
    <?php endif; ?>



<section>
    <div class="container-fluid entre_em_contato">
        <div class="row">
            <div class="container">
                <div class="contato-index" data-aos="fade-right">
                    <div class="col-md-3 descContato">ENTRE EM <br><strong>CONTATO</strong></div>
                    <div class="col-md-9 form-contato">
                        <?php echo do_shortcode('[contact-form-7 id="20" title="Contato Index"]');?>
                    </div>
                </div>
            </div>
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

<section>
    <div class="container-fluid pacotecompleto" style="background-image: url(<?php echo $banner_pacote['url']; ?>); background-size: cover; height: 600px; background-position: center;background-attachment: fixed;">
        <div class="row ">
            <div class="container">
                <div class="col-md-12 pacote" data-aos="fade-right">
                    <div class="col-md-4 subDesc">
                        <h1><?php echo $titulo_pacote; ?></h1>
                        <small><?php echo $texto_pacote; ?></small>
                    </div>


                    <div class="col-md-6 carousel">
                        <!--#############################################################-->
                        <nav id="menu-carrossel">
                            <a href="#" class="prev" title="Anterior"> &nbsp;&nbsp;<&nbsp;&nbsp; </a>
                            <a href="#" class="next" title="Próximo"> &nbsp;&nbsp;> </a>
                        </nav>

                            <div id="carrossel">
                                <?php if( have_rows('icones_pacote_completo_para_voce', 202) ): ?>
                                    <center>
                                    <ul class="carrosselicon">
                                        <?php while( have_rows('icones_pacote_completo_para_voce', 202) ): the_row();
                                            // vars
                                            $imagem_pacote = get_sub_field('imagem');
                                            $titulo_pacote = get_sub_field('titulo');
                                            ?>


                                            <li>
                                                <center>
                                                <img class="img-responsive" src="<?php echo $imagem_pacote['url']; ?>" alt="<?php echo $imagem_pacote['alt'] ?>"/>
                                                <h2><?php echo $titulo_pacote; ?></h2>
                                                </center>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>
                                    </center>
                                <?php endif; ?>

                            </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; ?>


<?php endif; ?>


<?php if( have_rows('conheça_o_metodo_de_imersao', 202) ): ?>
    <?php while( have_rows('conheça_o_metodo_de_imersao', 202) ): the_row();
        // vars
        $titulo_conheca = get_sub_field('titulo_conheca');
        $texto_conheca = get_sub_field('texto_conheca');
        $link_conheca = get_sub_field('link_conheca');
        $banner_conheca = get_sub_field('banner_conheca');
        ?>
<section>
    <div class="container-fluid espaco" style="background-image: url(<?php echo $banner_conheca['url']; ?>); background-size: cover; height: 600px; background-size: cover;background-position: center;background-attachment: fixed;">
        <div class="row ">
            <div class="container">

                <div class="col-md-offset-7 col-md-5 conteudoConheca" data-aos="fade-up">
                    <h1><?php echo $titulo_conheca; ?></h1>
                    <small><?php echo $texto_conheca; ?></small>
                    <div class="btnFooter">
                        <a href="<?php echo $link_conheca; ?>" style="text-decoration: none">
                            <img src="<?php echo get_template_directory_uri() ?>/images/icon-btn-06.png" alt="" style="width: 210px; height: 45px;">
                            <h1 style="font-size: 20px; margin-top: -33px; ">Clique Aqui</h1>
                        </a>
                    </div><br>

                </div>

            </div>
        </div>
    </div>
</section>


    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>
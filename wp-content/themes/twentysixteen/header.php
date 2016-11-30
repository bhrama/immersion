<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/icon-favicon.png">

    <title>Home | Immersion</title>

    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/theme.css" rel="stylesheet">

</head>
<body>


<div class="topo">
    <div class="corpo-menu">
        <div class="col-md-4 logo">
            <a href="/immersion"><img src="<?php echo get_template_directory_uri() ?>/images/logo-07.png" alt="Immersion"></a>
        </div>
        <div class="col-md-8 navbar-wrapper"></div>
        <div id="navbar" class="col-md-offset-5 navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/immersion">Home</a></li>
                <li><a href="/immersion/como-funciona">Como Funciona</a></li>
                <li><a href="/immersion/proxima-turma">Próxima Turma</a></li>
                <li><a href="/immersion/inscricao">Pré-Inscrição</a></li>
                <li><a href="/immersion/contato">Contato</a></li>
            </ul>
        </div>
    </div>

<!--    <div class="promo_topo">-->
<!--        <div class="col-md-7"></div>-->
<!--        <div class="col-md-3 prop_topo">-->
<!--            <h1>PROGRAMA DE IMERSÃO EM INGLÊS</h1>-->
<!--            <h2>APRENDA ATRAVÉS DE UMA EXPERIENCIA INTENSA E FALE FLUENTEMENTE</h2>-->
<!--            <p>sem sair do Brasil, em um fim de semana.</p>-->
<!--            <strong>Professores nativos e brasileiros</strong>-->
<!--            <div class="btnComoParticipo">-->
<!--                <button>COMO PARTICIPO</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-2"></div>-->
<!--    </div>-->
<!--    <div class="img-topo">-->
<!--        <img src="--><?php //echo get_template_directory_uri() ?><!--/images/img-topo.png" alt="Immersion">-->
<!--    </div>-->


    <?php if( have_rows('banner_inicial', 202) ): ?>
        <?php while( have_rows('banner_inicial', 202) ): the_row();

            // vars
            $link = get_sub_field('link');
            $texto1 = get_sub_field('texto1');
            $texto2 = get_sub_field('texto2');
            $texto3 = get_sub_field('texto3');
            $titulo = get_sub_field('titulo');
            $banner = get_sub_field('banner');
            ?>
            <div class="promo_topo">
                <div class="col-md-7"></div>
                <div class="col-md-3 prop_topo">
                    <h1><?php echo $titulo; ?></h1>
                    <h2><?php echo $texto1; ?></h2>
                    <p><?php echo $texto2; ?></p>
                    <strong><?php echo $texto3; ?></strong>
                    <div class="btnComoParticipo">
                        <a href="<?php echo $link; ?>"><button class="btn btn-warning">COMO PARTICIPO?</button></a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="img-topo">
                <img src="<?php echo $banner['url']; ?>" alt="<?php echo $banner['alt'] ?>"/>
            </div>

        <?php endwhile; ?>


    <?php endif; ?>
</div>
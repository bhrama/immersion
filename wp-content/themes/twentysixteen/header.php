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

    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"
          rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/animate.css" rel="stylesheet">

    <script src="<?php echo get_template_directory_uri() ?>/script/jquery-2.2.4.js"></script>
    <script src="<?php echo site_url() ?>/wp-content/plugins/jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/script/Scripts.js"></script>


    <script src="<?php echo get_template_directory_uri() ?>/script/jcarousellite.js"></script>


    <link href="<?php echo get_template_directory_uri() ?>/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/font-awesome-4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald">
    <link href="<?php echo get_template_directory_uri() ?>/css/main.css" rel="stylesheet">
<!--    <script src="--><?php //echo get_template_directory_uri() ?><!--/script/jquery.js"></script>-->
    <script src="<?php echo get_template_directory_uri() ?>/script/lodash.js"></script>


    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.countdown.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.countdown.min.js"></script>
</head>
<body>
<header>
    <div id="topo" class="container-fluid">
        <div class="row ">
            <div class="container">
                <div class="col-md-3 col-sm-4 .col-xs-2 logo bounceInLeft animated">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/logo-07.png"
                         alt="Immersion">
                    </a>
                </div>
                <div class="col-md-8">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar" style="background-color: #d8d8d8">
                        <span class="icon-bar" style="background-color:black"></span>
                        <span class="icon-bar" style="background-color:black"></span>
                        <span class="icon-bar" style="background-color:black"></span>
                    </button>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav menu">
                            <li><a href="/immersion" class="menu1 fadeInDown animated">Home</a></li>
                            <li><a href="/immersion/como-funciona" class="menu2 fadeInDown animated">Como Funciona</a></li>
                            <li><a href="/immersion/proxima-turma" class="menu3 fadeInDown animated">Próxima Turma</a></li>
                            <li><a href="/immersion/inscricao" class="menu4 fadeInDown animated">Pré-Inscrição</a></li>
                            <li><a href="/immersion/contato" class="menu5 fadeInDown animated">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="carrosselbanner" class="container-fluid">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                <div class="carousel-inner" role="listbox">

                    <?php if (have_rows('banner_inicial', 202)): ?>
                        <?php while (have_rows('banner_inicial', 202)): the_row();

                            // vars
                            $link = get_sub_field('link');
                            $texto1 = get_sub_field('texto1');
                            $texto2 = get_sub_field('texto2');
                            $texto3 = get_sub_field('texto3');
                            $titulo = get_sub_field('titulo');
                            $banner = get_sub_field('banner');
                            ?>

                            <?php if ($i == 0): ?>


                                <div class="item active" style="background-image: url(<?php echo $banner['url']; ?>); background-size: cover; height: 400px;">

                                    <div class="carousel-caption col-md-offset-3 col-md-5 carrossel1 flipInX animated" style="padding-bottom: 0 !important;">
                                        <h3><?php echo $titulo; ?></h3>
                                        <h4><?php echo $texto1; ?></h4>
                                        <p><?php echo $texto2; ?></p>
                                        <strong><?php echo $texto3; ?></strong>
                                        <div class="btnComoParticipo">
                                            <a href="<?php echo $link; ?>">
                                                <button class="btn btn-warning">COMO PARTICIPO?</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>

                            <?php else : ?>
                                <div class="item" style="background-image: url(<?php echo $banner['url']; ?>); background-size: cover; height: 400px;">

                                    <div class="carousel-caption col-md-offset-3 col-md-5 carrossel1 flipInX animated"
                                         style="padding-bottom: 0 !important;">
                                        <h3><?php echo $titulo; ?></h3>
                                        <h4><?php echo $texto1; ?></h4>
                                        <p><?php echo $texto2; ?></p>
                                        <strong><?php echo $texto3; ?></strong>
                                        <div class="btnComoParticipo">
                                            <a href="<?php echo $link; ?>">
                                                <button class="btn btn-warning">COMO PARTICIPO?</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>


                        <?php endwhile; ?>


                    <?php endif; ?>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</header>

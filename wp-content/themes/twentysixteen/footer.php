<footer>
    <section class="full rodape">
        <div class="container-fluid">
            <div class="row">


        <div class="col-md-6 destrave" data-aos="zoom-in-down">
            <h1>Destrave seu Inglês</h1>
            <div class="desc-dest">
                <div class="fds">
                    <h1>1</h1>
                    <small>final de semana</small>
                </div>
                <div class="igual"> =</div>
                <div class="aula">
                    <h1>3</h1>
                    <small>meses de aulas de inglês</small>
                </div>
            </div>
            <br>
            <p>Um fim de semana altamente produtivo <br> de aprendizado equivalente a 3 meses <br> de um curso de inglês
                convencional.</p>
            <div class="btnFooter" >
                <a href="#" data-toggle="modal" data-target="#myModal1" style="text-decoration: none;">
                <img style="width: 220px;height: 60px;" src="<?php echo get_template_directory_uri() ?>/images/icon-btn-06.png" alt="">

                <h1>Quero Conhecer</h1>
                </a>

            </div>






            <br>
        </div>
        <div class="col-md-6 cronograma" data-aos="zoom-in-down">
            <h1>Receba nosso Cronograma <br> e Investimento</h1>
            <img class="relogio" src="<?php echo get_template_directory_uri() ?>/images/icon-relogio.png" alt=""><br>
            <div class="btnFooter">
                <a href="#" data-toggle="modal" data-target="#myModal2" style="text-decoration: none;">
                <img style="width: 220px;height: 60px;" src="<?php echo get_template_directory_uri() ?>/images/icon-btn-06.png" alt="">
                <h1>Quero Conhecer</h1>
                </a>
            </div>
        </div>





                <!-- Modal -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="color:black !important;"><center>Destrave seu Inglês</center></h4>
                            </div>
                            <div class="modal-body" style="color:black !important;">
                                <center><?php echo do_shortcode('[contact-form-7 id="370" title="Destrave o Ingles"]'); ?></center>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel" style="color:black !important;"><center>Receba nosso Cronograma e Investimento</center></h4>
                                </div>
                                <div class="modal-body" style="color:black !important;">
                                    <center>
                                    <?php echo do_shortcode('[contact-form-7 id="370" title="Destrave o Ingles"]'); ?>
                                        </center>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>





        <section>
            <div class="container-fluid" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/footer.png'); background-size: cover; height: 128px; background-position: center;">
                <div class="row ">
                    <div class="container" data-aos="zoom-in">
                        <div class="col-md-12" style="margin-top: 4%;">
                            <div class="col-md-offset-5 col-md-1">
                                <center>
                                <?php if (have_rows('sociais_info', 202)): ?>

                                <?php while (have_rows('sociais_info', 202)): the_row();

                                // vars
                                $url_info = get_sub_field('url_info');
                                $icone_info = get_sub_field('icone_info');
                                ?>

                                    <a href="<?php echo $url_info; ?>" target="_blank" style="color: #ffffff; font-size: 31px;">
                                        <?php echo $icone_info;?>
                                    </a>

                                <?php endwhile; ?>


                            <?php endif; ?>
                                </center>
                            </div>
                            <center>
                            <div class="col-md-2" style="color: #ffffff">
                                <ul
                                <li>
                                    (62) 9.1234-5678
                                </li>
                                <li>
                                    (62) 9.1234-5678
                                </li>
                            </ul>
                            </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>





</footer>

</body>
<!--<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
</html>
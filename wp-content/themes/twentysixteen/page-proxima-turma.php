<?php get_header(); ?>
<style>
    @media (max-width: 500px){
    .rodape{
        margin-top: -20px !important;
    }
    }
</style>


<div class="container proxima">

<?php 

function mask($val, $mask)
{
 $maskared = '';
 $k = 0;
 for($i = 0; $i<=strlen($mask)-1; $i++)
 {
   if($mask[$i] == '#')
   {
      if(isset($val[$k]))
       $maskared .= $val[$k++];
   }
   else
 {
     if(isset($mask[$i]))
     $maskared .= $mask[$i];
     }
 }
 return $maskared;
}

?>
		<?php 
				$i = 0;
				$data ="";
				$local = "";
				$link = "";

				
				$MyPost = query_posts(
				array(
				'order' => 'datetime',
				'order'=> 'ASC',
				'ignore_sticky_posts'=>'1',
				'orderby' => 'meta_value_num date',
				'posts_per_page' => '5',
				'meta_query' => array(
					array('key' => 'data'))
					)
				);
				
				foreach ($MyPost as $teste){
					
					
				$meta = get_post_meta($teste->ID);
				if(strtotime($meta[data][0]) <= strtotime(date("Y-m-d") )){
					continue;
				}
					if($i==0){
						$i++;
						$data = $meta[data][0];
						$local = $meta[local][0];
						$link = $meta[link][0];
						continue;
					}
				}
				?>
			
                        <div class="main-example slideInLeft animated">
                            <h1>NOSSA PRÓXIMA TURMA SE INICIARÁ EM:</h1>
                            <div class="titulos">
                                <h4>Semanas</h4>
                                <h4>Dias</h4>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas</h4>
                                <h4>&nbsp;&nbsp;Minutos</h4>
                                <h4>Segundos</h4>
                            </div>
                            <div class="countdown-container" id="main-example"></div>
                        </div>
                        <div style="margin-top: 50px;" data-aos="fade-up-right" data-aos-duration="3000">
                            <div class="lab">
                                <strong>LOCAL:</strong>
                                <div class="inp">
                                    <?php echo $local ?>
                                </div>

                            </div>
                        </div><br>

                            <div class="lab" data-aos="fade-up-right" data-aos-duration="3000">
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp;DATA:</strong>
                                <div class="inp">
								
                                    <?php echo date('d/m/Y \Á\S H:i A', strtotime($data)); ?>
									
									
                                </div>
                            </div>

                            <div class="btnInscricao" data-aos="fade-up-right" data-aos-duration="5000">
                                <a href="<?php echo $link ?>" target="_blank"><button class="btn btn-warning">Pré-inscrição</button></a>
                            </div>

</div>





                        <script type="text/template" id="main-example-template">
                            <div class="time <%= label %>">
                                <span class="count curr top"><%= curr %></span>
                                <span class="count next top"><%= next %></span>
                                <span class="count next bottom"><%= next %></span>
                                <span class="count curr bottom"><%= curr %></span>
                                <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                            </div>
                        </script>
                        <script type="text/javascript">
                            $(window).on('load', function() {
                                var labels = ['Semanas', 'Dias', 'Horas', 'Minutos', 'Segundos'],
                                    nextYear = '<?php echo date('Y/m/d H:i', strtotime($data)); ?>',
                                    template = _.template($('#main-example-template').html()),
                                    currDate = '00:00:00:00:00',
                                    nextDate = '00:00:00:00:00',
                                    parser = /([0-9]{2})/gi,
                                    $example = $('#main-example');
                                // Parse countdown string to an object
                                function strfobj(str) {
                                    var parsed = str.match(parser),
                                        obj = {};
                                    labels.forEach(function(label, i) {
                                        obj[label] = parsed[i]
                                    });
                                    return obj;
                                }
                                // Return the time components that diffs
                                function diff(obj1, obj2) {
                                    var diff = [];
                                    labels.forEach(function(key) {
                                        if (obj1[key] !== obj2[key]) {
                                            diff.push(key);
                                        }
                                    });
                                    return diff;
                                }
                                // Build the layout
                                var initData = strfobj(currDate);
                                labels.forEach(function(label, i) {
                                    $example.append(template({
                                        curr: initData[label],
                                        next: initData[label],
                                        label: label
                                    }));
                                });
                                // Starts the countdown
                                $example.countdown(nextYear, function (event) {
                                    var newDate = event.strftime('%w:%d:%H:%M:%S'),
                                        data;
                                    if (newDate !== nextDate) {
                                        currDate = nextDate;
                                        nextDate = newDate;
                                        // Setup the data
                                        data = {
                                            'curr': strfobj(currDate),
                                            'next': strfobj(nextDate)
                                        };
                                        // Apply the new values to each node that changed
                                        diff(data.curr, data.next).forEach(function (label) {
                                            var selector = '.%s'.replace(/%s/, label),
                                                $node = $example.find(selector);
                                            // Update the node
                                            $node.removeClass('flip');
                                            $node.find('.curr').text(data.curr[label]);
                                            $node.find('.next').text(data.next[label]);
                                            // Wait for a repaint to then flip
                                            _.delay(function ($node) {
                                                $node.addClass('flip');
                                            }, 50, $node);
                                        });
                                    }
                                });
                            });
                        </script>

                    </div>

</div>


<section>
    <div class="container-fluid" style="background: #f0f0f0;">
        <div class="row">
            <div class="container">
                <p><h2 style="text-align: center;">PRÓXIMAS TURMAS</h2></p>
                <?php
                setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');

                $b = 0;
                foreach ($MyPost as $teste){


                $meta = get_post_meta($teste->ID);

                if(strtotime($meta[data][0]) <= strtotime(date("Y-m-d H:i") )){
                    continue;
                }
                    $b++;
                if($b==1){
                    continue;

                }


                ?>
                <div class="col-md-4">
                    <center>
                    <div id="panelTurmas" class="panel panel-default" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="6000">
                        <div class="panel-heading" style="font-weight:bold; font-size: 17px;">
                            <center>
                                <?php
                                echo '<p style="font-size: 20px">';
                                echo date(' d \d\e', strtotime($meta[data][0]));
                                echo utf8_encode(ucwords(strftime(' %B', strtotime($meta[data][0]))));
                                echo '</p>';
                                echo '<p style="font-size: 14px; margin-top: -10px;margin-bottom: 0px;">';
                                echo date(' \Á\S H:i A', strtotime($meta[data][0]));
                                echo '</p>';
                                ?>
                            </center>
                        </div>
                        <div class="panel-body" style="font-weight:bold; font-size: 17px;"><center>Local:</center></div>
                        <div class="local panel-heading"><center><?php echo $meta[local][0]?></center></div>
                        <div class="panel-body"><center><a id="link" href="<?php echo $meta[link][0]?>" target="_blank"> Tenho interesse</a></center></div>
                    </div>
                    </center>
                </div>


                    <?php

                }

                ?>
            </div>
        </div>
    </div>
</section>





<?php get_footer(); ?>
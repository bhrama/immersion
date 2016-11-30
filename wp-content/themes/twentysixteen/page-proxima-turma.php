<?php get_header(); ?>
<div class="container proxima">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald">
        <link href="<?php echo get_template_directory_uri() ?>/css/main.css" rel="stylesheet">
        <script src="<?php echo get_template_directory_uri() ?>/script/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/script/lodash.js"></script>
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
			
                        <div class="main-example">
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
                        <div style="margin-top: 50px;">
                            <div class="lab">
                                <strong>LOCAL:</strong>
                                <div class="inp">
                                    <?php echo $local ?>
                                </div>

                                </div>
                            </div><br>

                            <div class="lab">
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp;DATA:</strong>
                                <div class="inp">
								
                                    <?php echo date('d/m/Y \Á\S H:i A', strtotime($data)); ?>
									
									
                                </div>
                            </div>

                            <div class="btnInscricao">
                                <a href="<?php echo $link ?>" target="_blank"><button class="btn btn-warning">Pré-inscrição</button></a>
                            </div>



                        </div>
                        <script type="text/template" id="main-example-template">
                            <div class="time <%= label %>">
                                <span>teste</span>
                                <span class="count curr top"><%= curr %></span>
                                <span class="count next top"><%= next %></span>
                                <span class="count next bottom"><%= next %></span>
                                <span class="count curr bottom"><%= curr %></span>
                                <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                            </div>
                        </script>
                        <script type="text/javascript">
                            $(window).on('load', function() {
                                var labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'],
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
                                $example.countdown(nextYear, function(event) {
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
                                        diff(data.curr, data.next).forEach(function(label) {
                                            var selector = '.%s'.replace(/%s/, label),
                                                $node = $example.find(selector);
                                            // Update the node
                                            $node.removeClass('flip');
                                            $node.find('.curr').text(data.curr[label]);
                                            $node.find('.next').text(data.next[label]);
                                            // Wait for a repaint to then flip
                                            _.delay(function($node) {
                                                $node.addClass('flip');
                                            }, 50, $node);
                                        });
                                    }
                                });
                            });
                        </script>

                    </div>

</div>
<section style="background: #f0f0f0;" class="full">
    <div class="container proxTurmas">
        <h1>PRÓXIMAS TURMAS</h1>
        <table cellpadding="10">
            <thead>
                <tr>
                    <th>DATA</th>
                    <th>LOCAL</th>
                </tr>
            </thead>
            <tbody>
            
			<tr>
			<?php
				
				
				$b = 0;
				foreach ($MyPost as $teste){
					
				
				$meta = get_post_meta($teste->ID);
                if(strtotime($meta[data][0]) <= strtotime(date("Y-m-d H:i") )){
                    continue;
                }
					
					if($b==0){
						$b++;
						
						continue;
					}
				
				?>
				
                    <td>
					 <?php echo date('d/m/Y \Á\S H:i A', strtotime($meta[data][0]))?>
					 
                    </td>
					<td>
					 <?php echo $meta[local][0]?>
                    </td>
					<td>
					 <a id="link" href="<?php echo $meta[link][0]?>" target="_blank"> Tenho interesse</a>
                    </td>
				</tr>
				<?php
				
				}
				?>

            </tbody>
        </table>
    </div>
</section>
<?php get_footer(); ?>
<?php date_default_timezone_set('UTC');
$atts = array_map('kleor_do_shortcode_in_attribute', (array) $atts);
extract(shortcode_atts(array('filter' => '', 'format' => '', 'offset' => ''), $atts));
if ($format == '') { $format = (isset($atts['form']) ? $atts['form'] : ''); }
$T = easy_timer_extract_timestamp($offset);

switch ($format) {
case '2': $year = date('y', $T); break;
default: $format = '4'; $year = date('Y', $T); }
$year = easy_timer_filter_data($filter, $year);

if (strtolower($offset) == 'local') {
if (easy_timer_data('javascript_enabled') == 'yes') { wp_enqueue_script('easy-timer'); }
$year = '<span class="local'.$format.'year">'.$year.'</span>'; }
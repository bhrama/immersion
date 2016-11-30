<?php date_default_timezone_set('UTC');
$atts = array_map('kleor_do_shortcode_in_attribute', (array) $atts);
extract(shortcode_atts(array('filter' => '', 'offset' => ''), $atts));
$T = easy_timer_extract_timestamp($offset);
$yearday = easy_timer_filter_data($filter, date('z', $T) + 1);
if (strtolower($offset) == 'local') {
if (easy_timer_data('javascript_enabled') == 'yes') { wp_enqueue_script('easy-timer'); }
$yearday = '<span class="localyearday">'.$yearday.'</span>'; }
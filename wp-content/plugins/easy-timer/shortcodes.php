<?php load_easy_timer_textdomain();
wp_register_script('easy-timer', easy_timer_url('libraries/easy-timer.js'), array(), EASY_TIMER_VERSION, true);


function easy_timer_clock($atts) { include easy_timer_path('includes/clock.php'); return $clock; }


function easy_timer_counter($atts, $content) { include easy_timer_path('includes/counter.php'); return $content[$k]; }


function easy_timer_countdown($atts, $content) {
$atts['way'] = 'down';
$atts['delimiter'] = 'after';
return easy_timer_counter($atts, $content); }


function easy_timer_countup($atts, $content) {
$atts['way'] = 'up';
$atts['delimiter'] = 'before';
return easy_timer_counter($atts, $content); }


function easy_timer_extract_offset($offset) {
$offset = strtolower($offset); switch ($offset) {
case '': case 'local': $offset = 3600*get_option('gmt_offset'); break;
default: $offset = 36*(round(100*str_replace(',', '.', $offset))); }
return $offset; }


function easy_timer_extract_timestamp($offset) {
date_default_timezone_set('UTC');
return time() + easy_timer_extract_offset($offset); }


function easy_timer_isoyear($atts) { include easy_timer_path('includes/isoyear.php'); return $isoyear; }


function easy_timer_lang_js() { include easy_timer_path('includes/lang-js.php'); }


function easy_timer_month($atts) { include easy_timer_path('includes/month.php'); return $month; }


function easy_timer_monthday($atts) { include easy_timer_path('includes/monthday.php'); return $monthday; }


function easy_timer_timer_replace($S, $T, $prefix, $way, $content) { include easy_timer_path('includes/timer-replace.php'); return $content; }


function easy_timer_timer_string($S) { include easy_timer_path('includes/timer-string.php'); return $timer; }


function easy_timer_timezone($atts) { include easy_timer_path('includes/timezone.php'); return $timezone; }


function easy_timer_weekday($atts) { include easy_timer_path('includes/weekday.php'); return $weekday; }


function easy_timer_year($atts) { include easy_timer_path('includes/year.php'); return $year; }


function easy_timer_yearday($atts) { include easy_timer_path('includes/yearday.php'); return $yearday; }


function easy_timer_yearweek($atts) { include easy_timer_path('includes/yearweek.php'); return $yearweek; }
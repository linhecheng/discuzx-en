<?php

/**
 * DiscuzX Convert
 *
 * $Id: orders.php 9138 2010-04-27 05:47:51Z liulanbo $
 * English by Valery Votintsev at sources.ru
 */

$curprg = basename(__FILE__);

$table_source = $db_source->tablepre . 'orders';
$table_target = $db_target->tablepre . 'forum_order';

$limit = $setting['limit']['orders'] ? $setting['limit']['orders'] : 2500;
$step = getgpc('step');
$step = intval($step);
$total = getgpc('total');
$total = intval($total);

$continue = false;

if(!$step) {
	$db_target->query("TRUNCATE $table_target");
}

$offset = $step * $limit;

$query = $db_source->query("SELECT * FROM $table_source LIMIT $offset, $limit");
while($row = $db_source->fetch_array($query)) {
	$continue = true;
	$row = daddslashes($row, 1);
	$data = implode_field_value($row, ',', db_table_fields($db_target, $table_target));
	$db_target->query("INSERT INTO $table_target SET $data");
	$total ++;
}
$nextstep = $step + 1;
if($continue) {
	showmessage(lang('continue_convert_table').$table_source.lang('was_converted').$total.lang('records'), "index.php?a=$action&source=$source&prg=$curprg&step=$nextstep&total=$total");
}
?>
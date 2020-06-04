<?php if(!defined("access")) {header("Location: /");}

//================================================================
// STUB Data
//
//		@data
//================================================================
//________________________________________________________

$data = new SQLite3("data/data.db");

//________________________________________________________

function single_data($tab, $col, $name, $sel) {
	$data = new SQLite3("data/data.db");
	return $data->querySingle('SELECT * FROM '.$tab.' WHERE '.$col.'="'.$name.'"', true)[$sel];
}

//________________________________________________________




//================================================================
// STUB Site
//
//		@site
//================================================================
//________________________________________________________

$site_name = single_data('site', 'label', 'name', 'value');
$site_name = ($site_name ? $site_name : '');

$site_url = single_data('site', 'label', 'url', 'value');
$site_url = ($site_url ? $site_url : '');

$site_language = single_data('site', 'label', 'language', 'value');
$site_language = ($site_language ? $site_language : '');

$meta_description = single_data('site', 'label', 'meta_description', 'value');
$meta_description = ($meta_description ? $meta_description : '');

$meta_keywords = single_data('site', 'label', 'meta_keywords', 'value');
$meta_keywords = ($meta_keywords ? $meta_keywords : '');

//________________________________________________________

?>
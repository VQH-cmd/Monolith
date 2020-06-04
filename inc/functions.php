<?php if(!defined("access")) {header("Location: /");}
//________________________________________________________

$functions=glob("inc/functions/*.php");

foreach($functions as $function) {
	if (strpos($function, '--') !== false) continue;
	require_once $function;
}

//________________________________________________________
?>
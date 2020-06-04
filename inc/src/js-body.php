<?php if(!defined("access")) {header("Location: /");}

//________________________________________________________

$debug = 0;

//________________________________________________________

if($debug) {
	$libs		= glob("build/js/libs/*.js");
	$scripts	= glob("build/js/*.js");

	foreach($libs as $lib) {
		if (strpos($lib, '--') !== false) continue;
		echo "<script src=".$lib."></script>";
	}

	foreach($scripts as $script) {
		echo "<script src=".$script."></script>";
	}
}

//________________________________________________________

?>
<?php if(!$debug) : ?>
<script async src="assets/js/script.js"></script>
<?php endif; ?>
<script async src="assets/js/custom.js"></script>

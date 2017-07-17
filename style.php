<?php
$lastModified=filemtime(__FILE__);
$etagFile = md5_file(__FILE__);
$ifModifiedSince=(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
$etagHeader=(isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);
header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");
header("Etag: $etagFile");
header('Cache-Control: public, max-age=78840000000');
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$lastModified || $etagHeader == $etagFile) {
       header("HTTP/1.1 304 Not Modified");
       exit;
}
header('Content-Type: text/css');
$prefix = $_GET['prefix'];
if(!isset($prefix))
	$prefix = "tracking-id_";
$id = uniqid($prefix, true);
$css = <<<EOT
#email-address:after {
	content: '$id';
	color: transparent;
	z-index: -1;
	font-size: 0px;
}
EOT;
echo $css;
?>

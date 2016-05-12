
<?php

$dir    = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
if (strpos($_SERVER['REQUEST_URI'], 'index.php')) {
	$path   = dirname("http://$_SERVER[HTTP_HOST]") . "$dir";
} else {
	$path   = "http://$_SERVER[HTTP_HOST]$dir";
}

// Variables
$product_name = "Intense Template";
$product_desc = "Documentation";
$doc_title = $product_name . " " . $product_desc;

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

$section_param = 'preparation';
if (isset($_GET['section'])) {
	$section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
	header('Location: index.php');
}
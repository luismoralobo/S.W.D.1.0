<?php 
require_once 'core/core.php';

$url=isset($_GET['url'])?explode('/', $_GET['url']):null;
$c='Index';
$m='Index';
$p=[];
if (isset($url[0])) {
	$c=ucwords($url[0]);	
	unset($url[0]);
}
$c= ucwords($c).'Controller';
require_once 'controllers/'.$c.'.php';
$c=new $c();
if (isset($url[1])) {
	$m=$url[1];
	unset($url[1]);
}
$p = $url? array_values($url):[];
if ($p != null) {
	$_SESSION['p'] = $p[0];
}
else {
	unset($_SESSION['p']);
}
call_user_func_array([$c,$m], $p);
?>
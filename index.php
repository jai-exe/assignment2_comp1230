<?php

$url = explode('/',$_SERVER['QUERY_STRING']);

$user = !empty($url[0])? $url[0] : 'visitor';
$view = isset($url[1])?(is_null($url[1])?'index':$url[1]):'index';
$extra = isset($url[2])?(is_null($url[2])?'':$url[2]):'';

include 'app/controllers/'. $user .'.php';
include 'app/view/'.$user.'/template.php';
include 'app/view/'.$user.'/'.$view.'.php';

?>
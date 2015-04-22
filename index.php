<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set('Asia/Jakarta');
require 'vendor/autoload.php';

$app = new \Slim\Slim();
$app->get('/', function () {
    echo "Hello, World";
});
$app->get('/say/:hello',function($hello){
	echo "Hello, $hello";
});

$app->get('/list/province', function () use ($app){
	$province=array('Jakarta','West Java','East Java','North Java','Bali', 'Sumatera');
	
	$app->render('province.html',array('province'=>$province,'title'=>'List Indonesia Province'));
});

$app->run();
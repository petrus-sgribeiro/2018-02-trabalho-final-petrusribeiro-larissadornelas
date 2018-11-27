<?php 

require_once("vendor/autoload.php");
use \slim\slim;
use \Latrus\Page;
use \Latrus\PageAdmin;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");


});

$app->get('/admin', function() {

	$page = new PageAdmin();

	$page->setTpl("index");


});

$app->run();

 ?>
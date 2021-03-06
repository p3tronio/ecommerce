<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();
	$page->setTPL("index");

});


$app->get('/admin/', function() {

	User::verifyLogin();
  	$page = new PageAdmin();
	$page->setTPL("index");

});


$app->get('/admin/login', function() {
    
	$page = new PageAdmin(

		["header" => false,
		"footer" => false]

	);
	$page->setTPL("login");

});

$app->post('/admin/login', function() {
    
	User::login($_POST['login'], $_POST['password']);
	header("Location: /ecommerce/admin");
	exit;

});

$app->get('/admin/logout', function (){

	User::logout();
	header("Location: /admin/login");

});


$app->run();

 ?>
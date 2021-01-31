<?php

require_once("vendor/autoload.php");

use Slim\App;
use Slim\Container;

$setting = array(
"setting" => array(
"displayErrorDetails" => true

)

);

$container = new Container($setting);
$app = new App($container);

$app->get("/", function($request, $response){
	$paramater = $request->getQueryParams();
	$result = array(
		"Apartemen" => $paramater["Apartemen"],
		"Lantai" => $paramater["Alamat"],
		"Status" => $paramater["Status"],
	);
	return $response->withJson($result);
});

$app->post("/post", function($request, $response){
	$paramater = $request->getParsedBody();
	$Password_Cadangan = $paramater["Password_Cadangan"];
	$result = array(
		"Khusus" => $paramater["Khusus"],
		"ID" => $paramater["ID"],
	);
	return $response->withJson($result);
});

$app->run();
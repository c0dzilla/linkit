<?php

require_once __DIR__ . "/../vendor/autoload.php";

ToroHook::add("404", function(){
	echo "404";
	http_response_code(404);
});

Toro::serve([
	'/' => Linkit\Controllers\HomeController::class,
	'/post' => Linkit\Controllers\PostController::class,
	'/account' => Linkit\Controllers\LoginController::class,
	'/save' => Linkit\Controllers\SaveController::class
	
	]);

?>
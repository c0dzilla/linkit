<?php

namespace Linkit\Controllers;

use Linkit\Models\Post;

class PostController extends BaseController{

public function get(){

	$this -> render('login.html');

	}

	public function post(){

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		POST::create($username, $email, $password);
		
		$this->render('login.html');

	}

}

?>
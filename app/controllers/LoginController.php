<?php

namespace Linkit\Controllers;

use Linkit\Models\Post;

class LoginController extends BaseController{

	public function get(){

		$this -> render('login.html');

	}

	public function post(){

		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];

		if (Post::Validation($_SESSION['email'], $_SESSION['password'])){
				
			$data = Post::getUserData($_SESSION['email']);
			$this -> render('account.html', ['data' => $data]);

		}

		else{

			$this -> render('login.html');

		}

	}

}

?>
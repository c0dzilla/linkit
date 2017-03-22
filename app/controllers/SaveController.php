<?php

namespace Linkit\Controllers;

use Linkit\Models\Post;

class SaveController extends BaseController{

	public function post(){

		session_start();
		$link = $_POST['link'];
		Post::SaveLink($_SESSION['email'], $link);
		$data = Post::getUserData($_SESSION['email']);
		$this -> render('account.html', ['data' => $data]);

	}

}

?>
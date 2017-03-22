<?php

namespace Linkit\Models;

class Post {
	public static function DB(){
		return new \PDO("mysql:dbname=linkit;host=localhost","root", "sdslabsmysql");
	}

	public static function create($username, $email, $password){
		$db = self::DB();
		$query = $db->prepare('INSERT INTO dbtable(username, email, password) values ( :username, :email, :password)');
		$res = $query->execute(
			['username' => $username,
			'email' => $email,
			'password' => $password]);

		if (!$res) {
			var_dump($query->errorInfo());
		}

	}

	public static function Validation($email, $password){

		$db = self::DB();
		$query = $db->prepare('SELECT * FROM dbtable where email = :email AND password = :password');

		$result = $query->execute(

			['email' => $email,
			'password' => $password

			]

			);
		if (!$result){
			print_r($query->errorInfo());
		}
		return $query->fetch(\PDO::FETCH_ASSOC);

	}

	public static function getUserData($email){

		$db = self::DB();
		$query = $db->prepare('SELECT * FROM UserData where email = :email');
		$result = $query->execute(

			['email' => $email]

			);

		return $query->fetchAll(\PDO::FETCH_ASSOC);

	}

	public static function SaveLink($email, $link){

		$db = self::DB();
		$query = $db->prepare('INSERT INTO UserData(email, link) values(:email, :link)');

		$result = $query->execute(

			['email' => $email,
			'link' => $link]

			);

	}
	
}

<?php

class Controller
{

	public $model;
	public $view;

	function __construct()
	{
		$this->view = new View();
//		ini_set('session.use_cookies',1);
//		ini_set('session.use_only_cookies',1);


//		Cоеденяемся с бд
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=Registration", 'root', '');
		} catch (PDOException $e) {
			exit('ERROR.'.$e);
		}
		echo 'Link Succeed';
		return $pdo;
	}

	function action_index()
	{

	}

	public function action_send()
	{

	}

	public function action_send_reg(){

	}
}
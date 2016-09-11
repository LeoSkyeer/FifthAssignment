<?php

class Controller
{
	private $pdo;
	public $model;
	public $view;

	function __construct()
	{
		$this->view = new View();
//		ini_set('session.use_cookies',1);
//		ini_set('session.use_only_cookies',1);

//		Cоеденяемся с бд
		try {
			$this->pdo = new PDO("mysql:host=localhost;dbname=Registration", 'root', '');
		} catch (PDOException $e) {
			exit('ERROR.'.$e);
		}
		echo 'Link Succeed'.'<br>';
	}

	function action_index()
	{

	}

	public function action_send()
	{
		if (isset($_POST['userLogin'])) {
			$names = Array();
			$sql = 'SELECT name FROM Registration_Data';
			foreach ($this->pdo->query($sql) as $row) {
				array_push($names, $row['name']);
			}
			if (in_array($_POST['userLogin'], $names)){
				print_r($names) . '<br>';
			}else{
				echo 'sashha - gay';
			}
		}
	}


	public function action_send_reg()
	{
		echo "это метод action_send_reg";
	}
}
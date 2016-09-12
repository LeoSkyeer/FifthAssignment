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

        //connect DataBase
		try {
			$this->pdo = new PDO("mysql:host=localhost;dbname=Registration", 'root', '');
		} catch (PDOException $e) {
			exit('ERROR.'.$e);
		}
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
                print_r($names);
				new controller_sendLogin($this->action_index());
			}else {
                $controller_name = 'Controller_Error';
                $str = strtolower($controller_name);
                include "application/controllers/" . $str . '.php';
                new Controller_Error($this->action_error());
            }
		}
	}


	public function action_send_reg()
	{
		if (isset($_POST[''])) {
        $names = Array();
        $sql = 'SELECT name FROM Registration_Data';
        foreach ($this->pdo->query($sql) as $row) {
            array_push($names, $row['name']);
        }
        if (in_array($_POST['userLogin'], $names)){
            print_r($names);
            new controller_sendLogin($this->action_index());
        }else {
            $controller_name = 'Controller_Error';
            $str = strtolower($controller_name);
            include "application/controllers/" . $str . '.php';
            new Controller_Error($this->action_error());
        }
    }
	}
}
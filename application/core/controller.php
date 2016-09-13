<?php

class Controller
{
	private $pdo;
	public $model;
	public $view;

	function __construct()
	{
		$this->view = new View();
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
		}else {
		    echo "error";
        }
	}

	public function action_send_reg()
    {
        if (isset($_POST['user_name']) && ($_POST['user_age'])&&($_POST['user_message'])) {
            $stmt = $this->pdo->prepare("INSERT INTO Registration_Data (name, age, text) VALUES (:name, :age, :message)");
            $stmt->execute(array(
                "name" => $_POST['user_name'],
                "age" => $_POST['user_age'],
                "message" => $_POST['user_message']
            ));
            $controller_name = 'application/controllers/controller_sendregistration.php';
            $str = strtolower($controller_name);
            new Controller_sendregistration($this->action_index());
        }else{
            echo "Error";
        }

    }
}
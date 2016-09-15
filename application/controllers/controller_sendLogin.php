<?php

class Controller_sendLogin extends Controller{
    private $pdo;
    public $view;
    public $viewBag;

    function __construct()
    {
        $this->view = new View();
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=Registration", 'root', '');
        } catch (PDOException $e) {
            exit('ERROR.'.$e);
        }
    }

    function action_error(){
        $this->view->generate('Error_view.php', 'template_view.php');
    }

    public function action_send()
    {
        if (isset($_POST['userLogin'])) {
            $rows = Array();
            $sql = 'SELECT name, age FROM Registration_Data';
            foreach ($this->pdo->query($sql) as $row){
                array_push($rows, $row);
            }
            $isNameFound = false;
            foreach ($rows as $row) {
                if ($_POST['userLogin'] == $row['name']) {
                    $isNameFound = true;
                    break;
                }
            }
            if ($isNameFound){
                $this->view->viewBag = $rows;
            }else{
                $controller_name = 'Controller_Error';
                $str = strtolower($controller_name);
                include "application/controllers/" . $str . '.php';
                new Controller_Error($this->action_error());
            }

            $this->view->generate('getlist_view.php', 'template_view.php');
    }
}
}



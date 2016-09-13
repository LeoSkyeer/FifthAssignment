<?php
Class controller_sendregistration extends Controller{
    private $pdo;
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

    public function action_send_reg()
    {
        if (isset($_POST['user_name']) && ($_POST['user_age']) && ($_POST['user_message'])) {
            $stmt = $this->pdo->prepare("INSERT INTO Registration_Data (name, age, text) VALUES (:name, :age, :message)");
            $stmt->execute(array(
                "name" => $_POST['user_name'],
                "age" => $_POST['user_age'],
                "message" => $_POST['user_message']
            ));
            $controller_name = 'application/controllers/controller_sendregistration.php';
            $str = strtolower($controller_name);
            new Controller_sendregistration($this->action_index());
        } else {
            echo "Error";
        }
        $this->view->generate('sucsess_view.php', 'template_view.php');
    }
}
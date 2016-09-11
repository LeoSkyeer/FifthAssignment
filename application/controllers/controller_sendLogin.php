<?php

class Controller_sendLogin extends Controller{

    function action_index()
    {
        $this->view->generate('getlist_view.php', 'template_view.php');
    }
}
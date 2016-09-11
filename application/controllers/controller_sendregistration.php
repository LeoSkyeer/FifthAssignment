<?php
Class controller_sendregistration extends Controller{

    function action_index()
    {
        $this->view->generate('sucsess_view.php', 'template_view.php');
    }
}
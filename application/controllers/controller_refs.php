<?php

class Controller_Refs extends Controller
{

    function __construct()
    {
        $this->model = new Model_Refs();
        $this->view = new View();
    }
    
    function action_index()
    {
        $data = $this->model->get_data();		
        $this->view->generate('refs_view.php', 'template_view.php', $data);
    }
}
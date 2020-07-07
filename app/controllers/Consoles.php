<?php

class Consoles extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('consoles/index');
    }

}

?>
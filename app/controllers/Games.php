<?php

class Games extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('games/index');
    }

}

?>
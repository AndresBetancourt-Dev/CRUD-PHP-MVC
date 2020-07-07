<?php


class About extends Controller{
    public function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('about/index');
    }
}




?>
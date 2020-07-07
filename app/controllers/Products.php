<?php

class Products extends Controller{

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('products/index');
    }

}

?>
<?php

class Error extends Controller {

    function __construct() {
        parent::__construct(); 
    }
    
    function index() {
        $this->view->title = 'Error 404';
        $this->view->msg = 'This page doesnt exist';
        
        $this->view->render('error/inc/header');
        $this->view->render('error/index');
        $this->view->render('error/inc/footer');
    }

}
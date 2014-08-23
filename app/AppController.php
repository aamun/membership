<?php

abstract class AppController extends Controller {
    
    protected $messages;
    protected $navPills = array('', '', '');

    public function __construct() {
        parent::__construct();
        $this->messages = Message::getInstance();
    }
    

    public function authenticate(){
        if (!$this->session->check('login')) {
            $this->redirect('login');
        }
    }

    public function beforeRender(){
        $this->view->navPills = $this->navPills;
    }
}
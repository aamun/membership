<?php 
 
class Index_controller extends AppController{

    /**
     * Login users
     * @return void 
     */
    public function index($page = null){

        $user = new User();
        $this->view->user = $user;
        
        $this->view->setLayout('index');
        $this->render();
    }
}


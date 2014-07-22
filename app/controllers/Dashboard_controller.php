<?php
/**
* Dashboard
*/
class Dashboard_controller extends AppController
{
    
    /**
     * Validate user login
     * @return void 
     */
    public function beforeDispatch(){
        $this->authenticate();
    }

    public function beforeRender(){
        $this->view->setLayout("panel");
        $this->view->activeDashboardMenu = array('','','','','');
    }

    public function index($page = null){

        $member = new Member();
        $this->view->totalMembers = $member->count();
        $this->title_for_layout("Dashboard - Makers GDL");
        $this->render();
    }
}
?>
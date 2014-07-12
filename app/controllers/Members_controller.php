<?php
/**
* Members controller
*/
class Members_controller extends AppController {

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

        // Pagination
        $page = is_null($page) || !is_numeric($page) ? 1 : $page;
        $limit = 10;
        $offset = (($page-1) * $limit);
        $limitQuery = $offset.",".$limit;
        $targetpage = $this->path.'members/';

        // Find user members
        $member = new Member();
        $members = $member->findAll(null, null, $limitQuery, null);

        // Total rows
        $totalRows = $member->getTotal();
        $this->view->pagination = $this->pagination->init($totalRows, $page, $limit, $targetpage);

        $this->view->members = $members;
        $this->title_for_layout("Member list - Makers GDL");
        $this->render();
    }


    public function view($idMember = null){
        // To be determine
        $this->render();
    }

    public function create(){

        $member = new Member();

        if ($this->data) {
            $member->prepareFromArray($this->data);
            $member['idUser'] = $this->session['idUser'];
            if ($member->save()) {
                $this->messages->addMessage(Message::SUCCESS, "Member saved.");
                $this->redirect("members");    
            } else {
                $this->messages->addMessage(Message::ERROR, "Ups somethings is wrong to save a member.");
            }
        }

        $this->view->member = $member;
        $this->title_for_layout("Members Register - MakersGDL");
        $this->render();
    }

    public function update($idMember = null){

        $member = new Member();
        $member->find($idMember);

        if ($member->isNew() || is_null($idMember)) {
            $this->messages->addMessage(Message::WARNING, "I don't find the member: {$idMember}.");
            $this->redirect('members');
        }

        if ($this->data) {
            $member->prepareFromArray($this->data);
            $member['idUser'] = $this->session['idUser'];
            if ($member->save()) {
                $this->messages->addMessage(Message::SUCCESS, "Member saved.");
                $this->redirect("members");    
            } else {
                $this->messages->addMessage(Message::ERROR, "Ups somethings is wrong to save a member.");
            }
        }

        $this->view->member = $member;
        $this->render();
    }

    public function delete($idMember = null){

        $member = new Member();
        $member->find($idMember);

        if ($member->isNew() || is_null($idMember)) {
            $this->messages->addMessage(Message::WARNING, "I don't find the member: {$idMember}.");
        } else {
            if ($member->delete()) {
                $this->messages->addMessage(Message::SUCCESS, "Ok, One less member.");
            } else {
                $this->messages->addMessage(Message::ERROR, "Ups, something was wrong. Try again please.");
            }
        }

        $this->redirect('members');
    }


}
?>
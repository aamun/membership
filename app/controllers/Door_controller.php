<?php
/**
* Door_controller
*/
class Door_controller extends AppController
{
    
    public function index($id = null){

        $member = new Member();

        if ($this->data) {
            // Authenticate member
            if (true) {
                // Open door server endpoint
                $ch = curl_init("http://door.local/arduino/open");

                // Set credentials
                $username = 'root';
                $password = 'm4k3rsp4c3';

                // Make curl petition
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); 

                // Execute curl petition.
                curl_exec($ch);
                curl_close($ch);
            }
            
        }

        $this->view->member = $member;
        $this->view->setLayout('index');
        $this->navPills[1] = 'active';
        $this->render();
    }
}
?>
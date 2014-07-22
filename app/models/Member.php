<?php
/**
* Member
*/
class Member extends AppModel {
    public function count(){
        $this->db->query("SELECT COUNT(idMember) AS total FROM members");
        $row = $this->db->fetchRow();
        return $row['total'];
    }
}
?>
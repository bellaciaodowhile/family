<?php 
class MemberModel extends MySql {
    public function __construct() {
        parent::__construct();
    }
    public function insertMember($name, $lastname, $church, $email, $typeRun, $phone) {
        $return = '';
        $sql = "SELECT * FROM members WHERE email = '{$email}'";
        $req = $this->selectAll($sql);
        if (empty($req)) {
            $sql = "INSERT INTO members (name, lastname, church, email, typeRun, phone) VALUES (?,?,?,?,?,?)";
            $arrData = array($name, $lastname, $church, $email, $typeRun, $phone);
            $res = $this->insert($sql, $arrData);
            $return = $res;
        } else {
            $return = "exist";
        }
        return $return;
    }
    public function selectMembers() {
        $sql = "SELECT * FROM members";
        $req = $this->selectAll($sql);
        return $req;
    }
}



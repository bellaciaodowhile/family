<?php 
class AssistantModel extends MySql {
    public function __construct() {
        parent::__construct();
    }
    public function insertAssistant($name, $lastname, $church, $email, $phone) {
        $return = '';
        $sql = "SELECT * FROM assistants WHERE email = '{$email}'";
        $req = $this->selectAll($sql);
        if (empty($req)) {
            $sql = "INSERT INTO assistants (name, lastname, church, email, phone) VALUES (?,?,?,?,?)";
            $arrData = array($name, $lastname, $church, $email, $phone);
            $res = $this->insert($sql, $arrData);
            $return = $res;
        } else {
            $return = "exist";
        }
        return $return;
    }
    public function selectAssitants() {
        $sql = "SELECT * FROM assistants";
        $req = $this->selectAll($sql);
        return $req;
    }
}



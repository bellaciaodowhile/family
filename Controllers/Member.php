<?php 
    class Member extends Controllers {
        public function __construct() {
            parent::__construct();
        }
        public function setMember() {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $church = $_POST['church'];
            $typeRun = $_POST['typeRun'];
            $phone = $_POST['phone'];
            
            if ($name == '' || $lastname == '' || $church == '' || $typeRun == '' || $email == '' || $phone == '') {
                $arrResponse = array('status' => false, 'msg' => 'Debe llenar todos los campos.');
            } else {
                $arrData = $this->model->insertMember($name, $lastname, $church, $email, $typeRun, $phone);
                if ($arrData == 'exist') {
                    $arrResponse = array('status' => false, 'msg' => 'Este correo ya fue registrado.');
                } else {
                    $arrResponse = array('status' => true, 'msg' => '¡Registro exitoso!');
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();
            
        }
        public function selectMembers() {
            $arrData = $this->model->selectMembers();
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        }
    }
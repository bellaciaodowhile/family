<?php 
    class Assistant extends Controllers {
        public function __construct() {
            parent::__construct();
        }
        public function setAssistant() {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            
            if (isset($_POST['church'])) {
                $church = $_POST['church'];
            } else {
                $church = 'visita';
            }
            if (isset($_POST['phone'])) {
                $phone = $_POST['phone'];
            } else {
                $phone = 'null';
            }
            if ($name == '' || $lastname == '') {
                $arrResponse = array('status' => false, 'msg' => 'Debe llenar todos los campos.');
            } else {
                $arrData = $this->model->insertAssistant($name, $lastname, $church, $email, $phone);
                if ($arrData == 'exist') {
                    $arrResponse = array('status' => false, 'msg' => 'Este correo ya fue registrado');
                } else {
                    $arrResponse = array('status' => true, 'msg' => '¡Registro exitoso!', 'church' => $church);
                }
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
            die();
            
        }
        public function selectAssitants() {
            $arrData = $this->model->selectAssitants();
            echo json_encode($arrData, JSON_UNESCAPED_UNICODE);
        }
    }
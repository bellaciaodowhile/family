<?php 
    class Registro extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function registro() {
            $data['title_page'] = 'Controlador Registro';
            $this->views->getView($this, 'Registro', $data);
        }
    }
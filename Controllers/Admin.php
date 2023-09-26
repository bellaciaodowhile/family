<?php 
    class Admin extends Controllers{
        public function __construct() {
            parent::__construct();
        }
        public function admin() {
            $data['title_page'] = 'Controlador Admin';
            $this->views->getView($this, 'Admin', $data);
        }
    }
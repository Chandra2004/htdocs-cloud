<?php 
    class Home extends Controller {
        public function index() {
            $data['title'] = 'Halaman Homepage';

            
            $this->view('template/header', $data);
            $this->view('home/index');
            $this->view('template/footer');
        }
    }
?>
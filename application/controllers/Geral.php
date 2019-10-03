<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');


    class Geral extends CI_Controller{

        public function index(){

            $this->load->view('layout/header');
            $this->load->view('layout/cabecalho');


            $this->load->view('layout/footer');
        }
    }


?>
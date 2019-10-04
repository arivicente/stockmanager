<?php   
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Geral extends CI_Controller{

        public function index(){

            $this->load->view('layout/header');
            $this->load->view('layout/cabecalho');

            $this->load->view('layout/rodape');
            $this->load->view('layout/footer');
        }

        // ==================================================
        public function setup(){
            
            $this->load->view('layout/header');
            $this->load->view('setup/setup');
            $this->load->view('layout/footer');
        }

        // ==================================================
        public function resetdb(){
            //limpar toda a base de dados
            $this->load->model('basedados');
            $this->basedados->reset();

            //apresenta a view
            $this->load->view('layout/header');
            $this->load->view('setup/setup');

            $dados = array(
                'mensagem'  => 'Sistema de base de dados reinciado com sucesso',
                'tipo'      => 'success',
            );

            $this->load->view('layout/mensagem', $dados);
            $this->load->view('layout/footer');
        }
        
        // ==================================================
        public function inserirusuarios(){
            //insere 3 usuarios
            $this->load->model('basedados');
            $this->basedados->inserir_usuarios();

            //apresenta a view
            $this->load->view('layout/header');
            $this->load->view('setup/setup');

            $dados = array(
                'mensagem'  => 'Inserido 3 usuários com sucesso',
                'tipo'      => 'success',
            );

            $this->load->view('layout/mensagem', $dados);
            $this->load->view('layout/footer');
        }

        public function inserirprodutos(){
            //insere 3 usuarios
            $this->load->model('basedados');
            $this->basedados->inserir_produtos();

            //apresenta a view
            $this->load->view('layout/header');
            $this->load->view('setup/setup');

            $dados = array(
                'mensagem'  => 'Inseridos produtos com sucesso',
                'tipo'      => 'success',
            );

            $this->load->view('layout/mensagem', $dados);
            $this->load->view('layout/footer');
        }
    }
?>
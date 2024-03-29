<?php
    defined('BASEPATH') OR exit('URL inválida.');
    
    class Basedados extends CI_Model{
    
        public function reset(){
            //limpa base

            //limpa todos os dados das tabelas
            $this->db->empty_table('usuarios');
            $this->db->empty_table('produtos');

            //recomeça o AUTO_INCREMENTO
            $this->db->query('ALTER TABLE usuarios AUTO_INCREMENT = 1');
            $this->db->query('ALTER TABLE produtos AUTO_INCREMENT = 1');
            $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
        }

        public function inserir_usuarios(){
            //insere usuarios na base de dados
            $dados = array(
                'usuario'   => 'admin',
                'senha'     => md5('admin')
            );
            $this->db->insert('usuarios',$dados);

            $dados = array(
                'usuario'   => 'ana',
                'senha'     => md5('ana')
            );
            $this->db->insert('usuarios',$dados);

            $dados = array(
                'usuario'   => 'rui',
                'senha'     => md5('rui')
            );
            $this->db->insert('usuarios',$dados);
                    }
    
        public function inserir_produtos(){
            //insere alguns produtos na base de dados
            //primeirp apaga os dados da tabela dos produtos e coloca o auto_increment em 1
            $this->db->empty_table('produtos');
            $this->db->query('ALTER TABLE produtos AUTO_INCREMENT = 1');
            $dados = [ 
                        ['designacao' => 'CPUs'             , 'quantidade' => 10], 
                        ['designacao' => 'Memórias'         , 'quantidade' => 10], 
                        ['designacao' => 'Monitores'        , 'quantidade' => 10], 
                        ['designacao' => 'Discos rígidos'   , 'quantidade' => 10], 
                    ];
            $this->db->insert_batch('produtos', $dados);

            //adiciona 10 produtos de cada um destes elementos
            //limpa a base de dados dos movimentos
            $this->db->empty_table('movimentos');
            $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
            $dados = array(
                [
                    'id_produto'    => 1,
                    'quantidade'    => 10,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 2,
                    'quantidade'    => 10,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 3,
                    'quantidade'    => 10,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
                [
                    'id_produto'    => 4,
                    'quantidade'    => 10,
                    'data_hora'     => date('Y-m-d H:m:s')
                ],
            );
            $this->db->insert_batch('movimentos',$dados);
        }
                
    }
?>
<?php
    class Home extends CI_Controller {
        public function index(){
            $html = $this->load->view('introducao/jumbotron', null, true);
            $html .= $this->load->view('introducao/jumbonews', null, true);
            $html .= $this->load->view('introducao/footer', null, true);
            
            $this->show($html);
        }
    

        public function login(){
            $this->load->model('LoginModel');
            $this->LoginModel->loguserin();

            $html = $this->load->view('introducao/login_form', null, true);
            $this->show($html);
        }

        /*
            Exibe o conteudo html de uma pagina
            @param html: string
        */
        private function show($html){
            $result = $this->load->view('common/cabecalho', null, true);
            $result .= $this->load->view('common/navbar', null, true);
            $result .= $html;
            $result .= $this->load->view('common/rodape', null, true);
            echo $result;
        }
    }
<?php

class LoginModel extends CI_Model{

    public function loguserin(){
        //Checa se o botão 'Entrar' foi clicado
        if(sizeof($_POST) == 0) return;

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // buscar no bd os dados do usuario se ele existir
        $sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $rs = $this->db->query($sql);

        if( sizeof($rs->result()) == 1){
            echo 'Login realizado com sucesso!<br>';
        }else{
            echo 'Dados de acesso incorretos. Tente novamente.<br>';
        }
    }
}

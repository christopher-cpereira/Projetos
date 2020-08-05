<?php

    class Painel{
        public static function logado(){
            //retorna se existir a sessao logado, se sim true se nao falso
            return isset($_SESSION['login']) ? true : false;
        }

        //quando clicarmos no loggout ele destroi todas as sessoes e redirecionamos para a tela de login
        public static function loggout(){
            session_destroy();
            header('Location: '.INCLUDE_PATH_PAINEL);
        }
    }

?>
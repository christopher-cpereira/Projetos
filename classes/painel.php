<?php

    class Painel{
        public static function logado(){
            //retorna se existir a sessao logado, se sim true se nao falso
            return isset($_SESSION['login']) ? true : false;
        }
    }

?>
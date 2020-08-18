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

        //aqui vamos carregar as paginas do painel
        public static function carregarPagina(){
            if(isset($_GET['url'])){
                $url = explode('/',$_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){
                    include('pages/'.$url[0].'.php');
                }else{
                    //pagina nao existe por exemplo
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
            }else{
                include('pages/home.php');
            }
        }

        public static function listarUsuariosOnline(){
           self::limparUsuariosOnline(); 
           $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin_online`");
			$sql->execute();
			return $sql->fetchAll();
        }

        public static function limparUsuariosOnline(){
            $date = date('Y-m-d H:i:s');
			$sql = MySql::conectar()->exec("DELETE FROM `tb_admin_online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
        }
    }

?>
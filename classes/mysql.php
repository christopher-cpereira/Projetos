<?php
    class MySql{
        //por ser estatico nao precisamos estanciar para usar, ja podemos usar direto
        private static $pdo;
        public static function conectar(){
            //SELF PODE trabalhar com private dentro da classe
            //para nao dar ruim, precisamos tratar a conexao, para caso de erro nao aparecer nosso usuario e senha
            if(self::$pdo == null){
                try{
                    self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo '<script>alert("Erro ao conectar")</script>';
                }
            }
            return self::$pdo;
        }
    }
?>
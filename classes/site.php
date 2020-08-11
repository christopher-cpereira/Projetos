<?php
    class Site{
        public static function usuarioOnline(){
            if(isset($_SESSION['online'])){
                $token = $_SESSION['online'];
                $horarioAtual = date('Y-m-d H:i:s');
                $sql = MySql::conectar()->prepare("UPDATE `tb_admin_online` SET  ultima_acao = ? WHERE token = ?");
                $sql->execute(array($horarioAtual, $token));
            }else{
                $ip = $_SERVER['REMOTE_ADDR'];
                $horarioAtual = date('Y-m-d H:i:s');
                $_SESSION['online'] = uniqid();
                $token = $_SESSION['online'];
                $sql = MySql::conectar()->prepare("INSERT INTO `tb_admin_online` VALUES  (null, ?,?,?)");
                $sql->execute(array($ip,$horarioAtual,$token));
            }
        }
    }

?> 
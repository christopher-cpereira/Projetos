<?php

    //sem este session start ele daria problema na verificacao de sistemas de login em geral
    session_start();

    $autoload = function($class){
        if($class == 'Email'){
            require_once('classes/phpmailer/PHPMailerAutoload.php');
        }
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);


//VAMOS DEFINIR O DIRETORIO PRINCIPAL DO NOSSO SITE, PQ SE ALGUEM COLOCAR UM CAMINHO DIFERENTE NA URL NOSSA PAGINA PODE PERDER O ESTILO.CSS, FORA Q FICA MAIS AMIGAVEL 

//AQUI NOS DEFINIMOS QUE O INCLUDE_PATH E UMA VARIALVEL QUE RECEBE O CAMINHO DA NOSSA INDEX.PHP
    define('INCLUDE_PATH','http://localhost/Projeto-01/');

    //agr vamos fazer o include path do painel, aproveitando o caminho do outro include
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    //agr vem o danado do banco de dados kkkk vamos preparar as informacoes para entrar com o pdo 
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','sistema');


    //funcoes para pegar o cargo do usuario
    //criamos uma array para que quando pegar o cargo durante o login ele define qual o nivel de cargo do usuario, e quais acoes ele pode tomar no painel
    function pegaCargo($cargo){
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'
        ];
        return $arr[$cargo];
    }
?>
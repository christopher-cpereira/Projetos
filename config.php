<?php

    //esse carinha aqui sera comentado e explicado mais para frente.
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

?>
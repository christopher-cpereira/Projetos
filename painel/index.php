<?php
    //utilizando o config.php podemos utlizar as classes normalmente sem dar problemas atraves do autoload e aproveitar o caminho do include_path
    include('../config.php');
    
    //efetua o login fdp
    if(Painel::logado() == false){
        include('login.php');
    }else{
        include('main.php');
    };
?>

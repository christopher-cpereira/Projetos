<?php
    // a classe painel.php vai ser verificada no index e ele nos manda para ca se a sessao estiver logada
    
    //funcao do loggout
    //esse get e passado pela url ai se ele existir pq foi clicado, vamos la na classe do painel.php e estanciamos a funcao estatica de loggout e destruimos a sessao, fazendo assim o logout e redirecionado
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://kit.fontawesome.com/26b4f0988c.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php INCLUDE_PATH_PAINEL ?>css/style.css">

    <title>Painel de Controle do Site</title>
</head>

<body>
    <!--esse menu atraves do css tem sua propria barra de rolagem caso tenha mais itens do que a tela-->
    <div class="menu">

    </div>

    <header>
        <div class="center">
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-user-times"></i></a>
            </div>
        </div>
        <div class="clear"></div>
    </header>
</body>
</html>
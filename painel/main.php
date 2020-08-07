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
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php
                //se a img no banco de dado for vazia ele deixa a classe do font wasome i
                    if($_SESSION['img'] ==''){
                ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div>
                <?php
                //se estiver com uma img no banco de dados, pega imagem atraves da session criada e puxada atraves do fetch la no login.php
                    }else{ ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>">
                    </div>
                <?php
                    }
                ?>

                <!--pegamos o nome atraves do fetch pelo login.php session, o cargo tambem-->
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
            </div>

            <div class="itens-menu">
                <h2>Cadastro</h2>
                <a href="">Cadastrar depoimento</a>
                <a href="">Cadstrar servico</a>
                <h2>Gestao</h2>
                <a href="">Listar depoimentos</a>
                <a href="">Listar servicos</a>                
                <h2>Administracao do painel</h2>
                <a href="">Editar usuario</a>
                <a href="">Adicionar usuarios</a>   
                <h2>Configuracao geral</h2>
                <a href="">Editar</a>              
            </div>

        </div>
    </div>

    <header>
        <div class="center">
        <div class="menubotao">
            <i class="fas fa-caret-square-down"></i>
        </div>
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout">Sair <i class="fas fa-user-times"></i></a>
            </div>
        </div>
        <div class="clear"></div>
    </header>

    <div class="content">
        <div class="box-content left w100">

            <h2><i class="fa fa-home"></i>Painel de controle - Workspace</h2>

            <div class="box-metricas">
                <div class="box-metricas-single">
                        <h2>Usuarios Online</h2>
                        <p>10</p>
                </div>
            </div>
            <div class="box-metricas">
                <div class="box-metricas-single">
                        <h2>Total de Visitas</h2>
                        <p>10</p>
                </div>
            </div>
            <div class="box-metricas">
                <div class="box-metricas-single">
                        <h2>Visitas hoje</h2>
                        <p>10</p>
                </div>
            </div>

        </div>
     
        <div class="clear"></div>
    </div>
    
    <!--vamos fazer a animacao do botao para esconder e aparecer com jquery-->
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>
</html>
<!--o arquivo htaccess basicamente funciona sozinho para index.php tem que ser paginas .php, ele faz com que o servidor intreprete qualquer coisa na barra de url que nao exista ser redirecionado para o index.php ao invez de ser uma pagina 404 error-->

<!--vamos incluir o config.php assim o caminho do nossa site sera arrumado sempre que alguem tentar colocar uma url zoada, com o htacess vai vir o index.php mas sem estilo.css ou js por exemplo, apos fazer a inclusao do config.php podemos usar o include_path na frente de nossos arquivos como javascript ou css para evitar problemas de perder imagens ou estilo-->

<!--infelizmente isso precisa ser repetido para tudo que e incluido no nosso site, como imagens ou qlq arquivo, ate o js nao funciona se nao colocar-->

<!--o include_path ja arruma tambem as url deixando elas amigaveis quando vamos navegar nos a href-->
<?php include('config.php');?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--meu font wasome--><script src="https://kit.fontawesome.com/26b4f0988c.js" crossorigin="anonymous"></script><!--fim do meu wasome-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="descricao do meu site">
    <meta name="keywords" content="site-inicial,meu,primeiro,projeto">
    <!--colocamos o include_path, assim o caminho sempre estara correto-->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Meu portifolio</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left">Workspace</div><!--logomarca-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>quemsou">Quem sou</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>oquefaco">O que faco</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop menu fim-->

            <nav class="mobile right">
                <div class="botao-mobile"><i class="fas fa-ellipsis-v"></i></div> 
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>quemsou">Quem sou</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>oquefaco">O que faco</a></li>
                        <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                    </ul>           
            </nav><!--mobile menu fim-->
            <div class="clear"></div>
        </div><!--center fim-->
    </header><!--cabecalho fim-->

    <?php
    //lembrando que colocamos valores a serem passados nos a href enfrente a o include_path, por isso consegue pegar valores da url la,podiamos atribuir a home la mas nao ha necessidade devido ao tratamento que vamos fazer
    //agr o tratamento que o htacess fazia ainda funciona, mas dessa vez estamos tratando ele de uma maneira diferente.
    //se a url existir... ? pegue a url... : se nao existir atribua home
    //get pega as coisas via url por isso usamos ela aqui para esse tipo de tratamento
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    //se o arquivo X dentro de page com o nome da url.php existir faca
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            //podemos incluir uma pagina de erro 404 por exemplo
            include('pages/404.php');
        }
    ?>
    
    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center fim-->
    </footer><!--rodape fim-->
    <script src="<?php echo INCLUDE_PATH;?>js/script.js"></script>
</body>
</html>
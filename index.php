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

    <section class="banner">

            <h2 class="mensagem center">Bem Vindo!</h2>

    </section><!--banner imagem fim-->

    <section class="autor">
        <div class="center">
            <div class="w50 left">
                <h2>Christopher Pereira</h2>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo.</p>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo.</p>
            </div><!--w50-->

            <div class="w50 left">
                <img class="bola-foto right" src="<?php echo INCLUDE_PATH;?>img/eu.jpeg"><!--minha imagem fim-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center fim-->
    </section><!--descricao e foto do autor fim-->

    <section class="especialidades"> 
        <div class="center">
            <h3 class="titulo-especialidades">Especidalidades</h3>
            <div class="w50 left conteudo-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML</h3>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.</p>
            </div><!--conteudo da especialidade fim-->

            <div class="w50 left conteudo-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h3>CSS</h3>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.</p>
            </div><!--conteudo da especialidade fim-->

            <div class="w50 left conteudo-especialidade">
                <h3><i class="fab fa-js"></i></h3>
                <h3>JAVASCRIPT</h3>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.</p>
            </div><!--conteudo da especialidade fim-->

            <div class="w50 left conteudo-especialidade">
                <h3><i class="fab fa-php"></i></h3>
                <h3>PHP</h3>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido.</p>
            </div><!--conteudo da especialidade fim-->
        </div><!--center fim-->
        <div class="clear"></div>
    </section><!--especialidades fim-->

    <section class="curriculo">
        <div class="center">
            <div class="w50 left">
                <h2 class="titulo">Experiencia Proficional</h2>
                <div class="single">
                    <p class="emprego">Lorem ipsum</p>
                    <p class="emprego-descricao">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                </div><!--single fim-->
                <div class="single">
                    <p class="emprego">Lorem ipsum</p>
                    <p class="emprego-descricao">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                </div><!--single fim-->
                <div class="single">
                    <p class="emprego">Lorem ipsum</p>
                    <p class="emprego-descricao">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                </div><!--single fim-->
            </div><!--w50-->

            <div class="w50 left">
                <h2 class="titulo">Projetos</h2>
                <div class="projeto">
                    <ul>
                        <li>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</li>
                    </ul>
                </div><!--projeto fim-->
                <div class="projeto">
                    <ul>
                        <li>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI. Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</li>
                    </ul>
                </div><!--projeto fim-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center fim-->
    </section><!--carreira e projetos fim-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center fim-->
    </footer><!--rodape fim-->
    <script src="<?php echo INCLUDE_PATH;?>js/script.js"></script>
</body>
</html>
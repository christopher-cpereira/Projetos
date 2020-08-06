<?php
    // a classe painel.php vai ser verificada no index e ele nos manda para ca se a sessao nao estiver logada
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php INCLUDE_PATH_PAINEL ?>css/style.css">

    <title>Site</title>
</head>

<body>
    <!--banco de dados para login
    banco de dados: sistema
    tb-admin-usuarios
        id autoincrement pk
        usuario varchar 255
        senha varchar 255
    -->
    
    <section>
        <div class="login">
            <?php
             //vamos agr pegar os campos usuario e senha e efetuar de vez o login verificando se tem informacoes corretas no banco de dados
            if(isset($_POST['acao'])){
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                //se a classe mysql ja nos retorna o PDO podemos acessar o metodo para fazer o select
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb-admin-usuarios` WHERE usuario = ? AND senha = ?");
                //AGR VAMOS EXECUTAR O COMANDO com a sequencia dos psontos de interrogacoes
                $sql->execute(array($usuario,$senha));
                //se existir esse usuario e senha que batem certos DA 1
                if($sql->rowCount()==1){
                    //logado
                    $_SESSION['login'] = true;
                    //$_SESSION['usuario'] = $usuario;
                    //$_SESSION['senha'] = $senha;

                    //pega uma coluna so utilizando o fetch, assim podemos pegar valores da nosso usuario de forma simples apos fazer o login corretamente
                    //colocamos essa informacoes dentro de sessoes para trabalharmos com eles depois
                    $info = $sql->fetch();
                    $_SESSION['cargo'] = $info['cargo'];
                    $_SESSION['nome'] = $info['nome'];
                    $_SESSION['img'] = $info['img'];
                    //redirecionamos ele para o index, ai ele verifica la se o painel logado e true ou false, ele vai dar true entao sera redireciado para a tela main.php
                    header('Location: '.INCLUDE_PATH_PAINEL);
                    die();
                }else{
                    //falhou
                    echo '<div class="erro">Usuario ou senha incorretos</div>';
                }
            }   
            ?>
            <h2>Efetue o login</h2>
            <form method="post">
                <input type="text" name="usuario" placeholder="Usuario..." required>
                <input type="password" name="senha" placeholder="Senha..." required>
                <input type="submit" value="Logar" name="acao">
            </form>
        </div>
    </section>
</body>

</html>
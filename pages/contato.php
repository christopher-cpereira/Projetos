<?php
    require_once('phpmailer/src/PHPMailer.php');
    require_once('phpmailer/src/SMTP.php');
    require_once('phpmailer/src/Exception.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $email = new PHPMailer(true);

    try{
        $email->SMTPDebug = SMTP::DEBUG_SERVER;
        $email->isSMTP();
        $email->Host = 'smtp.gmail.com';
        $email->SMTPAuth = true;
        $email->Username = 'chrissummoners2020@gmail.com';
        $email->Password = '102030chris';
        $email->Port = 587;

        $email->setFrom('chrissummoners2020@gmail.com');
        $email->addAddress('chrissummoners2020@gmail.com');

        $email->isHTML(true);
        $email->Subject = 'Teste de email chris';
        $email->Body = 'chegou o email teste e esta e a <strong>mensagem para vc</strong>';
        $email->AltBody = 'chegou o email teste e esta e a mensagem para vc';

        if($email->send()){
            echo 'enviado com sucesso';
        }else{
            echo 'erro ao enviar';
        }
    }catch(Exception $e){
        echo "erro: {$email->ErrorInfo}";
    }


?>

<section class="contato">
    <div class="center">
    <h2>Entre em contato</h2>
        <form method="post">
            <input type="text" placeholder="Nome" name="nome">
            <input type="email" placeholder="E-mail" name="email">
            <input type="text" placeholder="Telefone" name="telefone">
            <textarea name="" id="" cols="30" rows="10" placeholder="Deixe sua mensagem aqui..." name="mensagem"></textarea>
            <input type="submit" value="Enviar" name="acao">
        </form>
        <div class="mapa">
            <h2>Como chegar</h2>
        </div>
        <!--vamops trazer a localizacao direto do maps-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.572676331107!2d-46.8041232503691!3d-22.445104127127795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9024169ce6d4f%3A0x9487bbfa4a881eb!2sR.%20Mario%20Cavenaghi%2C%20134%20-%20Jardim%20Paraiso%2C%20Itapira%20-%20SP%2C%2013973-451!5e0!3m2!1spt-BR!2sbr!4v1594949593588!5m2!1spt-BR!2sbr" width="550" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
    </div>
    <!--aqui estamos invocando o zapzap com nosso numero ja vinculado, tambem sem necessidade de vincular um img-->
    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5519998705747"><img 
            src="https://i.imgur.com/ryESuZ5.png" style="height:69px; position:fixed; bottom: 25px; right: 25px;" data-selector="img"></a>
</section>
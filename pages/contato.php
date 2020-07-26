<?php
//arrumar o foreach para nao $_post e sim para pegar cada informacao dos form corretamente 
    if(isset($_POST['acao'])){
        $assunto = 'Novo E-mail para contato';
        $mensagem ='';
        $corpo = ['Nome: '=>$_POST['nome'],'E-mail: '=>$_POST['email'],'Telefone: '=>$_POST['telefone'],'Mensagem: '=>$_POST['mensagem']];
        foreach ($corpo as $key => $value) {
            $mensagem.=$key.": ".$value;
            $mensagem.="<br>";
        }
        $info = array('assunto'=>$assunto,'corpo'=>$mensagem);
        $mail = new Email('smtp.gmail.com','chrissummoners2020@gmail.com','102030chris','Christopher');
        $mail->addAdress('chrissummoners2020@gmail.com','Christopher');
        $mail->formatarEmail($info);
        if($mail->enviarEmail()){
            echo '<script>alert("enviado com sucesso")</script>';
        }else{
            echo '<script>alert("deu bem ruim")</script>';
        }
    } 
?>


<section class="contato">
    <div class="center">
    <h2>Entre em contato</h2>
        <form method="post">
            <input type="text" placeholder="Nome" name="nome" required>
            <input type="email" placeholder="E-mail" name="email" required>
            <input type="text" placeholder="Telefone" name="telefone" required>
            <textarea cols="30" rows="10" placeholder="Deixe sua mensagem aqui..." name="mensagem" required></textarea>
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
<?php
//a classe email ja existe, ela vem do proprio phpmailer com diversas funcoes prontas para serem usadas, para duvidas entrar na pagina do github
    class Email{

        //este vai ser um objeto privado pessoal para instanciarmos baseado na classe do phpmailer
        private $mailer;

        //vamos pegar as informacoes do contato.php e trazer aqui para ser tratada
        public function __construct($host,$username,$senha,$name){
            //instanciamos o objeto com seus devidos valores a seguir respeitando a classe oficial, alguns parametros sao puxados e definidos la no contato.php
            $this->mailer = new PHPMailer(true);

            
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $this->mailer->isSMTP();                                            // Send using SMTP
                $this->mailer->Host       = $host;                    // Set the SMTP server to send through
                $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
                $this->mailer->Username   = $username;                     // SMTP username
                $this->mailer->Password   = $senha;                               // SMTP password
                //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $this->mailer->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                $this->mailer->setFrom($username,$name);

                $this->mailer->isHTML(true);                                  // Set email format to HTML
                $this->mailer->Charset = 'UTF-8';


        }

        //aqui temos as funcoes especificas do phpmailer para setar o email adress, padrao a quem vai receber
        public function addAdress($email,$nome){
            $this->mailer->addAddress($email, $nome);     // pra quem eu quero enviar a porra do email que vai entrar em contato comigo pelo form
        }

        //aqui utilizamos os metodos para modificar a mensagem a receber no mail, recebendo informacoes do contato
        public function formatarEmail($info){
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body    = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        //se enviado com sucesso retornamos um verdadeiro e falso, assim cai dentro de um if e else em contato  
        public function enviarEmail(){
            if($this->mailer->send()){
                return true;
            }else{
                return false;
            }
        }
    }

?>
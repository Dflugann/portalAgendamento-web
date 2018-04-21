<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer;

class PhpMailController extends Controller
{
    public function index()
    {
    	// Inicia a classe PHPMailer
$mail = new PHPMailer\PHPMailer(true);
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
	$email = 'contato@flaviosantos.xyz';
     $mail->Host = 'mx1.hostinger.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = 'contato@flaviosantos.xyz'; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = 'MeuBebeG12F!@#'; // Senha do servidor SMTP (senha do email usado)
 	$mail->FromName = utf8_decode($email);
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom($email, 'Flavio'); //Seu e-mail
     $mail->AddReplyTo('contato@flaviosantos.xyz', 'Fla'); //Seu e-mail
     $mail->Subject = 'Teste email';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('contato@flaviosantos.xyz', 'Enviado email');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddCC('contato@flaviosantos.xyz', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
    
     //Define o corpo do email
     $mail->MsgHTML("
        <h1>Teste</h2>
        <img src='http://flaviosantos.xyz/public/img/digital.png'>
        "); 
     $mail->AddAttachment("img/digital.png", "digital.png");
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     echo "Mensagem enviada PHPmail</p>\n";
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}
    }
}

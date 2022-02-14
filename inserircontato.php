<?php 
      $nome = $_POST['name'];
      $email = $_POST['email'];
      $tipo = $_POST['ctype'];
      $msg = $_POST['msg'];
      $arquivo = "
  <style type='text/css'>

  @import url('https://fonts.googleapis.com/css?family=Oswald&display=swap');

  body {
  margin:5pxpx;
  font-family: 'Oswald', sans-serif;
  font-size:1em;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }


  </style>
    <html>
        <table width='510' border='0' cellpadding='3' cellspacing='1' bgcolor='#fff'>
            <tr>
              <td>
  <tr>
                 <td><b>Nome: </b>$nome</td>
                </tr>
                <tr>
                  <td width='320'><b>E-mail: $email</b></td>
     </tr>
     <tr>
                  <td width='320'><b>Tipo de Contato: </b>$tipo</td>
                </tr>
                <tr>
                  <td width='320'><b>Mensagem: </b>$msg</td>
                </tr>
            </td>
          </tr>
        </table>
    </html>
  ";

  //enviar
   
  $emailenviar = "secadenanquim@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";
 
  // É necessário indicar que o formato do e-mail é html
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $name <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "Mensagem enviada com sucesso! <br> Você será respondido pelo e-mail fornecido no formulário em breve.";
  echo "<script>alert('Mensagem enviada com sucesso! Responderemos no e-mail informado assim que possível.'); window.location.href='contato.php';</script>";
  } 
  
  else {
  $mgm = "Erro ao enviar sua mensagem. Favor tentar novamente mais tarde";
  echo "";
  }
?>
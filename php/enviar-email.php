<?php
  //Variáveis
  $name = $_POST['name'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $message = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');



  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$name</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Assunto: </b>$assunto</p>
      <p><b>Mensagem: </b>$message</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "mp10br@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $name <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>
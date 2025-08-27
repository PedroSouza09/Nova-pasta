<?

$mensagem = "Nome: ".$_POST['nome']." \n";
//email que o usuário preencheu
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Tel: ". $_POST['tel']." \n";
$mensagem .= "Cidade ". $_POST['cidade']." \n";
$mensagem .= "Porta banner: ". $_POST['garras']." garras: "." \n";
$mensagem .= "Quantidades: ". $_POST['qtd']." \n";
$mensagem .= "Tamanho: ". $_POST['metragem']." \n";
$mensagem .= "Mensagem: ". $_POST['msg'];
$headers = "";
//email do seu domínio hospedado
$emailsender = "contato@fabricadeportabanner.com.br";
//email de quem vai receber
$emaildestinatario = "contato@fabricadeportabanner.com.br";
$assunto = "Contato do site";

// Envio dos dados do Formulário para seu e-mail:
if(!mail($emaildestinatario, $assunto, $mensagem,"".$emailsender))

{ 
// Se for Postfix - hospedagem linux
$headers .= "Return-Path: " . $emailsender . $quebra_linha; 
}


?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Porta Banners</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="warp">
  <div class="cont"><img src="img/porta_banner-logo.png" width="904" height="321" alt="Porta Banner" />
        	<div id="azul"><p>LOJA DA FÁBRICA - PORTA BANNER CAMPINAS</p></div>
            <div id="cinza">Fabricação própria de porta banner de alumínio<br />Av. Gov. Pedro de Toledo 1760 Loja 09 - Bairro Bonfim - Campinas/SP</div>
            <div id="red"><p>Central de atendimento TEL: 19 2103.9765</p></div><br />
            <div id="verde"><a href="https://api.whatsapp.com/send?phone=5519981712102&text=Olá,%20gostaria%20de%20um%20orçamento"><p style="color:#FFF">WHATSAPP 19 9 8171.2102</p></a></div>
        	<div > <a href="mailto:contato@fabricadeportabanner.com.br"><p style="color:#666">contato@fabricadeportabanner.com.br</p></a></div>
       </div>
       

         
         
          <div class="cont">
       	<div id="col"> <div id="laranja">com Garras</div>   <br />
       	  <img src="img/com_garras.png" width="423" height="422" alt="com garras" /></div>
        <div id="col"> <div id="laranja">sem Garras</div><br />
          <img src="img/sem_garras.png" width="423" height="422" alt="sem garras" /> </div>
      
       </div>
   
   <div class="cont"><img src="img/orcamento.png" width="904" height="174" alt="orcamento" /> </div>
      

	<div class="cont" style="background:url(img/bg_banner.png) no-repeat top;">
    
     <div class="for">E-mail enviado com sucesso
Obrigado pelo contato, em breve retornaremos</div> 
    </div>



</div>
<div style="background-color:#09F; padding: 10px 0px 10px 0px;"><div class="warp"   style="color:#FFF;"> Av. Governador Pedro de Toledo, 1.760 loja 09  Campinas/SP • TEL: 19 2103.9765  <a href="mailto:contato@fabricadeportabanner.com.br" style="color:#FFF;">contato@fabricadeportabanner.com.br</a><br />
    <a href="http://www.agencianoma.com.br/" target="_blank" style="color:#FFF;">Design NOMA</a></div> </div>
</body>
</html>

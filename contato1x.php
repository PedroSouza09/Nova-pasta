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
if(!mail($emaildestinatario, $assunto, $mensagem,"-r".$emailsender))

{ 
// Se for Postfix - hospedagem linux
$headers .= "Return-Path: " . $emailsender . $quebra_linha; 
}


?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Porta Banners</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="warp">
  <div class="cont"><img src="img/porta_banner-logo.png" width="904" height="196" alt="Porta Banner" />
        	<p>direto da fabrica, enviamos para todo o brasil</p>
        	<div id="red"><strong>TEL: 19 3282.3209</strong> • <a href="mailto:'contato@fabricadeportabanner.com.br'">contato@fabricadeportabanner.com.br</a></div>
       </div>
       
  <div class="cont">
       	<div id="col"> <div id="azul">Fábrica</div> <div id="cinza">Fabricação própria de porta <br /> banners de alumínio</div>        </div>
        <div id="col"> <div id="azul">Depósito</div><div id="cinza">Av. Gov. Pedro de Toledo 1760<br />Conj. 09 - Bairro Bonfim - Campinas/SP</div>        </div>
      
       </div>
       
      
        
         <div class="cont"><p>Porta Banners de Aluminíos de Vários Tamanhos</p> </div>
         
         
          <div class="cont">
       	<div id="col"> <div id="laranja">com Garras</div>   <br />
       	  <img src="img/com_garras.gif" width="423" height="422" alt="com garras" /></div>
        <div id="col"> <div id="laranja">sem Garras</div><br />
          <img src="img/sem_garras.gif" width="423" height="422" alt="sem garras" /> </div>
      
       </div>
   
   <div class="cont"><img src="img/orcamento.png" width="904" height="174" alt="orcamento" /> </div>
      

	<div class="cont" style="background:url(img/bg_banner.png) no-repeat top;">
    
    <div class="for">E-mail enviado com sucesso
Obrigado pelo contato, em breve retornaremos</div> 
    </div>



</div>
<div style="background-color:#09F; padding: 10px 0px 10px 0px;"><div class="warp"   style="color:#FFF;"> Av. Governador Pedro de Toledo, 1.760 loja 09 • TEL: 19 3282.3209 • <a href="mailto:'contato@fabricadeportabanner.com.br'" style="color:#FFF;">contato@fabricadeportabanner.com.br</a><br />
    <a href="http://www.agencianoma.com.br/" target="_blank" style="color:#FFF;">Design NOMA</a></div> </div>
</body>
</html>

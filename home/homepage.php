<?php 

	session_start();

	if(!isset($_SESSION['usuario'])) {

		header('Location: /projetoSIEMs/index.php?erro=1');
	}

?>

<!DOCTYPE html>
<html>
	<head>

		<link type="text/css" rel="stylesheet" href="/projetoSIEMs/stylesheet.css"/>
		<title>Home</title>
		<meta charset="utf-8">

	</head>

<body>
	
<div>	
	<div id = "barra">
		<div id= "menu">
 			<div class="menu1">
 				<a href="/projetoSIEMs/home/homepage.php">
 					Home
 				</a>
            </div>
 			<div class="menu1">
 				<a href="/projetoSIEMs/contatos/contatos.php">
 					Contatos
 				</a>
 			</div>

 			<div class="menu1">
 				<a href="/projetoSIEMs/enviadas/enviadas.php">
 					Enviadas
 				</a>
 			</div>

 			<div class="menu2">
 				<a href="/projetoSIEMs/sair.php">
 					Sair
 				</a>
 			</div>

 			<div class="menu2">
 				<a href="">
 					Admin
 				</a>
 			</div>
 			

 		</div>
 	</div>

 	<div id="borda_caixa_envio">
 			<div id ="borda_caixa_envio2">
 				<form>
 					Enviar por:
 					<br>
 					<input type="radio" name="sms">SMS
 					<input type="radio" name="whatsapp">WhatsApp
 					<input type="radio" name="telegram">Telegram
 					<input type="radio" name="email">E-mail
 					<br>
 					<br>
 			
 					Para:
 					<br>
 					<textarea rows="4" cols="55" name="destinatarios" placeholder="Ex: fulano@cicrano.com ou 84999123456 separados por ','(virgula) "></textarea>
 					<br>
 					
 					<input type="file" name="arquivo_csv">
 					<br/>
 					<br/>

 					Assunto:
 					<br/>
 					<input type="text" name="assunto" size="71">
 					<br/>
 					<br/>
 					<textarea rows="6" cols="55" name="mensagem" placeholder="Digite sua mensagem..."></textarea><br>
 					<input type="file" name="anexos">
 					</input>

 					<br />
 					<br />
 					<input id= "botao" type="submit" value="Enviar">
				</form>
			
			</div>
 	
 	</div>
 	<div id="rodape">
    		
    		<img src="/projetoSIEMs/Imagens/sedis.png" width="50" height="60" /> 	

    	
    		<img src="/projetoSIEMs/Imagens/ufrn.png" height="60" width="100" /><br /><br />
            <footer>Copyright &copy; 2017 SEDIS; Todos os direitos reservados. </footer>

    	</div>
</div>
</body>

</html>
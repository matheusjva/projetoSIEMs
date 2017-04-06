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

	<title>Agenda</title>
	<meta charset="utf-8">

	
</head>

<body>

	<div>
		<div id = "barra">
			<div id= "menu">
 				<div class="menu1">
 					<a href="/projetoSIEMs/home/homepage.php"> Home</a>
            	</div>
 				<div class="menu1">
 					<a href="/projetoSIEMs/contatos/contatos.php"> Contatos</a>
 				</div>

 				<div class="menu1">
 					<a href="/projetoSIEMs/enviadas/enviadas.php">	Enviadas	</a>
 				</div>

 				<div class="menu2">
 					<a href="/projetoSIEMs/sair.php">	Sair</a>
 				</div>

 				<div class="menu2">
 					<a href="">	Admin	</a>
 				</div>
 			</div>
 		</div>

 		<div id = "agenda">
 			<h3><span class="display">Contatos</span></h3>
 			<ul>
 			
		 			<li> Fulano 1</li>
		 			<li> Fulano 2</li>
		 			<li> Fulano 3</li>
		 			<li> Fulano 4</li>
		 			<li> Fulano 5</li>
		 			<li> Fulano 6</li>
		 			<li> Fulano 7</li>
		 			<li> Fulano 8</li>
		 			<li> Fulano 9</li>
		 			<li> Fulano 10</li>
		 			<li> Fulano 11</li>
		 			<li> Fulano 12</li>
		 			<li> Fulano 13</li>
		 			<li> Fulano 14</li>
		 			<li> Fulano 15</li>
		 			<li> Fulano 16</li>
		 			<li> Fulano 1</li>
		 			<li> Fulano 2</li>
		 			<li> Fulano 3</li>
		 			<li> Fulano 4</li>
		 			<li> Fulano 5</li>
		 			<li> Fulano 6</li>
		 			<li> Fulano 7</li>
		 			<li> Fulano 8</li>
		 			<li> Fulano 9</li>
		 			<li> Fulano 10</li>
		 			<li> Fulano 11</li>
		 			<li> Fulano 12</li>
		 			<li> Fulano 13</li>
		 			<li> Fulano 14</li>
		 			<li> Fulano 15</li>
		 			<li> Fulano 16</li>
			</ul>
 		</div>
 			<div id="rodape">
    		
    			<img src="/projetoSIEMs/Imagens/sedis.png" width="50" height="60" /> 	

    	
    			<img src="/projetoSIEMs/Imagens/ufrn.png" height="60" width="100" /><br /><br />
            	<footer>Copyright &copy; 2017 SEDIS; Todos os direitos reservados. </footer>

    	</div>
	</div>
</body>
</html>
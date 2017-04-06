<?php
    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>


<!DOCTYPE html>
<html>
	<head>
		
		<link type="text/css" rel="stylesheet" href="/projetoSIEMs/stylesheet.css"/>		
		<title>SIEMs</title>
		<meta charset=utf-8

            <!-- jquery - link cdn -->
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

            <!-- bootstrap - link cdn -->
            
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	</head>
	<body>
<div>

		<div id = "barra"> 

            <div id="centro"><img src="/projetoSIEMs/Imagens/logo.png"  /></div>

        </div>    
 		<div id="icone">

 			<img src="/projetoSIEMs/Imagens/login.png" width="200" height="200"/>

    	</div>
        <div class="container" style="width: 250px; height: 200px;">
    	   <form class= "login" method="POST" action="validar_acesso.php" id="formLogin">
            
     		     <label>Usuário:</label>
     		      <br>
   		 	         <input type="text" class="form-control" name="usuario" id="login" placeholder="Digite seu usuário...">  
   		 	      <br>
   		 	 
     
     		      <label>Senha:</label>
     		      <br>

     		         <input type="password" class="form-control red" name="senha" id="senha" placeholder="Digite sua senha...">  <br>
     		         <input type="submit" class="btn btn-primary" value="Entrar" id="entrar" name="entrar"><br><br>
                     <?php
                    if($erro == 1){
                     echo '<span style ="color:#FF0000; text-align:"center";"> Usuário ou Senha invalido(s)!<br /></span>';
                    }
            ?>
            </form>

            <br />

            
        </div>

    	<div id="rodape1">
            
            <img src="/projetoSIEMs/Imagens/sedis.png" width="50" height="60" />    

        
            <img src="/projetoSIEMs/Imagens/ufrn.png" height="60" width="100" /><br /><br />
            <footer>Copyright &copy; 2017 SEDIS; Todos os direitos reservados. </footer>

        </div>
 </div>       
	</body>
</html>
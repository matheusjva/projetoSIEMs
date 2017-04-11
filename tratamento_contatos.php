<?php

$contato = $_POST['contatos'];

$separar_contatos = explode(',', $contato);

$cont = strlen($contato);

echo $cont . "<br>";

for ($i = 0 ; $i < $cont ; $i++){

	echo $separar_contatos[$i] . "<br />";

   
}


?>
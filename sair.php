<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

header('Location: /projetoSIEMs/index.php');


?>
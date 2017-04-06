<?php

class db


{
	
		
		public function conecta_pg(){


			$con_string = "host=localhost port=5432 dbname=siems user=postgres password=capanema";

			//conexão
			$con = pg_connect($con_string);

			
			//ajustar o char set entre aplicação e banco
			//pg_query($con, "SET CLIENT_ENCODING TO <tt>'UTF-8</tt>'");

			//verifica se houve erro de conexão
			if(pg_last_error()){

				echo "Erro de conexão com o DB!!!"; //. pg_error($con);

			}
		
			return $con;
		}





}

?>
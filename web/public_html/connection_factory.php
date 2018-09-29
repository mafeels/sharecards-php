<?php		
			$servidor = "localhost";
			$usuario = "root";
			$senhadb = "vertrigo";
			$banco = "flashnotes";
			
			$conexao = mysqli_connect($servidor,$usuario,$senhadb,$banco);

			//mysqli_set_charset($conexao,"utf8");
			
			if (!$conexao) {
				die("Falha na conexão: " . mysqli_connect_error());
			}
?>
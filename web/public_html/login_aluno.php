<!DOCTYPE html>
<html>
      <head>
            <title>Resultado da Busca</title>
			<meta charset="utf-8">
      </head>
      <body style="line-height: 30px">
      <h1>Resultado da Busca</h1>
        <?php 
			
			//Criar conexão com o banco
			$servidor = "localhost";
			$usuario = "root";
			$senhadb = "vertrigo";
			$banco = "flashnotes";
			

			$conexao = mysqli_connect($servidor,$usuario,$senhadb,$banco);

			mysqli_set_charset($conexao,"utf8");

			if (!$conexao) {
				die("Falha na conexão: " . mysqli_connect_error());
			}
			
			$email=$_POST['email'];
			$senha=$_POST['senha'];
		
						
			$query = "select * from usuario where e_mail=".$email." and senha=".$senha."";

			$result = $conexao->real_query("select * from usuario where e_mail=".$email." and senha=".$senha."");

			var_dump($result);

			$count = $result->num_rows;

			echo $count;

			if($count>0){
				header("location: dash.php");
				return true;
			}
			return false;
	
			mysqli_close($conexao);
?>

		   
      </body>
</html>
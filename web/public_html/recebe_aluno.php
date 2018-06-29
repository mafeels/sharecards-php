<!DOCTYPE html>
<html>
      <head>
            <title>Cadastro de Aluno</title>
			<meta charset="utf-8">
      </head>
      <body style="line-height: 30px">
      <h1>Dados Recebidos</h1>
        <?php 
        	$nick=$_POST['nick'];
			$fnome=$_POST['fname'];
			$lnome=$_POST['lname'];
			$birth=$_POST['birth'];
			$email=$_POST['email'];
			$senha=$_POST['senha'];

			
			if (!$nick || !$fnome || !$lnome || !$birth || !$email || !$senha)
			{
				echo 'voce não preencheu todos os dados<br />';
				exit;
			}
			
			$servidor = "localhost";
			$usuario = "root";
			$senha = "vertrigo";
			$banco = "flashnotes";
			
			$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
			mysqli_set_charset($conexao,"utf8");
			
			if (!$conexao) {
				die("Falha na conexão: " . mysqli_connect_error());
			}
			echo "Conectado com sucesso!<br />";
						
			$query = "INSERT INTO usuario(username,data_nascimento,senha,e_mail,primeiro_nome,ultimo_nome) VALUES ('".$nick."','".$birth."','".$senha."','".$email."', '".$fnome."','".$lnome."')";
			
			$result = mysqli_query($conexao,$query);
			if ($result){
				echo "Aluno inserido no banco.";
			}
			else {
				echo "erro: ".mysqli_error($conexao);
			}
			
			mysqli_close($conexao);
?>

		   
      </body>
</html>
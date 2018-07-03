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

			include_once("connection_factory.php");
						
			$query = "INSERT INTO usuario(username,data_nascimento,senha,e_mail,primeiro_nome,ultimo_nome) VALUES (?,?,?,?,?,?)";

			
			$result = $conexao->prepare($query);

			$result->bind_param('ssssss', $nick, $birth, $senha, $email, $fnome, $lnome);

			if ($result->execute()){
				header("location: dash.php");
				return true;
			}
			return false;
			
			mysqli_close($conexao);
?>
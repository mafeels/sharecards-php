<?php 
			session_start();

		    if(empty($_SESSION['codigo_usuario'])){
		        $_SESSION['loginErro'] = "Voce não está logado";
		        header("location: login.php");
		    }			

        	$nome=$_POST["nome"];
        	$frente=$_POST["frente"];
        	$verso=$_POST["verso"];
        	$categoria=$_POST["categoria"];
        	$now = (string) date("Y/m/d");

			include_once("connection_factory.php");
						
			$query = "INSERT into flashcard(codigo_usuario, nome_flashcard, frente_flashcard, verso_flashcard, autor_flashcard, categoria_flashcard, data_criacao)values (?,?,?,?,?,?,?);";

			if (!$nome || !$frente || !$verso || !$categoria || empty($_SESSION["codigo_usuario"]) || empty($_SESSION["username"]))
			{
				$_SESSION["criarErro"]= "Preencha todos os dados";
				header("location: criarFlashcard.php");
				exit;
			}

			$result = $conexao->prepare($query);

			$result->bind_param('sssssss', $_SESSION["codigo_usuario"], $nome, $frente, $verso, $_SESSION["username"], $categoria, $now);

			if ($result->execute()){
				header("location: sucessoFlashcard.php");
				return true;
			}
			echo "erro";
			return false;
			
			mysqli_close($conexao);
?>
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

        	$id = $_GET["id"];

			include_once("connection_factory.php");
						
			$query = "UPDATE flashcard SET nome_flashcard='".$nome."', frente_flashcard='".$frente."', verso_flashcard='".$verso."', categoria_flashcard='".$categoria."'' WHERE codigo_flashcard=".$id.", codigo_usuario=".$_SESSION["codigo_usuario"]." ";
			
			if (!$nome || !$frente || !$verso || !$categoria || empty($_SESSION["codigo_usuario"]) || empty($_SESSION["username"]))
			{
				$_SESSION["criarErro"]= "Preencha todos os dados";
				echo "erro";
				header("location: editFlashcard.php");
				exit;
			}
			

			$result = $conexao->query($query);
			echo $query."<br/>";
			//$result->bind_param('sssssss', $_SESSION["codigo_usuario"], $nome, $frente, $verso, $_SESSION["username"], $categoria, $now);
			if(mysqli_errno()){
				echo "merda";
			}

			if ($result){
				header("location: sucessoFlashcard.php");
				return true;
			}
			echo "erro";
			return false;
			
			mysqli_close($conexao);
?>
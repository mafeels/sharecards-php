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

			//$query = "UPDATE flashcard SET nome_flashcard='".$nome."', frente_flashcard='".$frente."', verso_flashcard='".$verso."', categoria_flashcard='".$categoria."' WHERE codigo_flashcard=".$id.", codigo_usuario=".$_SESSION["codigo_usuario"]." ; ";

			$query = "UPDATE flashcard SET nome_flashcard=?, frente_flashcard=?, verso_flashcard=? categoria_flashcard=? WHERE codigo_flashcard=?, codigo_usuario=?; "
			
			if (!$nome || !$frente || !$verso || !$categoria || empty($_SESSION["codigo_usuario"]))
			{
				$_SESSION["criarErro"]= "Preencha todos os dados";
				echo "erro";
				header("location: editFlashcard.php");
				exit;
			}
			

			$result = $conexao->prepare($query);

			$result->bind_param('ssssss', $nome, $frente, $verso, $categoria, $id, $_SESSION["codigo_usuario"]);

			//$result->bind_param('sssssss', $_SESSION["codigo_usuario"], $nome, $frente, $verso, $_SESSION["username"], $categoria, $now);

			if ($result->execute()){

				echo $result->rowCount() . " records UPDATED successfully";
				header("location: sucessoFlashcard.php");
				return true;
			}
			echo "erro";
			return false;
			
			mysqli_close($conexao);
?>
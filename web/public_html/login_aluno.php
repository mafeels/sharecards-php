<?php 
			//Criar conexão com o banco
			session_start();

			include_once("connection_factory.php");
			
			$email=$_POST['email'];
			$senha=$_POST['senha'];
						
			$query = "SELECT * from usuario";

			$result = $conexao->query($query);

			if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) {
        			if($row["e_mail"] == $email && $row["senha"] == $senha){
        				$_SESSION['codigo_usuario'] = $row["codigo_usuario"];
        				$_SESSION['username'] = $row["username"];

        				header("location: dash.php");
        				return true;
        			}
    			}
    			$_SESSION['loginErro'] = "Usuario ou senha invalido";
    			header("location: login.php");
    			return false;
			}
			$_SESSION['loginErro'] = "Usuario ou senha invalido";
    		header("location: login.php");
    		return false;
	
			mysqli_close($conexao);
?>
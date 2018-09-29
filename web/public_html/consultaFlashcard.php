<?php
    include_once("connection_factory.php");

    $query = "SELECT * from flashcard WHERE codigo_usuario='".$_SESSION["codigo_usuario"]."' ";

    $result = mysqli_query($conexao,$query);
    $num_results = mysqli_num_rows($result);

    $flashcard = array();

    for ($i=0; $i<$num_results; $i++){
        $row = mysqli_fetch_array($result);
        if($row[0]==$_GET["id"] && $row[1]==$_SESSION["codigo_usuario"]){
            $flashcard = $row;
        }
    }
    
?>
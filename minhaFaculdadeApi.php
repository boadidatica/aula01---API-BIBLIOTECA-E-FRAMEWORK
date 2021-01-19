<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "minhaFaculdadeApp2";

$nome = $_GET['nome'];




$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT nota FROM alunosnotas where nome = '".$nome."'";
$resultado = mysqli_query($conn,$sql);
$conferirResultado = mysqli_num_rows($resultado);

	if($conferirResultado >0){
		while($row = mysqli_fetch_assoc($resultado)){
			echo $row['nota'];
		}
	}


?>











































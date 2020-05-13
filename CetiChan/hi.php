<?php
    require_once('conection.php');
    $sql = "SELECT COUNT(username) AS num FROM  users WHERE username = :username";	
    $stm = $con -> prepare($sql);
    $stm -> bindValue(':username',$_POST["fname"]); 	
    $stm -> execute();

	//se comprueba si hubo resultados en la BDD
	$row = $stm ->fetch(PDO::FETCH_ASSOC);
	if($row['num'] > 0){
        die('Este usuario ya existe');
    }else{
    	//Sube archivos a la base de datos
    	$consulta =$con->  prepare("INSERT INTO users(username,email,pass) VALUES (:username,:email,:pass)");
		$consulta -> bindParam(':username',$_POST["fname"]);
        $consulta -> bindParam(':email',$_POST["femail"]);
        $consulta -> bindParam(':pass',$_POST["fpass"]);
		
        $consulta->execute();
        header("location:vistausuarios.php");

		}
?>

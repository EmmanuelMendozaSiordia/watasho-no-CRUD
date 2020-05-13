<?php
    require_once('conection.php');

    $id=trim($_POST['edok']);
    $user=trim($_POST['edname']);
    $email=trim($_POST['edemail']);
    $pass=trim($_POST['edpass']);

    $sql = "UPDATE users SET username = :username, email = :email, pass = :pass WHERE id = :id"; 
   
    $query = $con -> prepare($sql); 

    
    $query -> bindParam(':username',$user,PDO::PARAM_STR,50);
    $query -> bindParam(':email',$email,PDO::PARAM_STR,70);
    $query -> bindParam(':pass',$pass,PDO::PARAM_STR);
    $query -> bindParam(':id',$id,PDO::PARAM_INT);
    $query -> execute(); 
    header("location:vistausuarios.php");
    
?>
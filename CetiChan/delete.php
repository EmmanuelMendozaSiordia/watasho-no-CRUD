<?php
require_once('conection.php');
    $id = trim($_POST['idel']);
    $consulta="DELETE FROM users WHERE id=:id";
    $sql = $con-> prepare($consulta);
    $sql->bindparam(':id',$id,PDO::PARAM_INT);
    $sql->execute();
    header("location:vistausuarios.php");

?>
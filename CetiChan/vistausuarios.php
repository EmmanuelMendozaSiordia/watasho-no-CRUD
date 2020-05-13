<html>
    <head>
        <title>Foro CetiChan</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="BG">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand mx-auto">Foro CetiChan</a>
        </nav>
        <div class="contusuarios">
            <form class="mt-2 ml-2" action="index.php">
                <button class="btn btn-success">
                    <img src='add.png' class='img-fluid' alt='Responsive image'>
                    Agregar nuevo
                </button>
            </form>
                <div class="table-responsive mt-3" >
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark ">
                            <th >ID</th>
                            <th >Ususario</th>
                            <th >Correo Electronico</th>
                            <th >Contraseña</th>
                            <th >Editar</th>
                            <th >Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                                require_once('conection.php');
                                $sql = "SELECT * FROM users"; 
                                $query = $con -> prepare($sql); 
                                $query -> execute(); 
                                $results = $query -> fetchAll(PDO::FETCH_OBJ); 

                                if($query -> rowCount() > 0)   { 
                                    foreach($results as $result) { 
                                        echo "<tr>
                                        <td>".$result -> id."</td>
                                        <td>".$result -> username."</td>
                                        <td>".$result -> email."</td>
                                        <td>".base64_encode($result -> pass)."</td>
                                        <td>                
                                            <form action='edit.php' method='POST' id='formed'>
                                                <div class='form-group' > 
                                                    <button class='btn btn-warning' name='ided' value='".$result -> id."' type='submit' form='formed' >
                                                        <img src='edit.png' class='img-fluid' alt='Responsive image'>
                                                    </button>
                                                </div>
                                            </form> 
                                        </td>
                                        <td>
                                            <form  onsubmit=\"return confirm('Realmente desea eliminar el registro ".$result -> username." ?');\" method='POST' action='delete.php'>    
                                                <button class='btn btn-danger' name='idel' name='idel' value='".$result -> id."'>
                                                    <img src='borrar.png' class='img-fluid' alt='Responsive image'>
                                                </button>
                                            </form>
                                            </td>
                                        </tr>";

                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            
            
        </div>

        
    </body>
</html>
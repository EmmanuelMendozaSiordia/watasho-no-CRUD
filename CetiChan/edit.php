<html>
    <head>
        <title>Editar usuario</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="BG">
    <?php
        require_once('conection.php');
        $sql = "SELECT * FROM users WHERE id = :id"; 
        $query = $con -> prepare($sql); 
        $query -> bindValue(':id',$_POST["ided"]); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ); 

        foreach($results as $result) { 
            echo("
        <div class='contedit'>
        <p class='texto_contenedor'>hi</p> 
                <form action='editar.php' method='POST' id='formedit'>
                    <div class='form-group'>                    
                        <input class='form-control form-control-lg mx-auto w-75' type='text' name='edname' id='fname' value='".$result -> username."' placeholder='Nombre de usuario'>
                    </div>
                    <div class='form-group' >                    
                        <input class='form-control form-control-lg mx-auto w-75' type='email' name='edemail' id='femail' value='".$result -> email."' placeholder='Correo electronico'>
                    </div>
                    <div class='form-group' >                    
                        <input class='form-control form-control-lg mx-auto w-75' type='text' name='edpass' id='fpass' value='".$result -> pass."' placeholder='Contraseña'>
                    </div>
                    <div class='form-group ' >                    
                        <button class='btn btn-dark' type='submit' form='formedit' name='edok' value='".$result -> id."'>".$result -> id."</button>
                    </div>
                </form>
    </div>
        ");
        }
        
    ?> 
    </body>
</html>
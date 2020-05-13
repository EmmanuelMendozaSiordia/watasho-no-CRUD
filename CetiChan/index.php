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
        <div class="parte_1">
            
                <p class="texto_contenedor">Dar de alta usuario</p> 
                <form action="hi.php" method="POST" id="form1">
                    <div class="form-group " >                    
                        <input class="form-control form-control-lg mx-auto w-75" type="text" name="fname" id="fname" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group " >                    
                        <input class="form-control form-control-lg mx-auto w-75" type="email" name="femail" id="femail" placeholder="Correo electronico">
                    </div>
                    <div class="form-group " >                    
                        <input class="form-control form-control-lg mx-auto w-75" type="text" name="fpass" id="fpass" placeholder="Contraseña">
                    </div>
                    <div class="form-group " >                    
                        <button class="btn btn-dark" type="submit" form="form1" value="Submit">Submit</button>
                    </div>
                    
                </form>
               
                
            
        </div>               
    </body>
</html>